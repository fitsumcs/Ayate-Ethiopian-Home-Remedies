
<?php

include "../Model/submissions.php";
displaySubmitted();
//displaying submitted remedies when  z page is opened
function displaySubmitted(){
    $submissionsObj =  new submission();
    $getRemedy= $submissionsObj-> getSubmission();
    // $getRemedy = sort($getRemedy);
    $i = 0;
    $string = "<article id='submissionsDisplay' style='margin-top: 10%;'>
                        <h1>Submissions<br></h1>";
    while ($i < count($getRemedy)) {

        $string .=     " <div style='margin-left:-17%;'> 
                <table style='margin-left:10px;'> 
                    <tr><h2>".$getRemedy[$i][3]."</h2></tr>
                    <tr>
                        <td><h4>Disease Name: </h4></td>
                        <td>".$getRemedy[$i][2]."</td>
                    </tr>
                   
                    <tr>
                        <td><h4>Category: </h4></td>
                        <td>".$getRemedy[$i][5]."</td>
                    </tr>
                    <tr><td>
                         <h4>Description: <br> </h4></td> 
						 </tr>
                     <td> ". $getRemedy[$i][4]." <br><br>".$getRemedy[$i][0]."
                            <a href='../Control/votecontroller.php?id=".$getRemedy[$i][7]."'> 
                                <button id='vote'>vote</button></a></td>
                    </tr>
                </table></div> ";
        $i ++;
    }



    echo $string.'</article>';
}// end displaySubmitted



?>
