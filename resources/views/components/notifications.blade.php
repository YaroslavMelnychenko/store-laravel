<div id="vue-notifications-root" class="notifies {{ $top or '' }}">
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