<?php
/**
 * Created by PhpStorm.
 * User: Brett
 * Date: 4/1/2017
 * Time: 7:06 PM
 */
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

                $sql = 'select * from users where id = ' . $_GET['id'];
                $result = $db->query($sql);
                $row = $result->fetch();

                $id = $row['id'];
                $firstName=$row['firstName'];
                $lastName=$row['lastName'];
                $address1=$row['address1'];
                $password=$row['password'];
                $email=$row['email'];

                layout::updateUser($id, $email, $firstName, $lastName, $address1, $password);

            } elseif ($requestType == 'POST') {
                //Validate data
                // Save data
                $id = $_POST['id'];
                $firstName = htmlspecialchars($_POST['firstName'], ENT_QUOTES);
                $lastName = htmlspecialchars($_POST['lastName'], ENT_QUOTES);
                $address1 = htmlspecialchars($_POST['address1'], ENT_QUOTES);
                $password = htmlspecialchars($_POST['password'], ENT_QUOTES);
                $email = htmlspecialchars($_POST['email'], ENT_QUOTES);

                $sql = "update users set firstname = '$firstName', lastname = '$lastName', address1 = '$address1', password = '$password ', email = '$email' where id = $id;";
                $result = $db->query($sql);
                header('Location: index.php');
            }
            ?>
        </section>
    </div>
</div>

<?php

Layout::pageBottom();