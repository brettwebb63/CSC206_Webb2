<?php
/**
 * Created by PhpStorm.
 * User: Brett
 * Date: 3/21/2017
 * Time: 7:47 PM
 */
require ($_SERVER[ 'DOCUMENT_ROOT'] . "/../includes/application_includes.php");

if (! isset($_SESSION['user'])) {
    header('location: logIn.php');
}
else {

// Initialize variables
    $requestType = $_SERVER['REQUEST_METHOD'];

    Layout::pageTop();
    ?>

    <div class="container top25">
        <div class="col-md-12">
            <section class="content">

                <?php
                if ($requestType == 'GET') {
                    // Display the form
                    showForm();
                } elseif ($requestType == 'POST') {
                    // Process data that was submitted
                    echo '<h2>This is the data that was entered</h2>';
                    echo '<pre>';
                    print_r($_POST);
                    echo '</pre>';
                    // pull the fields from the POST array.
                    //$role_id = $_POST['role_id'];
                    $firstName = $_POST['firstName'];
                    // $middleName  = $_POST['middleName'];
                    $lastName = $_POST['lastName'];
                    $address1 = $_POST['address1'];
                    // $address2 = $_POST['address2'];
                    //$city = $_POST['city'];
                    // $state = $_POST['state'];
                    //$zip = $_POST['zip'];
                    $password = $_POST['password'];
                    $email = $_POST['email'];

                    //encrypt the password before sending it to the database.
                    $hash = password_hash($password, PASSWORD_DEFAULT);

                    // This SQL uses double quotes for the query string.  If a field is not a number (it's a string or a date) it needs
                    // to be enclosed in single quotes.  Note that right after values is a ( and a single quote.  Taht single quote comes right
                    // before the value of $title.  Note also that at the end of $title is a ', ' inside of double quotes.  What this will all render
                    // That will generate this piece of SQL:   values ('title text here', 'content text here', '2017-02-01 00:00:00'  and so
                    // on until the end of the sql command.
                    $sql = "insert into users (firstName, lastName, password,  email, address1) values ( '" . $firstName . "', '" . $lastName . "','" . $hash . "',  '" . $email . "', '" . $address1 . "')";
                    $db->query($sql);
                }
                ?>

            </section>
        </div>
    </div>

    <?php
    layout::pageBottom();
}
    $fields = [
        //'role_id'   => ['required', 'string'],
        'firstName' => ['required', 'string'],
        //'middleName'   => ['required', 'string'],
        'lastName' => ['required', 'string'],
        'address1' => ['required', 'string'],
        //'address2'   => ['required', 'string'],
        //'city'   => ['required', 'string'],
        //'state'   => ['required', 'string'],
        //'zip'   => ['required', 'string'],
        'password' => ['required', 'string'],
        'email' => ['required', 'string'],
    ];

    function showForm($data = null)
    {
        // $role_id = $data['role_id'];
        $firstName = $data['firstName'];
        // $middleName = $data['middleName'];
        $lastName = $data['lastName'];
        $address1 = $data['address1'];
        // $address2 = $data['address2'];
        //$city = $data['city'];
        // $state = $data['state'];
        //$zip = $data['zip'];
        $password = $data['password1'];
        $email = $data['email'];

        Layout::signUp($password, $email, $firstName, $lastName, $address1);
    }

