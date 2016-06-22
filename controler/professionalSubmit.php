                                                                        
<?php

include "../model/submissions.php";
displaySubmitted();
//displaying submitted remedies when  z page is opened
function displaySubmitted()
{
    $submissions = new submission();
    $getRemedy = $submissions->getSubmission();
    // $getRemedy = sort($getRemedy);
    $i = 0;
    $string = "";
    while ($i < count($getRemedy)) {

        $string .= " <div style='margin-left:-17%;'> 
                <table style='margin-left:10px;'> 
                    <tr><h2>" . $getRemedy[$i][3] . "</h2></tr>
                    <tr>
                        <td><h4>Disease Name: </h4></td>
                        <td>" . $getRemedy[$i][2] . "</td>
                    </tr>
                   
                    <tr>
                        <td><h4>Category: </h4></td>
                        <td>" . $getRemedy[$i][5] . "</td>
                    </tr>
                     <tr>
                        <td><h4>Submitted By: </h4></td>
                        <td>" . $getRemedy[$i][1] . "</td>
                    </tr>
                    <tr>
                        <td><h4>Submission Date: </h4></td>
                        <td>" . $getRemedy[$i][6] . "</td>
                    </tr>
                    <tr><td><a href='view.php?id=" . $getRemedy[$i][7] . "'>
                            <button><h4>Description </h4></button></a></td>
                        <td> " . $getRemedy[$i][0] . "
                            <a href='../view/include/debunkform.php?id=" . $getRemedy[$i][7] . "'> 
                                <button id='vote'>verify/debunk</button></a></td>
                    </tr>
                </table></div> ";
        $i++;
    }


    echo "$string <br/>";

}




