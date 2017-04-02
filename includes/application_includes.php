<?php
/**
 * Created by PhpStorm.
 * User: Brett
 * Date: 2/28/2017
 * Time: 5:49 PM
 */


// Include the basic configuration elements
require_once($_SERVER[ 'DOCUMENT_ROOT' ].'/../includes/config.php');

// Include the database connection and query class
require_once(FS_INCLUDES . 'Database.php');

// Connect to the database
$db = new Database(DB_HOST, DB_USER, DB_PASS, DB_NAME);

require_once (FS_TEMPLATES . 'layout.php');

require_once(FS_TEMPLATES . 'News.php');

//Start the session
session_start();
