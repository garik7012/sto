<section class="top-section">
    <div class="top-section__menu-aside">
        <nav class="menu-aside">
            <ul class="menu-aside__list">
                @foreach($leftServices as $service)
                <li class="menu-aside__item">
                    <a href="/service/{{$service->link}}" class="menu-aside__link">{{$service->title}}</a>
                </li>
                    @endforeach
            </ul>
        </nav>
    </div>
    <!--			ЭТО ТЕЛЕФОНЫ ДЛЯ ДЛЯ МОБ ВЕРСИИ надо добавить ссылки-->
    <div class="top-section__mobile-contact">
        <ul class="mobile-contact">
            <li class="mobile-contact__item">
                <a href="{{$cfs['telegram']}}" class="mobile-cont-item">
                    <img src="/img/mob-tel.png" alt="">
                </a>
            </li>

            <li class="mobile-contact__item">
                <a href="viber://add?number=380662850466" class="mobile-cont-item">
                    <img src="/img/tel.png" alt="">
                </a>
            </li>

            <li class="mobile-contact__item">
                <a href="tel:{{preg_replace('/[^0-9]/', '', $cfs['tel1'])}}" class="mobile-cont-item">
                    <img src="/img/mob-vodafone.png" alt="">
                </a>
            </li>

            <li class="mobile-contact__item">
                <a href="tel:{{preg_replace('/[^0-9]/', '', $cfs['tel2'])}}" class="mobile-cont-item">
                    <img src="/img/kievmobil.png" alt="">
                </a>
            </li>
        </ul>
    </div>

    <div class="top-section__banner-aside">
        <aside class="banner-aside">
            <div class="banner-aside__img">
                <img src="/img/banner.png" alt="machin" class="banner-aside__pic">
            </div>

            <div class="banner-aside__desc">
                <div class="banner-desc">
                    <strong class="banner-desc__title">
                        Акция
                    </strong>

                    <span class="banner-desc__text">
								Бесплатная замена масла и фильтра в АКПП
							</span>

                    <span class="banner-desc__time">
								До 15 марта
							</span>
                </div>
            </div>
        </aside>
    </div>
</section>