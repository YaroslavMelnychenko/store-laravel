<template>
    <div id="authModal" class="modal">
        <div class="modal-content">
            <div class="modal-heading">
                <div :class="['modal-tab', 'waves-effect', tabs.signIn]" @click="showSignIn">Вхід</div>
                <div :class="['modal-tab', 'waves-effect', tabs.signUp]" @click="showSignUp">Реєстрація</div>
            </div>
            <div id="signInWrap" :class="['modal-form', forms.signIn]">
                <form id="signIn" @submit.prevent="login">
                    <div class="grid-wrapper">
                        <div class="grid-row">
                            <div class="input-field first size-12">
                                <input id="sign-in-email" name="email" type="email"
                                       v-model.lazy="signInEmailValue"
                                       :class="signIn.email.valid"
                                >
                                <label for="sign-in-email">E-mail</label>
                                <span class="helper-text" data-error="недопустима адреса">ваша електронна адреса</span>
                            </div>
                        </div>
                        <div class="grid-row">
                            <div class="input-field size-12">
                                <input id="sign-in-password" name="password" type="password"
                                       v-model="signInPasswordValue"
                                       :class="signIn.password.valid"
                                >
                                <label for="sign-in-password">Пароль</label>
                                <span class="helper-text" data-error="недопустимий пароль">ваш пароль</span>
                            </div>
                        </div>
                        <label>
                            <input id="sign-in-remember" name="remember" type="checkbox"
                                   v-model="signInRemember"
                            >
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
            <div id="signUpWrap" :class="['modal-form', forms.signUp]">
                <form id="signUp" @submit.prevent="register">
                    <div class="grid-wrapper">
                        <div class="grid-row">
                            <div class="input-field first size-12">
                                <input id="sign-up-name" name="name" type="text"
                                       v-model.lazy="signUpNameValue"
                                       :class="signUp.name.valid"
                                       :data-length="signUp.name.maxLength"
                                >
                                <label for="sign-up-name">Ім'я</label>
                                <span class="helper-text" data-error="недопустима довжина або символи">можливі лише літери</span>
                            </div>
                        </div>
                        <div class="grid-row">
                            <div class="input-field size-12">
                                <input id="sign-up-email" name="email" type="email"
                                       v-model.lazy="signUpEmailValue"
                                       :class="signUp.email.valid"
                                >
                                <label for="sign-up-email">E-mail</label>
                                <span class="helper-text" data-error="недопустима адреса">ваша діюча електронна адреса</span>
                            </div>
                        </div>
                        <div class="grid-row">
                            <div class="input-field size-12">
                                <input id="sign-up-password" name="password" type="password"
                                       v-model.lazy="signUpPasswordValue"
                                       :class="signUp.password.valid"
                                       :data-length="signUp.password.maxLength"
                                >
                                <label for="sign-up-password">Пароль</label>
                                <span class="helper-text" data-error="недопустима довжина або символи"></span>
                            </div>
                        </div>
                        <div class="grid-row">
                            <div class="input-field size-12" style="margin-top: 0">
                                <input id="sign-up-rep-password" name="rep-password" type="password" placeholder="повторіть пароль"
                                       v-model="signUpRepPasswordValue"
                                       :class="signUp.repPassword.valid"
                                >
                                <span class="helper-text" data-error="паролі не співпадають">від 5 до 40 символів, можливі лише латинські литери, цифри та - _ .</span>
                            </div>
                        </div>
                        <div class="grid-row button">
                            <button type="submit" class="btn waves-effect">Зареєструватись</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ['activated', 'urlsignup', 'urlsignin'],
    data: function() {
        return {
            tabs: {
                signIn: 'active',
                signUp: ''
            },
            forms: {
                signIn: 'active',
                signUp: ''
            },
            signUpNameValue: '',
            signUpEmailValue: '',
            signUpPasswordValue: '',
            signUpRepPasswordValue: '',
            signUp: {
                name: {
                    regExp: nameRegExp,
                    valid: '',
                    maxLength: 40
                },
                email: {
                    regExp: emailRegExp,
                    valid: '',
                },
                password: {
                    regExp: passwordRegExp,
                    valid: '',
                    minLength: 5,
                    maxLength: 40
                },
                repPassword: {
                    valid: ''
                }
            },
            signInEmailValue: '',
            signInPasswordValue: '',
            signInRemember: false,
            signIn: {
                email: {
                    regExp: emailRegExp,
                    valid: ''
                },
                password: {
                    regExp: passwordRegExp,
                    valid: ''
                }
            }
        }
    },
    mounted: function() {
        var modal = document.querySelector('#authModal');
        if (this.activated !== undefined) {
            var instance = M.Modal.init(modal, {
                dismissible: false
            });
            if(this.activated == 'register') {
                this.showSignUp();
            } else if(this.activated == 'login') {
                this.showSignIn();
            }
            instance.open();
        } else {
            var instance = M.Modal.init(modal, {
                onOpenStart: function() {
                    history.pushState(null, null, '/login');
                },
                onCloseStart: function() {
                    history.pushState(null, null, '/products');
                    window.authModal.$children[0].tabs.signIn = 'active';
                    window.authModal.$children[0].tabs.signUp = '';
                    window.authModal.$children[0].forms.signIn = 'active';
                    window.authModal.$children[0].forms.signUp = '';
                }
            });
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
                    window.authModal.rsaPublicKey = response;
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
        showSignIn: function() {
            this.tabs.signUp = '';
            this.tabs.signIn = 'active';
            this.forms.signUp = '';
            this.forms.signIn = 'active';
            history.pushState(null, null, '/login');
        },
        showSignUp: function() {
            this.tabs.signUp = 'active';
            this.tabs.signIn = '';
            this.forms.signUp = 'active';
            this.forms.signIn = '';
            history.pushState(null, null, '/register');
        },
        validateSignUp: function () {
            if(
                this.signUp.name.valid == 'valid' &&
                this.signUp.email.valid == 'valid' &&
                this.signUp.password.valid == 'valid' &&
                this.signUp.repPassword.valid == 'valid'
            ){
                return true;
            } else {
                if(this.signUp.name.valid != 'valid')
                    this.signUp.name.valid = 'invalid';
                if(this.signUp.email.valid != 'valid')
                    this.signUp.email.valid = 'invalid';
                if(this.signUp.password.valid != 'valid')
                    this.signUp.password.valid = 'invalid';
                if(this.signUp.repPassword.valid != 'valid')
                    this.signUp.repPassword.valid = 'invalid';
                return false;
            }
        },
        register: function () {
            if(this.validateSignUp()){
                this.receiveRsaPublicKey();
                var key = RSA.getPublicKey(window.authModal.rsaPublicKey);
                var signUpEmailValueEncrypted = RSA.encrypt(this.signUpEmailValue, key);
                var signUpPasswordValueEncrypted = RSA.encrypt(this.signUpPasswordValue, key);
                $.ajax({
                    method: 'post',
                    url: this.urlsignup,
                    data: {
                        name: this.signUpNameValue,
                        email: signUpEmailValueEncrypted,
                        password: signUpPasswordValueEncrypted
                    },
                    beforeSend: function () {
                        preloader.on();
                    },
                    success: function (response) {
                        if (response == 'registered') {
                            location.href = '/profile';
                        } else if (response == 'user already exists') {
                            preloader.off();
                            notifications.add({
                                type: 'danger',
                                heading: 'Помилка',
                                message: 'Користувач з такою поштою вже існує'
                            });
                        } else {
                            preloader.off();
                            notifications.add({
                                type: 'danger',
                                heading: 'Помилка',
                                message: 'Внутрішня помилка сервера, зверніться до адміністратора'
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
                    message: 'Вам необхідно заповнити всі поля вірно'
                });
            }
        },
        validateSignIn: function () {
            if(
                this.signIn.email.valid == 'valid' &&
                this.signIn.password.valid == 'valid'
            ){
                return true;
            } else {
                if(this.signIn.email.valid != 'valid')
                    this.signIn.email.valid = 'invalid';
                if(this.signIn.password.valid != 'valid')
                    this.signIn.password.valid = 'invalid';
                return false;
            }
        },
        login: function () {
            if (this.validateSignIn()) {
                this.receiveRsaPublicKey();
                var key = RSA.getPublicKey(window.authModal.rsaPublicKey);
                var signInEmailValueEncrypted = RSA.encrypt(this.signInEmailValue, key);
                var signInPasswordValueEncrypted = RSA.encrypt(this.signInPasswordValue, key);
                $.ajax({
                    method: 'post',
                    url: this.urlsignin,
                    data: {
                        email: signInEmailValueEncrypted,
                        password: signInPasswordValueEncrypted,
                        remember: this.signInRemember
                    },
                    beforeSend: function () {
                        preloader.on();
                    },
                    success: function (response) {
                        if(response == 'authenticated'){
                            location.href = '/profile';
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
                                message: 'Користувача з такою поштою не існує'
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
                    message: 'Вам необхідно заповнити всі поля вірно'
                });
            }
        }
    },
    watch: {
        signUpNameValue: function (val) {
            if(this.signUp.name.regExp.test(val) && checkLength(val, this.signUp.name.maxLength)){
                this.signUp.name.valid = 'valid';
            } else {
                this.signUp.name.valid = 'invalid';
            }
        },
        signUpEmailValue: function (val) {
            if(this.signUp.email.regExp.test(val)){
                this.signUp.email.valid = 'valid';
            } else {
                this.signUp.email.valid = 'invalid';
            }
        },
        signUpPasswordValue: function (val) {
            if(this.signUp.password.regExp.test(val) && checkLength(val, this.signUp.password.maxLength, this.signUp.password.minLength)){
                this.signUp.password.valid = 'valid';
            } else {
                this.signUp.password.valid = 'invalid';
            }

            if(this.signUpRepPasswordValue != '' && this.signUpRepPasswordValue != val){
                this.signUp.repPassword.valid = 'invalid';
            }

            if(this.signUpRepPasswordValue != '' && this.signUpRepPasswordValue == val){
                this.signUp.repPassword.valid = 'valid';
            }
        },
        signUpRepPasswordValue: function (val) {
            if(this.signUpPasswordValue == val){
                this.signUp.repPassword.valid = 'valid';
            } else {
                this.signUp.repPassword.valid = 'invalid';
            }
        },
        signInEmailValue: function (val) {
            if(this.signIn.email.regExp.test(val)){
                this.signIn.email.valid = 'valid';
            } else {
                this.signIn.email.valid = 'invalid';
            }
        },
        signInPasswordValue: function (val) {
            if(this.signIn.password.regExp.test(val)){
                this.signIn.password.valid = 'valid';
            } else {
                this.signIn.password.valid = 'invalid';
            }
        }
    }
}
</script>