<?php
// Load all application files and configurations
require($_SERVER['DOCUMENT_ROOT'] . '/../includes/application_includes.php');

// Initialize variables
$requestType = $_SERVER['REQUEST_METHOD'];

// Generate the HTML for the top of the page
Layout::pageTop();

// Page content goes here
?>
    <div class="container top25">
        <div class="col-md-8">
            <section class="content">

                <?php
                if ($requestType == 'GET') {

                    $sql = 'select * from posts where id = ' . $_GET['id'];
                    $result = $db->query($sql);
                    $row = $result->fetch();

                    $id = $row['id'];
                    $title = $row['title'];
                    $content = $row['content'];
                    $startDate = $row['startDate'];
                    $endDate = $row['endDate'];
                    $image = $row['image'];

                    Layout::updatePost($id, $title, $content, $startDate, $endDate, $image);

                } elseif ($requestType == 'POST') {
                    //Validate data
                    // Save data
                    $id = $_POST['id'];
                    $title = htmlspecialchars($_POST['title'], ENT_QUOTES);
                    $content = htmlspecialchars($_POST['content'], ENT_QUOTES);
                    $startDate = htmlspecialchars($_POST['startDate'], ENT_QUOTES);
                    $endDate = htmlspecialchars($_POST['endDate'], ENT_QUOTES);

                    $sql = "update posts set title = '$title', content = '$content', startDate = '$startDate', endDate = '$endDate' where id = $id;";
                    $result = $db->query($sql);
                    header('Location: index.php');
                }
                ?>
            </section>
        </div>
    </div>


<?php
// Generate the page footer
Layout::pageBottom();