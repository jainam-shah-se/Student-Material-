<?php
include_once("headera.php");
?>

<h4 class="pink">
        <i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue"></i>
        <a href="#modal-table" role="button" class="green" data-toggle="modal"> Detail Table </a>
</h4>
<div style="float:right"><a href="detail_insert.php"> Insert</a> </div>

            <?php
            $cnn=mysqli_connect("localhost","root","","student");
            $qry="select `Enrollment`,`Name`,`Email`,`Branch`,`Semester`,`Password` from detail";
            $result=$cnn->query($qry);
            
            $str="<table class='table  table-bordered table-hover'><tr><th>Name</th><th>Email</th>
            <th>Branch</th><th>Semester</th><th>Password</th><th>Edit</th><th>Delete</th></tr>";
    
            
            
            while($row=$result->fetch_assoc())
            {
                $str.="<tr><td>".$row["Name"]."</td><td>".$row["Email"]."</td><td>".$row["Branch"]."</td><td>".$row["Semester"]."</td><td>".$row["Password"]."</td><td><a class='green' href='detail_update.php?Id=".$row["Enrollment"] ."'><i class='ace-icon fa fa-pencil bigger-130'></i></a></td>
                <td>
                <a class='red' href='detail_delete.php?Id=".$row["Enrollment"] ."'><i class='ace-icon fa fa-trash-o bigger-130'></i></a></td>
               
                </tr>";
            }
            $str.="</table>";
            
            echo $str;
            ?>
            
        

<?php
include_once("footer.php");
?>