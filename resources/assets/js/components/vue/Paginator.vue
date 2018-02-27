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
    props: ['response'],
    data: function () {
        return {
            arr: $.parseJSON(this.response)
        }
    },
    created: function () {
        if(this.arr != null){
            this.$emit('renderproducts', this.arr.data);
        }
    },
    computed: {
        currentPage: function () {
            if (this.arr != null) {
                return this.arr.current_page;
            } else return null;
        },
        hasPrev: function () {
            if (this.arr != null) {
                return this.currentPage == 1;
            } else return null;
        },
        hasNext: function () {
            if (this.arr != null) {
                return this.currentPage == this.lastPage;
            } else return null;
        },
        lastPage: function () {
            if (this.arr != null) {
                return this.arr.last_page;
            } else return null;
        },
        pages: function () {
            if (this.arr != null) {
                var arr = [];
                for(var i = 1; i <= this.lastPage; i++) {
                    arr.push(i);
                }
                return arr;
            } else return null;
        }
    },
    methods: {
        paginate: function (page) {
            if (page != this.currentPage && page <= this.lastPage && page != 0) {
                history.pushState(null, null, '?page=' + page);
                $('#preloader').removeClass('done');
                if(location.pathname == '/'){
                    var url = '/vue?page=' + page;
                } else {
                    var url = location.pathname + '/vue?page=' + page;
                }
                axios.get(url).then(function(response){
                    window.workshop.$children[0].arr = response.data;
                    window.workshop.$children[0].$emit('renderproducts', response.data.data);
                    $('#preloader').addClass('done');
                });
                $('body,html').scrollTop(
                    $('#workshop-anchor').offset().top
                );
                $('.parallax.bottom').remove();
                $('#about-us-anchor').after('<section class="parallax parallax-window bottom" data-parallax="scroll" data-image-src="/assets/img/parallax1.png"></section>');
            }
        }
    }
}
</script>