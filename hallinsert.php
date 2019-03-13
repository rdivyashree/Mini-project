<?php



$hname    = "";
$hcapacity="";

$db = mysqli_connect('localhost', 'root', '', 'registration');


  if(isset($_POST['submit']))
  {
  $hname = mysqli_real_escape_string($db, $_POST['hname']);
  $hcapacity = mysqli_real_escape_string($db, $_POST['hcapacity']);


  	$query = "INSERT INTO hall (hname,hcapacity) VALUES ('$hname','$hcapacity')";
  	$result=mysqli_query($db, $query);

    if($result){
    echo 'Inserted successfully';}
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Hall</title>

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

  body {
  margin: 0;
}

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





    <!-- <link> doesn't need a closing tag -->
    <link href="CSS/Master.css" rel="stylesheet" type="text/css">
    <!-- include the jQuery UI style sheet -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- include jQuery -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <!-- include jQuery UI -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <body>
  <ul>

      <li><a class="btn" href="index.php"><i class="fa fa-home"></i>  Home</button>
      <li><a class="btn" href="book.php"><i class='far fa-calendar-alt'></i>  Book Hall</button>
      <li><a class="btn" href="deptinsert.php"><i class='far fa-plus-square'></i>  Add Department</a></li>
      <li><a class="" href="hallinsert.php"><i class='far fa-plus-square'></i>  Add Hall</a></li>
      <li><a class="btn" href="#contact"><i class='fas fa-phone-square'></i>  Contact</a></li>
      <li><a class="btn" href="#about"><i <i class='far fa-user'></i>  About</a></li>
    </ul>

  <div class="header">
  	<h2>ADD HALL</h2>
  </div>
  <form method="post" action="">

    <div class="input-group">
    <label>Enter Hall Name</label>
    	<input type="text" name="hname" value="<?php echo $hname; ?>" required><br/><div>
    <div class="input-group">
    <label>Enter Hall Capacity</label>
      	<input type="number" name="hcapacity" value="<?php echo $hcapacity; ?>" required><br/></div>
          <div class="input-group">
      <input type="submit" class="btn" name="submit" value="SUBMIT"></div>
    </form>
  </body>
  </html>
