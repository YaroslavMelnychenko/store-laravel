@extends('layouts.master')

@section('content')

    <div class="body-wrapper">
        <div id="admin-login-root">
            <admin-login
                :url="{{ json_encode(route('admin.login.post')) }}"
            ></admin-login>
        </div>
        @component('components.notifications')
            @slot('top')
                top
            @endslot
        @endcomponent
    </div>

@endsection