<?php

use App\Classes\Mail;

require_once "../bootstrap/init.php";

$mailer= new Mail();

if($mailer->send())
    echo "<br><h1>Email send successfully!</h1>";
else
    echo "<br><h1>Email send Fail!</h1>";
?>