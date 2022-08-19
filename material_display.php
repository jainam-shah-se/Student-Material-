<?php
include_once("headera.php");
?>

<h4 class="pink">
        <i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue"></i>
        <a href="#modal-table" role="button" class="green" data-toggle="modal"> Material Table </a>
</h4>
<div style="float:right"><a href="material_insert.php"> Insert</a> </div>
<form method="post">
            <?php
            $cnn=mysqli_connect("localhost","root","","student");
            $qry="SELECT Mid,SName,MName,Link FROM subject,material WHERE subject.Sid=material.Sid";
            $result=$cnn->query($qry);
            
            $str="<table class='table  table-bordered table-hover'><tr><th>Subject Name</th><th>Material Name</th><th>Link</th>
            <th>Edit</th><th>Delete</th></tr>";
    
            
            
            while($row=$result->fetch_assoc())
            {
                $str.="<tr><td>".$row["SName"]."</td><td>".$row["MName"]."</td><td>".$row["Link"]."</td><td><a class='green' href='material_update.php?Id=".$row["Mid"] ."'><i class='ace-icon fa fa-pencil bigger-130'></i></a></td>
                <td>
                <a class='red' href='material_delete.php?Id=".$row["Mid"] ."'><i class='ace-icon fa fa-trash-o bigger-130'></i></a></td>
               
                </tr>";
            }
            $str.="</table>";
            
            echo $str;
            ?>
            
        </form>

<?php
include_once("footer.php");
?>