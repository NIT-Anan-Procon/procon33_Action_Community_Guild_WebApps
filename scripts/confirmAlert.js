//画像選択した際のアラート表示
$(function() {
    $("#request-picture").change(function(e) {
        var file = e.target.files[0];
        var reader = new FileReader();
        if(file.type.indexOf('image') < 0) {
            Swal.fire({
                icon: "error",
                text: "画像ファイルを指定してくださいアリ",
                showConfirmButton: false,
                timer: 1500
            });
            return false;
        }

        reader.onload = (function(file){
            return function(e){
                var url = e.target.result
                Swal.fire({
                    imageUrl: url,
                    imageWidth: 200,
                    text: "素晴らしい画像ですねアリ！",
                    showConfirmButton: false,
                    timer: 1700
                });
            }
        })(file);

        reader.readAsDataURL(file);
    });
});