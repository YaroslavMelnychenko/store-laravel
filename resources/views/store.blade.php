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
    <section class="workshop-section">
        <div class="section-heading">магазин</div>
        <div class="workshop">
            <div class="grid-row">
                <div class="categories">
                    <div class="categories-heading">каталог</div>
                    <div class="categories-tab">
                        <div class="categories-category waves-effect active">Все</div>
                        <div class="categories-category waves-effect">Браслети</div>
                        <div class="categories-category waves-effect">Сережки</div>
                        <div class="categories-category waves-effect">Брелки</div>
                        <div class="categories-category waves-effect">Колечка</div>
                        <div class="categories-category waves-effect">Кулони</div>
                        <div class="categories-category waves-effect">Брошки</div>
                        <div class="categories-category waves-effect">Резинки</div>
                        <div class="categories-category waves-effect">Комплекти</div>
                    </div>
                </div>
                <div class="products">
                    <div id="vue-products-root" class="grid-row">
                        <product name="Товар 1" meta="Знижка 5%" price="150" discount="100"></product>
                        <product name="Товар 2" price="200"></product>
                    </div>
                </div>
                <div id="vue-paginator-root" class="pagination">
                    <paginator></paginator>
                </div>
            </div>
        </div>
    </section>

    @include('components.footer')
@endsection