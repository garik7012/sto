@extends('layouts.master')
@section('title', 'Контакты')
@section('content')
@include('layouts.topsection')

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
                <form class="contact-page-form">
                    <div class="contact-page-form__top">
                        <div class="contact-page-form__inputs">
                            <input type="text" class="contact-page-form__input" placeholder="Имя">

                            <input type="text" class="contact-page-form__input" placeholder="номер телефона">
                        </div>

                        <div class="contact-page-form__area">
                            <textarea  cols="30" rows="10" class="contact-page-form__textarea" placeholder="сообщение"></textarea>
                        </div>
                    </div>

                    <div class="contact-page-form__bottom">
                        <strong class="contact-page-form__text">
                            Мы свяжемся с Вами в течение одного рабочего дня
                        </strong>

                        <input class="cont-form-message" type="submit" value="отправить">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="contact-sect__map">
        <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d10159.894646267529!2d30.64045991359825!3d50.46021514716783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1487932448530" allowfullscreen=""></iframe>
        </div>
    </div>
</div>

<section class="services">
    <div class="services__list">
        <ul class="services-list">
            <li class="services__item">
                <a href="" class="services-link">
                    <div class="services-link__title">
                        <span>Шиномонтаж</span>
                    </div>

                    <span class="services-link__img">
								<img class="services-link__pic" src="img/serva.png" alt="">
							</span>
                </a>
            </li>

            <li class="services__item">
                <a href="" class="services-link">
                    <div class="services-link__title">
                        <span>Автомойка</span>
                    </div>

                    <span class="services-link__img">
								<img class="services-link__pic" src="img/autowash.png" alt="">
							</span>
                </a>
            </li>

            <li class="services__item">
                <a href="" class="services-link">
                    <div class="services-link__title">
                        <span>Диагностика ходовой</span>
                    </div>

                    <span class="services-link__img">
								<img class="services-link__pic" src="img/diag.png" alt="">
							</span>
                </a>
            </li>

            <li class="services__item">
                <a href="" class="services-link">
                    <div class="services-link__title">
                        <span>Развал схождения</span>
                    </div>

                    <span class="services-link__img">
								<img class="services-link__pic" src="img/razval.png" alt="">
							</span>
                </a>
            </li>

            <li class="services__item">
                <a href="" class="services-link">
                    <div class="services-link__title">
                        <span>Компьютерная диагностика</span>
                    </div>

                    <span class="services-link__img">
								<img class="services-link__pic" src="img/komp.png" alt="">
							</span>
                </a>
            </li>

            <li class="services__item">
                <a href="" class="services-link">
                    <div class="services-link__title">
                        <span>Купля-продажа</span>
                    </div>

                    <span class="services-link__img">
								<img class="services-link__pic" src="img/mappp.png" alt="">
							</span>
                </a>
            </li>
        </ul>
    </div>
</section>
@endsection