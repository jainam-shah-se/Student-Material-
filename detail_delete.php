<?php 
include_once("headera.php");
?>

<?php 

if(isset($_POST["BtnSubmit"]))
    {
        $id=$_GET["Id"];
		$name=$_POST["name"];
		$email=$_POST["email"];
        $branch=$_POST["branch"];
        $sem=$_POST["sem"];
        $pass=$_POST["pass"];
    
        

		$cnn=mysqli_connect("localhost","root","","student");
		$qry="Delete from `detail` WHERE `Enrollment`='$id'";
    
    
        
        $result=$cnn->query($qry);
	}

            $id=$_GET["Id"];

            $cnn=mysqli_connect("localhost","root","","student");
            $qry="select * from detail where Enrollment=$id";
            $result=$cnn->query($qry);

            $row=$result->fetch_assoc();
        
            $n=$row["Name"];
            $e=$row["Email"];
            $b=$row["Branch"];
            $s=$row["Semester"];
            $p=$row["Password"];
        

?>								

<h3 class="header smaller lighter blue">Delete details</h3>
<form class="form-horizontal" role="form" method="post" name="frm">
				                    					
        <div class="form-group">
            
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Name: </label>
            <div class="col-sm-9">
            <input type="text" id="form-field-1" value="<?php echo $n ?>" name="name" class="col-xs-10 col-sm-5"/>
            </div>
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email: </label>	
            <div class="col-sm-9">
            <input type="text" id="form-field-1" value="<?php echo $e ?>" name="email" class="col-xs-10 col-sm-5" />
            </div>
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Branch: </label>	
            <div class="col-sm-9">
            <input type="text" id="form-field-1" value="<?php echo $b ?>" name="branch" class="col-xs-10 col-sm-5" />
            </div>
              <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Semester: </label>	
            <div class="col-sm-9">
            <input type="text" id="form-field-1" value="<?php echo $s ?>" name="sem" class="col-xs-10 col-sm-5" />
            </div>
              <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Password: </label>	
            <div class="col-sm-9">
            <input type="text" id="form-field-1" value="<?php echo $p ?>" name="pass" class="col-xs-10 col-sm-5" />
            </div>
            </div>

            <div class="clearfix form-actions">
            <div class="col-md-offset-3 col-md-9">
            <input type="submit" name="BtnSubmit" value="Delete" class="btn btn-info">
    
            
            
            </div>
            </div>
            </form>

<?php 
include_once("footer.php");
?>
	