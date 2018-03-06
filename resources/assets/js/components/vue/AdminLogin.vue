<template>
    <div class="admin-login">
        <form id="adminLogin" @submit.prevent="submit" autocomplete="off">
            <div class="grid-wrapper">
                <div class="grid-row">
                    <div class="input-field first size-12">
                        <input id="admin-login-email" name="email" type="email" placeholder=""
                               v-model="emailValue"
                        >
                        <label for="admin-login-email">E-mail</label>
                    </div>
                </div>
                <div class="grid-row">
                    <div class="input-field size-12">
                        <input id="admin-login-password" name="password" type="password" placeholder=""
                               v-model="passwordValue"
                        >
                        <label for="admin-login-password">Пароль</label>
                    </div>
                </div>
                <label>
                    <input id="admin-login-remember" name="remember" type="checkbox"
                           v-model="remember">
                    <span>Запам'ятати мене</span>
                </label>
                <div class="grid-row button">
                    <button type="submit" class="btn waves-effect">Увійти</button>
                </div>
                <div class="grid-row forgot-password">
                    <a href="#">Забули пароль?</a>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        props: ['url'],
        data: function () {
            return {
                emailValue: '',
                passwordValue: '',
                remember: false,
                email: {
                    valid: '',
                    regExp: emailRegExp
                },
                password: {
                    valid: '',
                    regExp: passwordRegExp
                }
            }
        },
        watch: {
            emailValue: function (val) {
                if(this.email.regExp.test(val)){
                    this.email.valid = 'valid';
                } else {
                    this.email.valid = 'invalid';
                }
            },
            passwordValue: function (val) {
                if(this.password.regExp.test(val)){
                    this.password.valid = 'valid';
                } else {
                    this.password.valid = 'invalid';
                }
            }
        },
        methods: {
            receiveRsaPublicKey: function () {
                var success = false;
                $.ajax({
                    method: 'post',
                    url: '/rsa/pkey',
                    async: false,
                    success: function (response) {
                        console.log('rsa public key received');
                        window.adminLogin.rsaPublicKey = response;
                        success = true;
                    },
                    error: function () {
                        console.log('error rsa public key receiving');
                        notifications.add({
                            type: 'danger',
                            heading: 'Помилка',
                            message: 'Внутрішня помилка сервера, зверніться до адміністратора'
                        });
                    }
                });
                return success;
            },
            validate: function () {
                if(
                    this.email.valid == 'valid' &&
                    this.password.valid == 'valid'
                ){
                    return true;
                } else {
                    return false;
                }
            },
            submit: function () {
                if(this.validate()){
                    this.receiveRsaPublicKey();
                    var key = RSA.getPublicKey(window.adminLogin.rsaPublicKey);
                    var emailValueEncrypted = RSA.encrypt(this.emailValue, key);
                    var passwordValueEncrypted = RSA.encrypt(this.passwordValue, key);
                    $.ajax({
                        method: 'post',
                        url: this.url,
                        data: {
                            email: emailValueEncrypted,
                            password: passwordValueEncrypted,
                            remember: this.remember
                        },
                        beforeSend: function () {
                            preloader.on();
                        },
                        success: function (response) {
                            if(response == 'authenticated'){
                                location.href = '/admin';
                            } else if(response == 'authentication error') {
                                preloader.off();
                                notifications.add({
                                    type: 'danger',
                                    heading: 'Помилка',
                                    message: 'Невірна пошта або пароль'
                                });
                            } else if(response == 'user not found') {
                                preloader.off();
                                notifications.add({
                                    type: 'danger',
                                    heading: 'Помилка',
                                    message: 'Адміністратора з такою поштою не існує'
                                });
                            }
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
                    notifications.add({
                        type: 'danger',
                        heading: 'Помилка',
                        message: 'В полях є заборонені символи, вони порожні<br> або поштова адреса недійсна'
                    });
                }
            }
        }
    }
</script>