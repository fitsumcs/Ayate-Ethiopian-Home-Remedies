<?php
class databaseEnquiry
{
    private $result = null;
    


    private $conn = null;
  

    function connect($query)
    {
                    //create a database connection

        $this->conn = mysqli_connect('localhost', 'root', '', 'ayate');
        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $this->result = mysqli_query($this->conn, $query);

        return $this->result;

    }//end of connect function
	function searchRemedy($searchItem)
    {
        //search remedies to display
        $a = new databaseEnquiry();
        $this->searchItem = $searchItem;
        
        

            $query = "select * 
                 from list
                 where (diseasename,remedyname) against ('".$searchItem."')";
               /*$query = "select * 
                    from remedy
                     where diseasename like '%" . $searchItem . "%' or remedyname like '%" . $searchItem . "%'";
                 */   
                  $result = $a->connect($query);





        return $result;
        

        


    }//end of searchRemedy method
    function searchCommented($searchType, $searchItem){
        //retrieve comments under specific remedy
        $b = new databaseEnquiry();
        $this->searchItem = $searchItem;
        $this->searchType = $searchType;
        if ($searchType == "disease") {
            $query = "select * 
                        from comment 
                        where (select remedyId from list where diseasename like '%" . $searchItem . "%') = comment.remedyId";
                $result = $b->connect($query);
        }
        else if ($searchType == "remedy") {
            $query = "select * 
                        from comment 
                        where (select remedyId from list where remedyname like '%" . $searchItem . "%') = comment.remedyId";
                $result = $b->connect($query);
        }
           return $result; 
    }//end of searchCommented
        function searchSubmittedRemedy($searchType, $searchItem)
        {
            //search from submitted questions database
            $c = new databaseEnquiry();
        $this->searchItem = $searchItem;
        $this->searchType = $searchType;




        if ($searchType == "disease") {

            $query = "select * 
                  from submit
                  where diseasename like '%" . $searchItem . "%'";


                  $result = $c->connect($query);


        } else if ($searchType == "remedy") {
            $query = "select * 
                  from submit
                  where remedyname like '%" . $searchItem. "%'";
                  $result = $c->connect($query);


        } 
return $result;
        } //end of searchSubmittedRemedy
    }//end of databaseEnquiry class
?>