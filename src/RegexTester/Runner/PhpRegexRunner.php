<?php

namespace RegexTester\Runner;

class PhpRegexRunner extends RegexRunner
{
    /**
     * @param  string $subject
     * @param  bool   $find
     * @throws
     * @return bool
     */
    public function check($subject, $find = true)
    {
        $result = preg_match($this->regex, $subject);

        if ($result === false) {
            throw new \Exception('Regular expression return error');
        }

        if ((int) $find === (int) $result) {
            return true;
        }

        return false;
    }
}
