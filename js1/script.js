$(document).ready(function() {
    $('.artist_l li').each(function(m) {
        $(this).find('a').css('top', -$(this).height());
        $(this).hover(function() {
            $(this).find('a').animate({
                'top': '0'
            },
            200)
        },
        function() {
            $(this).find('a').animate({
                'top': $(this).height()
            },
            {
                duration: 200,
                complete: function() {
                    $(this).css('top', -$(this).parent('li').height())
                }
            })
        })
    });
});