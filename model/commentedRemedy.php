<?php 
include "Database_Enquiry.php";
class commentedRemedy
{
    private $commentId;
    private $remedyId;
    private $commentedBy;
    private $commentedContent;
    private $commentedTime;
    private $commentedDate;
    private $db;




    function addCommented($commentId, $remedyId, $commentedBy, $commentedContent, $commentedTime, $commentedDate)
    {

        $this->commentId = $commentId;
        $this->remedyId = $remedyId;
        $this->commentedBy = $commentedBy;
        $this->commentedContent = $commentedContent;
        $this->commentedTime = $commentedTime;
        $this->commentedDate = $commentedDate;
        $this->db = new databaseEnquiry();

        $query = "INSERT INTO 
                    comment 
                    VALUES ('" . $commentId . "','" . $remedyId . "','" . $commentedBy . "','" . $commentedContent . "',
                    '" . $commentedTime . "','" . $commentedDate . "')";


        $result =$this->db ->connect($query);
        return $result;
    }

    

}







?>