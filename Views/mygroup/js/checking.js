$(document).ready(function () {

    $('#rbd_inp_username').on('input', function () {
        var rbd_username = $(this).val();
        $.ajax({
            type: 'POST',
            url: '/rabida/mygroup/verifyrbduser',
            data: {
                rbd_username: rbd_username
            },
            beforeSend: function () {
                $('#rbd_username_chk').removeClass('red');
                $('#rbd_username_chk').removeClass('green');
                $('#rbd_username_chk').addClass('loading');
            },
            success: function (data) {
                switch (data) {
                    case '0':
                        $('#rbd_username_chk').removeClass('loading');
                        $('#rbd_username_chk').removeClass('green');
                        $('#rbd_username_chk').addClass('red');
                        break;
                    case '1':
                        $('#rbd_username_chk').removeClass('loading');
                        $('#rbd_username_chk').removeClass('red');
                        $('#rbd_username_chk').addClass('green');

                        break;
                }
            }
        });
    });
    
    $('#rbd_inp_title').on('input', function () {

        var rbd_title = $(this).val();
        $('#rbd_username_urlusertxt').text('rbd_title');
        $.ajax({
            type: 'POST',
            url: '/rabida/mygroup/verifyrbdtitle',
            data: {
                rbd_title: rbd_title
            },
            beforeSend: function () {
                $('#rbd_title_chk').removeClass('red');
                $('#rbd_title_chk').removeClass('green');
                $('#rbd_title_chk').addClass('loading');
            },
            success: function (data) {
                switch (data) {
                    case '0':
                        $('#rbd_title_chk').removeClass('loading');
                        $('#rbd_title_chk').removeClass('green');
                        $('#rbd_title_chk').addClass('red');
                        break;
                    case '1':
                        $('#rbd_title_chk').removeClass('loading');
                        $('#rbd_title_chk').removeClass('red');
                        $('#rbd_title_chk').addClass('green');

                        break;
                }
            }
        });
    });
})
