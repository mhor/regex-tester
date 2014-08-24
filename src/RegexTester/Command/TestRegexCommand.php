<?php

namespace RegexTester\Command;

use RegexTester\Runner\PhpRegexRunner;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Filesystem\Filesystem;

/**
 * Class TextRegexCommand
 * @package RegexTester\Command
 */
class TestRegexCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('regex-tester')
            ->setDescription('Tests your regex with bunch of string')
            ->addArgument(
                'regex',
                InputArgument::REQUIRED,
                'the regex'
            )
            ->addArgument(
                'subject',
                InputArgument::REQUIRED,
                'Could be a configuration file or the subject (first check if file exist)'
            );
    }

    /**
     * @param  InputInterface  $input
     * @param  OutputInterface $output
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $fs = new Filesystem();
        $subjects = array(
            array(
                'subject' => $input->getArgument('subject'),
                'find' => true
            )
        );

        if ($fs->exists($subjects[0]['subject'])) {
            $output->writeln("\n<comment>Configuration file: " . $subjects[0]['subject'] . " will be used</comment>\n");
            $subjects = json_decode(file_get_contents($subjects[0]['subject']), true);
        }

        $commandRunner = new PhpRegexRunner(trim($input->getArgument('regex'), '"'));
        foreach ($subjects as $subject) {
            $markup = 'red';
            if ($commandRunner->check($subject['subject'], $subject['find'])) {
                $markup = 'green';
            }
            $output->writeln('<fg=' . $markup . '>' . $subject['subject'] . '</fg=' . $markup . '>');
        }

        return 0;
    }
}
