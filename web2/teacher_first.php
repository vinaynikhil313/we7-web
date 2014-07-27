<!DOCTYPE html>
<?php session_start();?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<div class="header_bg">
					<div class="wrap">
						<div class="header">
							
							<div class="logo">
								<a href="index.php"><img src="images/logo.png" alt="" /></a>
							</div>	
						</div>
					</div>
	</div>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
        					
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Menu
                    </a>
                </li>
                <li>
                    <a href="teacher_first.php">Teacher's Profile</a>
                </li>
                <li>
                    <a href="teacher_second.php">Give Feedback</a>
                </li>
                <li>
                    <a href="teacher_third.php">View Performance</a>
                </li>
                
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <?php
        	
			include 'connect.php';
	  		$sql="SELECT * FROM Teacher_Profile where Teacher_ID = '$_SESSION[userid]'";
        	$result = mysqli_query($con,$sql);
        	//$result=mysqli_query($con,$sql);
			if(!$result)
			{
				echo "Error\n";
			}
			$row=mysqli_fetch_array($result);
			
        ?>
        <div id="page-content-wrapper">
            <div class="container-fluid">
            		<div class="logo">
								<img src="web/images/logo.png" alt="" />
							</div>	
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Teacher's profile</h1>
                        <div class="table-responsive">
  							<table class="table">
   								 <tr>
   								 	<td> Name </td>
   								 	<td> <?php echo "$row[Teacher_Name]";?> </td>
   								 </tr>
   								 <tr>
   								 	<td> Teacher's ID: </td>
   								 	<td> <?php echo "$row[Teacher_ID]";?></td>
   								 </tr>
   								 <tr>
   								 	<td> School </td>
   								 	<td> <?php echo "$row[School]";?></td>
   								 </tr>
   								 <tr>
   								 	<td> Gender: </td>
   								 	<td> <?php echo "$row[Gender]";?></td>
   								 </tr>
   								  <tr>
   								 	<td> Years of Experience: </td>
   								 	<td> <?php echo "$row[Experience]";?></td>
   								 </tr>
   								 <tr>
   								 	<td> Date of Joining: </td>
   								 	<td> <?php echo "$row[Date_Of_Joining]";?> </td>
   								 </tr>
   								 <tr>
   								 	<td> Teacher's Type </td>
   								 	<td> <?php echo "$row[Teacher_Type]";?></td>
   								 </tr>

 							 </table>
						</div>
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
