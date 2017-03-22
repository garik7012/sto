@extends('layouts.master')
@section('title', "{$content[0]->title}")
@if($content[0]->keywords != '')
    @section('keywords', $content[0]->keywords)
@endif
@if($content[0]->description != '')
    @section('description', $content[0]->description)
@endif
@section('content')
    <section class="application-page">
        <div class="application-page__form">
            <form action="/online/add" method="post" class="application-form">
                <div class="application-form__top">
                    <div class="form-top">
                        <div class="form-top__title">
                            <h2>ЗАПИСЬ</h2>
                        </div>

                        <div class="form-top__inputs">
                            <div class="form-top__inputs-text">
                                Ваше авто
                            </div>
                            <div class="form-top__select-year">
                            <select type="text" name="auto_year" placeholder="Год">
                                <option value="0" selected>Год</option>
                                @for($year = 2017; $year > 1950; $year--)
                                    <option value="{{$year}}">{{$year}}</option>
                                @endfor
                            </select>
                                <span></span>
                            </div>
                            <div class="form-top__select-brend">
                                <input type="text" name="auto_brand" maxlength="20" placeholder="Марка" required>
                                <script>
                                    $(function() {
                                        var brands = [
                                            'ALFA ROMEO','ASTON MARTIN','AUDI','BENTLEY','BMW','BOGDAN','BRABUS','BRILLIANCE','BUGATTI','BUICK','BYD','CADILLAC','CHERY','CHEVROLET','CHRYSLER','CITROEN','DACIA','DADI','DAF','DAIHATSU','DATSUN','DE TOMASO','DODGE','DS','DUCATI MOTORCYCLES','EMGRAND (GEELY)','FAW','FERRARI','FIAT','FORD','FORD USA','GAZ','GEELY','GMC','GREAT WALL','HAVAL','HONDA','HUMMER','HYUNDAI','INFINITI','ISUZU','IVECO','JAC','JAGUAR','JEEP','JMC','KIA','KTM','LADA','LAMBORGHINI','LANCIA','LAND ROVER','LEXUS','LIFAN','LINCOLN','LOTUS','MAN','MASERATI','MAYBACH','MAZDA','MCLAREN','MERCEDES-BENZ','MERCURY','MG','MINI','MITSUBISHI','MORGAN','MOSKVICH','NISSAN','OLDSMOBILE','OPEL','PLYMOUTH','PONTIAC','PORSCHE','PROTON','RAM','RENAULT','RENAULT TRUCKS','ROLLS-ROYCE','ROVER','SAAB','SAIPA','SAMSUNG','SCANIA','SCION','SEAT','SHELBY','SKODA','SMART','SOUEAST','SUBARU','SUZUKI','TATA (TELCO)','TESLA','TOYOTA','TVR','UAZ','VOLKSWAGEN','VOLVO','YAMAHA MOTORCYCLES','ZAZ','ZOTYE'
                                        ];
                                        $('input[name=auto_brand]').autocomplete({
                                            source: brands
                                        });
                                    });
                                </script>
                                <span></span>
                            </div>
                            <div class="form-top__select-type">
                                <input type="text" name="auto_type" maxlength="20" placeholder="Модель">
                                <span></span>
                            </div>
                            <div class="form-top__select-mod">
                                <input type="text" name="auto_mod" maxlength="20" placeholder="Объём двигателя">
                                <span></span>
                            </div>
                            <div class="form-top__select-mod">
                                <input type="text" name="auto_vin" maxlength="20" placeholder="VIN-код">
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="application-form__cent">
                    <div class="type-select">
                        <div class="type-select__title">
                            Выберите тип услуги
                        </div>

                        <select class="type-select__select" name="service_id" >
                            <option value="0" selected>Выберите услугу</option>
                            @foreach($listServices as $service)
                            <option value="{{$service->id}}">{{$service->title}}</option>
                            @endforeach
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
                                        <input id="alternate" type="text" maxlength="40" name="order_date">
                                        <div id="datepicker"></div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="application-form-list__item">
                            <div class="application-item">
                                <div class="application-item__title g-order_time">
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
                                                        <input type="radio" id="time-1" name="order_time" value="09:00">

                                                        <label for="time-1">09:00</label>
                                                    </li>

                                                    <li class="morning__item">
                                                        <input type="radio" id="time-2" name="order_time" value="09:30">

                                                        <label for="time-2">09:30</label>
                                                    </li>

                                                    <li class="morning__item">
                                                        <input type="radio" id="time-3" name="order_time" value="10:00">

                                                        <label for="time-3">10:00</label>
                                                    </li>

                                                    <li class="morning__item">
                                                        <input type="radio" id="time-4" name="order_time" value="10:30">

                                                        <label for="time-4">10:30</label>
                                                    </li>

                                                    <li class="morning__item">
                                                        <input type="radio" id="time-5" name="order_time" value="11:00">

                                                        <label for="time-5">11:00</label>
                                                    </li>

                                                    <li class="morning__item">
                                                        <input type="radio" id="time-6" name="order_time" value="11:30">

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
                                                        <input type="radio" id="time-7" name="order_time" value="12:00">

                                                        <label for="time-7">12:00</label>
                                                    </li>

                                                    <li class="morning__item">
                                                        <input type="radio" id="time-8" name="order_time" value="12:30">

                                                        <label for="time-8">12:30</label>
                                                    </li>

                                                    <li class="morning__item">
                                                        <input type="radio" id="time-9" name="order_time" value="13:00">

                                                        <label for="time-9">13:00</label>
                                                    </li>

                                                    <li class="morning__item">
                                                        <input type="radio" id="time-10" name="order_time" value="13:30">

                                                        <label for="time-10">13:30</label>
                                                    </li>

                                                    <li class="morning__item">
                                                        <input type="radio" id="time-11" name="order_time" value="14:00" >

                                                        <label for="time-11">14:00</label>
                                                    </li>

                                                    <li class="morning__item">
                                                        <input type="radio" id="time-12" name="order_time" value="14:30">

                                                        <label for="time-12">14:30</label>
                                                    </li>

                                                    <li class="morning__item">
                                                        <input type="radio" id="time-13" name="order_time" value="15:00">

                                                        <label for="time-13">15:00</label>
                                                    </li>

                                                    <li class="morning__item">
                                                        <input type="radio" id="time-14" name="order_time" value="15:30">

                                                        <label for="time-14">15:30</label>
                                                    </li>

                                                    <li class="morning__item">
                                                        <input type="radio" id="time-15" name="order_time" value="16:00">

                                                        <label for="time-15">16:00</label>
                                                    </li>

                                                    <li class="morning__item">
                                                        <input type="radio" id="time-16" name="order_time" value="16:30">

                                                        <label for="time-16">16:30</label>
                                                    </li>

                                                    <li class="morning__item">
                                                        <input type="radio" id="time-17" name="order_time" value="17:00">

                                                        <label for="time-17">17:00</label>
                                                    </li>

                                                    <li class="morning__item">
                                                        <input type="radio" id="time-18" name="order_time" value="17:30">

                                                        <label for="time-18">17:30</label>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="application-form-inputs__days">
                                                <div class="application-form-inputs__morning-title">
                                                    Вечер
                                                </div>

                                                <ul class="morning">
                                                    <li class="morning__item">
                                                        <input type="radio" id="time-19" name="order_time" value="18:00">

                                                        <label for="time-19">18:00</label>
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
                                        <div class="application-form-inputs__input">
                                        <input type="text" name="fio" placeholder="ФИО" maxlength="55" required>
                                            <span></span>
                                        </div>
                                        <div class="application-form-inputs__input">
                                        <input type="tel" name="phone" placeholder="Номер телефона" maxlength="25" required>
                                            <span></span>
                                        </div>
                                        <div class="application-form-inputs__input">
                                        <input type="text" name="avto_nomer" maxlength="20" placeholder="Номер автомобиля">
                                            <span></span>
                                        </div>
                                        <div class="application-form-inputs__input">
                                        <input type="email" name='email' placeholder="Email">
                                            <span></span>
                                        </div>
                                        <div class="application-form-inputs__input">
                                        <select name="remind">
                                            <option value="1">Напомнить за 1 час</option>
                                            <option value="2">Напомнить за 2 часа</option>
                                            <option value="3">Напомнить за 3 часа</option>
                                        </select>
                                        </div>
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

                            <textarea class="comment-area__area" cols="30" rows="10" maxlength="255" name="comments" placeholder="Напишите ваш комментарий"></textarea>
                        </div>
                    </div>
                </div>
                <div class="application-form__btn">
                    <div class="btn-end">
                        <div class="btn-end__desc">
                            Ваш выбор:
                            <span id="choosenDate" class="btn-end__text">
	   								{{date('d.'.'m.'.'Y')}}
	   							</span>на
                            <span id="choosenTime" class="btn-end__text">
	   								9:00
								</span>
                        </div>
                        {{csrf_field()}}
                        <input class="final-btn" value="Записаться" type="submit">
                    </div>
                </div>
            </form>

        </div>
    </section>
    <script src="/js/jquery.ui.datepicker-ru.js"></script>
    <script src="/js/jquery-ui_old.js"></script>
    <script>
        $(document).ready(function () {
            var currentDate = "{{date('d.'.'m.'.'Y')}}";
            //делаем неактивные воскресенья
            function disableWeekend() {
                $('td:nth-child(7)').addClass('ui-datepicker-unselectable ui-state-disabled ')
            }
            setInterval(disableWeekend, 500);
            $( "#datepicker" ).datepicker({
                inline: true,
                altField: "#alternate",
                altFormat: "DD, d MM, yy",
                minDate: 0,
                maxDate: "+3M",
                regional: 'ru',
                onSelect: function (selectedDate) {
                    $('#choosenDate').text(selectedDate);
                    checkTime(selectedDate);
                }
            });
            $('.morning__item').click(function () {
                var choosenTime = $('input[name=order_time]:checked').val();
                $('#choosenTime').text(choosenTime);
            });
            //делаем неактивное сегодняшнее время +
            function disableTime() {
                var time = new Date();
                var hour = time.getHours();
                var minute = time.getMinutes();
                var shifft = (hour - 8)*2;
                if(minute > 30) shifft++;
                if(shifft>0) {
                    for (var i = 1; i <= shifft+1; i++) {
                        $('#time-' + i).prop('disabled', true);
                    }
                }
            }
            disableTime();
            function enableTime() {
                for (var i = 1; i <= 19; i++) {
                    $('#time-' + i).prop('disabled', false);
                }
            }
            function checkTime(selectedDate) {
                if(selectedDate == currentDate){
                    disableTime();
                } else enableTime();
            }

        });
    </script>
@endsection
