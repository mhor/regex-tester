#!/usr/bin/env php
<?php

if (class_exists('Phar')) {
    Phar::mapPhar('regex-tester.phar');


    require 'phar://'.__FILE__.'/bin/regex-tester';
}
__HALT_COMPILER(); ?>
