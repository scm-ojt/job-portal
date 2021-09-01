$('#profile').on('change', function(){
    var reader = new FileReader();

    reader.onload = function (e) {
        $('#preview-img').attr('src', e.target.result);
    }

    reader.readAsDataURL(this.files[0]);
})