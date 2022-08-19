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
			
			require('recaptcha/src/autoload.php');		
			$recaptcha = new \ReCaptcha\ReCaptcha('6LfY6sAUAAAAAM8YKBSAulT9WdLVine6GY-TDXcg', new \ReCaptcha\RequestMethod\SocketPost());
			$resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

			if (!$resp->isSuccess()){
		  		echo  "<script type='text/Javascript'>alert('Please answer recaptcha correctly');</script>";	
		  			
		  	}
			else
			{
			
        $eno=$_REQUEST["eno"];
		$name=$_REQUEST["name"];
        $branch=$_REQUEST["Op1"];
        $semester=$_REQUEST["Op2"];
        $password=rand(1000,9999);
        
        $email=$_REQUEST["email"];
                
        if ($branch=="Computer") {
        $id=$semester;
        }
        elseif ($branch=="Civil") {
        $id=(1*8)+$semester;
        }
        elseif ($branch=="Mechanical") {
        $id=(2*8)+$semester;
        }
        elseif ($branch=="Electrical") {
        $id=(3*8)+$semester;
        }
        
		$cnn=mysqli_connect("localhost","root","","Student");
		$qry=" INSERT INTO `detail`(`Enrollment`, `Name`, `Email`, `Branch`, `Semester`, `Password`,`Category`,`Bsid`) VALUES ('$eno','$name','$email','$branch','$semester','$password','Student','$id')";
        
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

$mail->Subject = 'Confirm your email address';
$mail->Body    = "Welcome Aboard ".$name." ,<br><br>Congratulations on joining Indus Study Material - The best free study material for Indus University Students.</p>
<br><br>Your Password is <h1>".$password."</h1>. Now, you can immediately start using the website.<br><br>
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
            <h3><i class="fa fa-lock"></i> Register:</h3>
            <hr class="mt-2 mb-2">
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
		
		<div class="md-form">
            <i class="fa fa-user prefix"></i>
            <input type="text" id="form2" name="name" class="form-control" required>
            <label for="form2">Name</label>
        </div>
		
		<div class="md-form">
            <i class="fa fa-user prefix"></i>
            <input type="text" id="form2" name="eno" class="form-control" required>
            <label for="form2">Enrollment No.</label>
        </div>
		
		<div class="md-form">
		<select name="Op1" class="browser-default custom-select form-control" required>
		<option selected value="" >Branch</option>
                <option value="Computer" >Computer</option>
                <option value="Civil">Civil</option>
                <option value="Mechanical">Mechanical</option>
                <option value="Electrical">Electrical</option>
		</select>
		</div>
		
		<div class="md-form">
           
		<select name="Op2" class="browser-default custom-select form-control" required> 
               <option value="" selected >Semester</option>
                <option value="1" >I</option>
                                                                <option value="2" >II</option>
                                                                <option value="3" >III</option>
                                                                <option value="4" >IV</option>
                                                                <option value="5" >V</option>
                                                                <option value="6" >VI</option>
                                                                <option value="7" >VII</option>
                                                                <option value="8" >VIII</option>
                                                                
               
            </select>
        </div>
		
          <center><div  class="g-recaptcha "  data-sitekey="6LfY6sAUAAAAANQM3x4SVa34JBuDfy_wKWRmF013"></div></center>
            
            
        <div class="text-center">
            <button name="BtnSubmit" class="btn btn-deep-purple" type="submit">Register</button>
        </div>

    </div>
	</form>

    
    <div class="modal-footer">
        <div class="options">
            <p>Already have account? <a href="Login1.php">Login</a></p>
			<p>Forgot <a href="forgot.php">Password?</a></p>
       
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