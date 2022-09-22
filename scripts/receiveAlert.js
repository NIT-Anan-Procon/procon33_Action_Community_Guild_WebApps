$(function() {
    $("#add-movie").change(function(e) {
        var file = e.target.files[0];
        var reader = new FileReader();

        var ext = thie.value.match(/\.(.+)$/)[1];
        switch(ext) {
            case 'mp4':
            case 'mov':
            case 'm4a':
                $("#send-movie").attr("disabled",false);
                var url = e.target.result
                Swal.fire({
                    imageUrl: url,
                    imageWidth: 200,
                    text: "素晴らしい画像ですねアリ！",
                    showConfirmButton: false,
                    timer: 1700
                });
                break;
            default:
                Swal.fire({
                    icon: "error",
                    text: "動画ファイルを指定してくださいアリ",
                    showConfirmButton: false,
                    timer: 1500
                });
                this.value = "";
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