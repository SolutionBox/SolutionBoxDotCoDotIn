<?php
 
 if($_SERVER['REQUEST_METHOD']==='POST'){
     include("dbase.php");     
    $result=mysql_query("select max(id) as id from deven_contact_data");
    
    $id=0;
    if (!$result) {
      $message  = 'Invalid query: ' . mysql_error() . "\n";
      $message .= 'Whole query: ' . $query;
      //die($message);
      }
     else {
      while ($row = mysql_fetch_assoc($result)) {
        $id=$row['id'];
      
        }

     } 
     $id=$id+1;
    $query=mysql_query("insert into deven_contact_data(id)values('$id')");
    
      foreach ($_POST as $param_name => $param_val) {
       // echo "update deven_perso_data set $param_name=$param_val where id=$id";
        $query=mysql_query("update deven_contact_data set $param_name='$param_val' where id=$id");      
          

      }

 }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Solution Box</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="http://getbootstrap.com/2.3.2/assets/css/bootstrap.css" rel="stylesheet">
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
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

  <body>
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=1457951827760994";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

    <div class="container-narrow">

      <div class="masthead">
        <ul class="nav nav-pills pull-right">
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About Us</a></li>  
          <li><a href="training.html">Training</a></li>
          <li class="active"><a href="contact.php">Contact Us</a></li>
        </ul>
        <h2 class="muted"><strong>Solution Box</strong> |<small> Lets Share It</small></h2>
      </div>

    
      <hr>

      <div class="row-fluid marketing">
        <div class="span6">
          <h4>Share words with us</h4>
          <p><strong>Call us:</strong></p>
          <p>+91-9799360646</p>
          <p><strong>Email us:</strong></p>
          <p>solutionbox.shareit@gmail.com</p>
          <p><strong>Follow us on facebook</strong></p>
          
          
        <div class="span4">
        <div class="fb-like-box" data-href="http://www.facebook.com/sbletsshareit" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
        </div>



          
         </div>


        <div class="span6">
                   <?php 
             if(!($_SERVER['REQUEST_METHOD']==='POST')){


          ?> 

          <h4>Please fill the form, we will definitely get back to you soon</h4>
          <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
           <form role="form" method="post" action="contact.php">
                        <div class="form-group">
                            <input name="name" class="form-control input-lg" type="text" placeholder="Your Name" style="font-size:15px;border:1px solid #999999;">
                        </div>
                        <div class="form-group">
                            <input name="email" class="form-control input-lg" type="Email" placeholder="Email Address" style="font-size:15px;border:1px solid #999999;">
                        </div>
                        <div class="form-group">
                            <input name="phone" class="form-control input-lg" type="text" placeholder="Telephone Number" style="font-size:15px;border:1px solid #999999;">
                        </div>
                        <div class="form-group">
                            <textarea name="message" class="form-control" rows="3" placeholder="Your Message" style="font-size:15px;border:1px solid #999999;"></textarea>
                        </div>
                        <div style="text-align:right">
                            <input type="submit" class="btn btn-success" type="button"></button>
                        </div>
                        </form>
                    </div>

        <?php
      }
      else {
        
        echo "<h4>We will contact you soon</h4>";

      }
        ?>            

                   
  
                    
        </div>
      </div>

      <hr>

      <div class="footer">
        <p>&copy; Solution Box Education and Research (P) Limited, Jodhpur(India) 2014</p>
      </div>
 
    </div> <!-- /container -->

    <!-- Lce javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://getbootstrap.com/2.3.2/assets/js/jquery.js"></script>
    <script src="http://getbootstrap.com/2.3.2/assets/js/bootstrap-transition.js"></script>
    <script src="http://getbootstrap.com/2.3.2/assets/js/bootstrap-alert.js"></script>
    <script src="http://getbootstrap.com/2.3.2/assets/js/bootstrap-modal.js"></script>
    <script src="http://getbootstrap.com/2.3.2/assets/assets/js/bootstrap-dropdown.js"></script>
    <script src="http://getbootstrap.com/2.3.2/assets/js/bootstrap-scrollspy.js"></script>
    <script src="http://getbootstrap.com/2.3.2/assets/js/bootstrap-tab.js"></script>
    <script src="http://getbootstrap.com/2.3.2/assets/js/bootstrap-tooltip.js"></script>
    <script src="http://getbootstrap.com/2.3.2/assets/js/bootstrap-popover.js"></script>
    <script src="http://getbootstrap.com/2.3.2/assets/js/bootstrap-button.js"></script>
    <script src="http://getbootstrap.com/2.3.2/assets/js/bootstrap-collapse.js"></script>
    <script src="http://getbootstrap.com/2.3.2/assets/js/bootstrap-carousel.js"></script>
    <script src="http://getbootstrap.com/2.3.2/assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>
