@extends('layouts.master')
@section('title', 'Вакансии')
@section('content')
    @include('layouts.topsection')
    <section class="vacancies">
        <div class="vacancies__banner">
            <div class="vacancies__banner__img">
                <img src="img/face-man.png" alt="">
            </div>
        </div>

        <div class="vacancies__lists">
            <div class="vacancies__desc">
                <div class="vacancies-desc">
                    <div class="vacancies-desc__title">
                        <h2 class="vacancies-desc__main-title">
                            СТО "Мега-сервис"

                            <span class="vacancies-desc__text">
									начинает подбор на вакансию:
								</span>
                        </h2>
                    </div>

                    <div class="vacancies-desc__list">
                        <ol class="vacancies-list">
                            <li class="vacancies-list__li">
                                1 . Автоэлектрик, диагност-моторист;
                            </li>

                            <li class="vacancies-list__li">
                                2.  Маляр, рихтовщик;
                            </li>

                            <li class="vacancies-list__li">
                                3.  Менеджер СТО.
                            </li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="vacancies__desc">
                <div class="vacancies-desc">
                    <div class="vacancies-desc__title">
                        <strong class="vacancies-desc__main-title">
                            Условия работы:
                        </strong>
                    </div>

                    <div class="vacancies-desc__list">
                        <ul class="vacancies-list">
                            <li class="vacancies-list__li">
                                09:00−20:00 пн - пт
                            </li>

                            <li class="vacancies-list__li">
                                10:00−18:00 сб
                            </li>

                            <li class="vacancies-list__li">
                                выходной − вс
                            </li>

                            <li class="vacancies-list__li">
                                З/п: стабильно высокая
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="vacancies__desc">
                <div class="vacancies-desc">
                    <div class="vacancies-desc__title">
                        <strong class="vacancies-desc__main-title">
                            Требования:
                        </strong>
                    </div>

                    <div class="vacancies-desc__list">
                        <ol class="vacancies-list">
                            <li class="vacancies-list__li">
                                1. Опыт  работы
                            </li>

                            <li class="vacancies-list__li">
                                2. Детали при собеседовании
                            </li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="vacancies-desc__contact">
                <div class="vac-tel">
                    <div class="vac-tel__text">
                        СОБЕСЕДОВАНИЕ
                        <a href="tel:+380674406611">+380674406611</a>
                        - Валентин Владимирович.
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.services')
@endsection