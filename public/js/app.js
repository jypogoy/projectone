$(function () {
    toastr.options = { 
        "positionClass" : "toast-top-center toastr-custom-pos"
    };

    $('.ui.checkbox').checkbox();       
    $('.ui.dropdown').dropdown();

    $('.policy').click(function(e) {
        e.preventDefault();
        PolicyModal.show();
    });

    var msgEl = $('.ui.message:not(.static)');
    if (msgEl.html() && msgEl.html() != '') {
        if (msgEl.hasClass('error')) {
            composeMessagePrompt('error', msgEl.html());
        } else if (msgEl.hasClass('success')) {
            composeMessagePrompt('success', msgEl.html());
        } else if (msgEl.hasClass('notice')) {
            composeMessagePrompt('info', msgEl.html());
        } else if (msgEl.hasClass('warning')) {
            composeMessagePrompt('warning', msgEl.html());
        }
    }
});

function composeMessagePrompt(type, msg) {
    $(document.body).append('<script>' +
                        '$(function () {' +
                            'toastr.options = {' +
                                '"positionClass" : "toast-top-center toastr-custom-pos"' +
                            '};' +
                            'toastr.' + type + '("' + msg + '");' +
                        '})' +
                    '</script>');
}