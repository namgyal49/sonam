<?php 
$conn = mysqli_connect("localhost","root","","thinair");
 if(isset($_POST['submitlogin']))
 {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $query="select * from noticeadminoffer where username='$username' and password='$password'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1)
    {
        header("location:thinair14.html");
    }
    else
    {
        echo "<script>alert('Enter correct detail')</script>";
        echo "<script>window.open('thinair14.html')</script>";
    }
}

if(isset($_POST['addnotice']))
{
    $notice=$_POST['noticeboard']; 
   
    $query="INSERT INTO noticemessage(noticemsg) VALUES ('".$notice."')";
   $result=mysqli_query($conn,$query);
    
   if($result){ 

    echo 'Successfully saved.';

     }
   else
   {
       echo 'There were errors while saving the data.';
    }
}

function get_notice_detail()
{
    global $conn;
    $query="select * from noticmessage";
    $result=mysqli_query($conn,$query);
    while($row=mysqli_fetch_array($result)){
        $notice_no=$row['noticeid']; 
          $notice=$row['noticemsg'];
          echo "<tr>
          <td>$notice_no</td>
          <td>$notice</td>
          
          
      </tr>"; 
      }
  

}



?>