<?php
/**
 * Created by PhpStorm.
 * User: Brett
 * Date: 3/18/2017
 * Time: 4:19 PM
 */
// Load all application files and configurations
require($_SERVER[ 'DOCUMENT_ROOT' ] . '/../includes/application_includes.php');

// Initialize variables
$requestType = $_SERVER[ 'REQUEST_METHOD' ];

// Generate the HTML for the top of the page
Layout::pageTop();

    $sql = 'select * from posts where id = ' . $_GET['id'];//delete
    $result = $db->query($sql);
    $row = $result->fetch();

    $id = $row['id'];
    $title = $row['title'];
    $content = $row['content'];
    $startDate = $row ['startDate'];
    $endDate = $row ['endDate'];

    layout::viewForm($id, $title, $content, $startDate, $endDate);

    layout::pageBottom();
