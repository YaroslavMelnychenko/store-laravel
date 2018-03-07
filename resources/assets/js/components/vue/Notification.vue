<template>
    <div :class="['alert', type, isShown]">
        <div class="alert-close"
            @click="hide"
        >
            <i class="fas fa-times"></i>
        </div>
        <div class="alert-heading" v-html="heading"></div>
        <div class="alert-content" v-html="message"></div>
    </div>
</template>

<script>
    export default {
        props: ['type', 'heading', 'message', 'index'],
        data: function () {
            return {
                isShown: ''
            }
        },
        methods: {
            hide: function () {
                this.$emit('hide', this.index);
            }
        }
    }
</script>