<template>
    <div class="admin-login">
        <form id="adminLogin">
            <div class="grid-wrapper">
                <div class="grid-row">
                    <div class="input-field first size-12">
                        <input id="admin-login-email" name="email" type="email" placeholder="">
                        <label for="admin-login-email">E-mail</label>
                    </div>
                </div>
                <div class="grid-row">
                    <div class="input-field size-12">
                        <input id="admin-login-password" name="password" type="password" placeholder="">
                        <label for="admin-login-password">Пароль</label>
                    </div>
                </div>
                <label>
                    <input id="admin-login-remember" name="remember" type="checkbox">
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