<?php
 
    $username='dominickpaulraj@gmail.com';
    $p="biby";
    $body="
    <html>
    <body>
    
    </body>
    </html>";


    if(mail($username,"Confirmation on User Account Verification",$body,"From:thredeagle@gmail.com\r\nMIME-Version: 1.0\r\nContent-Type: text/html; charset=ISO-8859-1\r\n")) { 
        echo "sucess";
        }
?>