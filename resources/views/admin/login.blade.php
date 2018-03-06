@extends('layouts.master')

@section('content')

    <div class="body-wrapper">
        <div id="admin-login-root">
            <admin-login
                :url="{{ json_encode(route('admin.login.post')) }}"
            ></admin-login>
        </div>
        <div id="vue-notifications-root" class="notifies">
            <transition-group name="notify" tag="div">
                <notification
                        v-for="notification in notifications"
                        :index="notification.index"
                        :type="notification.type"
                        :heading="notification.heading"
                        :message="notification.message"
                        :key="notification.index"
                        @hide="hide"
                ></notification>
            </transition-group>
        </div>
    </div>

@endsection