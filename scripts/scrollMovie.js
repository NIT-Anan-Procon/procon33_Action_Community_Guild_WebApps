$(function() {
    $("#p" + 0).on('ended',function() {
        $("#forth").scrollTop(0);
        $("#forth").scrollTop(400);
        $("#p"+1).get(0).play();
    });
    
});