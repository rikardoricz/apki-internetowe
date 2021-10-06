$('.btn-a ').on('click', function (e) {
    
    var btn = $(this),
        $links = $('.btn-a');
    
    // if (btn.hasClass('active')) {
    //     btn.removeClass('active');
    // } else {
    //     btn.addClass('active');
    // }

    $links.removeClass('active');
    btn.addClass('active');
    
    $('#works > div').hide();
    var anySelectedBtn = false;
    $.each($links, function (k, v) {
    
        btn = $(v);
        
        if (btn.hasClass('active')) {
            anySelectedBtn = true;
            var cat = btn.data('categoryType');
            var nam = btn.data('categoryName');
            $('#works > div[data-category-type="'+cat+'"]').show();
            $('#works > div[data-category-name="'+nam+'"]').show();
        }
    
    });
    
    // if(!anySelectedBtn) {
    // $('#works > div').show();

    // }

    $(".first-btn").on("click", function(){

        $('#works > div').show();

    });
    
    
});