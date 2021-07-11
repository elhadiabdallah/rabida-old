$(document).ready(function () {
    $('input:radio[name=rbd_inp_type_rbd]').change(function () {
        if (this.value == '2') {
            var content_select_main_cat = '<div class="ui header">اختر نوع الكتابة</div><select class="rbd_main_categories" id="rbd_main_categories_nm" name="rbd_main_categories"><option value="none">(اختر نوع الكتابة)</option><option value="art">كتابات فنية</option><option value="sci">كتابات علمية</option></select>';
            $('.rbd_content_main_select').html(content_select_main_cat + '<span class="rbd_content_select"></span>');
            $('select[name=rbd_main_categories]').change(function () {

                if (this.value == 'art') {
                    var content_select = '<select class="rbd_categories" id="rbd_categories_nm" name="rbd_categories_nm"><option value="none">(اختر الصنف)</option><option value="تاريخ">تاريخ</option><option value="علوم الحاسب">علوم الحاسب</option><option value="">قصص</option><option value="">تاريخ</option><option value="">تاريخ</option></select>';
                    $('.rbd_content_select').hide().html(content_select).slideDown();

                } else if (this.value == 'sci') {
                    var content_select = '<select class="rbd_categories" id="rbd_categories_nm"  name="rbd_categories_nm"><option value="none">(اختر الصنف)</option><option value="علوم الحاسب">علوم الحاسب</option><option value="علم النفس">علم النفس</option><option value="تكنولوجيا">تكنولوجيا</option></select>';
                    $('.rbd_content_select').html(content_select);
                } else if (this.value == 'none') {
                    $('.rbd_content_select').html('');
                }
            });
        } else if (this.value == '1') {
            $('.rbd_content_select').show().html('').slideUp();
            $('.rbd_content_main_select').html('');
        }
    });
    if ($('#rbd_inp_type_rbd_0').is(':checked')) {
        var content_select_main_cat = '<div class="ui header">اختر نوع الكتابة</div><select class="rbd_main_categories" id="rbd_main_categories_nm" name="rbd_main_categories"><option value="none">(اختر نوع الكتابة)</option><option value="art">كتابات فنية</option><option value="sci">كتابات علمية</option></select>';
        $('.rbd_content_main_select').html(content_select_main_cat + '<span class="rbd_content_select"></span>');
        $('select[name=rbd_main_categories]').change(function () {

            if (this.value == 'art') {
                var content_select = '<select class="rbd_categories" id="rbd_categories_nm" name="rbd_categories_nm"><option value="none">(اختر الصنف)</option><option value="تاريخ">تاريخ</option><option value="علوم الحاسب">علوم الحاسب</option><option value="">قصص</option><option value="">تاريخ</option><option value="">تاريخ</option></select>';
                $('.rbd_content_select').hide().html(content_select).slideDown();

            } else if (this.value == 'sci') {
                var content_select = '<select class="rbd_categories" id="rbd_categories_nm"  name="rbd_categories_nm"><option value="none">(اختر الصنف)</option><option value="علوم الحاسب">علوم الحاسب</option><option value="علم النفس">علم النفس</option><option value="تكنولوجيا">تكنولوجيا</option></select>';
                $('.rbd_content_select').html(content_select);
            } else if (this.value == 'none') {
                $('.rbd_content_select').html('');
            }
        });
    }

    /*if (rbd_main_categories_nm == 'none') {
        var text = 'يرجى اختيار نوع الصنف';
        $('#status').html('<div class="ethr_noty error">' + text + '</div>');
    } else {
        if (rbd_categories_nm == 'none') {
            var text = 'اختر الصنف';
            $('#status').html('<div class="ethr_noty error">' + text + '</div>');
        } else {
            var text = 'يفfrrrrrr';
            $('#status').html('<div class="ethr_noty success">' + rbd_categories_nm + text + '</div>');
        }
    }*/
    $('#btn_add').click(function () {
        var title = $('#rbd_inp_title').val();
        var rabidausername = $('#rbd_inp_username').val();
        var desc = $('#rbd_text_descript_nm').val();
        var rbd_categories = $('#rbd_categories_nm').val();

        if ($("input[type='radio'].bd_inp_type_rbd").is(':checked')) {
            var rbd_type = $("input[type='radio'].bd_inp_type_rbd:checked").val();
        }


        if ($('#rbd_accept_terms').is(':checked')) {
            var is_accept = $('#rbd_accept_terms').val();
        } else {
            var is_accept = 'off';
        }


if (rbd_type == '1') {
    
        if (title == '' || rbd_type == '' || rabidausername == '' ) {
            var text = 'يرجى تعبئة جميع الحقول';
            $('#status').html('<div class="ethr_noty error">' + text + '</div>');
        } else {
            if (is_accept == 'off') {
                var text = 'يجب الموافقة على شروط إنشاء الربيدة';
                $('#status').html('<div class="ethr_noty error">' + text + '</div>');
            } else {
                $.ajax({
                    type: 'POST',
                    url: '/rabida/mygroup/create',
                    data: {
                        title: title,
                        rbduser: rabidausername,
                        rbd_type: rbd_type,
                        desc: desc
                    },
                    error: function () {
                        var text = 'حدث خطأ غير متوقع، نعتذر منك يرجى المعاودة مرة أخرى';
                        $('#status').html('<div class="ethr_noty error">' + text + '</div>');
                    },
                    beforeSend: function () {
                        $('#status').html('<div class="waiting_ui"><i class="icon circle one1"></i><i class="icon circle one2"></i><i class="icon circle one3"></i></div>');

                    },
                    success: function (data) {
                        switch (data) {
                            case '0':
                                var text = 'يرجى تعبئة البيانات';
                                $('#status').html('<div class="ethr_noty error">' + text + '</div>');
                                break;
                            case '1':
                                var text = 'استعمال الحروف';
                                $('#status').html('<div class="ethr_noty error">' + text + '</div>');
                                break;
                            case '2':
                                var text = 'العنوان الذي أدخلته قصير';
                                $('#status').html('<div class="ethr_noty error">' + text + '</div>');
                                break;
                            case '3':
                                var text = 'يرجى كتابة العنوان باللغة العربية';
                                $('#status').html('<div class="ethr_noty error">' + text + '</div>');
                                break;

                            case '4':
                                var text = 'العنوان الذي أدخلته موجود من قبل';
                                $('#status').html('<div class="ethr_noty error">' + text + '</div>');
                                break;

                            case '5':
                                var text = 'تمت إضافة الربيدة بنجاح';
                                $('#status').html('<div class="ethr_noty success">' + text + '</div>');
                                location.assign("http://localhost/rabida/"+rabidausername); 
                                break;

                            case '6':
                                var text = 'فشل عملية الإضافة';
                                $('#status').html('<div class="ethr_noty error">' + text + '</div>');
                                break;

                            case '7':
                                var text = 'حدث خطأ غير متوقع . حاول مرة أخرى';
                                $('#status').html('<div class="ethr_noty error">' + text + '</div>');
                                break;
                            case '10':
                                var text = 'اسم مستخدم الربيدة محجوز من قبل ولا يمكن استعماله';
                                $('#status').html('<div class="ethr_noty error">' + text + '</div>');
                                break;
                             case '11':
                                var text = 'اسم مستخدم الربيدة يجب أن يكون باللغة الإنجليزية';
                                $('#status').html('<div class="ethr_noty error">' + text + '</div>');
                                break;
                        }
                    }
                })
            }

        }
        
} else if (rbd_type == '2') {
    
            var mkind = $('#rbd_main_categories_nm').val();
            var kind = $('#rbd_categories_nm').val();
            if (mkind == 'none') {
                var text = 'يرجى اختيار نوع الكتابة';
                $('#status').html('<div class="ethr_noty error">' + text + '</div>');
            } else {
                if (kind == 'none') {
                    var text = 'يرجى اختيار الصنف';
                    $('#status').html('<div class="ethr_noty error">' + text + '</div>');
                } else {
                    
                    

        if (title == '' || rbd_type == '' || rabidausername == '') {
            var text = 'يرجى تعبئة جميع الحقول';
            $('#status').html('<div class="ethr_noty error">' + text + '</div>');
        } else {
            if (is_accept == 'off') {
                var text = 'يجب الموافقة على شروط إنشاء الربيدة';
                $('#status').html('<div class="ethr_noty error">' + text + '</div>');
            } else {
                $.ajax({
                    type: 'POST',
                    url: '/rabida/mygroup/create',
                    data: {
                        title: title,
                        rbd_type: rbd_type,
                        rbduser: rabidausername,
                        desc: desc,
                        mkind: mkind,
                        kind: kind,
                    },
                    error: function () {
                        var text = 'حدث خطأ غير متوقع، نعتذر منك يرجى المعاودة مرة أخرى';
                        $('#status').html('<div class="ethr_noty error">' + text + '</div>');
                    },
                    beforeSend: function () {
                        $('#status').html('<div class="waiting_ui"><i class="icon circle one1"></i><i class="icon circle one2"></i><i class="icon circle one3"></i></div>');

                    },
                    success: function (data) {
                        switch (data) {
                            case '0':
                                var text = 'يرجى تعبئة البيانات';
                                $('#status').html('<div class="ethr_noty error">' + text + '</div>');
                                break;
                            case '1':
                                var text = 'استعمال الحروف';
                                $('#status').html('<div class="ethr_noty error">' + text + '</div>');
                                break;
                            case '2':
                                var text = 'العنوان الذي أدخلته قصير';
                                $('#status').html('<div class="ethr_noty error">' + text + '</div>');
                                break;
                            case '3':
                                var text = 'يرجى كتابة العنوان باللغة العربية';
                                $('#status').html('<div class="ethr_noty error">' + text + '</div>');
                                break;

                            case '4':
                                var text = 'العنوان الذي أدخلته موجود من قبل';
                                $('#status').html('<div class="ethr_noty error">' + text + '</div>');
                                break;

                            case '5':
                                var text = 'تمت إضافة الربيدة بنجاح';
                                $('#status').html('<div class="ethr_noty success">' + text + '</div>');
                                location.assign("http://localhost/rabida/"+rabidausername); 
                                break;

                            case '6':
                                var text = 'فشل عملية الإضافة';
                                $('#status').html('<div class="ethr_noty error">' + text + '</div>');
                                break;

                            case '7':
                                var text = 'حدث خطأ غير متوقع . حاول مرة أخرى';
                                $('#status').html('<div class="ethr_noty error">' + text + '</div>');
                                break;
                            case '8':
                                var text = 'يرجى اختيار نوع الكتابة';
                                $('#status').html('<div class="ethr_noty error">' + text + '</div>');
                                break;
                            case '9':
                                var text = 'يرجى اختيار الصنف';
                                $('#status').html('<div class="ethr_noty error">' + text + '</div>');
                                break;
                             case '10':
                                var text = 'اسم مستخدم الربيدة محجوز من قبل ولا يمكن استعماله';
                                $('#status').html('<div class="ethr_noty error">' + text + '</div>');
                                break;
                             case '11':
                                var text = 'اسم مستخدم الربيدة يجب أن يكون باللغة الإنجليزية';
                                $('#status').html('<div class="ethr_noty error">' + text + '</div>');
                                break;
                                
                        }
                    }
                })
            }

        }
                    
                    
                    
                }
            }
        }




    });

})
