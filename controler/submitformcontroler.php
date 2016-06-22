<?php
include "../model/submissions.php";
$submitTitle = $_POST['submitTitle'];    // remedy name
$submitDiseaseName = $_POST['submitDiseaseName'];
//$submitRemedyCategory = $_POST['submitRemedyCategory'];
$submitRemedyDescription = $_POST['submitRemedyDescription'];
$submitterEmail = $_POST['submitEmail'];
// $submissionDate = new date('yyyy-mm-dd');


$submitDiseaseName = verifyDiseaseName($submitDiseaseName);
$submitterEmail = verifyEmail($submitterEmail);
if (!empty($submitTitle) & !empty($submitDiseaseName) & !empty($submitRemedyDescription) &
    !empty($submitterEmail)) {

    $submissionsObj = new submission();
    $isSubmitted = $submissionsObj->addSubmitted($submitTitle,
        $submitDiseaseName,
        $submitRemedyDescription,
        '',
        '',
        $submitterEmail);
    //$submitRemedyCategory $submissionDate

    if ($isSubmitted) {
        include '../model/submissions.php';
		header("location: ../view/sub.php?id=$submitTitle");
          
    } else {
		header("location: ../view/sub.php?id='0'");
       
    }

}




function verifyEmail($submitterEmail){


    return $submitterEmail;
}//end verify email

function verifyDiseaseName($submitDiseaseName){


    return $submitDiseaseName;
}//end verify disease name




?>