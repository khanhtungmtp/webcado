<template>
    <div class="message">
        <div class="message-item user-name">
            <i class="fa fa-user"></i>
        </div>
        <div class="message-item timestamp">
            3:05 PM
        </div>
        <div class="message-item text-message">
            Chào bạn, vwin2888 có thể hỗ trợ gì bạn?
        </div>
    </div>
</template>

<script>
    export default {
        name: "ChatItem.vue"
    }
</script>

<style lang="scss" scoped>
    .message {
        display: flex;
        color: #333;
        .message-item:not(:last-child) {
            margin-right: 5px;
        }
    }
    .message:not(:last-child) {
        padding-bottom: 20px;
    }
    .is-current-user {
        color: #a900ff;
    }
</style>
