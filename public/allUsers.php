<?php
/**
 * Created by PhpStorm.
 * User: Brett
 * Date: 4/1/2017
 * Time: 6:42 PM
 */
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
    //id, firstName, lastName, address1, password, email, created_at, updated_at
    $sql = 'select * from users';
    $result = $db->query($sql);
    $users = $result->fetchAll();

// Page content goes here
    ?>

    <div class="container top25">
        <div class="col-md-12">
            <section class="content">
                <?php
                // Create the table Header
                echo News::buildTableHeader($users);
                // Fill data table
                foreach ($users as $post) {
                    $post['password'] = substr($post['password'], 0, 10) . '...';
                    echo News::updateTableRow($post);
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