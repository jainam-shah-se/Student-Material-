<?php 
include_once("headera.php");
?>

<?php 

if(isset($_POST["BtnSubmit"]))
    {
        $id=$_POST["id"];
		$name=$_POST["name"];
		$path=$_POST["path"];
        $credit=$_POST["credit"];
        $code=$_POST["code"];
      
    
     

		$cnn=mysqli_connect("localhost","root","","student");
		$qry=" INSERT INTO `subject`(`Bsid`, `SName`, `Spic`,`SCode`,`Credits`) VALUES ('$id','$name','$path','$code','$credit')";
        
    
    
        
        $result=$cnn->query($qry);
	}

           
        

?>								

<h3 class="header smaller lighter blue">Insert details</h3>
<form class="form-horizontal" role="form" method="post" name="frm">
				                    					
        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Bsid: </label>
            <div class="col-sm-9">
            <input type="text" id="form-field-1" Placeholder="Enter Id" name="id" class="col-xs-10 col-sm-5"/>
            </div>
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Subject Name: </label>
            <div class="col-sm-9">
            <input type="text" id="form-field-1" Placeholder="Enter Name" name="name" class="col-xs-10 col-sm-5"/>
            </div>
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Subject Credits: </label>	
            <div class="col-sm-9">
            <input type="text" id="form-field-1" Placeholder="Enter Credits" name="credit" class="col-xs-10 col-sm-5" />
            </div>
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Subject Code: </label>	
            <div class="col-sm-9">
            <input type="text" id="form-field-1" Placeholder="Enter Code" name="code" class="col-xs-10 col-sm-5" />
            </div>
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Subject Pic: </label>	
            <div class="col-sm-9">
            <input type="text" id="form-field-1" Placeholder="Enter Path" name="path" class="col-xs-10 col-sm-5" />
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
	