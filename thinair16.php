<!DOCTYPE html>
<?php 
include ('feedbackphpcode.php');
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="icon" 
    type="image/png" 
    href="./logo.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="icon" 
    type="image/png" 
    href="./bike.jpg">
   <title>Feedback</title>
</head>
<body>
   
<script type="text/javascript">
    function x()
    {
        alert("You want to add the message");
    }
    </script>
<div class="container" style="background-color:rgb(138, 143, 138);margin-top:15px;">
    <h1 class="list-h1" data-title="Our Story"><span>Feedback</span></h1>
    
    <form action="thinair16.php" method="POST">

      <div class="form-group">
        <label for="exampleFormControlInput1">Name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="names" placeholder="Your name" required>
      </div>
    

        <div class="form-group">
          <label for="exampleFormControlInput1">Email address</label>
          <input type="email" class="form-control" name="emails" id="exampleFormControlInput1" placeholder="name@gmail.com" required>
        </div>
        
        
        <div class="form-group">
		<label for="Comments">Comment <span>*</span>
</label>
    <div class="customeFormField">
<textarea class="form-control" name="comentss" id="fe_id18" placeholder="" required"></textarea>
    </div>
        </div>
    <button onclick="x()" type="submit" class="btn btn-primary" name="feedbacksubmit" style="width:150px;margin-bottom:20px;padding:20px;">submit</button>
    </form>
</div> 
</body>
</html>