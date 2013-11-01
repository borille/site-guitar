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
