<?php
    $type = $_POST['type'];
    $title = '';
    $fname = '';
    $lname = '';
    $r_email = '';
    $zip_code = '';
    $name = '';
    $c_email = '';
    $subject = '';
    $message = '';
    if ( $type == 'register' ) {
        $title = 'Client Registration Information';
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $r_email = $_POST['r_email'];
        $zip_code = $_POST['zip_code'];
    } else if ( $type == 'contact' ){
        $title = 'Client Contact Information';
        $name = $_POST['name'];
        $c_email = $_POST['c_email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
    } else {
        $title = 'Send Template Mail';
        $content = $_POST['content'];
    }
    $body = '
    <html>
    <head>
        <style>
            p {
                margin-top: 8px;
                margin-bottom: 8px;
                font-size: 18px;
            }
    
            td {
                font-size: 18px;
                line-height: 28px;
            }
            .button {
                border-radius: 2px;
                padding: 8px 30px;
    
            }
    
            .button a {
                padding: 8px 12px;
                font-family: sans-serif;
                font-size: 24px;
                color: #ffffff; 
                text-decoration: none;
                font-weight: bold;
                display: inline-block;  
            }
        </style>
    </head>
    <body>
        <center><h2>'.$title.'</h2></center>
        <div style="padding: 10px; max-width: 500px; border:2px dashed #FB4314; margin:0 auto;">
        <table cellspacing="0" cellpadding="0" style="width: 100%; height: 280px;">';
    if ( $type == 'register' ) {
        $body .= '<tr><td>First Name:</td><td>'.$fname.'</td></tr>';
        $body .= '<tr><td>Last Name:</td><td>'.$lname.'</td></tr>';
        $body .= '<tr><td>Email Address:</td><td>'.$r_email.'</td></tr>';
        $body .= '<tr><td>Zip Code:</td><td>'.$zip_code.'</td></tr>';
    } else {
        $body .= '<tr><td>Name:</td><td>'.$name.'</td></tr>';
        $body .= '<tr><td>Email Address:</td><td>'.$c_email.'</td></tr>';
        $body .= '<tr><td>Subject:</td><td>'.$subject.'</td></tr>';
        $body .= '<tr><td>Message:</td><td>'.$message.'</td></tr>';
    }
    $body .= '</table>
        </div>
    </body>
    </html>';
    require_once 'Swift/vendor/autoload.php';
    $transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, "ssl"))
                ->setUsername('nozolomusic@gmail.com')
                ->setPassword('musicnewsletter');

    $mailer = new Swift_Mailer($transport);
    $message = (new Swift_Message($title))
    ->setFrom(array('nysochp@gmail.com' => $title))
    ->setTo(array('raym@nozolomusic.com' => 'Raymond'));
    if ($type == 'send_template') {
        $message = $message->setBody($content, 'text/html');
    } else {
        $message = $message->setBody($body, 'text/html');
    }
    $numSent = $mailer->send($message);

    echo json_encode(['status' => 'success']);
?>