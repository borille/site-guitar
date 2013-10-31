//--------------------------------------------------------------
function loadContent(url, element) {
    $.get(url, null, function (data) {
        $("#" + element).html(data);
    }, "html");
}
