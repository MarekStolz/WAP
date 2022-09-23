<?php 

error_reporting(E_ALL);
mb_internal_encoding("UTF-8");

require_once('class/Loader.php');
spl_autoload_register('Loader::loadClass');

