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
        $IMAGE = WS_IMAGES . 'logo.png';
        echo <<<pageTop
<!DOCTYPE HTMl>
<html>
<html lang="en" xmlns:height="http://www.w3.org/1999/xhtml">

<head>

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

    <div style ="background-color: #1B2631">
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
                                    <button id="button1id" name="button1id" class="btn btn-lg btn-primary">Log in</button>
                                    <button id="button2id" name="button2id" class="btn btn-lg btn-danger" >Sign Up</button>
                                </div>
                            </div>

                        </fieldset>
                    </form>
                    <h4 align="Right"><a href ="index.php"> Home</a> | <a href="createPost.php">Create A Post</a> | <a href ="allPosts.php"> All Posts</a> </h4>
                </div>
            </div>
            <div class = "col-md-1"></div>
        </font>
    </div>
    </div>
</head>

<navbar>
    <div class = "row">
        <div class = "col-md-2"></div>
        <div class = "col-md-9">
            <img src="$IMAGE" alt="Logo" width="1580" height="100">
        </div>
        <div class = "col-md-1"></div>
    </div>
</navbar>
pageTop;
    }

    Public Static function container()
    {
        echo <<<container
<container>
    <div class="row">

        <div class="col-md-1"></div>

        <div class="col-md-4">

            <aside>

                <div style ="background-color: #37474F">
                    <font color="#f0ffff">
                        <div style="height:50px"></div>
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
                        <div style="height:50px"></div>
                    </font>
                </div>
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
</container>
container;

    }

    public static function CreatePost()
    {
             echo <<< uploadform
                <form class="form-horizontal">
                <fieldset>

                    <!-- Form Name -->
                    <legend>Create your own post!</legend>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Title</label>
                        <div class="col-md-6">
                            <input id="textinput" name="textinput" type="text" placeholder="What will your title be? " class="form-control input-md">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Pen Name</label>
                        <div class="col-md-6">
                            <input id="textinput" name="textinput" type="text" placeholder="This name will be displayed to everyone " class="form-control input-md">

                        </div>
                    </div>

                    <!-- Textarea -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textarea">Content </label>
                        <div class="col-md-4">
                            <textarea class="form-control" id="textarea" name="textarea"></textarea>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Date Published</label>
                        <div class="col-md-2">
                            <input id="textinput" name="textinput" type="text" placeholder="00/00/0000" class="form-control input-md">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Removal Date</label>
                        <div class="col-md-2">
                            <input id="textinput" name="textinput" type="text" placeholder="0000/00/00"  class="form-control input-md">

                        </div>
                    </div>

                    <!-- Button (Double) -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="button1id"></label>
                        <div class="col-md-8">
                            <button id="button1id" name="button1id" class="btn btn-primary">Post</button>
                            <button id="button2id" name="button2id" class="btn btn-danger">Cancel</button>
                        </div>
                    </div>

                </fieldset>
            </form>
uploadform;
}



    Public static function pageBottom()
    {
        echo <<< pageBottem
<footer>
    <div style ="background-color: #1B2631">
        <font color="FDFEFE">
            <div class = "row">
                <div class="col-md-1"> </div>
                <div class = "col-md-10">
                    <h3 align = "center "> Copy right info | Company Name | Contact info | Last Updated On: February 1, 2017 </h3>
                </div>
                <div class="col-md-1"> </div>
            </div>
        </font>
    </div>
</footer>
</html>

pageBottem;
    }
}






