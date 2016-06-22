<?php
/**
 *  this is verified remedy class
 */
class VerifiedRemedy
{


    function __constructor($submittedRemedy, $submittedDisease,
                           $submission_id, $category, $debunkedDescription,
                           $date)
    {
        $this->submittedRemedy = $submittedRemedy;
        $this->submittedDisease = $submittedDisease;
        $this->submission_id = $submission_id;
        $this->category = $category;
        $this->debunkedDescription = $debunkedDescription ;
        $this->date = $date;
    }//end constructor

    function verify($submission_id, $debunkedDescription, $notdebunked, $verifierName){
        $conn = mysqli_connect('localhost', 'root', '', 'ayate');
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error()); } // for testing purpose

        $isNotDebunked = $notdebunked;
        if($notdebunked){$notdebunked = 'verified';}
        else{$notdebunked = 'debunked';}

        $sqlquery = "INSERT INTO debunkedDescription(submission_id, explanation, verify_debunk, verified_by)
					VALUES('$submission_id', '$debunkedDescription', '$notdebunked', $verifierName)";
        $isverfied = mysqli_query($conn, $sqlquery);


        if ($isverfied && $notDebunked){
            $change = new VerifiedRemedy();
            $rate = $change->changeNumberOfRate($conn, $submission_id);
            return array($debunkedDescription, $rate);

        } else{
            return "Oops there seems to be a problem ... please try again!";
        }

    }//end verify()   return string[]



    function changeNumberOfRate($conn, $submission_id){

//get the value of the rate to incremant
        $sqlquery = "SELECT status
                        FROM submit
                        WHERE submission_id = $submission_id";
        $result = mysqli_query($conn, $sqlquery);

        $incremented = 0;
        if (mysqli_num_rows($result) > 0) {
// output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $incremented = $row['status'];
            }
        }

// update db with the new rate number
        $incremented = $incremented + 1;
        $sqlquery = "UPDATE submit
                    SET status = $incremented
                    WHERE submission_id = $submission_id";

        $isUpdated = mysqli_query($conn, $sqlquery);
        if ($isUpdated) {
            return $incremented;
        }

    }//end changenumberofvote()   return integer

}// end verifiedremedy class
?>