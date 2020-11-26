<?php 
$conn = mysqli_connect("localhost","root","","sonam1");
if(isset($_POST['submit']))
{
    $names=$_POST['names']; 
    $email=$_POST['email'];
    $phone=$_POST['phone'];
   $accommodation=$_POST['accommodation']; 

   $checkin=$_POST['check_in'];
   $checkout=$_POST['check_out'];
   $typess=$_POST['typess'];
   $vehicles=$_POST['vehicles'];

   $places=$_POST['places'];
   $coments=$_POST['coments'];

    $query="INSERT INTO acommodation(Names,Email,Phone,Accommodation,checkin,checkout,types,vehicle,place,coment) VALUES 
    ('".$Names."','".$Email."','".$Phone."','".$Accommodation."','".$checkin."','".$checkout."','".$typess."','".$vehicles."','".$places."','".$coment."')";
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
