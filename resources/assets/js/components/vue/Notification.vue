<template>
    <div :class="['alert', type, isShown]">
        <div class="alert-close"
            @click="hide"
        >
            <i class="fas fa-times"></i>
        </div>
        <div class="alert-heading">
            {{ heading }}
        </div>
        <div class="alert-content">
            {{ message }}
        </div>
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
        mounted: function () {
            console.log('added notification with index ' + this.index);
        },
        methods: {
            hide: function () {
                this.$emit('hide', this.index);
                console.log('closed notification with index ' + this.index);
            }
        }
    }
</script>