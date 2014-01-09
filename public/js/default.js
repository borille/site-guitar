//--------------------------------------------------------------
function caminho(module, controller, action) {
    var url = self.location.pathname.split('/index.php/');
    return ( url[0] + '/index.php/' + module + '/' + controller + '/' + action );
}
//--------------------------------------------------------------

$(document).ready(function () {
    $("#show-login").click(function () {
        if (!$('.popover').hasClass('in')) {
            $.get(caminho('default', 'user', 'login'), {}, function (data) {
                if (data) {
                    $("#show-login").unbind('click');
                    $("#show-login").popover({content: data, html: true}).popover('show');
                    $("#userMail").focus();
                }
            });
        }
    });
});

//--------------------------------------------------------------
function loadContent(url, element) {
    $.get(url, null, function (data) {
        $("#" + element).html(data);
    }, "html");
}

//------------------------------------------------------------------------------
function confirmDeleteBs(redirectUrl) {
    divTag = $('<div/>');

    divTag.addClass('modal');
    divTag.addClass('fade');

    divTag.html('<div class="modal-dialog">\
            <div class="modal-content">\
                <div class="modal-header">\
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>\
                    <h3>Confirmar Exclusão</h3>\
                </div>\
                <div class="modal-body">\
                    <p style="font-size:14px">Essa operação não poderá ser desfeita!</p>\
                </div>\
                <div class="modal-footer">\
                    <a class="btn btn-default" href="' + redirectUrl + '">Confirmar</a>\
                    <a data-dismiss="modal" class="btn btn-primary">Cancelar</a>\
                </div>\
            </div>\
        </div>');

    divTag.modal();
}

//------------------------------------------------------------------------------