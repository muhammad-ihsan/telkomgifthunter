var parsleyOptions = {
    successClass : 'has-success',
    errorClass   : 'has-error',
    classHandler : function( _el ){
        return _el.$element.closest('.form-group');
    }
};

$(document).ready(function(){
    $('[data-form-registration]').parsley(parsleyOptions)
    .on('field:success', function() {
        console.log(this.$element);
    })
    .on('field:error', function() {
        var el = this.$element;
    })
    .on('form:submit', function() {
        notify('success', 'Data Sudah Tersimpan');
        return false;
    });
});

function resetForm() {
    $('form')
}

function notify(type, message) {
    $.notify({
        message: message ? message : 'alert message not set',
    },{
        element: 'body',
        type: type ? type : 'warning',
        placement: {
            from: "top",
            align: "center"
        },
    });
}
