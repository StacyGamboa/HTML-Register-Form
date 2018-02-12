<?php
if(isset($_POST['email'])) {

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
// replace with the company email
$email_to = "info@company"; 
$email_from = $_POST['email'];
// replace with the company NAME
$email_subject = "Contact from COMPANY NAME"; 
$comments = "registered user";
$first_name = "empty";
$last_name = "empty";

// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($_POST['email'])) {

echo "<b>An error occurred and the form has not been sent. </b><br />";
die();
}

if(isset($_POST['comments'])){
    $comments = $_POST['comments'];
}
if(isset($_POST['first_name'])){
    $first_name = $_POST['first_name'];
}
if(isset($_POST['subject'])){
    $last_name = $_POST['subject'];
}

$email_message = "Details of the contact form::\n\n";
$email_message .= "Name: " . $first_name . "\n";
$email_message .= "subject: " . $last_name . "\n";
$email_message .= "E-mail: " . $_POST['email'] . "\n";
$email_message .= "Comments: " . $comments . "\n\n";

 $subjectEmailFrom = 'Confirmation '.$email_to;
    @mail($email_from, $subjectEmailFrom, 'Thank you! One of our agents will contact you soon.', 'From: <'.$email_to.'>');


// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: '.$email_to."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

echo "Completed !";
}
?>
