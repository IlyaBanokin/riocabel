<div class="popup-fade">
    <div class="popup">
        <a class="popup-close" href="#">Закрыть</a>
        <br />
        <form method="post" action="{{ route('shop.main.callback') }}">
            @csrf
            <div class="row">
                    <div class="reply-form__input-wrapper"><input type="text" placeholder="Ваше имя" name="name"> </div>

                    <div class="reply-form__input-wrapper"><input type="text" placeholder="Ваше телефон" name="phone"></div>

                    <div class="reply-form__submit-wrapper">
                        <button type="submit" class="reply-form__submit-btn"><span>Отправить</span></button>
                    </div>
            </div>
        </form>
    </div>
</div>
