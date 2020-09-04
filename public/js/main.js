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
<!-- Скрыть/показать быстрый поиск, а также переключение между табами-->
var visible = false;
function showFun() {
    console.log('aweg');
    if(visible){
        document.getElementsByClassName('catalog__fastsearch__hiddencontent' )[0].style.display = 'none';
        visible = false;
    } else {
        document.getElementsByClassName('catalog__fastsearch__hiddencontent' )[0].style.display = 'block';
        visible = true;
    }
};
function showDescr(){
    document.getElementById('order_content').style.display = 'none';
    document.getElementById('description_content').style.display = 'block';
    document.getElementById('description').style.cssText= 'color: #ffffff; background-color: #D68458';
    document.getElementById('order').style.cssText= 'color: #000000; background-color: #ffffff;';
};
function showOrder(){
    document.getElementById('description_content').style.display = 'none';
    document.getElementById('order_content').style.display = 'block';
    document.getElementById('description').style.cssText= 'color: #000000; background-color: #ffffff;';
    document.getElementById('order').style.cssText= 'color: #ffffff; background-color: #D68458';
};
var k1=false;
var k2=false;
var k3=false;
var k4=false;
var k5=false;
$("#catalog_show_1").click(function(){
    if(!k1){
        $("#catalog_1").show();
        k1=true;
    }else{
        $("#catalog_1").hide();
        k1=false;
    }
});
$("#catalog_show_2").click(function(){
    if(!k2){
        $("#catalog_2").show();
        k2=true;
    }else{
        $("#catalog_2").hide();
        k2=false;
    }
});
$("#catalog_show_3").click(function(){
    if(!k3){
        $("#catalog_3").show();
        k3=true;
    }else{
        $("#catalog_3").hide();
        k3=false;
    }
});
$("#catalog_show_4").click(function(){
    if(!k4){
        $("#catalog_4").show();
        k4=true;
    }else{
        $("#catalog_4").hide();
        k4=false;
    }
});
$("#catalog_show_5").click(function(){
    if(!k5){
        $("#catalog_5").show();
        k5=true;
    }else{
        $("#catalog_5").hide();
        k5=false;
    }
});
