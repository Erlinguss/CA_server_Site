<?php

$errors = '';
$myemail = 'd00251914@student.dkit.ie';// <-----Put your DkIT email address here.
if(empty($_POST['name'])  ||
   empty($_POST['email']) ||
   empty($_POST['password']) ||
   empty($_POST['dob']) ||
   empty($_POST['gender']) ||
   empty($_POST['city']) ||
   empty($_POST['newsletter']) ||
   empty($_POST['phone']) ||
   empty($_POST['message']) ||
   empty($_POST['terms']))

{
    $errors .= "\n Error: all fields are required";
}

// Important: Create email headers to avoid spam folder
$headers = '';
$headers .= 'From: '.$myemail."\r\n".
    'Reply-To: '.$myemail."\r\n" .
    'X-Mailer: PHP/' . phpversion();


$name = $_POST['name'];
$email_address = $_POST['email'];
$password = $_POST['password'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$city = $_POST['city'];
$phone = $_POST['phone'];
$newsletter = $_POST['newsletter'];
$message = $_POST['message'];
$terms = $_POST['terms'];



if (empty($name)) {
    $errors .= 'Please enter your name.<br>';
  }


if (empty($_POST['email'])) {
  $errors[] = "Email is required";
} else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  $errors[] = "Invalid email address";
}
    
  if (empty($password)) {
    $errors .= 'Please enter your password.<br>';
  }

  if (empty($dob)) {
    $errors .= 'Please enter your date of birth.<br>';
  }



  if (empty($gender)) {
    $errors .= 'Please select your gender.<br>';
  }

  if (!empty($age)) {
    $errors .= 'Please enter a valid age between 18 and 120.<br>';
  }

  if (!empty($city)) {
    $errors .= 'Please enter a valid website city.<br>';
  }


  if (!empty($phone) && !preg_match('/^[0-9]{3}-[0-9]{2}-[0-9]{3}$/', $phone)) {
    $errors .= 'Please enter a valid phone number in the format 12345678.<br>';
  }

  if (!empty($newsletter) && $newsletter != 'yes') {
    $errors .= 'Please agree to subscribe to our newsletter.<br>';
  }

  if (empty($message)) {
    $errors .= 'Please enter your message.<br>';
  }

  if (empty($terms)) {
    $errors .= 'Please agree to the terms and conditions.<br>';
  }


if( empty($errors))
{ 
    // Send the email
        $to = $myemail;
        $email_subject = "Contact form submission: $name";
        $email_body = "You have received a new message. ".
        " Here are the details:\n 
        
        Name: $name \n 
        Email: $email_address \n 
        phone: $phone \n 
        Password: $password \n
        Date of Birth: $dob \n
        Gender: $gender \n
        Age: $age \n
        City: $city \n
        Phone Number: $phone \n
        Subscribe to Newsletter: $newsletter \n
        Message\n $message";

       
       
    if( mail($to,$email_subject,$email_body,$headers))
    {
        //redirect to the 'thank you' page
        header('Location: contact-form-thank-you.php');
        
        exit;
}
else {
    $errors = 'There was a problem sending the email.';
}
}

?>

<!DOCTYPE HTML>
<html>
<head>
        <title>Contact form handler</title>
</head>

<body>
<!-- This page is displayed only if there is some error -->
<?php
echo nl2br($errors);
?>
</body>
</html>