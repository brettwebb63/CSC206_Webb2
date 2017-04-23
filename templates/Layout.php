<?php

/**
 * Created by PhpStorm.
 * User: Brett
 * Date: 2/9/2017
 * Time: 8:40 PM
 */

class layout
{

    Public static function pageTop()
    {
        $topBar = WS_IMAGES . 'metal-texture.jpg';
        $IMAGE = WS_IMAGES . 'logo.png';
        echo <<<pageTop
<!DOCTYPE HTMl>
<html>
<html lang="en" xmlns:height="http://www.w3.org/1999/xhtml">


<header>
    <style type="text/css">
        header{
            background-color: #1f3c52;
        }
    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Latest compiled and minified CSS - get from getbootstrap.com-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <title> Blog A Lot </title>
    
    
    
        <font color="FDFEFE">
            <div class = "row">
                
                <div class = "col-md-1"></div>
                <div class ="col-md-4">
                </div>

                <div class = "col-md-6">
                    <form class="form-horizontal">
                        <fieldset>
                            <!-- Button (Double) -->
                            <div class="form-group" align = "right">
                                <label class="col-md-4 control-label" for="button1id"></label>
                                <div class="col-md-8">
                                    <a href = "logIn.php" button id="button1id" name="button1id" class="btn btn-lg btn-primary">Log in</a></button>
                                    <a href = "signUp.php" button id="button2id" name="button2id" class="btn btn-lg btn-success" >Sign Up</a></button>
                                    <a href = "logout.php" button id="button3id" name="button3id" class="btn btn-lg btn-danger" >Log out</a></button>
                                </div>
                            </div>

                        </fieldset>
                    </form>
                    <h4 align="Right"><a href ="index.php"> Home</a> | <a href="createPost.php">Create A Post</a> | <a href ="allPosts.php"> All Posts</a> | <a href = "uploadImage.php"> Upload Images </a> |<a href ="allUsers.php"> All Users</a> </h4> 
                </div>
                
            </div>
            <div class = "col-md-1"></div>
        </font>
    </div>
    
</header>

<nav>
    <div class = "row">
        
        <div class = "col-md-12">
            <img src="$IMAGE" alt="Logo" width="1400" height="100">
        </div>
        
    </div>
</nav>
pageTop;
    }






    Public Static function container()
    {
        echo <<<container
<container>

    <div class="row">

        <div class="col-md-1"></div>

            <aside>
                
                <div class="col-md-4">
                <style type="text/css">
                    aside{
                        background-color: #1f3c52;
                        height: 500px;
                    }
                </style>
                    
                    
                        <font color="#f0ffff">
                            
                            <form class="form-horizontal">
    
                                <fieldset>
                                 <!-- Search input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="searchinput">Search Input</label>
                                        <div class="col-md-6">
                                            <input id="searchinput" name="searchinput" type="search" placeholder="placeholder" class="form-control input-md">
    
                                        </div>
                                    </div>
    
                                </fieldset>
                            </form>
    
    
                            <h3 align = "center "> Our top 5 Suggestions  </h3>
                            <h5 align = "center "><a href="">Kronovi</a></h5>
                            <h5 align = "center "><a href="">Marky</a></h5>
                            <h5 align = "center "><a href="">Lachino</a></h5>
                            <h5 align = "center "><a href="">Gambit</a></h5>
                            <h5 align = "center "><a href=<"">M1K3</a></h5>
    
                            <h3 align="center"> Top 5 Blogs voted by you </h3>
                            <h5 align="center"><a href=""> Dogs really are better than cats!</a></h5>
                            <h5 align="center"><a href="">Patriots or Falcons?</a></h5>
                            <h5 align="center"><a href="">Pc or console? Which console if so?</a> </h5>
                            <h5 align="center"><a href="">How I trained my beta fish.</a></h5>
                            <h5 align="center"><a href="">Build a PC or by one?</a></h5>
    
                            <h3 align="center">Have suggestions? Tell us!</h3>
                            <form class="form-horizontal">
                                <fieldset>
                                    <!-- Textarea -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="textarea"></label>
                                        <div class="col-md-4">
                                            <textarea class="form-control" id="textarea" name="textarea">default text</textarea>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </font>
                    
                </div>
            </aside>
       
        
        
        <div class="container top25">
        <div class="col-md-6">
        
                <section class="content">
                   
                    <?php
                    
                    // Loop through the posts and display them
                    while ($post = $posts->fetch()) {
                        // Call the method to create the layout for a post
                        News::story($post);
                    }
                    ?>
                </section>
        </div>
        </div>
    </div>
</container>
container;
    }






