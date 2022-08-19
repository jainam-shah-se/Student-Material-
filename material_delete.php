<?php 
include_once("headera.php");
?>

<?php 

if(isset($_POST["BtnSubmit"]))
    {
        $id=$_GET["Id"];
		$name=$_POST["name"];
		$bid=$_POST["bid"];
    $mname=$_POST["mname"];
       
       
    
       

		$cnn=mysqli_connect("localhost","root","","student");
		$qry="Delete from `material` WHERE `Mid`='$id'";
    
    
        
        $result=$cnn->query($qry);
	}

            $id=$_GET["Id"];

            $cnn=mysqli_connect("localhost","root","","student");
            $qry="select * from material where Mid=$id";
            $result=$cnn->query($qry);

            $row=$result->fetch_assoc();
        
            $n=$row["Link"];
          
            $b=$row["Sid"];
            $m=$row["MName"]
            
          
        

?>								

<h3 class="header smaller lighter blue">Delete details</h3>
<form class="form-horizontal" role="form" method="post" name="frm">
				                    					
        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Sid: </label>
            <div class="col-sm-9">
            <input type="text" id="form-field-1" value="<?php echo $b ?>" name="bid" class="col-xs-10 col-sm-5"/>
            </div>
             <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Material Name: </label>
            <div class="col-sm-9">
            <input type="text" id="form-field-1" value="<?php echo $m ?>" name="mname" class="col-xs-10 col-sm-5"/>
            </div>
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Link: </label>
            <div class="col-sm-9">
            <input type="text" id="form-field-1" value="<?php echo $n ?>" name="name" class="col-xs-10 col-sm-5"/>
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
	