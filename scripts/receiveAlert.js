$(function() {
    $("#add-movie").change(function(e) {
        var file = e.target.files[0];
        var reader = new FileReader();

        var ext = this.value.match(/\.(.+)$/)[1];
        switch(ext) {
            case 'mp4':
            case 'mov':
            case 'm4a':
                $("#send-movie").attr("disabled",false);
                var title = $("#send-movie").prop("files")[0].name;
                Swal.fire({
                    icon: "success",
                    text: "素晴らしい動画が添付されたアリ",
                    text: title,
                    showConfirmButton: false,
                    timer: 1500
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

        

        reader.readAsDataURL(file);
    });
});