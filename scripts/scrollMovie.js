$(function() {
    $("#p0").on('ended',function() {
        $("#forth").scrollTop(0);
        $("#forth").scrollTop($("#p1").offset().top);
        $("#p1").get(0).play();
    });
    $("#p1").on('ended',function() {
        $("#forth").scrollTop(0);
        $("#forth").scrollTop($("#p2").offset().top);
        $("#p2").get(0).play();
    });
    $("#p2").on('ended',function() {
        $("#forth").scrollTop(0);
        $("#forth").scrollTop($("#p3").offset().top);
        $("#p3").get(0).play();
    });
    $("#p3").on('ended',function() {
        $("#forth").scrollTop(0);
        $("#forth").scrollTop($("#p4").offset().top);
        $("#p4").get(0).play();
    });
    $("#p4").on('ended',function() {
        $("#forth").scrollTop(0);
        $("#forth").scrollTop($("#p5").offset().top);
        $("#p5").get(0).play();
    });
    $("#p5").on('ended',function() {
        $("#forth").scrollTop(0);
        $("#forth").scrollTop($("#p6").offset().top);
        $("#p6").get(0).play();
    });
    $("#p6").on('ended',function() {
        $("#forth").scrollTop(0);
        $("#forth").scrollTop($("#p7").offset().top);
        $("#p7").get(0).play();
    });
    $("#p7").on('ended',function() {
        $("#forth").scrollTop(0);
        $("#forth").scrollTop($("#p8").offset().top);
        $("#p8").get(0).play();
    });
    $("#p8").on('ended',function() {
        $("#forth").scrollTop(0);
        $("#forth").scrollTop($("#p9").offset().top);
        $("#p9").get(0).play();
    });
    $("#p9").on('ended',function() {
        $("#forth").scrollTop(0);
        $("#forth").scrollTop($("#p10").offset().top);
        $("#p10").get(0).play();
    });
    $("#p10").on('ended',function() {
        $("#forth").scrollTop(0);
    });
});