    public static function CreatePost($title,$content,$startDate,$endDate,$image)
    {
        echo <<<postform
            <form id="createPostForm" action='createPost.php' method="POST" class="form-horizontal">
                <fieldset>
            
                    <!-- Form Name -->
                    <legend>Create Post</legend>
            
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="title">Title</label>
                        <div class="col-md-8">
                            <input id="title" name="title" type="text" placeholder="post title" value="$title" class="form-control input-md" required="">                    
                        </div>
                    </div>
            
                    <!-- Textarea -->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="content">Content</label>
                        <div class="col-md-8">
                            <textarea class="form-control" id="content" name="content">$content</textarea>
                        </div>
                    </div>
            
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="startDate">Effective Date</label>
                        <div class="col-md-8">
                            <input id="startDate" name="startDate" type="text" placeholder="effective date" value="$startDate" class="form-control input-md" required="">
                        </div>
                    </div>
            
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="endDate">End Date</label>
                        <div class="col-md-8">
                            <input id="endDate" name="endDate" type="text" placeholder="end date" value="$endDate" class="form-control input-md">
                        </div>
                    </div>
            
                    <!-- File Button -->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="image">Image Upload</label>
                        <div class="col-md-8">
                            <input id="image" name="image" class="input-file" value="$image" type="file">
                        </div>
                    </div>
            
                    <!-- Button (Double) -->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="submit"></label>
                        <div class="col-md-8">
                            <button id="submit" name="submit" value="Submit" class="btn btn-success">Submit</button>
                            <a href = "index.php" button id="cancel" name="cancel" value="Cancel" class="btn btn-info">Cancel</a></button>
                        </div>
                    </div>
            
                </fieldset>
            </form>
postform;
}






    Public static function updatePost($id, $title, $content, $startDate, $endDate, $image)
    {
        echo<<< updatePostPage
            <form id="updatePostsForm" action='updatePosts.php' method="POST" class="form-horizontal">
                <fieldset>
                    <!-- Form Name -->
                    <legend>Update Post</legend>
                     <input type="hidden" name="id" value=$id>
                       <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="title">Title</label>
                        <div class="col-md-8">
                            <input id="title" name="title" type="text" placeholder="post title" value="$title" class="form-control input-md" required="">                    
                        </div>
                    </div>
            
                    <!-- Textarea -->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="content">Content</label>
                        <div class="col-md-8">
                            <textarea class="form-control" id="content" name="content">$content</textarea>
                        </div>
                    </div>
            
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="startDate">Effective Date</label>
                        <div class="col-md-8">
                            <input id="startDate" name="startDate" type="text" placeholder="effective date" value="$startDate" class="form-control input-md" required="">
                        </div>
                    </div>
            
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="endDate">End Date</label>
                        <div class="col-md-8">
                            <input id="endDate" name="endDate" type="text" placeholder="end date" value="$endDate" class="form-control input-md">
                        </div>
                    </div>
            
                    <!-- File Button -->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="image">Image Upload</label>
                        <div class="col-md-8">
                            <input id="image" name="image" class="input-file" value="$image" type="file">
                        </div>
                    </div>
            
                    <!-- Button (Double) -->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="submit"></label>
                        <div class="col-md-8">
                            <button id="submit" name="submit" value="Submit" class="btn btn-success">Submit</button>
                            <a href = "index.php" button id="cancel" name="cancel" value="Cancel" class="btn btn-info">Cancel</a></button>
                        </div>
                    </div>
                </fieldset>
            </form>
updatePostPage;
    }






    Public static function pageBottom(){
        echo <<< pageBottom
            <footer>
                <div style ="background-color: #1B2631"; padding-top: 10px; padding-bottom: 0px; bottom: 0; left: 0;>
                    <font color="FDFEFE">
                    
                        <div class = "row">
                            <div class="col-md-1"> </div>
                            <div class = "col-md-10">
                                <h3 align = "center "> Copy right info | Company Name | <a href= "contactPage.php"> Contact info </a> | Last Updated On: February 1, 2017 </h3>
                            </div>
                            <div class="col-md-1"> </div>
                        </div>
                    </font>
                </div>
            </div>
        </html>

pageBottom;
    }






    Public static function signUp($email, $password, $firstName, $lastName, $address1){

    echo <<< signUpForm
        
             <form id="signUpForm" action='signUp.php' method="POST" class="form-horizontal">
                <fieldset>
                
                    <!-- Form Name -->
                    <legend>Sign Up!</legend>
                    
                      <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="email">Email :</label>  
                      <div class="col-md-5">
                      <input id="email" name="email" type="text" placeholder="someone@email.com" value="$email" class="form-control input-md" required="">
                        
                      </div>
                    </div>
                    
                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="firstName">First Name :</label>  
                      <div class="col-md-5">
                      <input id="firstName" name="firstName" type="text" placeholder="Enter your first name." value="$firstName"  class="form-control input-md" required="">
                        
                      </div>
                    </div>
                    
                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="lastName">Last Name :</label>  
                      <div class="col-md-5">
                      <input id="lastName" name="lastName" type="text" placeholder="Enter your first name." value="$lastName"  class="form-control input-md" required="">
                        
                      </div>
                    </div>
                    
                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="address1">Address :</label>  
                      <div class="col-md-5">
                      <input id="address1" name="address1" type="text" placeholder="Enter your address." value="$address1"  class="form-control input-md" required="">
                        
                      </div>
                    </div>
                    
                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="password">Password :</label>  
                      <div class="col-md-5">
                      <input id="password" name="password" type="password" placeholder="Enter your password. 6 to 16 characters." value="$password" class="form-control input-md" required="">
                        
                      </div>
                    </div>
                   
                    <!-- Button (Double) -->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="submit"></label>
                      <div class="col-md-8">
                        <button id="submit" name="submit" value="Submit" class="btn btn-success">Sign Up</button>
                        <a href = "index.php" button id="cancel" name="cancel" value="Cancel" class="btn btn-danger">Cancel</a></button>
                      </div>
                    </div>
                
                </fieldset>
            </form>

signUpForm;
}





