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

if(checkElement('#vue-notifications-root')){
    window.notifications = new Vue({
        el: '#vue-notifications-root',
        data: {
            notifications: [],
            index: 0
        },
        methods: {
            add: function (notification) {
                this.notifications.push({
                    index: this.index,
                    heading: notification.heading,
                    message: notification.message,
                    type: notification.type
                });
                this.index++;
            },
            removeAll: function () {
                this.notifications = [];
            },
            hide: function (index) {
                for(var i = 0; i < this.notifications.length; i++) {
                    if(this.notifications[i].index == index) {
                        this.notifications.splice(i, 1);
                    }
                }
            }
        }
    });
}







