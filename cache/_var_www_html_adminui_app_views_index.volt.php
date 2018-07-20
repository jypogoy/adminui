<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Admin UI</title>
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo $this->url->get('img/favicon.ico')?>"/>
        <title>Form Elements | Golgi Admin</title>
        <meta name="description" content="Golgi Admin Theme" />
        <meta name="keywords" content="html5, ,semantic,ui, library, framework, javascript,jquery,admin,theme" />
        <?= $this->tag->stylesheetLink('plugins/radioslider/radios-to-slider.css') ?>
        <?= $this->tag->stylesheetLink('dist/semantic.min.css') ?>
        <?= $this->tag->stylesheetLink('css/main.css') ?> 
        <?= $this->tag->stylesheetLink('plugins/pacejs/pace.css') ?>
        <?= $this->tag->javascriptInclude('js/jquery-2.1.4.min.js') ?>
    </head>
    <body class="admin">            

        <!--sidebar mobile-->
        <div class="ui vertical push sidebar menu  thin" id="toc">
        </div>
        <!--sidebar mobile-->
        <!--navbar mobile-->
        <div class="mobilenavbar">
        </div>
        <!--navbar mobile-->

        <div class="pusher">
            <div class="full height">
                <!--Load Sidebar Menu In App.js loadhtml function-->
                <div class="toc"></div>
                <!--Load Sidebar Menu In App.js loadhtml function-->

                <div class="article">

                    <!--Load Navbar Menu In App.js loadhtml function-->
                    <div class="navbarmenu"></div>
                    <!--Load Navbar Menu In App.js loadhtml function-->
                    <!--Begin Container-->
                    <div class="containerli">
                        <?= $this->getContent() ?>
                    </div>
                    <!--Finish Container-->
                    <!--Load Footer Menu In App.js loadhtml function-->
                    <div class="footer"></div>
                    <!--Load Footer Menu In App.js loadhtml function-->
                </div>
            </div>
        </div>
        <?= $this->tag->javascriptInclude('plugins/nicescrool/jquery.nicescroll.min.js') ?>
        <?= $this->tag->javascriptInclude('dist/semantic.min.js') ?>
        <?= $this->tag->javascriptInclude('plugins/radioslider/jquery.radios-to-slider.js') ?>
        <script data-pace-options='{ "ajax": false }' src="plugins/pacejs/pace.js"></script>
        <?= $this->tag->javascriptInclude('js/app.min.js') ?>
        <script>
            $(document).ready(function () {
                $("#radios").radiosToSlider();
            });
        </script>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> -->
        <!-- Latest compiled and minified JavaScript -->
        <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    </body>
</html>
