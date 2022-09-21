$(function() {
    for(let i = 0; i < 5; i++) {
        var video = $("#p" + i);
        $(video).on('ended',function() {
            $("#movies").scrollLeft($("#p0").position().left);
            $("#movies").animate({scrollLeft:($("#p" + (i+1)).position().left)});
        })
    }
})