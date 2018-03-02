if(checkElement('#vue-workshop-root')){
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
}

if(checkElement('#vue-feedback-root')){
    window.feedback = new Vue({
        el: '#vue-feedback-root'
    });
}

if(checkElement('#vue-auth-modal-root')){
    window.authModal = new Vue({
        el: '#vue-auth-modal-root'
    });
}







