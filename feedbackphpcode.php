<?php 
$conn = mysqli_connect("localhost","root","","thinair");
if(isset($_POST['feedbacksubmit']))
{
    $names=$_POST['names']; 
    $emails=$_POST['emails'];
    $comentss=$_POST['comentss'];
    $query="INSERT INTO feedback (feedbackname,feedbackemail,feedbackmsg) VALUES
    ('".$names."','".$emails."','".$comentss."')";
    $result=mysqli_query($conn,$query);
    if($result){ 
     echo 'Successfully saved.';
     }
    else
    {
        echo 'There were errors while saving the data.';
    }
}


?>
