<?php include'../content-provider/includes/header.php'?>

	<!-- main content opening -->

<?php

session_start();
// include "session.php";
  include '../site files/connect.php';
  include '../site files/classes/student.php';
  $content2=new student($connection);
$_SESSION['id']=2;
   $sql="SELECT content_name FROM content WHERE inspector_approved=1 AND content_depth=".$_SESSION['templevel']." AND content_id NOT IN (SELECT content_id FROM student_log WHERE student_id='".$_SESSION['id']."'";
   $result=mysqli_query($connection,$sql);
   
     
?>
<h1>Videos you can buy</h1><br><br>
	<table border="1">
<?php

  while($row = mysqli_fetch_row($result)) 
     {
    
    $video=$row[0];
?>
    
    <tr>
    <td><?php echo "$video"; ?></td>
    <td><button></button></td>
    </tr>
<?php  }  ?>

    </table>




	<!-- main content closing -->

<?php include'includes/footer.php'?>