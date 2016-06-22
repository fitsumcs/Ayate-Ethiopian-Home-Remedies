<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 5/28/2016
 * Time: 1:30 PM
 */
include "database query.php";
class Registration
{
    private $fName;
    private $mName;
    private $lName;
    private $userName;
    private $email;
    private $qualification;
    private $occupation;
    private $gender;
    private $new ;
    private $random;
    function __construct()
    {
        $this->new = new databaseQuery();

    }
    function matchInformation($username,$email){
        $query = "select username,email from professionals where registration_status='non'";
        $result = $this->new->connect($query);
        while ($row = mysqli_fetch_assoc($result)) {
            $TempUsername = $row['username'];
            $TempEmail = $row['email'];
            if ($email == $TempEmail || $username == $TempUsername){
                return true;
            }
        }
        return false;
    }
    function addProfessional($Fname,$Mname,$Lname,$username,$qualification,$occupation,$gender,$email){//register professional
         //add as professional aftering matching information with database
        //email to registerer to confirm registration
        //change registration status
        //$fullName = explode(" ",$name );
        //if(count($fullName)==3){
            $this->fName = $Fname;
            $this->mName = $Mname;
            $this->lName = $Lname;
        //}
       /* else{
            $this->fName = $fullName[0];
            $this->mName = $fullName[1];
            $this->lName = "";
        }*/
        $this->email = $email;
        $this->userName=$username;
        $this->qualification=$qualification;
        $this->occupation = $occupation;
        $this->gender = $gender;

        $status = $this->matchInformation($this->userName,$this->email);

        //$status2 = $this->matchInformation($this->userName);
        if($status){
            //create a random number for confrimation
            $this->random =  mt_rand();
            //echo "we have send email please check ur account";
            $to       = $this->email;
            $subject  = 'please verify your email address';
            $message  = '<html><head><title>Ayate Ethiopian Home remedy Account confrimation</title>
<body><p><strong>Hey,'.$this->fName.' '.$this->mName.'</strong></p><p>We are ready to activate your account.All we need is to make sure this is your account.</p>
<p><strong>This is your confrimation number:'.$this->random.'</strong></p>
<p>If you did not request an account just delete this email.</p></body></head></html>';
            $headers  = 'From: ayatehomeremedy@gmail.com' . "\r\n" .
                '"Reply-To: do-not-reply@gmail.com' . "\r\n".
                'MIME-Version: 1.0' . "\r\n" .
                'Content-type: text/html; charset=utf-8'."\r\n".
                'X-Mailer: PHP/'.phpversion();

//ini_set($to,$headers);
            if(mail($to, $subject, $message, $headers)){//echo "Email sent worked";
                //lead to confrim page
                $query = "update professionals set password='".$this->random."' where username= '".$this->userName."'";
                $result = $this->new->connect($query);
                return $this->random;

            }

            else{
                //email
                return "email fail";
            }
               // echo "Email sending failed";

        }
        else{
            $query = "select username,email from professionals where registration_status='registered'";
            $result = $this->new->connect($query);
            while ($row = mysqli_fetch_assoc($result)) {
                $TempUsername = $row['username'];
                $TempEmail = $row['email'];
                if ($email == $TempEmail || $username == $TempUsername){
                    return "already registered";
                }
                else{
                    return false;
                }
            }

        }
    }
    function changeStatus($confrim){
        $query = "update professionals set registration_status='registered' where password= '".$confrim."'";
        $result = $this->new->connect($query);
    }

}
?>