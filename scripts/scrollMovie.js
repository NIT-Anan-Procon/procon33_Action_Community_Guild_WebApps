$(function() {
    $("#start").on('click', function() {
        $("#forth").scrollTop(0);
        $("#p"+0).get(0).play();
    });

    $("#p" + 0).on('ended',function() {
        $("#forth").scrollTop(0);
        $("#forth").scrollTop(400);
        $("#p"+1).get(0).play();
    });
    $("#p" + 1).on('ended',function() {
        $("#forth").scrollTop(0);
        $("#forth").scrollTop(800);
        $("#p"+2).get(0).play();
    });
    $("#p" + 2).on('ended',function() {
        $("#forth").scrollTop(0);
        $("#forth").scrollTop(1200);
        $("#p"+3).get(0).play();
    });
    $("#p" + 3).on('ended',function() {
        $("#forth").scrollTop(0);
        $("#forth").scrollTop(1600);
        $("#p"+4).get(0).play();
    });
    $("#p" + 4).on('ended',function() {
        $("#forth").scrollTop(0);
        $("#forth").scrollTop(2000);
        $("#p"+5).get(0).play();
    });
    $("#p" + 5).on('ended',function() {
        $("#forth").scrollTop(0);
        $("#forth").scrollTop(2400);
        $("#p"+6).get(0).play();
    });
    $("#p" + 6).on('ended',function() {
        $("#forth").scrollTop(0);
        $("#forth").scrollTop(2800);
        $("#p"+7).get(0).play();
    });
    $("#p" + 7).on('ended',function() {
        $("#forth").scrollTop(0);
        $("#forth").scrollTop(3200);
        $("#p"+8).get(0).play();
    });
    $("#p" + 8).on('ended',function() {
        $("#forth").scrollTop(0);
        $("#forth").scrollTop(3600);
        $("#p"+9).get(0).play();
    });
    $("#p" + 9).on('ended',function() {
        $("#forth").scrollTop(0);
        $("#forth").scrollTop(4000);
        $("#p"+10).get(0).play();
    });
    $("#p" + 10).on('ended',function() {
        $("#forth").scrollTop(0);
        $("#forth").scrollTop(4400);
        $("#p"+11).get(0).play();
    });
    $("#p" + 11).on('ended',function() {
        $("#forth").scrollTop(0);
        $("#forth").scrollTop(4800);
        $("#p"+12).get(0).play();
    });
    $("#p" + 12).on('ended',function() {
        $("#forth").scrollTop(0);
        $("#forth").scrollTop(5200);
        $("#p"+13).get(0).play();
    });
});