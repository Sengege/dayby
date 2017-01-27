<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>生活是这样子啊，不如诗啊！</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="../index_files/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 40px;
      }

      /* Custom container */
      .container-narrow {
        margin: 0 auto;
        max-width: 700px;
      }
      .container-narrow > hr {
        margin: 30px 0;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 60px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 72px;
        line-height: 1;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }

      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }
    </style>
    <link href="../index_files/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://v2.bootcss.com/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://v2.bootcss.com/assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://v2.bootcss.com/assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="http://v2.bootcss.com/assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="http://v2.bootcss.com/assets/ico/favicon.png">
  </head>

  <body>

    <div class="container-narrow">

      <div class="masthead">
        <ul class="nav nav-pills pull-right">
          <li class="active"><a href="#">要成为</a></li>
          <li><a href="#project">以一当十</a></li>

          <li><a href="#">的杰出程序员</a></li>
        </ul>
        <h3 class="muted"><a href="/">三月半</a></h3>
      </div>

      <hr>
<?php
exec("ls",$mydir);
foreach ($mydir as $name){
        $sub=substr($name,-4,4);
        if("html"==$sub){
      	require $name;
	echo "<hr>";
        }
}
#echo var_dump($mydir);
?>


      <hr>
      <div class="footer">
        <p>© Create by Tristan</p>
      </div>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../index_files/jquery.js"></script>
    <script src="../index_files/bootstrap-transition.js"></script>
    <script src="../index_files/bootstrap-alert.js"></script>
    <script src="../index_files/bootstrap-modal.js"></script>
    <script src="../index_files/bootstrap-dropdown.js"></script>
    <script src="../index_files/bootstrap-scrollspy.js"></script>
    <script src="../index_files/bootstrap-tab.js"></script>
    <script src="../index_files/bootstrap-tooltip.js"></script>
    <script src="../index_files/bootstrap-popover.js"></script>
    <script src="../index_files/bootstrap-button.js"></script>
    <script src="../index_files/bootstrap-collapse.js"></script>
    <script src="../index_files/bootstrap-carousel.js"></script>
    <script src="../index_files/bootstrap-typeahead.js"></script>



</body></html>
