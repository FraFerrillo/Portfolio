$(function(){
    // document ready !!!
    if($("#drophere").length > 0 ){

        let csrfToken = $('meta[name="csrf-token"]').attr('content');
        let uniqueSecret = $('input[name="uniqueSecret"]').attr('value');

        let myDropzone = new Dropzone('#drophere', {
            url: '/ad/images/upload',

            params: {
                _token: csrfToken,
                uniqueSecret: uniqueSecret
            }
        });
    }
})