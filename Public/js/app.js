$(document).ready(function () {
    //login to rabida
    
            $('#btn_login').on('click', function () {
            var path = window.location.href;
            var email = $('#ethr_email').val();
            var pass = $('#ethr_pass').val();
            if ($('#ethr_rmmbr_me').is(':checked')) {
                var remember = $('#ethr_rmmbr_me').val();
            } else {
                var remember = 'off';
            }
            if (email == '' || pass == '') {
                location.assign("http://localhost/accounts/login?auth=0&continue=" + path);
            } else {
                $.ajax({
                    type: 'POST',
                    url: 'http://localhost/accounts/login/login',
                    data: {
                        ethr_email: email,
                        ethr_pass: pass,
                        ethr_remember: remember
                    },
                    error: function () {
                        location.assign("http://localhost/accounts/login?auth=0&continue=" + path);
                    },
                    beforeSend: function () {
                        $('#status').html('<div class="waiting_ui"><i class="icon circle one1"></i><i class="icon circle one2"></i><i class="icon circle one3"></i></div>');

                    },
                    success: function (data) {
                        switch (data) {
                            case '0':
                                location.assign("http://localhost/accounts/login?auth=1&continue=" + path);

                                break;
                            case '1':
                                location.assign("http://localhost/accounts/login?auth=0&continue=" + path);

                                break;
                            case '3':
                                location.assign(path);
                                break;
                        }
                    }
                });
            }
        });

    // join to rabida

    $('#btn_join').on('click', function () {
        var id = $(this).attr('uid')
        $.ajax({
            type: 'POST',
            url: 'http://localhost/accounts/index/join_to_rabida/' + id,
            data: {
                uid: id,
            },
            error: function () {
                $(this).html('wrong');
            },
            beforeSend: function () {
                $(this).html('...');
            },
            success: function (data) {
                location.reload(true);
            }
        });

    });

})