<?php 
include_once("headera.php");
?>

<?php 

if(isset($_POST["BtnSubmit"]))
    {
        $id=$_POST["id"];
		$name=$_POST["name"];
        $mname=$_POST["mname"];
		
      
    
     

		$cnn=mysqli_connect("localhost","root","","student");
		$qry=" INSERT INTO `material`(`Sid`, `Link`,`MName`) VALUES ('$id','$name','$mname')";
        
    
    
        
        $result=$cnn->query($qry);
	}

           
        

?>								

<h3 class="header smaller lighter blue">Insert details</h3>
<form class="form-horizontal" role="form" method="post" name="frm">
				                    					
        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Sid: </label>
            <div class="col-sm-9">
            <input type="text" id="form-field-1" Placeholder="Enter Id" name="id" class="col-xs-10 col-sm-5"/>
            </div>
             <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Material Name: </label>
            <div class="col-sm-9">
            <input type="text" id="form-field-1" Placeholder="Enter Name" name="mname" class="col-xs-10 col-sm-5"/>
            </div>
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Link: </label>
            <div class="col-sm-9">
            <input type="text" id="form-field-1" Placeholder="Enter Name" name="name" class="col-xs-10 col-sm-5"/>
            </div>
            
            </div>

            <div class="clearfix form-actions">
            <div class="col-md-offset-3 col-md-9">
            <input type="submit" name="BtnSubmit" value="Insert" class="btn btn-info">
    
            </div>
            </div>
            </form>

<?php 
include_once("footer.php");
?>
	