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
        // notify('danger', 'Something went wrong please check')
        // var ok = $('.parsley-error').length === 0;
        // $('.bs-callout-info').toggleClass('hidden', !ok);
        // $('.bs-callout-warning').toggleClass('hidden', ok);
    })
    .on('field:error', function() {
        var el = this.$element;
        // notify('warning', el.name + ' tidak boleh kosong')
        // console.log('Validation failed for: ', this.$element);
    })
    .on('form:submit', function() {
        notify('success', 'Wew');
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
