<?php
/**
 * Created by PhpStorm.
 * User: Brett
 * Date: 3/16/2017
 * Time: 6:07 PM
 */

// Load all application files and configurations
require($_SERVER[ 'DOCUMENT_ROOT' ] . '/../includes/application_includes.php');

if (! isset($_SESSION['user'])) {
    header('location: logIn.php');
}
else {
// Generate the HTML for the top of the page
    layout::pageTop();

// Get the posts for this page from the database
    $sql = 'select * from posts';
    $result = $db->query($sql);
    $posts = $result->fetchAll();

// Page content goes here
    ?>

    <div class="container top25">
        <div class="col-md-12">
            <section class="content">
                <?php
                // Create the table Header
                echo News::buildTableHeader($posts);
                // Fill data table
                foreach ($posts as $post) {
                    $post['content'] = substr($post['content'], 0, 50) . '...';
                    echo News::buildTableRow($post);
                }
                // Close the table
                echo News::closeTable();
                ?>
            </section>
        </div>
    </div>

    <?php

// Generate the page footer
    Layout::pageBottom();
}

