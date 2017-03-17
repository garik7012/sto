@extends('layouts.master')
@section('title', 'Контакты')
@section('content')
<div class="contact-sect">
    <div class="contact-sect__top">
        <div class="contact-desc">
            <div class="contact-desc__left">
                <div class="cont-list">
                    <div class="contacts-box  contacts-box--full-page">
                        <div class="contact-box__item">
                            <div class="phone-img">
                                <img src="img/mapplaceholder.png" alt="alt">
                            </div>

                            <span>ул. Москаленко 20, Бровары</span>
                        </div>

                        <div class="contact-box__item">
                            <div class="phone-img">
                                <img src="img/emailcont.png" alt="alt">
                            </div>

                            <span>msinfo@ukr.net</span>
                        </div>

                        <div class="contact-box__item">
                            <div class="phone-img">
                                <img src="img/Vodafone.png" alt="alt">
                            </div>

                            <span>(066)285-04-66</span>
                        </div>

                        <div class="contact-box__item">
                            <div class="phone-img">
                                <img src="img/kievstar.png" alt="alt">
                            </div>

                            <span>(067)219-51-57</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact-desc__right">
                <form class="contact-page-form" action="/online/callback" method="post">
                    <div class="contact-page-form__top">
                        <div class="contact-page-form__inputs">
                            <input name="fio" type="text" class="contact-page-form__input" placeholder="Имя" required>

                            <input name="phone" type="phone" class="contact-page-form__input" placeholder="номер телефона" required>
                        </div>

                        <div class="contact-page-form__area">
                            <textarea name="message" cols="30" rows="10" class="contact-page-form__textarea" placeholder="сообщение"></textarea>
                        </div>
                    </div>

                    <div class="contact-page-form__bottom">
                        <strong class="contact-page-form__text">
                            Мы свяжемся с Вами в течение одного рабочего дня
                        </strong>
                        {{csrf_field()}}
                        <input class="cont-form-message" type="submit" value="отправить">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="contact-sect__map">
        <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28712.181060875715!2d30.815897372484116!3d50.500266041493965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4d94d046ca71d%3A0x4fff487208b0251e!2z0LLRg9C70LjRhtGPINCh0LXRgNCz0ZbRjyDQnNC-0YHQutCw0LvQtdC90LrQsCwgMjAsINCR0YDQvtCy0LDRgNC4LCDQmtC40ZfQstGB0YzQutCwINC-0LHQu9Cw0YHRgtGMLCDQo9C60YDQsNC40L3QsA!5e0!3m2!1sru!2s!4v1489743957073" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</div>

@include('layouts.services')
@endsection


