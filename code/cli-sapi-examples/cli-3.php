<?php

if (!isset($argv[1]))
{
    throw new Exception('You must provide version prefix.');
}

if (!isset($argv[2]))
{
    throw new Exception('You must provide stability status (alpha/beta/stable).');
}

$stability = $argv[2];
