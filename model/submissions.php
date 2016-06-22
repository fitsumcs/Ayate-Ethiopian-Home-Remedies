<?php

//include '../Database_Enquiry.php';

Class submission
{

    function __construct()
    {
        
    }

    function addSubmitted($remedyName, $diseaseName, $description, $category, $submissionDate, $submitterEmail)
    {
        $conn = mysqli_connect('localhost', 'root', '', 'ayate');
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        } // for testing purpose


        $sqlquery = "INSERT INTO submit (submitterEmail, diseaseName, remedyName, description , catagory, time,
                                      submission_id, numberOfVotes, debunkedDescription, status) 
   	 			  VALUES ('$submitterEmail', '$diseaseName', '$remedyName', '$description', '$category', '$submissionDate',
   	 			          '124', '0', 'null', '0')";
        $isInserted = mysqli_query($conn, $sqlquery);
        return $isInserted;
    }//end addsubmitted   returns boolean


    function getSubmission()
    {
        $conn = mysqli_connect('localhost', 'root', '', 'ayate');
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        } // for testing purpose


        $sqlquery = "SELECT * FROM submit ";
        $result = mysqli_query($conn, $sqlquery);

        //get the number of votes so that the remedy with the highest vote will be bubbled up

        $returnedRemedies = array();
        if (mysqli_num_rows($result) > 0) {


            $i = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                $returnedRemedies[$i] = array($row['numberOfVotes'], $row['submitterEmail'], $row['diseaseName'], $row['remedyName'],
                    $row['description'], $row['catagory'], $row['time'], $row['submission_id']);

                $i++;
            };
            return $returnedRemedies;
        } else {
            echo "Oops we couldnt retrive the remedies please try again!";
        }

    }// end getSubmission  returns string[][]

    function getVoteNumber($submission_id)
    {
        $conn = mysqli_connect('localhost', 'root', '', 'ayate');
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        } // for testing purpose


        $sqlquery = "SELECT numberOfVotes
                    FROM submit
                    WHERE submission_id = $submission_id";
        $result = mysqli_query($conn, $sqlquery);


        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                return $row['numberOfVotes'];
            }
        } else {
            return 0;   // returns number of vote 0
        }


    } // end getVote()   returns integer

    function changeVoteNumber($submission_id)
    {
        $conn = mysqli_connect('localhost', 'root', '', 'ayate');
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        } // for testing purpose


        //get the value of the vote to incremant
        $getVote = new submission();
        $incremented = $getVote->getVoteNumber($submission_id) + 1;
        $sqlquery = "UPDATE submit
                    SET numberOfVotes = $incremented
                    WHERE submission_id = '$submission_id'";

        $isUpdated = mysqli_query($conn, $sqlquery);
        if ($isUpdated) {
            return $incremented;
        } else {
            echo "Oops we couldnt register your vote please try again!";
        }

    }
}
    ?>