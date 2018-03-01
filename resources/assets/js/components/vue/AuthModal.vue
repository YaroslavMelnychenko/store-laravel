<template>
    <div id="authModal" class="modal">
        <div class="modal-content">
            <div class="modal-heading">
                <div :class="['modal-tab', 'waves-effect', tabs.signIn]" @click="showSignIn">Вхід</div>
                <div :class="['modal-tab', 'waves-effect', tabs.signUp]" @click="showSignUp">Реєстрація</div>
            </div>
            <div id="signInWrap" :class="['modal-form', forms.signIn]">
                <form id="signIn">
                    <div class="grid-wrapper">
                        <div class="grid-row">
                            <div class="input-field first size-12">
                                <input id="sign-in-email" name="email" type="email">
                                <label for="sign-in-email">E-mail</label>
                                <span class="helper-text">ваша електронна адреса</span>
                            </div>
                        </div>
                        <div class="grid-row">
                            <div class="input-field size-12">
                                <input id="sign-in-password" name="password" type="password">
                                <label for="sign-in-password">Пароль</label>
                                <span class="helper-text">ваш пароль</span>
                            </div>
                        </div>
                        <label>
                            <input id="sign-in-remember" name="remember" type="checkbox">
                            <span>Запам'ятати мене</span>
                        </label>
                        <div class="grid-row button">
                            <button type="submit" class="btn waves-effect">Увійти</button>
                        </div>
                    </div>
                </form>
            </div>
            <div id="signUpWrap" :class="['modal-form', forms.signUp]">
                <form id="signUp">
                    <div class="grid-wrapper">
                        <div class="grid-row">
                            <div class="input-field first size-12">
                                <input id="sign-up-name" name="name" type="text">
                                <label for="sign-up-name">Ім'я</label>
                                <span class="helper-text">можливі лише літери</span>
                            </div>
                        </div>
                        <div class="grid-row">
                            <div class="input-field size-12">
                                <input id="sign-up-email" name="email" type="email">
                                <label for="sign-up-email">E-mail</label>
                                <span class="helper-text">ваша діюча електронна адреса</span>
                            </div>
                        </div>
                        <div class="grid-row">
                            <div class="input-field size-12">
                                <input id="sign-up-password" name="password" type="password">
                                <label for="sign-up-password">Пароль</label>
                            </div>
                        </div>
                        <div class="grid-row">
                            <div class="input-field size-12">
                                <input id="sign-up-rep-password" name="rep-password" type="password" placeholder="повторіть пароль">
                                <span class="helper-text">від 5 до 40 символів, можливі лише латинські литери, цифри та - _ .</span>
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
    props: ['activated'],
    data: function() {
        return {
            tabs: {
                signIn: 'active',
                signUp: ''
            },
            forms: {
                signIn: 'active',
                signUp: ''
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
        }
    }
}
</script>