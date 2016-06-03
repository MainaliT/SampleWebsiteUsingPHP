<?php
/**
 * Created by PhpStorm.
 * User: tmainali
 * Date: 5/26/16
 * Time: 11:14 AM
 */
//comment section

//header


?>
<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    
<!--This whole script is just making the text slowly hide and show-->
    <script>
        $(document).ready(function(){
        $(".hide").click(function(){
            $(".ex").hide(1000);
            });
        });

        $(document).ready(function(){
            $(".show").click(function(){
                $(".ex").show(1000);
            });
        });

    </script>

</head>
<body bgcolor="#8fbc8f">
<?php include "header.html";?>

<h3>Description</h3>

<div class="ex">

    <p>This is the game zone where you can talk about all you gaming techniques and ideas. It is worth sharing.If you know where you stuck or have something in mind to share or simply get idea of the game you are stuck with. This is sample project that is plan to elustrate to bring gamers together inside a tiny chat box. This idea was generated because you do not have to constantly check your phone to talk to your friend, you can just shoot them message from chatbox while you playing game or ask for help with the game where you are lost or stuck. <strong>This project is just a practice project. There could be some flaws.</strong></p>

</div>

<div class="buttonShowHide">
<button class="hide" id="hideButton" >Hide Description</button>
<button class="show" id="showButton">show description</button>
</div>



<?php include "footer.html"; ?>
</body>
</html>




