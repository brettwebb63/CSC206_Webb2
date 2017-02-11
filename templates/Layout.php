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
                    <h4 align="Right"> Home | About Us | Contact Us! | Our Thanks to You  </h4>
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
            <img src="C:\xampp\htdocs\img\Logo.png" alt="Logo" width="1580" height="100">
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

        <div class="col-md-6">
            <body>
                  <h2> Latest Article </h2>
            <h4> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</h4>

            <h2>Why should you blog?</h2>
            <h5>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham. </h5>

            <h2> What the future holds... </h2>
            <h5>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</h5>
            </body>
        </div>

        <div class="col-md-1"></div>

    </div>
</container>
container;

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






