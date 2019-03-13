<?php include('service.php');

  session_start();

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: landingpage.html');
  }
//   if (isset($_GET['logout'])) {
//   	session_destroy();
//   	unset($_SESSION['username']);
//   	header("location: login.php");
//   }
?>



<!DOCTYPE html>
<html>
<head>


	<title>Home</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
	<style>

  .btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}


table{border: 1px solid black;}

	 body {
  margin: 0;
}	


th, td
	{padding: 15px;}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 10%;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

li a.active {
  background-color: #5F9EA0;
  color: white;
}

li a:hover:not(.active) {
  background-color: #555;
  color: white;
}


	</style>
	<link rel="stylesheet" type="text/css" href="css/style.css">



    <!-- <link> doesn't need a closing tag -->
    <link href="CSS/Master.css" rel="stylesheet" type="text/css">
    <!-- include the jQuery UI style sheet -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- include jQuery -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <!-- include jQuery UI -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  
    <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.min.css">


</head>
<body>
<ul>
  <li><a class="" href="index.php"><i class="fa fa-home"></i>  Home</button>
  <li><a class="btn" href="book.php"><i class='far fa-calendar-alt'></i>  Book Hall</button>
  <li><a class="btn" href="deptinsert.php"><i class='far fa-plus-square'></i>  Add Department</a></li>
  <li><a class="btn" href="hallinsert.php"><i class='far fa-plus-square'></i>  Add Hall</a></li>
  <li><a class="btn" href="#contact"><i class='fas fa-phone-square'></i>  Contact</a></li>
  <li><a class="btn" href="#about"><i <i class='far fa-user'></i>  About</a></li>
</ul>



<div class="header">
	<h2>DASH BOARD</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php
          	echo $_SESSION['success'];
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>

  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="log.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
<br>
<div align="center">
<h4>ALL BOOKING DETAILS<h4>
</div>
<?php
// RETRIEVE DATA IN TABLE FORMAT
$username = "";
$email    = "";
$errors = array();

// connect to the database
//$db = mysqli_connect('localhost', 'root', '', 'registration');

//$sql ="DELETE FROM slot WHERE dept ='MCA' ";
$sql ="DELETE FROM slot WHERE txtDate < CURDATE() ";
$result = $db->query($sql);

$sql= "SELECT slot_id, dept, fac, hall , txtDate, slot_event FROM slot ORDER BY txtDate DESC";
$result = mysqli_query($db,$sql);


    echo '<div id="my-calendar" style="width:500px;margin-left:auto;margin-right:auto;"></div></br>';


if ($result->num_rows > 0) {
    echo "<center><table border=\"1px\"><tr><th>BOOKED DATE</th><th>DEPARTMENT NAME</th><th>FACULTY NAME</th><th>HALL NAME</th><th>EVENT NAME</th></tr></center>";
    // output data of each row
    
    foreach($result as $row) {
        echo "<tr><td>" . $row["txtDate"]. "</td><td>" . $row["dept"]. " </td><td>" . $row["fac"]. "</td><td>" . $row["hall"]. "</td><td>" . $row["slot_event"]. " </td></tr>";
    }
    echo "</table></br>";
}


?>
<script src="js/zabuto_calendar.min.js"></script>
<script type="application/javascript">
var eventData = [
    <?php 
    
        foreach($result as $row) {
            echo '{"date":"'.$row["txtDate"].'"},';
        }
        $db->close();
    ?>
];
    $(document).ready(function () {
        $("#my-calendar").zabuto_calendar({
            data: eventData
        });
    });
</script>
</body>
