<?php 
include_once("headera.php");
?>

<?php 

if(isset($_POST["BtnSubmit"]))
    {
        $eno=$_POST["eno"];
		$name=$_POST["name"];
		$email=$_POST["email"];
        $branch=$_POST["branch"];
        $sem=$_POST["sem"];
        $pass=$_POST["pass"];
    
        if ($branch=="Computer") {
        $id1=$sem;
        }
        elseif ($branch=="Civil") {
        $id1=(1*8)+$sem;
        }
        elseif ($branch=="Mechanical") {
        $id1=(2*8)+$sem;
        }
        elseif ($branch=="Electrical") {
        $id1=(3*8)+$sem;
        }

		$cnn=mysqli_connect("localhost","root","","student");
		$qry=" INSERT INTO `detail`(`Enrollment`, `Name`, `Email`, `Branch`, `Semester`, `Password`,`Category`,`Bsid`) VALUES ('$eno','$name','$email','$branch','$sem','$pass','Student','$id1')";
        
    
    
        
        $result=$cnn->query($qry);
	}

           
        

?>								

<h3 class="header smaller lighter blue">Insert details</h3>
<form class="form-horizontal" role="form" method="post" name="frm">
				                    					
        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Enrollment No: </label>
            <div class="col-sm-9">
            <input type="text" id="form-field-1" Placeholder="Enter Number" name="eno" class="col-xs-10 col-sm-5"/>
            </div>
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Name: </label>
            <div class="col-sm-9">
            <input type="text" id="form-field-1" Placeholder="Enter Name" name="name" class="col-xs-10 col-sm-5"/>
            </div>
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email: </label>	
            <div class="col-sm-9">
            <input type="text" id="form-field-1" Placeholder="Enter Email" name="email" class="col-xs-10 col-sm-5" />
            </div>
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Branch: </label>	
            <div class="col-sm-9">
            <input type="text" id="form-field-1" Placeholder="Enter Branch" name="branch" class="col-xs-10 col-sm-5" />
            </div>
              <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Semester: </label>	
            <div class="col-sm-9">
            <input type="text" id="form-field-1" Placeholder="Enter Semester" name="sem" class="col-xs-10 col-sm-5" />
            </div>
              <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Password: </label>	
            <div class="col-sm-9">
            <input type="text" id="form-field-1" Placeholder="Enter Password" name="pass" class="col-xs-10 col-sm-5" />
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
	