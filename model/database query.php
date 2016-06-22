<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 5/28/2016
 * Time: 12:39 AM
 */
class databaseQuery
{
    private $conn = null;
    private $result = null;
    function connect($query)
    {
        $this->conn = mysqli_connect("localhost", "root", "", "ayate");
        if (!$this->conn) {
            die("connection failed: ");
        }

           // echo "connection ok";
            $this->result = mysqli_query($this->conn,$query);
            return $this->result;

            /*while ($row = mysqli_fetch_assoc($result)){
                echo $row['username'];
                echo $row['password'];

            }
            //$result=mysqli_fetch_all($query);
            $num = $result->num_rows;
            for($i=0;$i<$num;$i++){
                $row = $result->fetch_assoc();
                echo "username:".$row[$i];
            }*/



    }
    function close(){
        mysqli_close($this->conn );
    }

    function searchRemedy()
    {

    }

    function searchComment()
    {

    }

    function searchSubmmitedRemedy()
    {

    }
}
?>