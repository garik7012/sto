@extends('layouts.master')
@section('content')
    <div class="services-description">
        <div class="services-description__left">
            <div class="services-description__image">
                <div class="services-desc-img">
                    <div class="services-desc-img__img">
                        <div class="services-desc-img__wrap">
                            <img src="/{{$service->photo1}}" alt="">
                        </div>
                    </div>

                    <div class="services-desc-img__img">
                        <div class="services-desc-img__wrap">
                            <img src="/{{$service->photo2}}" alt="">
                        </div>
                    </div>

                    <div class="services-desc-img__img">
                        <div class="services-desc-img__wrap">
                            <img src="/{{$service->photo3}}" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="services-description__text">
                <div class="services-text">
                    {!! $service->text !!}
                </div>
            </div>
        </div>

        <div class="services-description__right">
            <div class="services-form">
                <div class="services-form__title">
						<span class="services-form__title-top">
							Записаться на
						</span>

                    <span class="services-form__title-main">
							мега -сервис
						</span>
                </div>

                <form class="services-form__form">
                    <input type="text" class="services-form__input" placeholder="Имя">

                    <input type="text" class="services-form__input" placeholder="Телефон">

                    <input type="text" class="services-form__input" placeholder="Email">
                    <!--НУЖНО В ВЕЛЪЮ ВСТАВИТЬ ДАТУ-->
                    <input type="text" class="services-form__input" placeholder="Дата">

                    <select  class="services-form__select">
                        <option>Время</option>

                        <option>Время</option>

                        <option>Время</option>

                        <option>Время</option>
                    </select>

                    <select class="services-form__select">
                        <option>Услуга</option>

                        <option>Услуга</option>

                        <option>Услуга</option>

                        <option>Услуга</option>
                    </select>

                    <input class="services-btn  services-form__btn" type="submit" value="записаться">
                </form>
            </div>
        </div>
    </div>

    @include('layouts.services')
@endsection