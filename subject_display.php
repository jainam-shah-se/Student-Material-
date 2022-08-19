<?php
include_once("headera.php");
?>

<h4 class="pink">
        <i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue"></i>
        <a href="#modal-table" role="button" class="green" data-toggle="modal"> Subject Table </a>
</h4>
<div style="float:right"><a href="subject_insert.php"> Insert</a> </div>
<form method="post">
            <?php
            $cnn=mysqli_connect("localhost","root","","student");
            $qry="SELECT Sid,Branch,Sem,SName,Spic,SCode,Credits FROM branch_sem,subject WHERE branch_sem.Bsid=subject.Bsid";
            $result=$cnn->query($qry);
            
            $str="<table class='table  table-bordered table-hover'><tr><th>Branch</th><th>Semester</th><th>Subject Name</th><th>Subject Code</th><th>Credits</th>
            <th>Subject Pic</th><th>Edit</th><th>Delete</th></tr>";
    
            
            
            while($row=$result->fetch_assoc())
            {
                $str.="<tr><td>".$row["Branch"]."</td><td>".$row["Sem"]."</td><td>".$row["SName"]."</td><td>".$row["SCode"]."</td><td>".$row["Credits"]."</td><td><img src='Images/".$row["Spic"]."'height='100px' width='100px'/></td><td><a class='green' href='subject_update.php?Id=".$row["Sid"] ."'><i class='ace-icon fa fa-pencil bigger-130'></i></a></td>
                <td>
                <a class='red' href='subject_delete.php?Id=".$row["Sid"] ."'><i class='ace-icon fa fa-trash-o bigger-130'></i></a></td>
               
                </tr>";
            }
            $str.="</table>";
            
            echo $str;
            ?>
            
        </form>

<?php
include_once("footer.php");
?>