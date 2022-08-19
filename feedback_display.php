<?php
include_once("headera.php");
?>

<h4 class="pink">
        <i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue"></i>
        <span  role="button" class="green" data-toggle="modal"> Feedback Table </span>
</h4>

<form method="post">
            <?php
            $cnn=mysqli_connect("localhost","root","","student");
            $qry="select * from feedback";
            $result=$cnn->query($qry);
            
            $str="<table class='table  table-bordered table-hover'><tr><th>Name</th><th>Email</th>
            <th>Subject</th><th>Message</th><th>Time</th><th>Delete</th></tr>";
    
            
            
            while($row=$result->fetch_assoc())
            {
                $str.="<tr><td>".$row["Name"]."</td><td>".$row["Email"]."</td><td>".$row["Subject"]."</td><td>".$row["Message"]."</td><td>".$row["Time"]."</td>
                <td>
                <a class='red' href='feedback_delete.php?Id=".$row["Fid"]."'><i class='ace-icon fa fa-trash-o bigger-130'></i></a></td>
                </tr>";
            }
            $str.="</table>";
            
            echo $str;
            ?>
            
        </form>

<?php
include_once("footer.php");
?>