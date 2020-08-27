/*Поиск по сайту*/
var route = '/autocomplete';
$('#search').typeahead({
    source: function (term, process) {
        return $.get(route, {term: term}, function (data) {
            return process(data);
        });
    }
});
