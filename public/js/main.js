/*Поиск по сайту*/
var route = '/autocomplete';
$('#search').typeahead({
    source: function (term, process) {
        return $.get(route, {term: term}, function (data) {
            return process(data);
        });
    }
});

/*Вам перезвонить*/
    $(document).ready(function($) {
    $('.popup-open').click(function() {
        $('.popup-fade').fadeIn();
        return false;
    });

    $('.popup-close').click(function() {
    $(this).parents('.popup-fade').fadeOut();
    return false;
});

    $(document).keydown(function(e) {
    if (e.keyCode === 27) {
    e.stopPropagation();
    $('.popup-fade').fadeOut();
}
});

    $('.popup-fade').click(function(e) {
    if ($(e.target).closest('.popup').length == 0) {
    $(this).fadeOut();
}
});
});
