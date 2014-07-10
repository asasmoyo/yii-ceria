<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo Yii::app()->name; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le styles -->
        <style>
            body {
                padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
            }
            /* Set the fixed height of the footer here */
            #footer {
                height: 60px;
                background-color: #f5f5f5;
            }
            #footer .container p {
                margin-top: 15px;
            }
            /* Wrapper for page content to push down footer */
            #wrap {
                min-height: 400px;
            }
            /* Lastly, apply responsive CSS fixes as necessary */
            @media (max-width: 767px) {
                #footer {
                    margin-left: -20px;
                    margin-right: -20px;
                    padding-left: 20px;
                    padding-right: 20px;
                }
            }
        </style>
    </head>

    <body>

        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="brand" href="<?php echo Yii::app()->getBaseUrl(true); ?>"><?php echo Yii::app()->name; ?></a>
                </div>
            </div>
        </div>

        <div id="wrap">
            <?php echo $content; ?>
        </div>

        <div id="footer">
            <div class="container">
                <p class="muted credit">Copyright <a>asasmoyo</a> <?php echo date('Y'); ?></p>
            </div>
        </div>

    </body>
</html>
