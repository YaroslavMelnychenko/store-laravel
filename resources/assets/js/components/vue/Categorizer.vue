<template>
    <div class="categories">
        <div class="categories-heading">каталог</div>
        <div class="categories-tab">
            <a
                    :class="['categories-category', 'waver-effect', isActive('all')]"
                    @click.prevent="changeCategory('all')"
            >Все</a>
            <a
                    v-for="category in categoriesArray"
                    :class="['categories-category', 'waves-effect', isActive(category.alias)]"
                    @click.prevent="changeCategory(category.alias)"
            >{{ category.name }}</a>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['categories', 'active'],
        data: function () {
            return {
                categoriesArray: $.parseJSON(this.categories),
                activeCategory: this.active
            }
        },
        methods: {
            isActive: function (alias) {
                if(this.activeCategory == alias){
                    return 'active';
                } else {
                    return '';
                }
            },
            changeCategory: function (alias) {
                this.activeCategory = alias;
                $('#preloader').removeClass('done');
                if(alias == 'all'){
                    var url = '/products'
                } else {
                    var url = '/products/category/' + alias;
                }
                history.pushState(null, null, url);
                axios.get(url + '/vue').then(function (response) {
                    var last = window.workshop.$children.length - 1;
                    window.workshop.$children[0].$emit('renderproducts', response.data.data);
                    window.workshop.$children[1].productsArray = response.data;
                    $('#preloader').addClass('done');
                    sliderHack();
                    slideTo('#workshop-anchor');
                });
            }
        }
    }
</script>