<?php
/**
 * Created by PhpStorm.
 * User: Brett
 * Date: 3/16/2017
 * Time: 6:07 PM
 */

// Load all application files and configurations
require($_SERVER[ 'DOCUMENT_ROOT' ] . '/../includes/application_includes.php');
require_once(FS_TEMPLATES . 'News.php');
require_once(FS_TEMPLATES . 'Layout.php');
// Connect to the database
$db = new Database(DB_HOST, DB_USER, DB_PASS, DB_NAME);

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
                    $post['content'] = substr($post['content'], 0, 35) . '...';
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

