
<?php


if (isset($_POST['submit'])) {

  $name = $_POST['name'];
  $mailFrom = $_POST['mail'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $message = $_POST['message'];

$mailTo = "firstview.let@btinternet.com";
$headers = "Web Enquiry from: ".$name;
$txt = "You have recieved an enquiry from ".$name.".\n\n".$message;

  mail($mailTo, $subject, $txt, $headers);
  header("Location: index-mail-test.php?mailsend");

}
?>
