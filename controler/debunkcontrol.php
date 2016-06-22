<?php

$submission_id = $_GET['id'];
//if everything is set call post function
if(isset($_POST['explanation']) | isset($_SESSION['username'])){
    $debunkedDescription = $_POST['explanation'];
    $verifierName = $_SESSION['username'];
    // $verifierName = 'iman';
    $notdebunked = 'true';
    post($submission_id, $debunkedDescription, $notdebunked, $verifierName);
}//endd if

function dispayRemedyDetail($submission_id){
    $getRemedy = querySubmissions();
    $i = 0;
    $string = "";
    while ($i < count($getRemedy)) {
        if($getRemedy[$i][7] == $submission_id){
            $string .= " <div  style='margin-left:17%;'> 
					<table style='margin-left:-10px;'> 
						<tr><h2>".$getRemedy[$i][3]."</h2></tr>
						<tr>
							<td><h4>Disease Name:   ".$getRemedy[$i][2]."</h4></td>
						</tr>
					   
						<tr>
							<td><h4>Category:      ".$getRemedy[$i][5]."</h4></td>
						</tr>
						<tr> <td>".$getRemedy[$i][4]."</td> </tr>
							
					   
					</table></div> ";
            return $string;
        }//end if
        $i ++;

    }// end while
    return "<h1>  oops! there seems to be a problem ... sorry we couldnt load the content</h1>";
}

function post($submission_id, $debunkedDescription, $notdebunked, $verifierName){
    include "../Model/verifiedremedy.php";
    $verifyObj = new Verifiedremedy();
    $getVerify = $verifyObj -> verify($submission_id, $debunkedDescription, $notdebunked, $verifierName);

    if(is_array($getVerify)){


        $getRemedyInfo = querySubmissions();
        $submitterEmail = $getRemedyInfo[1];
        notifySubmitter($submitterEmail);
        header("location: ../view/professional.php?s='s'");


    }else{
        //include "../view/professional.php";
        header("location: ../view/include/debunkform.php?id=$submission_id");
        ;
    }

}
function querySubmissions(){
    include "../../Model/submissions.php";
    $submissionsObj =  new submission();
    $getRemedy= $submissionsObj-> getSubmission();
    return $getRemedy;

}//end querySubmissions

function notifySubmitter($submitterEmail){
    include("../Model/Registration.php");
    $to = $submitterEmail;
    $subject  = 'Submission Verified/Debunked';
    $message  = '<html><head><title>Ayate Ethiopian Home remedy Verified/Debunked Status Notification</title>
					<body>
						<p><strong>Hello Mr.\Ms.</strong></p>
						<p>This to let you know that the remedy you have submitted has been commented on by a professional.</p>
						<p><strong>please visit our site and check out the professionals comment.</strong></p>
						<p>If you did not request an account just delete this email.</p></body></head></html>';
    $headers  = 'From: ayatehomeremedy@gmail.com' . "\r\n" .
        '"Reply-To: do-not-reply@gmail.com' . "\r\n".
        'MIME-Version: 1.0' . "\r\n" .
        'Content-type: text/html; charset=utf-8'."\r\n".
        'X-Mailer: PHP/'.phpversion();

    mail($to, $subject, $message, $headers);


}//end notifySubmitter

?>