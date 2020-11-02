<?php

if (php_sapi_name() !== 'cli')
{
    echo 'This program must be run from the command line.' . PHP_EOL;
    exit(1);
}
