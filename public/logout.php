<?php
/**
 * Created by PhpStorm.
 * User: Brett
 * Date: 3/31/2017
 * Time: 8:34 PM
 */
require($_SERVER['DOCUMENT_ROOT'] . '/../includes/application_includes.php');

unset($_SESSION['user']);

header('location: index.php');
