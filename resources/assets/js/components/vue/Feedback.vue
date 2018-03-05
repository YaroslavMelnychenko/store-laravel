<template>
    <form id="feedback" @submit.prevent="submit">
        <div class="grid-row">
            <div class="input-field size-6-12">
                <input id="feedback-name" name="name" type="text"
                       :data-length="name.maxLength"
                       v-model.lazy="nameValue"
                       :class="name.valid"
                >
                <label for="feedback-name">Ім'я</label>
                <span class="helper-text" data-error="недопустима довжина або символи">можливі лише літери</span>
            </div>
            <div class="input-field size-6-12">
                <input id="feedback-theme" name="theme" type="text"
                       :data-length="theme.maxLength"
                       v-model.lazy="themeValue"
                       :class="theme.valid"
                >
                <label for="feedback-theme">Тема</label>
                <span class="helper-text" data-error="недопустима довжина або символи">можливі лише літери</span>
            </div>
        </div>
        <div class="grid-row">
            <div class="input-field size-12">
                <input id="feedback-email" name="email" type="email"
                       v-model.lazy="emailValue"
                       :class="email.valid"
                >
                <label for="feedback-email">E-mail</label>
                <span class="helper-text" data-error="недопустима адреса">ваша діюча електронна адреса</span>
            </div>
        </div>
        <div class="grid-row">
            <div class="input-field size-12">
                <textarea id="feedback-text" name="text" class="materialize-textarea"
                          :data-length="text.maxLength"
                          v-model.lazy="textValue"
                          :class="text.valid"
                ></textarea>
                <label for="feedback-text">Текст</label>
                <span class="helper-text" data-error="недопустима довжина"></span>
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
        data: function () {
            return {
                nameValue: '',
                themeValue: '',
                emailValue: '',
                textValue: '',
                name: {
                    regExp: nameRegExp,
                    valid: '',
                    maxLength: 40
                },
                theme: {
                    regExp: nameRegExp,
                    valid: '',
                    maxLength: 40
                },
                email: {
                    regExp: emailRegExp,
                    valid: ''
                },
                text: {
                    valid: '',
                    maxLength: 500
                }
            }
        },
        methods: {
            validate: function () {
                if(
                    this.name.valid == 'valid' &&
                    this.theme.valid == 'valid' &&
                    this.email.valid == 'valid' &&
                    this.text.valid == 'valid'
                ){
                    return true;
                } else {
                    if(this.name.valid != 'valid')
                        this.name.valid = 'invalid';
                    if(this.theme.valid != 'valid')
                        this.theme.valid = 'invalid';
                    if(this.email.valid != 'valid')
                        this.email.valid = 'invalid';
                    if(this.text.valid != 'valid')
                        this.text.valid = 'invalid';
                    return false;
                }
            },
            submit: function () {
                if(this.validate()){
                    $.ajax({
                        method: 'post',
                        url: this.url,
                        data: {
                            name: this.nameValue,
                            theme: this.themeValue,
                            email: this.emailValue,
                            text: this.textValue
                        },
                        beforeSend: function () {
                            preloader.on();
                        },
                        success: function (response) {
                            preloader.off();
                            console.log(response);
                        },
                        error: function () {
                            preloader.off();
                            notifications.add({
                                type: 'danger',
                                heading: 'Помилка',
                                message: 'Внутрішня помилка сервера, зверніться до адміністратора'
                            });
                        }
                    });
                } else {
                    console.log('errors');
                    notifications.add({
                        type: 'danger',
                        heading: 'Помилка',
                        message: 'Вам необхідно заповнити всі поля вірно'
                    });
                }
            }
        },
        watch: {
            nameValue: function (val) {
                if(this.name.regExp.test(val) && checkLength(val, this.name.maxLength)){
                    this.name.valid = 'valid';
                } else {
                    this.name.valid = 'invalid';
                }
            },
            themeValue: function (val) {
                if(this.theme.regExp.test(val) && checkLength(val, this.theme.maxLength)){
                    this.theme.valid = 'valid';
                } else {
                    this.theme.valid = 'invalid';
                }
            },
            emailValue: function (val) {
                if(this.email.regExp.test(val)){
                    this.email.valid = 'valid';
                } else {
                    this.email.valid = 'invalid';
                }
            },
            textValue: function (val) {
                if(checkLength(val, this.text.maxLength)){
                    this.text.valid = 'valid';
                } else {
                    this.text.valid = 'invalid';
                }
            }
        }
    }
</script>