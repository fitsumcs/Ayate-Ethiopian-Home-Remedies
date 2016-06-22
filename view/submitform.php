<!DOCTYPE html>
<html>
<head>
    <title> Submit </title>
    <link rel = "stylesheet" text = "text/css" href = "styles/custom.css">
    <link rel = "stylesheet" text = "text/css" href = "styles/style1.css">
</head>
<body onload = "populate()">
<div class = "submit-form">
    <form action = "../controler/submitformcontroler.php" method = "post">
        <p id = "in-sign"><i>Submit your Remedy</i></p>
      <ul>
        <li>
            <label for = "submitTitle">Title:<label>
            <input name = "submitTitle" type = "text" required="required"/>
        </li>
        <li>
            <label for = "submitDiseaseName">Disease/ Ailment Name:<label>
            <input name = "submitDiseaseName" type = "text" required="required"/>
        </li>
        <li>
            <label for = "submitRemedyCategory">Remedy Category:<label>
                <select name="Disease Category"   id="dropdown" >
                   <!--
                       size="6"

                    <option selected>Respiratory</option>
                    <option>Deficiency</option>
                    <option>skin</option>
                    <option>Internal</option>
                    <option>Mental</option>
                    <option>STD</option>
                    -->

                </select>
        </li>
        <li>
            <label for = "submitRemedyDescription">Description:</label>
            <textarea name = "submitRemedyDescription" required="required"/></textarea>

        </li>
        <li>
            <label for = "submitEmail">Email:<label>
            <input name = "submitEmail" type = "email" required="required"/>
        </li>
        <li>
            <a href = "../sub.php" id = "subCancel">Cancel</a>
            <input type = "submit" id = submitFormButton value = "Submit" required="required"/>
        </li>
      </ul>

    </form>
</div>
</body>
</html>