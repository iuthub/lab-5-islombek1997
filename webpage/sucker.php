<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html lang="en">
    <head>
        <link rel="stylesheet" href="buyagrade.css" type="text/css" />
        <title>Server</title>
    </head>

    <body>

    <?php
        $name = $_POST['name'];
        $sec = $_POST['section_selection'];
        $credit_card = $_POST["credit_card"];
        $card_type = $_POST["card_type"];

        if(($_REQUEST["name"] == "") || ($_REQUEST["section_selection"] == "")||
            ($_REQUEST["credit_card"] == "")||($_REQUEST["card_type"] == "")):
        ?>
            <h1>Sorry</h1>
    <p>You did not completely fill in the form!<a href="buyagrade.html"> Try again?</a></p>
    <?php  else : ?>
    <h1>Values Received Successfully</h1>
    <dl>
        <dt>Name</dt>
        <dd><?php echo $_POST["name"];?></dd>
        <dt>Section</dt>
        <dd><?php echo $_POST["section_selection"];?></dd>
        <dt>Credit Card </dt>
        <dd><?php echo $_POST["credit_card"];?> (<?php echo $_POST["card_type"];?>)</dd>

    </dl>
    <?php
            $text = $name.", ".$sec.", ".$credit_card.", ".$card_type;
            file_put_contents("./sucker.txt", "\n".$text, FILE_APPEND );
            ?>
            <p>Here are all the suckers who have submitted here: </p>

            <pre>
                <?php
                    echo file_get_contents("./sucker.txt");
                ?>
            </pre>
    <?php endif; ?>
    </body>
</html>