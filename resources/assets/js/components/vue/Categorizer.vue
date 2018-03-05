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
                if(alias == 'all'){
                    var url = '/products'
                } else {
                    var url = '/products/category/' + alias;
                }
                var $this = this;
                var $paginator = window.workshop.$children[1];
                $.ajax({
                    method: 'get',
                    url: url + '/vue?csrf_token=' + csrfToken,
                    beforeSend: function () {
                        history.pushState(null, null, url);
                        preloader.on();
                    },
                    success: function (response) {
                        $this.$emit('renderproducts', response.data);
                        $paginator.productsArray = response;
                        sliderHack();
                        slideTo('#workshop-anchor');
                        preloader.off();
                    }
                });
            }
        }
    }
</script>