<!DOCTYPE html>
<head>
<title>
notice Search
</title>
<style>
body{margin:0px;padding:0px;}
img{
    width:100%;
    height:600px;
    opacity:0.7;
}

table {
  border-collapse: collapse;
  width:80%;
  padding:0px;
  margin:0 auto;
  
}

th {
  height: 50px;
  font-size:25px;
  background:blue;

}
tr{
    font-size:25px;
    text-align:center;
}
.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  text-decoration: none;
  font-size: 25px;
  height:50px;
  background:blue;
  margin-left:5px;
}

</style>
</head>
<body>
<?php
include("noticeadmin.php");
if(isset($_POST['submitnoticedetail']))
{
  $notice_no=$_POST['noticeboardsearch'];
    $notice=$_POST['noticeboardsearch'];
    $query="select * from noticemessage where noticeid='$notice_no' or noticemsg='$notice'";
   
     $result=mysqli_query($conn,$query);
    echo "
    <div>
   
<div class='topnav'>
<br>
<a class='active' href='thinair17.php'>Go Back</a>
    <table>
     <tr>
     <th>NUMBER</th>
     <th>OFFER DETAILS</th>
    
     </tr>";

    while($row=mysqli_fetch_array($result)){
       
      $notice_no=$row['noticeid']; 
        $notice=$row['noticemsg'];
        echo "<tr>
        <td>$notice_no</td>
        <td>$notice</td>
        
        
    </tr>"; 
    }

echo "</table></div></div>";
}

?>
</body>
</html>