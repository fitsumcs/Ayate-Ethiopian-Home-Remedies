<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 5/28/2016
 * Time: 1:09 AM
 */
include ("database query.php");
class professional
{
    private $name;
    private $email;
    private $phone;
    private $workAddress;
    private $password ="";
    private $userName;
    private $experience;
    private $occupation;
    private $qualification;
    private $gender;
    private $new ;

    function __construct($name,$email,$phone,$workAddress,$experience,$username,$occupation,$qualification,$gender)
    {
        $this->name= $name;
        $this->email=$email;
        $this->phone=$phone;
        $this->workAddress= $workAddress;
        $this->experience= $experience;
        $this->userName= $username;
        $this->occupation= $occupation;
        $this->qualification=$qualification;
        $this->gender=$gender;
        $this->new = new databaseQuery();
    }

    /**
     * @param $oldPassword
     * @param $newPassword
     */

    function changePassword($oldPassword,$newPassword)
    {
        //string; $oldPassword = $oldPassword;

        $query = "select username,password from professionals where registration_status = 'registered'";
        
        $result = $this->new ->connect($query);

        while ($row = mysqli_fetch_assoc($result)){
            if($this->userName==$row['username'] and $oldPassword== $row['password']){

                $query1 = "update professionals set password='".$newPassword."' where username='".$this->userName."'";
                $this->password= $newPassword;
                $result = $this->new ->connect($query1);

                    return true;


            }


        }
        return false;
    }

    function changeWorkInformation($qualification,$occupation,$experience,$workAddress)
    {
        if($qualification){
            $this->qualification = $qualification;
            $query = "update professionals set qualification='".$this->qualification."' where username= '".$this->userName."'";
            $result = $this->new ->connect($query);
            if($result){
                echo "success qualification <br/>";
            }
        }
        if($occupation){
            $this->occupation = $occupation;
            $query = "update professionals set occupation='".$this->occupation."' where username= '".$this->userName."'";
            $result = $this->new ->connect($query);
            if($result){
                echo "success occupation <br/>";
            }
        }
        if($experience){
            $this->experience = $experience;
            $query = "update professionals set experience ='".$this->experience."' where username= '".$this->userName."'";
            $result = $this->new ->connect($query);
            if($result){
                echo "success experience<br/>";
            }
        }
        if($workAddress){
            $this->workAddress=$workAddress;
            $query = "update professionals set work_address ='".$this->workAddress."' where username= '".$this->userName."'";
            $result = $this->new ->connect($query);
            if($result){
                echo "success work_address<br/>";
            }
        }

    }

    function changePersonalInformation($name,$email,$phone,$username,$gender)//sets or changes personal information like name ,email and phone
    {
        if($name){
            $fullName = explode(" ",$name);
            if(count($fullName)==3){
                $fName= $fullName[0];
                $mName = $fullName[1];
                $lName = $fullName[2];
            }
            elseif (count($fullName==2)){
                $fName= $fullName[0];
                $mName = $fullName[1];
                $lName = "";
            }


            $query = "update professionals set fName ='".$fName."', mName='".$mName."', lName='".$lName."' where username= '".$this->userName."'";
            $result = $this->new ->connect($query);
            $this->name = $name;


        }
        if($email){
            $this->email=$email;
            $query = "update professionals set email ='".$this->email."' where username= '".$this->userName."'";
            $result = $this->new ->connect($query);

        }
        if($phone){
            $this->phone=$phone;
            $query = "update professionals set phone ='".$this->phone."' where username= '".$this->userName."'";
            $result = $this->new ->connect($query);


        }
        if($username){
            $query="select * from professionals";
            $result = $this->new->connect($query);
            while ($row = mysqli_fetch_assoc($result)){
                $user = $row['username'];
                if($user == $username && $this->userName != $username){
                    return false;
                }
            }
            $query = "update professionals set username ='".$username."' where username= '".$this->userName."'";
            $result = $this->new ->connect($query);
            $this->userName = $username;
            if($result){
                //'success username';
                //return "success username";
            }
        }
        if($gender){
            $this->gender = $gender;
            $query = "update professionals set gender ='".$this->gender."' where username= '".$this->userName."'";
            $result = $this->new ->connect($query);
            if($result){
                //echo "success gender<br/>";
            }
        }
        return true;

    }
function  verifyAccount($userName,$password)//verify account using password and username
    {
        $this->userName = $userName;
        $this->password = $password;
        $query = "select * from professionals where registration_status='registered'";
        $result = $this->new->connect($query);
        while ($row = mysqli_fetch_assoc($result)) {
            $user = $row['username'];
            $pass = $row['password'];
            if ($this->userName == $user && $this->password == $pass) {
                $this->name = $row['fName']." ".$row['mName']." ".$row['lName'];
                $this->email = $row['email'];
                $this->experience = $row['experience'];
                $this->gender = $row['gender'];
                $this->occupation= $row['occupation'];
                $this->phone = $row['phone'];
                $this->qualification = $row['qualification'];
                $this->workAddress = $row['work_address'];
                
                return true;
            }
        }
        return false;

    }

    /**
     * @return mixed
     */
    public function getEverything($username){
        $query = "select * from professionals where username='".$username."'";
        $result = $this->new->connect($query);
        while ($row = mysqli_fetch_assoc($result)) {
            $array = array($row['fName'],$row['mName'],$row['lName'],$row['email'],$row['phone'],$row['work_address'],$row['experience'],$row['occupation'],$row['qualification']);
            return $array;
        }
    }
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getOccupation()
    {
        return $this->occupation;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @return mixed
     */
    public function getQualification()
    {
        return $this->qualification;
    }

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @return mixed
     */
    public function getWorkAddress()
    {
        return $this->workAddress;
    }
}
?>