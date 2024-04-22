<?php
$receiver = 'xyz@gmail.com';
$emailsubject = 'Test Email';
$sender = 'abc@gmail.com';

$emailheaders = 'MIME-Version: 1.0'."\r\n";
$emailheaders .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";

$emailheaders .= 'From: '.$sender."\r\n".
    'Reply-To: '.$sender."\r\n".
    'X_Mailer: PHP/'.phpversion();

$emailmessage = '<html><body><h1 style="color:#f40;">Test Email</h1><p style="color: #000;font-size:18px;">Testing</p></body></html>';

if(mail($receiver,$emailsubject,$emailmessage,$emailheaders)){
    echo 'Mail Sent';
}else{
    echo 'Unable to send email';
}
?>