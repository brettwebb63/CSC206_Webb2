<?php
/**
 * Created by PhpStorm.
 * User: Brett
 * Date: 3/16/2017
 * Time: 7:13 PM
 */
// Load all application files and configurations
require($_SERVER[ 'DOCUMENT_ROOT' ] . '/../includes/application_includes.php');

// Initialize variables
$requestType = $_SERVER[ 'REQUEST_METHOD' ];

// Generate the HTML for the top of the page
Layout::pageTop();

if ( $requestType == 'GET' ) {

    // use sql to get the post with id = 39
    $sql = 'delete from posts where id = ' . $_GET['id'];//delete
    $result = $db->query($sql);
}

//redirect them to the home page
header('Location: index.php');




