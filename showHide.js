/**
 * Created by tmainali on 5/31/16.
 */
<script>
$(document).ready(function(){
    $(".ex .hide").click(function(){
        $(this).parents(".ex").hide("slow");
    });
    $(".ex .show").click(function(){
        $(this).parents(".ex").show("slow");
    });
});
</script>
