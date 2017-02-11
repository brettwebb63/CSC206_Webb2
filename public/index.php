<?php
/**
 * Created by PhpStorm.
 * User: Brett
 * Date: 2/11/2017
 * Time: 1:34 PM
 */
require ($_SERVER[ 'DOCUMENT_ROOT'] . "/Includes/config.php");

require_once (FS_TEMPLATES . 'layout.php');


layout::pageTop();

layout::container($title, $content);
$title = 'Hello' ;
$content = 'Goodbye';
layout::pageBottom();



