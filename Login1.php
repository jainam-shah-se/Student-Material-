<!DOCTYPE html>
<?php 
include_once("headerh.php");
?>
<?php
	session_start();
	require_once('dbconfig/config.php');
?>
<html lang="en">

<head>
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
  <script>(function() {
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
    
      <?php
			if(isset($_POST['btnsubmit']))
			{ 
                $email=$_POST['email'];
				$Password=$_POST['password'];
				$query = "SELECT  * FROM detail where Email='$email' and Password='$Password'" ;
				
				
				$con=mysqli_connect("localhost","root","","student");
				$result =$con->query($query);
				$x=mysqli_num_rows($result);

                
             //   echo $query;
                
				if($x==1)
				{
					$row = $result->fetch_assoc();
					
					$Enroll=$row["Enrollment"];
                    $_SESSION['Bsid'] = $row["Bsid"];
					$_SESSION['Enrollment'] = $row["Enrollment"];
                    
                  //  echo "ID = ".$_SESSION['Bsid'];
                    
                    
                    if($Enroll==1)
                    {
					header( "Location:homepagea.php");
                    }
                    else
                    {
                    header( "Location:homepages.php");
                    }
                    
                  
                    
				}			
				else
				{
						echo '<script type="text/javascript">alert("No such User exists. Invalid Credentials")</script>';
				}
				
			}
			
		?>
        
        
          
</head>

<body>

  <!-- Start your project here-->
  <br><br><br>
<div class="card" style="width:50%;margin:auto;">
    <div class="card-block">

        <!--Header-->
        <div class="text-center">
            <h3><i class="fa fa-lock"></i> Login:</h3>
            <hr class="mt-2 mb-2">
        </div>

        <!--Body-->
		<form method="post" class="needs-validation" novalidate>
        <div class="md-form">
            <i class="fa fa-envelope prefix"></i>
            <input type="text" name="email" id="form2" class="form-control" required>
            <label for="form2">Your email</label>
        </div>

        <div class="md-form">
            <i class="fa fa-lock prefix"></i>
            <input type="password" name="password" id="form4" class="form-control">
            <label for="form4">Your password</label>
        </div>

        <div class="text-center">
            <button name="btnsubmit" class="btn btn-deep-purple" type="submit">Login</button>
        </div>
		</form>

    </div>

    <!--Footer-->
    <div class="modal-footer">
        <div class="options">
			<p>Forgot <a href="forgot.php">Password?</a></p>
            <p>Not a member? <a href="Signup.php">Sign Up</a></p>
            
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