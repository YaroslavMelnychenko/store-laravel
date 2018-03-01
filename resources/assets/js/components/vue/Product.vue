<template>
    <div class="product-column">
        <div class="product">
            <div class="product-view" @click.stop.self="openProduct">
                <img :src="imageSrc" alt="product" @click.stop.self="openProduct">
                <div v-if="meta" class="product-meta">
                    {{ meta }}
                </div>
            </div>
            <div class="product-name" @click.stop.self="openProduct">{{ name }}</div>
            <div v-if="discount" class="product-price discount" :data-new="discountString" @click.stop.self="openProduct">{{ priceString }}</div>
            <div v-else="" class="product-price" @click.stop.self="openProduct">{{ priceString }}</div>
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
            'image',
            'link'
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
            openProduct: function () {
                location.href = this.link;
            },
            addItem: function () {
                console.log('added to cart');
            }
        }
    }
</script>