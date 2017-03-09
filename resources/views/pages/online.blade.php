@extends('layouts.master')
@section('title', 'Онлайн запись')
@section('content')
    @include('layouts.topsection')
    <section class="application-page">
        <div class="application-page__form">
            <form class="application-form">
                <div class="application-form__top">
                    <div class="form-top">
                        <div class="form-top__title">
                            <h2>ЗАПИСЬ</h2>
                        </div>

                        <div class="form-top__inputs">
                            <div class="form-top__inputs-text">
                                Ваше авто
                            </div>

                            <select class="form-top__select-year">
                                <option>Год</option>
                                <option>1991</option>
                                <option>1992</option>
                                <option>1993</option>
                            </select>

                            <select class="form-top__select-brend">
                                <option>Марка</option>
                                <option>1991</option>
                                <option>1992</option>
                                <option>1993</option>
                            </select>

                            <select class="form-top__select-type">
                                <option>Модель</option>
                                <option>1991</option>
                                <option>1992</option>
                                <option>1993</option>
                            </select>

                            <select class="form-top__select-mod">
                                <option>Модификация</option>
                                <option>1991</option>
                                <option>1992</option>
                                <option>1993</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="application-form__cent">
                    <div class="type-select">
                        <div class="type-select__title">
                            Выберите тип услуги
                        </div>

                        <select class="type-select__select">
                            <option>Выберите услугу-1</option>

                            <option>Выберите услугу-2</option>

                            <option>Выберите услугу-3</option>
                        </select>
                    </div>
                </div>

                <div class="application-form__bot">
                    <ul class="application-form-list">
                        <li class="application-form-list__item">
                            <div class="application-item">
                                <div class="application-item__title">
                                    <div class="application-item__title-number">1</div>

                                    <div class="application-item__title-text">
                                        Выберите дату
                                    </div>
                                </div>

                                <div class="application-item__desc">
                                    <div class="application-form-inputs">
                                        <input id="alternate" type="text" name="datee">
                                        <div id="datepicker"></div>




                                        <script src="js/jquery.js"></script>
                                        <script src="js/jquery.ui.datepicker-ru.js"></script>
                                        <script src="js/jquery-ui.js"></script>
                                        <script>
                                            $(document).ready(function () {
                                                function disableWeekend() {
                                                    $('td:nth-child(7)').addClass('ui-datepicker-unselectable ui-state-disabled ')
                                                }
                                                setInterval(disableWeekend, 1000);
                                                $( "#datepicker" ).datepicker({
                                                    inline: true,
                                                    altField: "#alternate",
                                                    altFormat: "DD, d MM, yy",
                                                    minDate: 0,
                                                    maxDate: "+3M",
                                                    regional: 'ru',
                                                });
                                            })
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="application-form-list__item">
                            <div class="application-item">
                                <div class="application-item__title">
                                    <div class="application-item__title-number">2</div>

                                    <div class="application-item__title-text">
                                        Выберите время
                                    </div>
                                </div>

                                <div class="application-item__desc">
                                    <div class="application-form-inputs">
                                        <div class="application-form-inputs">
                                            <div class="application-form-inputs__days">
                                                <div class="application-form-inputs__morning-title">
                                                    Утро
                                                </div>

                                                <ul class="morning">
                                                    <li class="morning__item">
                                                        <input type="radio" id="time-1" name="time">

                                                        <label for="time-1">09:00</label>
                                                    </li>

                                                    <li class="morning__item">
                                                        <input type="radio" id="time-2" name="time">

                                                        <label for="time-2">09:30</label>
                                                    </li>

                                                    <li class="morning__item">
                                                        <input type="radio" id="time-3" name="time">

                                                        <label for="time-3">10:00</label>
                                                    </li>

                                                    <li class="morning__item">
                                                        <input type="radio" id="time-4" name="time">

                                                        <label for="time-4">10:30</label>
                                                    </li>

                                                    <li class="morning__item">
                                                        <input type="radio" id="time-5" name="time">

                                                        <label for="time-5">11:00</label>
                                                    </li>

                                                    <li class="morning__item">
                                                        <input type="radio" id="time-6" name="time">

                                                        <label for="time-6">11:30</label>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="application-form-inputs__days">
                                                <div class="application-form-inputs__morning-title">
                                                    День
                                                </div>

                                                <ul class="morning">
                                                    <li class="morning__item">
                                                        <input type="radio" id="time-7" name="time">

                                                        <label for="time-7">12:00</label>
                                                    </li>

                                                    <li class="morning__item">
                                                        <input type="radio" id="time-8" name="time">

                                                        <label for="time-8">12:30</label>
                                                    </li>

                                                    <li class="morning__item">
                                                        <input type="radio" id="time-9" name="time">

                                                        <label for="time-9">13:00</label>
                                                    </li>

                                                    <li class="morning__item">
                                                        <input type="radio" id="time-10" name="time">

                                                        <label for="time-10">13:30</label>
                                                    </li>

                                                    <li class="morning__item">
                                                        <input type="radio" id="time-11" name="time" disabled>

                                                        <label for="time-11">14:00</label>
                                                    </li>

                                                    <li class="morning__item">
                                                        <input type="radio" id="time-14" name="time">

                                                        <label for="time-14">14:30</label>
                                                    </li>

                                                    <li class="morning__item">
                                                        <input type="radio" id="time-15" name="time">

                                                        <label for="time-15">15:00</label>
                                                    </li>

                                                    <li class="morning__item">
                                                        <input type="radio" id="time-16" name="time">

                                                        <label for="time-16">15:30</label>
                                                    </li>

                                                    <li class="morning__item">
                                                        <input type="radio" id="time-17" name="time">

                                                        <label for="time-17">16:00</label>
                                                    </li>

                                                    <li class="morning__item">
                                                        <input type="radio" id="time-18" name="time">

                                                        <label for="time-18">16:30</label>
                                                    </li>

                                                    <li class="morning__item">
                                                        <input type="radio" id="time-19" name="time">

                                                        <label for="time-19">17:00</label>
                                                    </li>

                                                    <li class="morning__item">
                                                        <input type="radio" id="time-20" name="time">

                                                        <label for="time-20">17:30</label>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="application-form-inputs__days">
                                                <div class="application-form-inputs__morning-title">
                                                    Утро
                                                </div>

                                                <ul class="morning">
                                                    <li class="morning__item">
                                                        <input type="radio" id="time-21" name="time">

                                                        <label for="time-21">18:00</label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="application-form-list__item">
                            <div class="application-item">
                                <div class="application-item__title">
                                    <div class="application-item__title-number">3</div>

                                    <div class="application-item__title-text">
                                        Контактные данные
                                    </div>
                                </div>

                                <div class="application-item__desc">
                                    <div class="application-form-inputs">
                                        <input class="application-form-inputs__input" type="text" placeholder="ФИО">
                                        <input class="application-form-inputs__input" type="text" placeholder="Номер телефона">
                                        <input class="application-form-inputs__input" type="text" placeholder="Номер автомобиля">
                                        <input class="application-form-inputs__input" type="text" placeholder="Email">
                                        <select class="application-form-inputs__input">
                                            <option>Напомнить за 1 час</option>
                                            <option>Напомнить за 2 часа</option>
                                            <option>Напомнить за 3 часа</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="application-form__comment">
                    <div class="comment-area">
                        <div class="comment-area__open-area">
                            <input class="comment-area__check" id="check-open" type="checkbox">

                            <label class="comment-area__label" for="check-open">
                                <span class="comment-area__galka"></span>

                                <span class="comment-area__text">Добавить комментарий к заявке</span>
                            </label>

                            <textarea class="comment-area__area" cols="30" rows="10" placeholder="Напишите ваш комментарий"></textarea>
                        </div>
                    </div>
                </div>

                <div class="application-form__btn">
                    <div class="btn-end">
                        <div class="btn-end__desc">
                            Ваш выбор:
                            <span class="btn-end__text">
	   								06.03.2017
	   							</span>на
                            <span class="btn-end__text">
	   								14:00
								</span>
                        </div>

                        <input class="final-btn" value="Записаться" type="submit">
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection