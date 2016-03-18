<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$help = if (!empty($_POST['help']));
$styl = if (!empty($_POST['styl']));

?>
<?php
$to = "althompsone@gmail.com";
$subject = "From contact form";
$body = "Auto email. Pls don't reply. \n\n $name \n\n $email \n\n $message \n\n \n\n $help \n\n $styl";
?>
<?php
mail($to,$subject,$body);
?>
<?php
echo "Message sent! Click<a href='http://alexo-thompson.cuccfree.org/contact.html'>here</a> to send another.";
?>