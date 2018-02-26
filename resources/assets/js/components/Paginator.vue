<template>
    <div class="paginator">
        <div class="paginator-page disabled">
            <i class="fas fa-arrow-left"></i>
        </div>
        <div class="paginator-page active">1</div>
        <div class="paginator-page">2</div>
        <div class="paginator-page">3</div>
        <div class="paginator-page">4</div>
        <div class="paginator-page">
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
    computed: {
        currentPage: function () {
            return this.arr.current_page;
        },
        lastPage: function () {
            return this.arr.last_page;
        }
    }
}
</script>