<?php
require_once 'functions.php';

spl_autoload_register(function($class){    //////////// load/instantiate all the file in the class folder at once.
    require_once $_SERVER['DOCUMENT_ROOT']. '/PHP ONLY/BackEND/class/'.$class. '.class.php';
});