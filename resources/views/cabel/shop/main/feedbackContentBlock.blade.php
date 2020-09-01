<div class="reply__wrapper">
    <div class="container"><h3><span>Напишите нам</span></h3>
        <div class="reply-form">
            <div class="reply__discount-msg"><p>Хотите получить скидку в <span>5%</span>? - оставьте заявку
                    онлайн<br><br>
                    и мы подготовим для Вас индивидуальное, выгодное предложение!</p></div>
            <form method="post" action="{{ route('shop.main.store') }}">
                @csrf
                <div class="row">
                    <div class="four columns">
                        <div class="reply-form__input-wrapper"><input type="text" placeholder="Ваше имя" name="name">
                        </div>
                        <div class="reply-form__input-wrapper"><input type="text" placeholder="Ваше email" name="email">
                        </div>
                        <div class="reply-form__input-wrapper"><input type="text" placeholder="Ваше телефон"
                                                                      name="phone"></div>
                    </div>
                    <div class="four columns">
                        <div class="reply-form__input-wrapper"><textarea
                                placeholder="Введите текст Вашего сообщения..." name="text"></textarea></div>
                    </div>
                    <div class="four columns">
                        <div class="reply-form__submit-wrapper">
                            <button type="submit" class="reply-form__submit-btn"><span>Отправить</span></button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="twelve columns">
                        <div class="reply-form__hint tex"><span>*</span> Мы не распространяем Ваши данные третьим
                            лицам и не используем Ваши конткты для различных рассылок и т.д.
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
