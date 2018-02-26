@extends('layouts.master')

@section('content')
    @include('components.navbar')

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
                <div class="categories">
                    <div class="categories-heading">каталог</div>
                    <div class="categories-tab">
                        @if($current == 'all')
                            <a href="/" class="categories-category waves-effect active">Все</a>
                        @else
                            <a href="/" class="categories-category waves-effect">Все</a>
                        @endif

                        @if($categories != null)
                            @foreach($categories as $category)
                                <a href="/category/{{ $category->alias }}" class="categories-category waves-effect
                                    @if($current == $category->alias)
                                        {{ 'active' }}
                                    @endif"
                                >{{ $category->name }}</a>
                            @endforeach
                        @endif
                    </div>
                </div>
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
                        ></product>
                    </div>
                </div>
                <div class="pagination">
                    <paginator
                        response="{{ json_encode($products) }}"
                        @renderproducts="render"
                    ></paginator>
                </div>
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
                <feedback></feedback>
            </div>
        </div>
    </section>
    <div id="vue-auth-modal-root">
        <auth-modal
            @if ($show == 'login')
                activated="login"
            @elseif ($show == 'register')
                activated="register"
            @endif
        ></auth-modal>
    </div>
    @include('components.footer')
@endsection