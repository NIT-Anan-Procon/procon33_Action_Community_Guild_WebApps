$(function() {
    $("#p" + 0).on('ended',function() {
        $("#forth").scrollLeft($("#p0").position().left);
        $("#forth").scrollLeft($("#p"+1).position().left);
        $("#p"+1).get(0).play();
    });
    $("#p" + 1).on('ended',function() {
        $("#forth").scrollLeft($("#p0").position().left);
        $("#forth").scrollLeft($("#p"+2).position().left);
        $("#p"+2).get(0).play();
    });
    $("#p" + 2).on('ended',function() {
        $("#forth").scrollLeft($("#p0").position().left);
        $("#forth").scrollLeft($("#p"+3).position().left);
        $("#p"+3).get(0).play();
    });
    $("#p" + 3).on('ended',function() {
        $("#forth").scrollLeft($("#p0").position().left);
        $("#forth").scrollLeft($("#p"+4).position().left);
        $("#p"+4).get(0).play();
    });
    $("#p" + 4).on('ended',function() {
        $("#forth").scrollLeft($("#p0").position().left);
        $("#forth").scrollLeft($("#p"+5).position().left);
        $("#p"+5).get(0).play();
    });
    $("#p" + 5).on('ended',function() {
        $("#forth").scrollLeft($("#p0").position().left);
        $("#forth").scrollLeft($("#p"+6).position().left);
        $("#p"+6).get(0).play();
    });
    $("#p" + 6).on('ended',function() {
        $("#forth").scrollLeft($("#p0").position().left);
        $("#forth").scrollLeft($("#p"+7).position().left);
        $("#p"+7).get(0).play();
    });
    $("#p" + 7).on('ended',function() {
        $("#forth").scrollLeft($("#p0").position().left);
        $("#forth").scrollLeft($("#p"+8).position().left);
        $("#p"+8).get(0).play();
    });
    $("#p" + 8).on('ended',function() {
        $("#forth").scrollLeft($("#p0").position().left);
        $("#forth").scrollLeft($("#p"+9).position().left);
        $("#p"+9).get(0).play();
    });
    $("#p" + 9).on('ended',function() {
        $("#forth").scrollLeft($("#p0").position().left);
        $("#forth").scrollLeft($("#p"+10).position().left);
        $("#p"+10).get(0).play();
    });
});