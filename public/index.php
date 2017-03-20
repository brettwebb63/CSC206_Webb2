<?php

require ($_SERVER[ 'DOCUMENT_ROOT'] . "/../includes/application_includes.php");

require_once (FS_TEMPLATES . 'layout.php');
require_once(FS_TEMPLATES . 'News.php');

// Connect to the database
$db = new Database(DB_HOST, DB_USER, DB_PASS, DB_NAME);
// Get the stories for column 1 from the database
$sql = 'select * from posts';
$posts = $db->query($sql);
// Run a simple query that will be rendered in column 2 below
$sql = 'select id, name, description from pages';
$res = $db->query($sql);



layout::pageTop();
?>


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
        </aside>



        </div>


?>
        <?php
layout::pageBottom();



