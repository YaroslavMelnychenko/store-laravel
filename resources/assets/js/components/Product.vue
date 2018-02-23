<template>
    <div class="product-column">
        <div class="product">
            <div class="product-view">
                <img :src="imageSrc" alt="product">
                <div v-if="meta" class="product-meta">
                    {{ meta }}
                </div>
            </div>
            <div class="product-name">{{ name }}</div>
            <div v-if="discount" class="product-price discount" :data-new="discountString">{{ priceString }}</div>
            <div v-else="" class="product-price">{{ priceString }}</div>
            <div class="btn waves-effect" @click="addItem">Додати в кошик</div>
        </div>
    </div>
</template>
<script>
    export default {
        props: [
            'name',
            'meta', 
            'price', 
            'discount',
            'image'
        ],
        computed: {
            priceString: function () {
                return this.price + ' грн';
            },
            discountString: function () {
                return this.discount + ' грн';
            },
            imageSrc: function () {
                let src = this.image || 'https://placeholdit.co//i/265x265?&bg=eee&fc=000&text=Item';
                return src;
            }
        },
        methods: {
            addItem: function () {
                console.log("test");
            }
        }
    }
</script>