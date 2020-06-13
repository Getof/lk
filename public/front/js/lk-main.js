$(document).ready(function () {

    $('.flow_links-menu__btn').click(function () {
        $('.flow_links-menu__btn').removeClass('flow_links-menu__btn-active');
        $(this).addClass('flow_links-menu__btn-active');
        linksMat = $(this).attr('id');
        alert(linksMat);

    });
});
