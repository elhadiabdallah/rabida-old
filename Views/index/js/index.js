$(document).ready(function () {
    tinymce.init({
        selector: '#rbd_text_article_nm',
        height: 500,
        theme: 'modern',
        
          statusbar: false,
              menubar: false,
       // menubar: false,
        language: 'ar',
        plugins: [
    'advlist autolink lists link image charmap print preview anchor', 'searchreplace visualblocks code fullscreen', 'insertdatetime media table contextmenu paste code' ],
        toolbar1: ' bold italic strikethrough forecolor backcolor | textcolor | colorpicker | link | image | codesample | fullpage link | charmap  | print | preview | advlist',
      content_css: [
    'http://localhost/rabida/Public/css/tinymce_rbd.css'],
    });

    /*$('#rbd_search_inp_id')
        .popup({
            popup: $('.rdb_search_result'),
            on: 'search',

        });*/
 
    $('.ethr_search_div .ui.search').search({
        source: content,
        searchFields: [
       'title'
    ],
        error: {
            source: 'Cannot search. No source used, and Semantic API module was not included',
            noResults: 'للأسف لاتوجد نتائج للبحث.',
            logging: 'Error in debug logging, exiting.',
            noTemplate: 'A valid template name was not specified.',
            serverError: 'There was an issue with querying the server.',
            maxResults: 'Results must be an array to use maxResults setting',
            method: 'The method you called is not defined.'
        },
        searchFullText: false
    });
    $('#left_list_noty_bell')
        .popup({
            popup: $('.rdb_notification'),
            on: 'click',

        });
    $('#history_list_btn_show')
        .popup({
            popup: $('.rdb_history'),
            on: 'click',

        });
    $('#left_list_noty_bell').click(function () {
        $('.noty_bell_alert').removeClass('noty_bell');
    });
    $('.rbd_inp_class_btn .ui.button.basic').on('click', function () {
        var rbd_inp_class_btn = $(this);
        if ($(this).hasClass('loading')) {
            rbd_inp_class_btn.removeClass('loading disabled');
        } else {
            rbd_inp_class_btn.addClass('loading disabled');
        }
    });
    $('.like_btn .icon.heart').on('click', function () {
        if ($(this).hasClass('outline')) {
            $(this).removeClass('outline');
            $(this).addClass('red');
        } else {
            $(this).addClass('outline');
            $(this).removeClass('red');
        }
    });
    $('.ui.dropdown').dropdown();
    $('.rbd_profile_nav .rbd_profile_nav_ul li').on('click', function () {

            var Myid = $(this).attr('id');
            $(this).addClass('active').siblings().removeClass('active');
            $('.ethr_conainer_rbds_post_profile .rbd_articles').hide();
            $('#' + Myid + '_content').show();
        }),


    // Categories Menu
    $('.ethr_prompt.ui.dropdown.item')
        .popup({
            popup: $('.rdb_categories_menu'),
            on: 'click',
            position: 'bottom left'
        });



});
