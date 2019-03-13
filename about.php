<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
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
h3 {
  color: red;
}
div {
  text-align: justify;
  text-justify: inter-word;
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
  <title>LOGIN</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
  <ul>

      <li><a class="btn" href="index.php"><i class="fa fa-home"></i>  Home</button>
      <li><a class="btn" href="book.php"><i class='far fa-calendar-alt'></i>  Book Hall</button>
      <li><a class="btn" href="deptinsert.php"><i class='far fa-plus-square'></i>  Add Department</a></li>
      <li><a class="btn" href="hallinsert.php"><i class='far fa-plus-square'></i>  Add Hall</a></li>
      <li><a class="btn" href="contact.php"><i class='fas fa-phone-square'></i>  Contact</a></li>
      <li><a class="" href="about.php"><i <i class='far fa-user'></i>  About</a></li>
    </ul>

  <div class="header">
  	<h2>About</h2>
  </div>

  <form method="post" action="">
  	<?php include('errors.php'); ?>
    <p align="justify">
  	<div class="">
      
      <h3 >BMS COLLEGE OF ENGINEERING</h3><br/>
      <h6>BMS College of Engineering (BMSCE) was Founded in the year 1946 by Late Sri. B. M. Sreenivasaiah a great visionary and philanthropist and nurtured by his illustrious son Late Sri. B. S. Narayan.
      <br/>  <br/>BMSCE is the first private sector initiative in engineering education in India.
      <br/>  <br/>BMSCE has completed 72 years of dedicated service in the field of Engineering Education.
      <br/>  <br/>Started with only 03 undergraduate courses, BMSCE today offers 13 Undergraduate & 16 Postgraduate courses both in conventional and emerging areas.
      <br/>  <br/>15 of its Departments are recognized as Research Centers offering PhD/M.Sc (Engineering by Research) degrees in Science, Engineering, Architecture and Management.
      <br/>  <br/>The College has been effectively practicing outcome based education.




</h6>
</html>
