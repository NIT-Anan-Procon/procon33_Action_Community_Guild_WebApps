$(function() {
    
    $("#start").on('click', function() {
        $("#forth").scrollTop(0);
        $("#p"+0).get(0).play();
        //事前再生
        $("#p"+1).get(0).play();
        $("#p"+1).get(0).pause();

        $("#p"+2).get(0).play();
        $("#p"+2).get(0).pause();

        $("#p"+3).get(0).play();
        $("#p"+3).get(0).pause();

        $("#p"+4).get(0).play();
        $("#p"+4).get(0).pause();

        $("#p"+5).get(0).play();
        $("#p"+5).get(0).pause();

        $("#p"+6).get(0).play();
        $("#p"+6).get(0).pause();

        $("#p"+7).get(0).play();
        $("#p"+7).get(0).pause();

        $("#p"+8).get(0).play();
        $("#p"+8).get(0).pause();

        $("#p"+9).get(0).play();
        $("#p"+9).get(0).pause();

        $("#p"+10).get(0).play();
        $("#p"+10).get(0).pause();

        $("#p"+11).get(0).play();
        $("#p"+11).get(0).pause();

        $("#p"+12).get(0).play();
        $("#p"+12).get(0).pause();

        $("#p"+13).get(0).play();
        $("#p"+13).get(0).pause();

        $("#p"+14).get(0).play();
        $("#p"+14).get(0).pause();

        $("#p"+15).get(0).play();
        $("#p"+15).get(0).pause();

        $("#p"+16).get(0).play();
        $("#p"+16).get(0).pause();
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
    $("#p" + 13).on('ended',function() {
        $("#forth").scrollTop(0);
        $("#forth").scrollTop(5600);
        $("#p"+14).get(0).play();
    });
    $("#p" + 14).on('ended',function() {
        $("#forth").scrollTop(0);
        $("#forth").scrollTop(6000);
        $("#p"+15).get(0).play();
    });
    $("#p" + 15).on('ended',function() {
        $("#forth").scrollTop(0);
        $("#forth").scrollTop(6400);
        $("#p"+16).get(0).play();
    });
    $("#p" + 16).on('ended',function() {
        $("#forth").scrollTop(0);
        $("#forth").scrollTop(6800);
        $("#p"+17).get(0).play();
    });
    $("#p" + 17).on('ended',function() {
        $("#forth").scrollTop(0);
        $("#forth").scrollTop(7200);
        $("#p"+18).get(0).play();
    });
    $("#p" + 18).on('ended',function() {
        $("#forth").scrollTop(0);
        $("#forth").scrollTop(7600);
        $("#p"+19).get(0).play();
    });
    $("#p" + 19).on('ended',function() {
        $("#forth").scrollTop(0);
        $("#forth").scrollTop(8000);
        $("#p"+20).get(0).play();
    });
});