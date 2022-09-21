$(function() {
    for(let i = 0; i < 5; i++) {
        var video = $("#p" + i);
        $(video).on('ended',function() {
            $("#forth").scrollLeft($("#p0").position().left);
            $("#forth").animate({scrollLeft:($("#p" + (i+1)).position().left)});
        })
    }
})