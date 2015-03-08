
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HelpMeChoose - Facebook</title>

<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="./css/custom-css.css" rel="stylesheet">

    <style type="text/css">

         .nav-pills>li.active>a, .nav-pills>li.active>a:hover, .nav-pills>li.active>a:focus {
            color: #fff;
            background-color: #bf0000;
            }
             .jumbotron {
                background-color: rgba(207, 207, 207, 0.51);
            }
        .jumbotron .btn {
            padding: 14px 24px;
            font-size: 14px;
        }
</style>

<script type="text/javascript" src="./js/fb-script.js"></script>

  </head>

  <body>

<?php

//print_r(  $_COOKIE["hmc"] );
$data = json_decode($_COOKIE["hmc2"] , true) ;
//print_r( $data['html']  );
$cooked_data = json_decode( $data['html'] , true) ;
//print_r( $cooked_data );

// 0 --- 1 -- 2 and so on  after pins -> 0 -> image 

/*printf( " image is %s <br> " , $cooked_data['pins'][0]['image'] );
printf( " caption  is %s <br> " , $cooked_data['pins'][0]['caption'] );
printf( " source is %s <br> " , $cooked_data['pins'][0]['source'] );
*/
?>

    <div class="container">
      <div class="header">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active">
                <a href="#" class="btn"><span class="glyphicon glyphicon-thumbs-up"></span> Facebook</a>
            </li>
            <li role="presentation">
                <a href="./email-post.php" class="btn"><span class="glyphicon glyphicon-envelope"></span> Email</a>
            </li>
             <li role="presentation">
                <a href="./pollresults.php" class="btn"><span class="glyphicon glyphicon-stats"></span> Poll-Results</a>
            </li>
            <li role="presentation"><a href="./about.html" target="_blank" class="btn"><span class="glyphicon glyphicon-registration-mark"></span> About</a></li>
            <li role="presentation"><a href="./demo.html" target="=_blank" class="btn"><span class="glyphicon glyphicon-film"></span> Demo</a></li>
            <li role="presentation"><a href="javascript:window.close();" class="btn"><span class="glyphicon glyphicon-remove-sign"></span> </a></li>
            
          </ul>
	</nav>
	   <h3 class="text-muted"> <img style="width:190px;height:70px;" src="http://localhost/hmc/pluginassets/logo_new.png"> </h3>
      </div>

      <div class="jumbotron">

        <h2 style="color:#3b5998;">
        <img width="50px" height="50px;" src="http://megaicons.net/static/img/icons_sizes/6/140/512/fb-icon.png">
        Facebook</h2>
        <p class="lead">Use the Facebook service to ask your friends/family to help you choose the products you want to buy.</p>
        <p>
            

            <div class="btn-group">
                    <a href="javascript:;" class="btn btn-sm btn-success" onclick="fb_publish()"><span class="glyphicon glyphicon-globe"></span> Post to facebook timeline</a>
                    <a href="javascript:;" class="btn btn-sm btn-warning" onclick="fb_msg_send()"><span class="glyphicon glyphicon-globe"></span> Message a Facebook friend</a>

            </div>
        </p>
      </div>

      <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>Selected Products</h3>
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
		<img src="<?php echo urldecode($cooked_data["pins"][0]['image']) ?>" alt="">
                    <div class="caption">
                        <h4>Product</h4>
			<p><?php echo urldecode($cooked_data["pins"][0]['caption']) ?></p>
                        <p>
			<a href="<?php echo urldecode($cooked_data["pins"][0]['source']) ?>" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
		<img src="<?php echo urldecode($cooked_data["pins"][1]['image']) ?> " alt="">
                    <div class="caption">
                        <h4>Product</h4>
			<p><?php echo urldecode($cooked_data["pins"][1]['caption']) ?> </p>
                        <p>
			<a href="<?php echo urldecode($cooked_data["pins"][1]['source']) ?>" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
		<img src= "<?php echo urldecode($cooked_data["pins"][2]['image']) ?>" alt="">
                    <div class="caption">
                        <h4>Product</h4>
			<p><?php echo urldecode($cooked_data["pins"][2]['caption']) ?></p>
                        <p>
			<a href="<?php echo urldecode($cooked_data["pins"][2]['source']) ?>" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>



        </div>

        <!-- /.row -->



    </div> <!-- /container -->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  </body>
</html>
