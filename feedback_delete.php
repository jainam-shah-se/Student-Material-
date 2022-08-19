<?php 
include_once("headera.php");
?>

<?php 

if(isset($_POST["BtnSubmit"]))
    {
        $id=$_GET["Id"];
		$name=$_POST["name"];
		$email=$_POST["email"];
        $sub=$_POST["sub"];
        $msg=$_POST["msg"];
        $time=$_POST["time"];
    
        

		$cnn=mysqli_connect("localhost","root","","student");
		$qry="Delete from `feedback` WHERE `Fid`='$id'";
    
    
        
        $result=$cnn->query($qry);
	}

            $id=$_GET["Id"];

            $cnn=mysqli_connect("localhost","root","","student");
            $qry="select * from feedback where Fid=$id";
            $result=$cnn->query($qry);

            $row=$result->fetch_assoc();
        
            $n=$row["Name"];
            $e=$row["Email"];
            $s=$row["Subject"];
            $m=$row["Message"];
            $t=$row["Time"];
        

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
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Subject: </label>	
            <div class="col-sm-9">
            <input type="text" id="form-field-1" value="<?php echo $s ?>" name="sub" class="col-xs-10 col-sm-5" />
            </div>
              <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Message: </label>	
            <div class="col-sm-9">
            <input type="text" id="form-field-1" value="<?php echo $m ?>" name="msg" class="col-xs-10 col-sm-5" />
            </div>
              <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Time: </label>	
            <div class="col-sm-9">
            <input type="text" id="form-field-1" value="<?php echo $t ?>" name="time" class="col-xs-10 col-sm-5" />
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
	