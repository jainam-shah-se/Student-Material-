<!DOCTYPE html>
<?php 
include_once("headerh.php");
?>
<html lang="en">

<head>
    <?php
        
        if(isset($_REQUEST["BtnSubmit"]))
        {
        $name=$_REQUEST["name"];
        $sub=$_REQUEST["sub"];
		$msg=$_REQUEST["msg"];
        
        
        $email=$_REQUEST["email"];
                
       
        
		$cnn=mysqli_connect("localhost","root","","Student");
		$qry=" INSERT INTO `feedback`(`Name`,`Email`, `Subject`, `Message`,`Time`) VALUES ('$name','$email','$sub','$msg',now())";
        
           
        $result=$cnn->query($qry);
		
		
		require 'Extra/PHPMailerAutoload.php';


$mail = new PHPMailer;

//$mail->SMTPDebug = 4;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'hardymatt216@gmail.com';                 // SMTP username
$mail->Password = 'indus@12';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('hardymatt216@gmail.com', 'no-reply');
$mail->addAddress($_POST["email"]);     // Add a recipient
             // Name is optional
$mail->addReplyTo('hardymatt216@gmail.com');


$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Your response has been recorded';
$mail->Body    = "Hello ".$name." ,<br><br>We have recieved your response. Our team will come back to you within a matter of hours to help you.
<br><br>
Thank you, <br>Team Indus Study Material";


$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo  "<script type='text/Javascript'>alert('Response could not be sent.');</script>";
} else {
    echo  "<script type='text/Javascript'>alert('Response has been sent');</script>";
}

	   
        }
        
        
        ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  
  <link rel="icon" href="https://www.indusuni.ac.in/wp-content/uploads/2019/02/favicon.png" sizes="32x32">
  <title>Indus Study Material</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="project/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="project/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="project/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- Start your project here-->
  <br><br><br>
	  <div class="container my-4">

    
    
        <!--Card-->
    <div class="card">

      <!--Card content-->
      <div class="card-body">

          <!--Section heading-->
          <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
          <!--Section description-->
          <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact
            us directly. Our team will come back to you within
            a matter of hours to help you.</p>

          <div class="row">

            <!--Grid column-->
            <div class="col-md-9 mb-md-0 mb-5">
              <form id="contact-form" name="contact-form"  method="post">

                <!--Grid row-->
                <div class="row">

                  <!--Grid column-->
                  <div class="col-md-6">
                    <div class="md-form mb-0">
                      <input type="text" id="name" name="name" class="form-control">
                      <label for="name" class="">Your name</label>
                    </div>
                  </div>
                  <!--Grid column-->

                  <!--Grid column-->
                  <div class="col-md-6">
                    <div class="md-form mb-0">
                      <input type="text" id="email" name="email" class="form-control">
                      <label for="email" class="">Your email</label>
                    </div>
                  </div>
                  <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                  <div class="col-md-12">
                    <div class="md-form mb-0">
                      <input type="text" id="subject" name="sub" class="form-control">
                      <label for="subject" class="">Subject</label>
                    </div>
                  </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                  <!--Grid column-->
                  <div class="col-md-12">

                    <div class="md-form">
                      <textarea type="text" id="message" name="msg" rows="2"
                        class="form-control md-textarea"></textarea>
                      <label for="message">Your message</label>
                    </div>

                  </div>
                </div>
                <!--Grid row-->

            
                
                

              <div class="text-center text-md-left">
                <input type="submit" name="BtnSubmit" class="btn btn-primary" value="Send" >
              </div>
                    </form>
              <div class="status"></div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-3 text-center">
              <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                  <p>Rancharda, Ahmedabad-382115</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                  <p>+ 91 987 654 3210</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                  <p>admin@iite.indusuni.ac.in</p>
                </li>
              </ul>
            </div>
            <!--Grid column-->

          </div>

      </div>

    </div>
    <!--/.Card-->

  </div>
  <!-- Footer -->

<!-- Footer -->
  <!-- Start your project here-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="project/js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="project/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="project/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="project/js/mdb.min.js"></script>
</body>

