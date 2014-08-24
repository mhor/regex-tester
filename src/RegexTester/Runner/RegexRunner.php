<?php

namespace RegexTester\Runner;

abstract class RegexRunner
{
    protected $regex;

    /**
     * @param string $regex
     */
    public function __construct($regex)
    {
        $this->regex = $regex;
    }
}
