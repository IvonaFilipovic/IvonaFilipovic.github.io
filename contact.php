  <?php 

if ($_POST["email"]<>'') { 
    $ToEmail = 'ivona.filipovich@gmail.com'; 
    $EmailSubject = 'Site contact form '; 
    $mailheader = "From: ".$_POST["email"]."\r\n"; 
    $mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
    $MESSAGE_BODY = "Name: ".$_POST["name"]."<br>"; 
    $MESSAGE_BODY .= "Email: ".$_POST["email"]."<br>"; 
    $MESSAGE_BODY = "Subject: ".$_POST["subject"]."<br>";
    $MESSAGE_BODY = "Message: ".$_POST["message"]."<br>";
    mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 

echo &lt;&lt;&lt;EXCERPT

<html>

    <h3>Thanks for your email</h3>
    <h4>I'll get back to you as soon as possible</h4>
    <a href="index.html"><p>Click here to go back to previous page</p></a>

</html>

EXCERPT;

} else { 


echo "<html>Sorry, this form didn't work</html>";

} 
?>