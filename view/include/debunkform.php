
<head>
    <title>Debunk</title>
    <link rel = "stylesheet" text = "text/css" href = "../styles/custom.css">
    <link rel = "stylesheet" text = "text/css" href = "../styles/style1.css">
    <link rel = "stylesheet" text = "text/css" href = "../styles/style2.css">
    <script src = "js/script2.js"></script>
    <?php include "pheader.php"?>
</head>
<?php include "../../controler/debunkcontrol.php";?>
<body>

<div class="debunk-whole">

    <div class = "remedy-content">

        <!--Remedy Displayed Here-->

        <div id='displayArea'>
            <?php echo dispayRemedyDetail($_GET['id']);?>
        </div>

    </div>
    <div class = "debunk-form">
        <p id = "in-sign"><i>Verify / Debunk</i><br></p>

        <form action = "../../controler/debunkcontrol.php?id=<?php echo $_GET['id']?>" method = "post">
            <ul>

                <li>
                    <label for = "explanation">Detail Explanation:</label>
                    <textarea name = "explanation" type = "text" tabindex="2" required='required'></textarea>
                </li>
                <li>
                    <label for = "rating">Rating Out of 10:</label>
                    <textarea name = "rating" type = "range" min = "0" max = "10" tabindex="3" required='required'></textarea>
                </li>
                <li id = "dpbuttons">
                    <button  id = "debCancel"> <a href="../professional.php" >Cancel </a></button>
                    <input type = "submit" value = "Post" id = "postButton">
                </li>

            </ul>
        </form>
    </div>

</div>
