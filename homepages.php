<?php
	session_start();
     include_once("headers.php");      
    
$bsid=$_SESSION["Bsid"];
    
?>

    <h3>Welcome Student</h3>



<?php
            
            $cnn=mysqli_connect("localhost","root","","student");
            $qry="SELECT Sid,SName,Spic FROM branch_sem,subject WHERE branch_sem.Bsid=subject.Bsid AND subject.Bsid='$bsid' ";

          
            $result=$cnn->query($qry);
             $x=1;
            
            $str="<table class='table  table-bordered table-hover'>";
            
            while($row=$result->fetch_assoc())
            {
                if($x==1)
                {
                    $str.="<tr>";
                    $x++;
                }
                
                $x++;
                $str.="<td align='center'><a href='subject_detail.php?Id=".$row["Sid"]."'><img src='Images/".$row["Spic"]."'height='100px' width='100px'/></a><br>".$row["SName"]."</td>";
                
                
                if($x==3)
                {
                    $str.="</tr>";
                    $x=1;
                }
            }
    
            $str.="</table>";
            
            echo $str;
                
            


?>

<?php 
include_once("footer.php");
?>
