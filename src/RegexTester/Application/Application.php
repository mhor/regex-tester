<?php

namespace RegexTester\Application;

use Symfony\Component\Console\Application as ApplicationBase;
use Symfony\Component\Console\Input\InputInterface;
use RegexTester\Command\TestRegexCommand;

/**
 * Class Application
 * @package WaveformGenerator\Application
 */
class Application extends ApplicationBase
{
    protected function getCommandName(InputInterface $input)
    {
        return 'regex-tester';
    }

    protected function getDefaultCommands()
    {
        $defaultCommands = parent::getDefaultCommands();
        $defaultCommands[] = new TestRegexCommand();

        return $defaultCommands;
    }

    public function getDefinition()
    {
        $inputDefinition = parent::getDefinition();
        $inputDefinition->setArguments();

        return $inputDefinition;
    }
}
