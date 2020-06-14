$(document).ready(function () {
    var auth_id = '{{Auth::id()}}';

    $('.flow_links-menu__btn').click(function () {
        $('.flow_links-menu__btn').removeClass('flow_links-menu__btn-active');
        $(this).addClass('flow_links-menu__btn-active');
        linksMat = $(this).attr('id');

        $.ajax({
            type: 'GET',
            url: 'materials/'+linksMat+'/'+auth_id,
            data: '',
            cache: false,
            success: function (data) {
                $('.files').html(data);
            }
        });




    });

    // $('.flow_links').draggable({
    //     axis: "x",
    //     stop: function() {
    //         if($(this).position().left > 1 || $(this).position().left < -800)
    //             $(this).css("left", "10px");
    //     }
    // });
});
