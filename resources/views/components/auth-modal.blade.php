<div id="vue-auth-modal-root">
    <auth-modal
            activated="{{ $activated }}"
            :urlsignup="{{ json_encode(route('register')) }}"
            :urlsignin="{{ json_encode(route('login')) }}"
    ></auth-modal>
</div>