/**
 * Created by tihonov.e on 13.04.2017.
 */
$(document).ready(function() {
    $('#subscribe .order').on('click', function() {
        if($('#subscribe input').val() != '') {
            var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
            if(pattern.test($('#subscribe input').val())){
                var email = $('#subscribe input').val();
                subscribe(email);
            } else {
                $('#subscribe').css({'border' : '1px solid #ff0000'});
                $('#valid').text('Неверный e-mail!');
            }
        } else {
            $('#subscribe').css({'border' : '1px solid #ff0000'});
            $('#valid').text('Поле email не должно быть пустым');
        }
    });

    function subscribe(email) {
        $.ajax({
            url: "/subscribers/subscribe",
            type: "POST",
            data: {email: email},
            success: function(result) {
                $('#subscribe').html(result);
            }
        });
    }
});