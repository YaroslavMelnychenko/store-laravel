<template>
    <div class="paginator">
        <div
                :class="[{'disabled': hasPrev}, 'paginator-page']"
                @click="paginate(currentPage - 1)"
        >
            <i class="fas fa-arrow-left"></i>
        </div>
        <div
                v-for="page in pages"
                :class="[{'active': page == currentPage}, 'paginator-page']"
                @click="paginate(page)"
        >{{ page }}</div>
        <div
                :class="[{'disabled': hasNext}, 'paginator-page']"
                @click="paginate(currentPage + 1)"
        >
            <i class="fas fa-arrow-right"></i>
        </div>
    </div>
</template>

<script>
export default {
    props: ['products'],
    data: function () {
        return {
            productsArray: $.parseJSON(this.products)
        }
    },
    created: function () {
        this.$emit('renderproducts', this.productsArray.data);
    },
    computed: {
        currentPage: function () {
            return this.productsArray.current_page;
        },
        lastPage: function () {
            return this.productsArray.last_page;
        },
        hasPrev: function () {
            return this.currentPage == 1;
        },
        hasNext: function () {
            return this.currentPage == this.lastPage
        },
        pages: function () {
            var arr = [];
            for (var i = 1; i <= this.lastPage; i++) {
                arr.push(i);
            }
            return arr;
        }
    },
    methods: {
        paginate: function (page) {
            if (page != this.currentPage && page <= this.lastPage && page != 0) {
                var currentUrl = window.location.pathname;
                history.pushState(null, null, currentUrl + '?page=' + page);
                $('#preloader').removeClass('done');
                axios.get(currentUrl + '/vue?page=' + page + '&csrf_token=' + csrfToken).then(function (response) {
                    window.workshop.$children[1].productsArray = response.data;
                    window.workshop.$children[0].$emit('renderproducts', response.data.data);
                    $('#preloader').addClass('done');
                });
                sliderHack();
                slideTo('#workshop-anchor');
            }
        }
    }
}
</script>