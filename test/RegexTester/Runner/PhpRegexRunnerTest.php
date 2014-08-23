<?php

namespace RegexTester\Runner;

use RegexTester\Runner\PhpRegexRunner;

class PhpRegexRunnerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var PhpRegexRunner
     */
    protected $phpRegexRunner;

    public function __construct()
    {
        $this->phpRegexRunner = new PHPRegexRunner('#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#');
    }

    public function testIfCheckReturnTrueWithGoodResult()
    {
        $this->assertTrue($this->phpRegexRunner->check('mhor@gmail.com', true));
    }

    public function testIfCheckReturnFalseWithGoodResult()
    {
        $this->assertFalse($this->phpRegexRunner->check('mhor@gmail', true));
    }

    public function testIfCheckReturnFalseWithBadResult()
    {
        $this->assertFalse($this->phpRegexRunner->check('mh@gmail.com', false));
    }
}
 