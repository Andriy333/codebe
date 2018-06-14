<?php
/**
 * Created by PhpStorm.
 * User: air
 * Date: 12.06.18
 * Time: 21:13
 */
switch($_GET['lang']) :
    default: include('lang/ru.php'); break;
    case 'ru': include('lang/ru.php'); break;
    case 'eng': include('lang/eng.php'); break;
endswitch;