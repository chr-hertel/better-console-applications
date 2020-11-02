<?php

$memoryLimit = trim(ini_get('memory_limit'));
// Increase memory_limit if it is lower than 1.5GB
if ($memoryLimit != -1 && $memoryInBytes($memoryLimit) < 1024 * 1024 * 1536) {
    @ini_set('memory_limit', '1536M');
}
