<!DOCTYPE html>
<?php 
include_once("headerh.php");
?>
<html lang="en">

<head>
     <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    
     <?php
        
        if(isset($_REQUEST["BtnSubmit"]))
        {
        
        $password=rand(1000,9999);
        
        $email=$_REQUEST["email"];
                
        
		$cnn=mysqli_connect("localhost","root","","Student");
		$qry=" UPDATE `detail` SET `Password`='$password' WHERE `Email`='$email'";
        
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

$mail->Subject = 'New Password';
$mail->Body    = "Hello ,
<br><br>Your New Password is <h1>".$password."</h1>Now, you can immediately start using the website.<br><br>
It is advisable to change Password after First Login.
<br><br>
Thank you, <br>Team Indus Study Material";


$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo  "<script type='text/Javascript'>alert('Please Try Again..');</script>";
} else {
    echo  "<script type='text/Javascript'>alert('Please Check Your E-mail for Password..');</script>";
}
        }
        
        
        ?>
    <?php
    

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
  <script>
 (function() {
'use strict';
window.addEventListener('load', function() {
// Fetch all the forms we want to apply custom Bootstrap validation styles to
var forms = document.getElementsByClassName('needs-validation');
// Loop over them and prevent submission
var validation = Array.prototype.filter.call(forms, function(form) {
form.addEventListener('submit', function(event) {
if (form.checkValidity() === false) {
event.preventDefault();
event.stopPropagation();
}
form.classList.add('was-validated');
}, false);
});
}, false);
})();
</script>
</head>

<body>

  <!-- Start your project here-->
  <br><br><br>
<div class="card" style="width:50%;margin:auto;">
    <div class="card-block">

        <!--Header-->
        <div class="text-center">
            <h3><i class="fa fa-lock"></i> Forgot Password:</h3>
            <hr class="mt-2 mb-2">
			<p>Lost your password? Please enter your email address. You will receive a new password via email.</p>
        </div>

        <!--Body-->
		<form method="post" class="needs-validation" novalidate>
        <div class="md-form">
            <i class="fa fa-envelope prefix"></i>
            <input type="email" id="form2" name="email" class="form-control" required>
            <label for="form2">Email</label>
			<div class="invalid-feedback">
          Please Enter Valid Email.
        </div>
        </div>
	
            
        <div class="text-center">
            <button name="BtnSubmit" class="btn btn-deep-purple" type="submit">Send</button>
        </div>

    </div>
	</form>

    
    <div class="modal-footer">
        <div class="options">
            <p>Back to Login? <a href="Login1.php">Login</a></p>
			
       
        </div>
    </div>

</div>
<br><br><br>
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