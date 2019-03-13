<?php

// initializing variables
$dept = "";
$fac    = "";
$hall    = "";
$txtDate    = "";
$slot_event    = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// REGISTER USER
if (isset($_POST['book_slot'])) {
  // receive all input values from the form
  $dept = mysqli_real_escape_string($db, $_POST['dept']);
  $fac = mysqli_real_escape_string($db, $_POST['fac']);
  $hall = mysqli_real_escape_string($db, $_POST['hall']);
  $txtDate = mysqli_real_escape_string($db, $_POST['txtDate']);
  $slot_event = mysqli_real_escape_string($db, $_POST['slot_event']);
  $scap=mysqli_real_escape_string($db, $_POST['scap']);
  $email=mysqli_real_escape_string($db, $_POST['email']);


  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array

  if (empty($dept)) { array_push($errors, "Department name is required"); }
  if (empty($fac)) { array_push($errors, "Faculty name is required"); }
  if (empty($hall)) { array_push($errors, "Hall name is required"); }
  if (empty($txtDate)) { array_push($errors, "DATE is required"); }
  if (empty($slot_event)) { array_push($errors, "Event name is required"); }



   // first check the database to make sure
  // a slot does not already exist with the same date
  $user_check_query = "SELECT * FROM slot WHERE txtDate='$txtDate' AND hall='$hall' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $slot = mysqli_fetch_assoc($result);



  if($slot >= 1)
  {



	echo "SLOT is already been booked, Please try with the other available dates!!";


}
else {



  // Finally, slot gets booked if there are no errors in the form

  	$query = "INSERT INTO slot (dept, fac, hall, scap, txtDate, slot_event,email)
  			  VALUES('$dept', '$fac', '$hall', $scap, '$txtDate', '$slot_event','$email')";
  	mysqli_query($db, $query);
  	$_SESSION['fac'] = $fac;
  	$_SESSION['success'] = "Your slot has been booked";

    $curl = curl_init();
  // Set some options - we are passing in a useragent too here
  curl_setopt_array($curl, array(
      CURLOPT_RETURNTRANSFER => 1,
      CURLOPT_URL => 'https://ranjithgowda.com/d/mail/mail.php?hall='.urlencode($hall).'&date='.$txtDate.'&email='.urlencode($email).'&event='.urlencode($slot_event).'',
      CURLOPT_USERAGENT => 'cURL Request'
  ));
  // Send the request & save response to $resp
  $resp = curl_exec($curl);
  // Close request to clear up some resources
  curl_close($curl);
  echo $resp;
  echo "Slot has been booked and email sent successfully";
  	//header('location: success.php');
  }
}

?>
