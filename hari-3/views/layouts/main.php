<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo Yii::app()->name; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="asasmoyo">

        <style type="text/css">
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
            .sidebar-nav {
                padding: 9px 0;
            }
            #isi {
                min-height: 400px;
            }

            @media (max-width: 980px) {
                /* Enable use of floated navbar text */
                .navbar-text.pull-right {
                    float: none;
                    padding-left: 5px;
                    padding-right: 5px;
                }
            }
        </style>

    </head>

    <body>

        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="brand" href="<?php echo Yii::app()->getHomeUrl(); ?>"><?php echo Yii::app()->name; ?></a>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div id="isi" class="row-fluid">
                <?php echo $content; ?>
            </div>

            <hr>

            <footer>
                <p>&copy; <?php echo Yii::app()->params['company']; ?> <?php echo date('Y'); ?></p>
            </footer>
        </div>

    </body>
</html>
