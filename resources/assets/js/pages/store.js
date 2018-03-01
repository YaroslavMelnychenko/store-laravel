window.workshop = new Vue({
    el: '#vue-workshop-root',
    data: {
        products: ''
    },
    methods: {
        render: function (data) {
            this.products = data;
        }
    }
});

window.feedback = new Vue({
    el: '#vue-feedback-root'
});

window.authModal = new Vue({
    el: '#vue-auth-modal-root'
});

