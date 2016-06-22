<?php
include_once "../model/database query.php";
$username = $_SESSION['POST'];
$string ="<p>Recent Activities</p>";

$conn = new databaseQuery();
$query = "select * from debunkeddescription";
$result = $conn->connect($query);
$conn = $conn->close();


    while ($row = mysqli_fetch_assoc($result)){
        if($row['verified_by']== $username) {
            if ($row['verify_debunk'] == 'verify') {
                $string .= "You verified on ";
                $query1 = "select * from submit";
                $conn = new databaseQuery();
                $result1 = $conn->connect($query1);
                while($row2 = mysqli_fetch_assoc($result1)) {
                    if ($row2['submission_id'] == $row['submission_id']) {
                        $string .= $row2['description']."<br/>";
                    }
                }
            }
        }

}
echo $string;

?>