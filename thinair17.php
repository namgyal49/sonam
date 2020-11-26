<!DOCTYPE html>
<?php include("noticeadmin.php");
?>
<html lang="en">
<link rel="icon" 
    type="image/png" 
    href="./logo.jpg">
<head>
    <title>Notice details</title>
    <style>
    .topnav {
  background-color:#ccc;
  width:60%;
  margin:0 auto;
  
}
.topnav form {
  background-color:deepskyblue;
  width:60%;
  margin:0 auto;
  
}
h2{
  padding:15px;
  text-align:center;
  color:black;
  font-size:15px;
  font-weight:bold;
  font-family:verdana;
}

    .topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  text-decoration: none;
  font-size: 15px;
 padding: 14px 16px;
}




    .nav [type=submit] {
  float: left;
  padding: 10px;
  margin-left: 10px;
  border: none;
  font-size: 17px;
  font-family:bold;
  background:blue;
  

}

  
.nav [type=text] {
  float: left;
  
  padding: 10px;
  margin-left: 32%;
  border: none;
  font-size: 17px;
  font-family:bold;
  background:blue;


}
    
table {
  border-collapse: collapse;
  width:60%;
  padding:0px;
  margin:0 auto;
  margin-top:25px;
  
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
tr:hover{
    background:#ccc;
}

.topnav a.active {
  background:blue;
}


    </style>
</head>



<body>
<div class="karan"></div>
<br>
<div class="topnav">
<h2>Notice Details</h2>
  <a class="active" href="index.html">Go Back</a>
</div>

<div class="nav">
<form action="thinair18.php" method="POST">
  <input type="text" name="noticeboardsearch" placeholder="Enter SNO">
  <input type="submit" name="submitnoticedetail" value="Submit">
  
  </form>
  </div>
<br>
<br>
<table>
 <tr>
 <th>NOTICE NUMBER</th>
 <th>NOTICE BOARD</th>
 
 </tr>

 <?php get_notice_detail();
?>


</table>

</body>
</html>