<div id="vue-auth-modal-root">
    <auth-modal
            @if(isset($login))
            activated="login"
            @elseif(isset($register))
            activated="register"
            @endif
            :urlsignup="{{ json_encode(route('register')) }}"
            :urlsignin="{{ json_encode(route('login')) }}"
    ></auth-modal>
</div>