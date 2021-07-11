$(document).ready(function () {
$('.rbd_add_article_tools_tags .ui.dropdown').dropdown({
  allowAdditions: true,
});
    $('.ethr_hovercard_btn')
        .popup({
            popup: $('.ethr_hovercard.rbd_rbd_hovercard'),
            on: 'hover',

        });
    /*function searchHighlight(searchText) {
        if (searchText) {
            var content = $('.ethr_conainer_rbds_post_article').text();
            var conr = $('.ethr_conainer_rbds_post_article p').text();
            var searchExp = new RegExp(searchText, "ig");
            var matches = content.match(searchExp);
            if (matches) {
                $('.ethr_conainer_rbds_post_article p').html(content.replace(searchExp, function(match){
                    return "<span class='highlight_article'>" + match + "</span>";
                    $('.ethr_search_word_error').text('');
                }));
            }else{
                $('.ethr_search_word_error').text('لا توجد نتائج');
            $('.highlight_article').removeClass('highlight_article');
            }
        }else{
            $('.highlight_article').removeClass('highlight_article');
        }
    };*/

    $('.ui.dropdown').dropdown();

    var prevScrollpos2 = window.pageYOffset;
    window.onscroll = function () {
        var currentScrollPos2 = window.pageYOffset;
        if (prevScrollpos2 > currentScrollPos2) {
            document.getElementById("rbd_article_nav_id").style.top = "60px";

        } else {
            document.getElementById("rbd_article_nav_id").style.top = "0";
        }
        prevScrollpos2 = currentScrollPos2;
    }


});
