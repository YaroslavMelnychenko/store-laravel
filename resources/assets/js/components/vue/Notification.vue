<template>
    <div :class="['alert', type, isShown]">
        <div class="alert-close"
            @click="closeNotification"
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
        props: ['type', 'heading', 'message'],
        data: function () {
            return {
                isShown: ''
            }
        },
        mounted: function () {
            this.isShown = 'shown'
        },
        methods: {
            closeNotification: function () {
                console.log('destroy');
            }
        }
    }
</script>