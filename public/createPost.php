<?php
// Load all application files and configurations
require($_SERVER[ 'DOCUMENT_ROOT' ] . '/../includes/application_includes.php');
// Include the HTML layout class

// Initialize variables
$requestType = $_SERVER[ 'REQUEST_METHOD' ];

// Generate the HTML for the top of the page
Layout::pageTop();

// Page content goes here
?>

    <div class="container top25">
        <div class="col-md-8">
            <section class="content">

                <?php
                if ( $requestType == 'GET' ) {
                    // Display the form
                    showForm();
                } elseif ( $requestType == 'POST' ) {
                    // Process data that was submitted
                    echo '<h2>This is the data that was entered</h2>';
                    echo '<pre>';
                    print_r($_POST);
                    echo '</pre>';
                    // pull the fields from the POST array.
                    $title = $_POST['title'];
                    $content = $_POST['content'];
                    $startDate  = $_POST['startDate'];
                    $endDate  = $_POST['endDate'];

                    // This SQL uses double quotes for the query string.  If a field is not a number (it's a string or a date) it needs
                    // to be enclosed in single quotes.  Note that right after values is a ( and a single quote.  That single quote comes right
                    // before the value of $title.  Note also that at the end of $title is a ', ' inside of double quotes.  What this will all render
                    // That will generate this piece of SQL:   values ('title text here', 'content text here', '2017-02-01 00:00:00'  and so
                    // on until the end of the sql command.
                    $sql = "insert into posts (title, content, startDate, endDate) values ('" . $title . "', '" . $content . "', '" . $startDate . "', '" . $endDate . "')";
                    $db->query($sql);
                }
                ?>
            </section>
        </div>

        <div class="col-md-4">
            <section class="content">
                <h1><center>Posts List</center></h1>
                <p><center>Current and active posts.</center></p>
                <?php
                $sql = 'select * from posts';
                $posts = $db->query($sql);
                // Loop through the posts and display them
                while ($post = $posts->fetch()) {
                    // Call the method to create the layout for a post
                    News::story($post);
                }
                ?>
            </section>
        </div>
    </div>

<?php

// Generate the page footer
Layout::pageBottom();

$fields = [
    'title'     => ['required', 'string'],
    'content'   => ['required', 'string'],
    'startDate' => ['required', 'date'],
    'endDate'   => ['required', 'date'],
    'image'     => ['date']
];

function showForm($data = null)
{
    $title = $data['title'];
    $content = $data['content'];
    $startDate = $data['startDate'];
    $endDate = $data['endDate'];
    $image = $data['image'];

    layout::CreatePost($title,$content,$startDate,$endDate,$image);

}