    Public static function updateUser($id, $email, $firstName, $lastName, $address1, $password){

        echo <<< updateUserForm
        
             <form id="updateUsersForm" action='updateUsers.php' method="POST" class="form-horizontal">
                <fieldset>
                
                    <!-- Form Name -->
                    <legend>Update User Information!</legend>
                    <input type="hidden" name="id" value=$id>
                      <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="email">Email :</label>  
                      <div class="col-md-5">
                      <input id="email" name="email" type="text" placeholder="someone@email.com" value="$email" class="form-control input-md" required="">
                        
                      </div>
                    </div>
                    
                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="firstName">First Name :</label>  
                      <div class="col-md-5">
                      <input id="firstName" name="firstName" type="text" placeholder="Enter your first name." value="$firstName"  class="form-control input-md" required="">
                        
                      </div>
                    </div>
                    
                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="lastName">Last Name :</label>  
                      <div class="col-md-5">
                      <input id="lastName" name="lastName" type="text" placeholder="Enter your first name." value="$lastName"  class="form-control input-md" required="">
                        
                      </div>
                    </div>
                    
                      <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="address1">Address :</label>  
                      <div class="col-md-5">
                      <input id="address1" name="address1" type="text" placeholder="Enter your address." value="$address1"  class="form-control input-md" required="">
                        
                      </div>
                    </div>
                    
                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="password">Password :</label>  
                      <div class="col-md-5">
                      <input id="password" name="password" type="text" placeholder="Enter your password. 6 to 16 characters." value="$password" class="form-control input-md" required="">
                        
                      </div>
                    </div>
                   
                    <!-- Button (Double) -->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="submit"></label>
                      <div class="col-md-8">
                        <button id="submit" name="submit" value="Submit" class="btn btn-success">Update</button>
                        <a href = "index.php" button id="cancel" name="cancel" value="Cancel" class="btn btn-danger">Cancel</a></button>
                      </div>
                    </div>
                
                </fieldset>
            </form>

updateUserForm;
    }






    Public static function viewForm($id, $title, $content, $startDate, $endDate){
        echo <<<viewform
            
    <form id="createPostForm" action='updatePosts.php' method="POST" class="form-horizontal">
        <fieldset>
            <input type="hidden" name="id" value=$id">
            <input type="hidden" name="title" value=$title">
            <input type="hidden" name="content" value=$content">
            <input type="hidden" name="startDate" value=$startDate">
            <input type="hidden" name="endDate" value=$endDate">
    
            <!-- Form Name -->
            <legend>View your post below!</legend>
    
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-3 control-label" for="title">Title</label>
                <div class="col-md-8">
                    <input id="title" name="title" type="text" placeholder="post title" value="$title" class="form-control input-md" readonly required="">                    
                </div>
            </div>
    
            <!-- Textarea -->
            <div class="form-group">
                <label class="col-md-3 control-label" for="content">Content</label>
                <div class="col-md-8">
                    <textarea class="form-control" id="content" name="content" readonly>$content</textarea>
                </div>
            </div>
    
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-3 control-label" for="startDate">Effective Date</label>
                <div class="col-md-8">
                    <input id="startDate" name="startDate" type="text" placeholder="effective date" value="$startDate" class="form-control input-md" readonly required="">
                </div>
            </div>
    
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-3 control-label" for="endDate">End Date</label>
                <div class="col-md-8">
                    <input id="endDate" name="endDate" type="text" placeholder="end date" value="$endDate" class="form-control input-md" readonly>
                </div>
            </div>
        </fieldset>
    </form>
viewform;
    }






    Public static function loginform(){
        echo<<<loginform
    <form id="logInForm" action='logIn.php' method="POST" class="form-horizontal">
        <fieldset>
        
            <!-- Form Name -->
            <legend>Log in</legend>
            
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="email">Email :</label>  
              <div class="col-md-4">
              <input id="email" name="email" type="text" placeholder="someone@email.com" class="form-control input-md" required="">
                
              </div>
            </div>
            
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="password">Password :</label>  
              <div class="col-md-4">
              <input id="password" name="password" type="password" placeholder="purplerainbowmonkeybutterflies" class="form-control input-md" required="">
                
              </div>
            </div>
            
            <!-- Button (Double) -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="button1id"></label>
              <div class="col-md-8">
                <button id="button1id" name="button1id" class="btn btn-success">Log-in</button>
                <a href= "index.php" button id="button2id" name="button2id" class="btn btn-danger">Cancel</a></button>
              </div>
            </div>
        
        </fieldset>
    </form>
loginform;

    }
}