</html>
<?php
include_once("footerh.php");
?>
<!DOCTYPE html>
<?php 
include_once("headerh.php");
?>
<html lang="en">

<head>
    <?php
        
        if(isset($_REQUEST["BtnSubmit"]))
        {
        $name=$_REQUEST["name"];
        $sub=$_REQUEST["sub"];
		$msg=$_REQUEST["msg"];
        
        
        $email=$_REQUEST["email"];
                
       
        
		$cnn=mysqli_connect("localhost","root","","Student");
		$qry=" INSERT INTO `feedback`(`Name`,`Email`, `Subject`, `Message`,`Time`) VALUES ('$name','$email','$sub','$msg',now())";
        
           
        $result=$cnn->query($qry);
		
		
		require 'Extra/PHPMailerAutoload.php';


$mail = new PHPMailer;

//$mail->SMTPDebug = 4;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'hardymatt216@gmail.com';                 // SMTP username
$mail->Password = 'indus@12';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('hardymatt216@gmail.com', 'no-reply');
$mail->addAddress($_POST["email"]);     // Add a recipient
             // Name is optional
$mail->addReplyTo('hardymatt216@gmail.com');


$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Your response has been recorded';
$mail->Body    = "Hello ".$name." ,<br><br>We have recieved your response. Our team will come back to you within a matter of hours to help you.
<br><br>
Thank you, <br>Team Indus Study Material";


$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo  "<script type='text/Javascript'>alert('Response could not be sent.');</script>";
} else {
    echo  "<script type='text/Javascript'>alert('Response has been sent');</script>";
}

	   
        }
        
        
        ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  
  <link rel="icon" href="https://www.indusuni.ac.in/wp-content/uploads/2019/02/favicon.png" sizes="32x32">
  <title>Indus Study Material</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="project/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="project/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="project/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- Start your project here-->
  <br><br><br>
	  <div class="container my-4">

    
    
        <!--Card-->
    <div class="card">

      <!--Card content-->
      <div class="card-body">

          <!--Section heading-->
          <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
          <!--Section description-->
          <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact
            us directly. Our team will come back to you within
            a matter of hours to help you.</p>

          <div class="row">

            <!--Grid column-->
            <div class="col-md-9 mb-md-0 mb-5">
              <form id="contact-form" name="contact-form"  method="post">

                <!--Grid row-->
                <div class="row">

                  <!--Grid column-->
                  <div class="col-md-6">
                    <div class="md-form mb-0">
                      <input type="text" id="name" name="name" class="form-control">
                      <label for="name" class="">Your name</label>
                    </div>
                  </div>
                  <!--Grid column-->

                  <!--Grid column-->
                  <div class="col-md-6">
                    <div class="md-form mb-0">
                      <input type="text" id="email" name="email" class="form-control">
                      <label for="email" class="">Your email</label>
                    </div>
                  </div>
                  <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                  <div class="col-md-12">
                    <div class="md-form mb-0">
                      <input type="text" id="subject" name="sub" class="form-control">
                      <label for="subject" class="">Subject</label>
                    </div>
                  </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                  <!--Grid column-->
                  <div class="col-md-12">

                    <div class="md-form">
                      <textarea type="text" id="message" name="msg" rows="2"
                        class="form-control md-textarea"></textarea>
                      <label for="message">Your message</label>
                    </div>

                  </div>
                </div>
                <!--Grid row-->

            
                
                

              <div class="text-center text-md-left">
                <input type="submit" name="BtnSubmit" class="btn btn-primary" value="Send" >
              </div>
                    </form>
              <div class="status"></div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-3 text-center">
              <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                  <p>Rancharda, Ahmedabad-382115</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                  <p>+ 91 987 654 3210</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                  <p>admin@iite.indusuni.ac.in</p>
                </li>
              </ul>
            </div>
            <!--Grid column-->

          </div>

      </div>

    </div>
    <!--/.Card-->

  </div>
  <!-- Footer -->

<!-- Footer -->
  <!-- Start your project here-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="project/js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="project/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="project/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="project/js/mdb.min.js"></script>
</body>

</html>
<?php
include_once("footerh.php");
?>
