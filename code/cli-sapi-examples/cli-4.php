<?php

function getScriptName(){
    return '/' . ltrim((isset($_SERVER['SCRIPT_FILENAME']) ?
        str_replace($_SERVER['DOCUMENT_ROOT'], '', $_SERVER['SCRIPT_FILENAME']) :
        $_SERVER['SCRIPT_NAME']), '/');
}
