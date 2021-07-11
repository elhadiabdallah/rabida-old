$(document).ready(function () {
    
      /*********************************************/
            
            
            
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
            
            
            
            
            
            
            
            
            
            ///***************************************//////
    $('.mygroup_item_edit').on('click', function () {
        var rbd_id = $(this).attr('uid');
        var title = $('#mygroup_list_' + rbd_id + ' .mygroup_item_heading').text();
        var category = $('#mygroup_list_' + rbd_id + ' .mygroup_item_meta #cat').text();
        $('#edit_rabida_title').attr('value', $.trim(title));
            var cat = $.trim(category);
        if(cat == "عامة"){
        $('#rbd_inp_type_rbd_1').attr('checked', true);    
        $('#rbd_inp_type_rbd_0').attr('checked', false);   
        }else if(cat == "خاصة"){
        $('#rbd_inp_type_rbd_0').attr('checked',true);    
        $('#rbd_inp_type_rbd_1').attr('checked',false);  
            
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
        $('.rbida_item_name_edit').text(title);
        $('.ui.modal.edit_rabida_modal')
            .modal({
                closable: false,
                inverted: true,
                onDeny: function () {
                    $('.ui.modal.edit_rabida_modal').modal('hide');
                    return false;
                },
                onApprove: function () {
                    window.alert('ok');
                }
            }).modal('show');
     });
    
    $('.mygroup_item_delete').on('click', function () {
        var rbd_id = $(this).attr('uid');
        var rbd_count = Number($('#rbd_count').text());
        var mygroup_item_heading = $('#mygroup_list_' + rbd_id + ' .mygroup_item_heading').text();
        $('.rbida_item_name').text(mygroup_item_heading);
        
        $('.ui.modal.delete_rabida_modal')
            .modal({
                closable: false,
                onDeny: function () {
                    $('.ui.modal.delete_rabida_modal').modal('hide');
                    return false;
                },
                onApprove: function () {

                    $.ajax({
                        type: 'POST',
                        url: '/rabida/mygroup/removerabida/' + rbd_id,
                        data: {
                            rbd_id: rbd_id
                        },
                        beforeSend: function () {

                        },
                        success: function (data) {
                            switch (data) {
                                case '0':

                                    break;
                                case '1':
                                    
                                    var new_count = rbd_count - 1;
                                    $('#rbd_count').text(new_count);
                                    $('#mygroup_list_' + rbd_id).hide();
                                    $('#my_rabida_' + rbd_id).hide();
                                    $('.add_rabida_btn').html('<a href="mygroup/addrabida" class="ui button labeled icon"><i class="add icon"></i> إضافة ربيدة</a>');
                                    $('.add_rabida_btn_sidebar').html('<a href="mygroup/addrabida" class="item subitem add_rabida_btn"><i class="add icon"></i> إضافة ربيدة</a>');
                                    break;
                                case '2':

                                    break;
                                case '3':

                                    break;
                            }
                        }
                    });
                }
            })
            .modal('show');
    });
})
