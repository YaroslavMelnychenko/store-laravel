@extends('layouts.master')

@section('content')
    @component('components.navbar')
    @endcomponent
    <section class="parallax parallax-window top" data-parallax="scroll" data-image-src="/assets/img/parallax1.png">
        <div class="banner-wrap">
            <div class="banner-row">
                <div class="banner">
                    <div class="banner-inner">
                        <div class="banner-text-wrap">
                            <div class="banner-text">
                                chayka
                            </div>
                            <div class="banner-text">
                                workshop
                            </div>
                        </div>
                        <div class="banner-line">
                            <hr>
                        </div>
                        <div class="banner-notice">
                            майстерня рукоділля
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="workshop-anchor" class="workshop-section">
        <div class="section-heading">магазин</div>
        <div id="vue-workshop-root" class="workshop">
            <div class="grid-row">
                @if(isset($categories) && isset($products))
                    <categorizer
                        categories="{{ json_encode($categories) }}"
                        active="{{ $active }}"
                        @renderproducts="render"
                    ></categorizer>
                    <div class="products">
                        <div class="grid-row">
                            <product
                                    v-for="product in products"
                                    :name="product.name"
                                    :meta="product.meta"
                                    :price="product.price"
                                    :discount="product.discount"
                                    :image="product.image"
                                    :link="/product/ + product.alias"
                                    :key="product.alias"
                            ></product>
                        </div>
                    </div>
                    <div class="pagination">
                        <paginator
                            products="{{ json_encode($products) }}"
                            @renderproducts="render"
                        ></paginator>
                    </div>
                @endif
            </div>
        </div>
    </section>
    <section id="about-us-anchor" class="about-us-section">
        <div class="section-heading">про нас</div>
        <div class="grid-wrapper">
            <div class="about-us-text">
                <p>Крамничка прикрас від Вікторії Чайки. <br>Пропонуємо вашій увазі унікальні речі, виконані власноруч.
                    Ви можете придбати вже готові роботи, або замовити прикрасу за своїм ескізом.
                    Тут ви можете знайти багато різних виробів ручної роботи виготовлених в різних техніках. <br>Кожен
                    виріб робиться під замовлення і побажання покупця.</p>
            </div>
        </div>
        <div class="grid-wrapper icons">
            <div class="grid-row">
                <div class="icon">
                    <i class="far fa-gem"></i>
                    <p>Якісний товар</p>
                </div>
                <div class="icon">
                    <i class="far fa-money-bill-alt"></i>
                    <p>Розумні ціни</p>
                </div>
                <div class="icon">
                    <i class="fas fa-comments"></i>
                    <p>Приємне спілкування</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users"></i>
                    <p>Задоволені клієнти</p>
                </div>
            </div>
        </div>
    </section>
    <section class="parallax parallax-window bottom" data-parallax="scroll" data-image-src="/assets/img/parallax1.png"></section>
    <section id="feedback-anchor" class="feedback-section">
        <div class="section-heading">контакти</div>
        <div class="grid-wrapper feedback">
            <div class="contacts">+380 (12) 34-56-789 / mail.example@gmail.com</div>
            <div id="vue-feedback-root" class="feedback-form">
                <feedback
                    :url-create="{{ json_encode(route('feedback.create')) }}"
                    :url-send="{{ json_encode(route('feedback.send')) }}"
                ></feedback>
            </div>
        </div>
    </section>
    @guest('web')
        @component('components.auth-modal')
            @slot('activated')
                {{ $activated or null }}
            @endslot
        @endcomponent
    @endguest
    @component('components.notifications')
        @slot('top')
            with-navbar
        @endslot
    @endcomponent
    @component('components.footer')
    @endcomponent
@endsection