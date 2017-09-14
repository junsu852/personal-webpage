<?php
$email_to="jeongj@bigjun.net";
$email_subject=$_POST['subject'];
$email_message=$_POST['Message'];
$from=$_POST['name'];
$reply=$_POST['email'];

$headers = "From:".  $from. "\r\n".
"Reply-To:". $reply.  "\r\n'" .
"X-Mailer: PHP/" . phpversion();
mail($email_to, $email_subject, $email_message, $headers);  

echo "<script>
alert('Email has been sent');
window.location.href='./index.html';
</script>";
?>