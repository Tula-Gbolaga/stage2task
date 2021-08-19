<?php
include('class.php');

$obj = new User;

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];

    $outcome=$obj->addtodb($name,$email,$message);
    if($outcome){ header("location:http://stage-2-task.herokuapp.com/index.php?sentform#contactme");}
}



?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
		<style type="text/css">
			.container-fluid
                {position:absolute;
                min-height:100vh;
                }
            
            .footer
                {position:relative;
                bottom:0px;
                width:100%;}
            .txtcolour
                { color:#498C8A}
		</style>
		
		<title>Stage 2 Task</title>
	</head>
    <body>
        <div class="container-fluid">
           <table class="table table-striped offset-md-2 col-md-8 col-sm-12 table-sm table-responsive mt-5">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                </tr>
                <?php $obj->readfromdb();?>
           </table>
           <a href="stage-2-task.herokuapp.com/index.php" class="offset-md-2 col-md-8 col-sm-12">Back Home</a>
		
            
        </div>
        <script type="text/javascript" src="bootstrap/js/jquery-3.6.0.js"></script>
		<script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
    </body>
</html>