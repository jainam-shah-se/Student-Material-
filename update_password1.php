<?php 
session_start();
include_once("headers.php");
?>

<?php 
	
if(isset($_POST["BtnSubmit"]))
    {
		$Enroll=$_SESSION["Enrollment"];
		$cnn=mysqli_connect("localhost","root","","student");
		$result = $cnn->query("SELECT `Password` FROM `detail` WHERE `Enrollment`='$Enroll'");
		$oldpass = mysqli_fetch_row($result);
	
		$oldpass1=$_POST["pwd"];
		$Password=$_POST["Password"];
		$repassword=$_POST["Pswd"];
		
		if($Password != $repassword){
			echo  "<script type='text/Javascript'>alert('Confirm Password did not match');</script>";
		}
		
		elseif($oldpass1 != $oldpass[0])
		{
			echo  "<script type='text/Javascript'>alert('Please enter correct old password');</script>";
		}
		
		else
		{			
			$qry="UPDATE `detail` SET `Password`='$Password' WHERE `Enrollment`='$Enroll'"; 
		
			$result=$cnn->query($qry);
		}
		
	}

?>								

<h3 class="header smaller lighter blue">Update Password</h3>
<form class="form-horizontal" role="form" method="post" name="frm">
				                 					
        <div class="form-group">

            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Old Password: </label>

            <div class="col-sm-9">
            <input type="text" id="form-field-1" placeholder="Old Password" name="pwd" class="col-xs-10 col-sm-5"/>
            </div>
            
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> New Password: </label>

            <div class="col-sm-9">
            <input type="text" id="form-field-1" placeholder="New Password" name="Password" class="col-xs-10 col-sm-5"/>
            </div>
            
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Confirm Password: </label>

            <div class="col-sm-9">
            <input type="text" id="form-field-1" placeholder="Confirm Password" name="Pswd" class="col-xs-10 col-sm-5"/>
            </div>
            
            <div class="clearfix form-actions">
            <div class="col-md-offset-3 col-md-9">
            <input type="submit" name="BtnSubmit" value="Enter" class="btn btn-info">
    
            &nbsp; &nbsp; &nbsp;
            <button class="btn" type="reset">
            <i class="ace-icon fa fa-undo bigger-110"></i>
            Reset
            </button>
            </div>
            </div>
            </form>

<?php 
include_once("footer.php");
?>