<?php


$email;
if(isset($_POST['forgotEmail'])){
    $email = $_POST['forgotEmail'];
}

if(is_array($returned = checkemail($email))){

    $to = $email;
    $subject  = 'forgot password notification';
    $message  = '<html><head><title>Ayate Ethiopian Home remedy Account confrimation</title>
					<body>
						<p><strong>Hello.'.$returned[0].'</strong></p>
						<p>We have sent you a confirmation number to access your account.</p>
						<p><strong>This is your confrimation number:'.$returned[1].'</strong></p>
						<p>If you did not request an account just delete this email.</p></body></head></html>';
    $headers  = 'From: ayatehomeremedy@gmail.com' . "\r\n" .
        '"Reply-To: do-not-reply@gmail.com' . "\r\n".
        'MIME-Version: 1.0' . "\r\n" .
        'Content-type: text/html; charset=utf-8'."\r\n".
        'X-Mailer: PHP/'.phpversion();

    if(mail($to, $subject, $message, $headers)){
        ///say sth to user abt sucess
        header("Location: ../view/login.php?id=forgotPassword");
    }

    else{
        echo "Email sending failed"; }
}
else{

    $to = $email;
    $subject  = $returned;
    $message  = '<html><head><title>Ayate Ethiopian Home remedy Account confrimation</title>
					<body>
						<p><strong>Hello Mr./Ms.</strong></p>
						<p>This email is sent to notify you that you are not elligible to get the forgot password service you requested.</p>
						<p><strong>Please request a professionals account if you are a professional.</strong></p>
						<p>If you did not request a forgot password service just delete this email.</p></body></head></html>';
    $headers  = 'From: ayatehomeremedy@gmail.com' . "\r\n" .
        '"Reply-To: do-not-reply@gmail.com' . "\r\n".
        'MIME-Version: 1.0' . "\r\n" .
        'Content-type: text/html; charset=utf-8'."\r\n".
        'X-Mailer: PHP/'.phpversion();

    if(mail($to, $subject, $message, $headers)){
        ///say sth to user abt sucess
        header("Location: ../view/login.php?id=warning");
    }

    else{
        echo "Email sending failed"; }
}
function checkemail($email){
    include("../Model/database query.php");
    $conn = new databaseQuery();
    $query = "select * from professionals where registration_status='registered'";
    $result = $conn->connect($query);
    while ($row = mysqli_fetch_assoc($result)) {
        if($email == $row['email']) {
            $username = $row['username'];
            $password = $row['password'];

            return array($username, $password);
        }
    }
    return 'sorry you are not registered as a professional.';
}

?>

