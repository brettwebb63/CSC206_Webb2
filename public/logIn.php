<?php
/**
 * Created by PhpStorm.
 * User: Brett
 * Date: 3/28/2017
 * Time: 3:22 PM
 */
// Load all application files and configurations
require($_SERVER['DOCUMENT_ROOT'] . '/../includes/application_includes.php');

// Initialize variables
$requestType = $_SERVER[ 'REQUEST_METHOD' ];

layout::pageTop();
?>

<div class="container top25">
        <div class="col-md-12">
            <section class="content">

                <?php
                if ( $requestType == 'GET' ) {
                    // Display the form
                    showForm();
                } elseif ( $requestType == 'POST' ) {

                    // pull the fields from the POST array.
                    $input = $_POST;

                    $sql = "SELECT * FROM users WHERE email = '" . $input['email'] . "'";
                    $result = $db->query($sql);

                    if(! $result->size() == 0){
                        $user = $result->fetch();
                        if (password_verify($input['password'], $user['password'])){
                            echo "Logged in ";

                            $_SESSION['user'] = $user;
                        }
                        else {
                            echo"invalid password";
                        }
                    }
                    else{
                        echo'Incorrect Email';
                    }
                }
                ?>
            </section>
        </div>
</div>

<?php

layout::pageBottom();

$fields = [
    'password'   => ['required', 'string'],
    'email'   => ['required', 'string'],
];

function showForm($data = null)
{
$mypassword = $data['password1'];
    $myemail = $data['email'];

    layout::loginform();

}


