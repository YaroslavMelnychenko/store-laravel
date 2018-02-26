<template>
    <form id="feedback" @submit.prevent="submit">
        <div class="grid-row">
            <div class="input-field size-6">
                <input id="feedback-name" name="name" type="text" data-length="30">
                <label for="feedback-name">Ім'я</label>
                <span class="helper-text">можливі лише літери</span>
            </div>
            <div class="input-field size-6">
                <input id="feedback-theme" name="theme" type="text" data-length="30">
                <label for="feedback-theme">Тема</label>
                <span class="helper-text">можливі лише літери</span>
            </div>
        </div>
        <div class="grid-row">
            <div class="input-field size-12">
                <input id="feedback-email" name="email" type="email">
                <label for="feedback-email">E-mail</label>
                <span class="helper-text">ваша діюча електронна адреса</span>
            </div>
        </div>
        <div class="grid-row">
            <div class="input-field size-12">
                <textarea id="feedback-text" name="text" class="materialize-textarea" data-length="500"></textarea>
                <label for="feedback-text">Текст</label>
            </div>
        </div>
        <div class="grid-row">
            <div class="input-field button">
                <button class="btn waves-effect" type="submit">Відправити</button>
            </div>
        </div>
    </form>
</template>

<script>
    export default {
        props: ['url'],
        methods: {
            submit: function () {
                console.log('submit');
            }
        }
    }
</script>