<?php

namespace AlreadyExtract\Command;

use RegexTester\Application\Application;
use Symfony\Component\Console\Tester\CommandTester;

class TestRegexCommandTest extends \PHPUnit_Framework_TestCase
{
    public function __construct()
    {
        $this->archivesDir = __DIR__ . '/../../fixtures/';
    }

    public function testIfCommandHaveExpectedBehavior()
    {
        $application = new Application();

        $command = $application->find('regex-tester');

        $commandTester = new CommandTester($command);
        $commandTester->execute(array('regex' => '#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}\$#', 'subject' => $this->archivesDir . 'regexTest.json'));

        $this->assertRegExp('#Configuration file: (.*)/test/RegexTester/Command/../../fixtures/regexTest.json will be used#', $commandTester->getDisplay());
        $this->assertRegExp('#mhor@gmail.com#', $commandTester->getDisplay());
        $this->assertRegExp('#regular@mail.com#', $commandTester->getDisplay());
        $this->assertRegExp('#mhor@gmail#', $commandTester->getDisplay());
    }
}