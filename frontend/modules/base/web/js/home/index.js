$(document).ready(function () {
    let host = window.location.protocol + '//' + window.location.host;

    $('.portfolio-item').on('click',function(){
        let id = $(this).attr('data-id');
        $.get(host + "/base/home/portfolio", {
            'id': id,
        }).done(function (data) {
            bootbox.dialog({
                message: data,
                closeButton: false,
                backdrop: true,
                onEscape: true,
            });
        });
    });
});