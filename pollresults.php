<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>HelpMeChoose - Results</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="./css/custom-css.css" rel="stylesheet">

    <style type="text/css">
    .nav-pills>li.active>a,
    .nav-pills>li.active>a:hover,
    .nav-pills>li.active>a:focus {
        color: #fff;
        background-color: #bf0000;
    }
    </style>



</head>

<?php
//print_r(  $_COOKIE["hmc"] );
$data = json_decode($_COOKIE["hmc2"] , true) ;
//print_r( $data['html']  );
$cooked_data = json_decode( $data['html'] , true) ;
//print_r( $cooked_data );

// 0 --- 1 -- 2 and so on  after pins -> 0 -> image 


?>


<body>

    <div class="container">
        <div class="header">
            <nav>
                <ul class="nav nav-pills pull-right">
                    <li role="presentation">
                        <a href="./fb-post.php" class="btn"><span class="glyphicon glyphicon-thumbs-up"></span> Facebook</a>
                    </li>
                    <li role="presentation">
                        <a href="./email-post.php" class="btn"><span class="glyphicon glyphicon-envelope"></span> Email</a>
                    </li>
                    <li role="presentation" class="active">
                        <a href="#" class="btn"><span class="glyphicon glyphicon-stats"></span> Poll-Results</a>
                    </li>
                    <li role="presentation"><a href="./about.html" target="_blank" class="btn"><span class="glyphicon glyphicon-registration-mark"></span> About</a>
                    </li>
                    <li role="presentation"><a href="./demo.html" target="=_blank" class="btn"><span class="glyphicon glyphicon-film"></span> Demo</a>
                    </li>
                    <li role="presentation"><a href="javascript:window.close();" class="btn"><span class="glyphicon glyphicon-remove-sign"></span> </a>
                    </li>

                </ul>
            </nav>
            <h3 class="text-muted"> <img style="width:190px;height:70px;" src="http://localhost/hmc/pluginassets/logo_new.png"> </h3>
        </div>


        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>Recent Polls<span class="label label-success">Results</span></h3>
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">
            <hr>
            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src=" <?php echo  urldecode($cooked_data['pins'][0]['image']); ?>" alt="">
                    <div class="caption">
                        <h4>Product</h4>
                        <p> <?php echo  urldecode($cooked_data['pins'][0]['caption']); ?></p>
                        <p>
                            <a href="<?php echo  urldecode($cooked_data['pins'][0]['source']); ?>" class="btn btn-default">More Info</a>
                        </p>
                        <hr>
                        <button class="btn btn-primary" type="button">Upvotes <span class="badge">14</span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="<?php echo  urldecode($cooked_data['pins'][1]['image']); ?>" alt="">
                    <div class="caption">
                        <h4>Product</h4>
                        <p><?php echo  urldecode($cooked_data['pins'][1]['caption']); ?></p>
                        <p>

                            <a href="<?php echo  urldecode($cooked_data['pins'][1]['source']); ?>" class="btn btn-default">More Info</a>
                        </p>
                        <hr>
                        <button class="btn btn-primary" type="button">Upvotes <span class="badge">4</span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="<?php echo  urldecode($cooked_data['pins'][2]['image']); ?>" alt="">
                    <div class="caption">
                        <h4>Product</h4>
                        <p> <?php echo  urldecode($cooked_data['pins'][2]['caption']); ?></p>
                        <p>
                            <a href="<?php echo  urldecode($cooked_data['pins'][2]['source']); ?>" class="btn btn-default">More Info</a>
                        </p>
                        <hr>
                        <button class="btn btn-primary" type="button">Upvotes <span class="badge">4</span>
                        </button>
                    </div>
                </div>
            </div>


        </div>


    </div>
    <!-- /container -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>

</html>
