<?php 
include_once("headera.php");
?>

<?php 

if(isset($_POST["BtnSubmit"]))
    {
        $id=$_GET["Id"];
		$name=$_POST["name"];
		$bid=$_POST["bid"];
        $spic=$_POST["spic"];
        $code=$_POST["code"];
        $credit=$_POST["credit"];
       
    
       

		$cnn=mysqli_connect("localhost","root","","student");
		$qry="Delete from `subject` WHERE `Sid`='$id'";
    
    
        
        $result=$cnn->query($qry);
	}

            $id=$_GET["Id"];

            $cnn=mysqli_connect("localhost","root","","student");
            $qry="select * from subject where Sid=$id";
            $result=$cnn->query($qry);

            $row=$result->fetch_assoc();
        
            $n=$row["SName"];
          
            $b=$row["Bsid"];
            
            $p=$row["Spic"];
            $cr=$row["Credits"];
            $co=$row["SCode"];
        

?>								

<h3 class="header smaller lighter blue">Delete details</h3>
<form class="form-horizontal" role="form" method="post" name="frm">
				                    					
        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Bsid: </label>
            <div class="col-sm-9">
            <input type="text" id="form-field-1" value="<?php echo $b ?>" name="bid" class="col-xs-10 col-sm-5"/>
            </div>
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Subject Name: </label>
            <div class="col-sm-9">
            <input type="text" id="form-field-1" value="<?php echo $n ?>" name="name" class="col-xs-10 col-sm-5"/>
            </div>
              <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Subject Credits: </label>	
            <div class="col-sm-9">
            <input type="text" id="form-field-1" value="<?php echo $cr ?>" name="credit" class="col-xs-10 col-sm-5" />
            </div>
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Subject Code: </label>	
            <div class="col-sm-9">
            <input type="text" id="form-field-1" value="<?php echo $co ?>" name="code" class="col-xs-10 col-sm-5" />
            </div>
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Subject Pic: </label>	
            <div class="col-sm-9">
            <input type="text" id="form-field-1" value="<?php echo $p ?>" name="spic" class="col-xs-10 col-sm-5" />
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
	