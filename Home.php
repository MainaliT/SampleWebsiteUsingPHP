<?php
/**
 * Created by PhpStorm.
 * User: tmainali
 * Date: 6/2/16
 * Time: 3:05 PM
 */include "AfterLoggedIn.html";
?>
<html>
<head><title>Collectives</title></head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>


<body>
<link rel="stylesheet" type="text/css" href="style.css">
<table width="100%">

    <tr>

        <td colspan="1">
            <h3>Description</h3>
            <img src="images/image-1.jpg">
            <h3>About the game</h3>
            <article class="ex">Assassin's Creed Syndicate is a 2015 action-adventure video game developed by Ubisoft Quebec and published by Ubisoft. It was released on October 23, 2015, for the PlayStation 4 and Xbox One, and on November 19, 2015, for Microsoft Windows. It is the ninth major installment in the Assassin's Creed series, and the successor to 2014's Assassin's Creed Unity.
                The plot is set in a fictional history of real-world events and follows the centuries-old struggle between the Assassins, who fight for peace with liberty, and the Templars, who desire peace through order. The story is set in Victorian era London and follows twin assassins Jacob and Evie Frye as they navigate the corridors of organized crime, and take back the city from Templar control. The open world design lets players freely roam London.
                The game is played from a third-person view and its world is navigated on foot or by carriage. The game introduces new traveling systems and refined combat and stealth mechanics. Players control the two lead protagonists—twins Jacob and Evie Frye—throughout the game's story, switching between them both during and outside of missions. Unlike its direct predecessors, Syndicate does not feature any multiplayer gameplay.
                Assassin's Creed Syndicate received positive reviews. Critics praised the visuals and the likability of the major characters, especially the Frye twins and the antagonist, while criticizing the lackluster ending as well as the aging and repetitive gameplay and mission mechanics, yet saying that it was an improvement over Unity.</article><br>

            <div class="buttonShowHide">
                <button class="hide" id="hideButton" >Hide Description</button>
                <button class="show" id="showButton">show description</button>
            </div>


        </td>


        <td colspan="2">
            <h3>Description</h3>
            <img src="images/image-2.jpg">
            <h3>About the game</h3>

           <article class="ex1">Far Cry 4 is an open world action-adventure first-person shooter video game developed and published by Ubisoft for the PlayStation 3, PlayStation 4, Xbox 360, Xbox One, and Microsoft Windows. It is the successor to the 2012 video game Far Cry 3, and the fourth main installment in the Far Cry series. The game was released on November 18, 2014.
               The game takes place in Kyrat, a fictional Himalayan country that mostly consists of sprawling mountains and forests, vast water systems, and villages. The main story follows Ajay Ghale, a young Kyrati-American, as he is caught in a civil war involving Kyrat's Royal Army, controlled by tyrannical king Pagan Min, and a rebel movement called the Golden Path. Gameplay focuses on combat and exploration; players battle enemy soldiers and dangerous wildlife using a wide array of weapons, while completing side missions, collecting useful items, and progressing through the game's main story. The game features many elements found in role-playing games, such as a branching storyline. In addition to the game's campaign, the game features a map editor, a co-operative multiplayer mode, and an asymmetrical competitive multiplayer mode which was developed by Red Storm Entertainment.
               Announced in May 2014, development on Far Cry 4 began immediately after the shipment of Assassin's Creed III in late 2012. The team originally intended to develop a direct sequel to Far Cry 3 that continues 3's story, but the idea was later scrapped and the team decided to develop a new setting and new story for the game. Certain aspects of Far Cry 4 were inspired by the Nepalese Civil War, and the costume of the game's antagonist Pagan Min was inspired by Japanese films Ichi the Killer and Brother.
               Far Cry 4 was met with a mostly positive critical reception upon release. Critics praised the open world design, visuals, soundtrack, and characters, particularly antagonist Pagan Min. There was also praise for the new gameplay additions, such as the grappling hook, and the wealth of content. However, some critics disliked the story and found the game too similar to its predecessor. The game was a commercial success, selling 7 million copies by the end of 2014, and was the biggest launch in the franchise's history. Several downloadable content were subsequently released.</article><br>

            <div class="buttonShowHide">
                <button class="hide1" id="hideButton" >Hide Description</button>
                <button class="show1" id="showButton">show description</button>
            </div>


        </td>

        <td colspan="3">
            <h3>Description</h3>
            <img src="images/image-3.png">
            <h3>About the game</h3>
            <article class="ex2">FIFA 16 is an association football simulation video game developed by EA Canada and published by EA Sports for Microsoft Windows, PlayStation 3, PlayStation 4, Xbox 360, Xbox One, Android and iOS.
                The game is the first in the FIFA series to include female players. It is also the first in which the players on the covers were chosen by popular vote, including the first women to appear on the cover. Martin Tyler and Alan Smith are the commentators for the game. Following his six year prison sentence, Adam Johnson was removed from the video game.FIFA 16 is an association football simulation video game developed by EA Canada and published by EA Sports for Microsoft Windows, PlayStation 3, PlayStation 4, Xbox 360, Xbox One, Android and iOS.
                The game is the first in the FIFA series to include female players. It is also the first in which the players on the covers were chosen by popular vote, including the first women to appear on the cover. Martin Tyler and Alan Smith are the commentators for the game. Following his six year prison sentence, Adam Johnson was removed from the video game.FIFA 16 is an association football simulation video game developed by EA Canada and published by EA Sports for Microsoft Windows, PlayStation 3, PlayStation 4, Xbox 360, Xbox One, Android and iOS.
                The game is the first in the FIFA series to include female players. It is also the first in which the players on the covers were chosen by popular vote, including the first women to appear on the cover. Martin Tyler and Alan Smith are the commentators for the game. Following his six year prison sentence, Adam Johnson was removed from the video game.</article><br>

            <div class="buttonShowHide">
                <button class="hide2" id="hideButton" >Hide Description</button>
                <button class="show2" id="showButton">show description</button>
            </div>


        </td>
    </tr>
     <hr width="100%">

</table>

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

<script>
    $(document).ready(function(){
        $(".hide1").click(function(){
            $(".ex1").hide(1000);
        });
    });

    $(document).ready(function(){
        $(".show1").click(function(){
            $(".ex1").show(1000);
        });
    });
</script>

<script>
    $(document).ready(function(){
        $(".hide2").click(function(){
            $(".ex2").hide(1000);
        });
    });

    $(document).ready(function(){
        $(".show2").click(function(){
            $(".ex2").show(1000);
        });
    });
</script>

<!--comment section....user comment section-->

<?php
include "Comment.html";
?>

</body>
</html>

<?php include "footer.html";?>
