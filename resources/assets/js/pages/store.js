window.workshop = new Vue({
    el: '#vue-workshop-root',
    methods: {
        paginate: function (event) {
            console.log(event);
        }
    }
});

window.feedback = new Vue({
    el: '#vue-feedback-root'
});

window.authModal = new Vue({
    el: '#vue-auth-modal-root'
});

