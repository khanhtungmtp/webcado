<template>
    <div>
        <div class="chat">
            <div class="chat-title">
                Chat trực tuyến
            </div>
            <div class="messages">
                <div class="messages-content">
                    <ChatItem v-for="n in 2" :key="n"></ChatItem>
                </div>
            </div>
            <div class="message-box">
                <textarea type="text" class="message-input" placeholder="Nhắn cho chúng tôi..."></textarea>
            </div>
        </div>
    </div>
</template>

<script>
    import ChatItem from "./ChatItem";
    export default {
        name: "ChatLayout.vue",
        components: {
            ChatItem
        }
    }
</script>

<style scoped lang="scss">
    .messages {
        height: 80%;
        overflow-y: scroll;
        padding: 0 20px;
    }
    /*--------------------
    Chat
    --------------------*/
    .chat {
        position: fixed;
        bottom: 0;
        right: 30px;
        width: 372px;
        height: 70vh;
        max-height: 700px;
        z-index: 2;
        overflow: hidden;
        box-shadow: 0 5px 30px rgba(0, 0, 0, .2);
        background-color: #FFFFFF;
        border-radius: 20px;
        display: flex;
        justify-content: space-between;
        flex-direction: column;
    }
    /*--------------------
    Chat Title
    --------------------*/
    .chat-title {
        flex: 0 1 45px;
        position: relative;
        z-index: 2;
        background-color: #d01639;
        color: #fff!important;
        text-transform: uppercase;
        text-align: left;
        padding: 10px 10px 10px 50px;

        /*h1, h2 {*/
        /*    font-weight: normal;*/
        /*    font-size: 16px;*/
        /*    margin: 0;*/
        /*    padding: 0;*/
        /*}*/
        /*h2 {*/
        /*    color: rgba(255, 255, 255, .5);*/
        /*    font-size: 8px;*/
        /*    letter-spacing: 1px;*/
        /*}*/

        .avatar {
            position: absolute;
            z-index: 1;
            top: 8px;
            left: 9px;
            border-radius: 30px;
            width: 30px;
            height: 30px;
            overflow: hidden;
            margin: 0;
            padding: 0;
            border: 2px solid rgba(255, 255, 255, 0.24);
            img {
                width: 100%;
                height: auto;
            }
        }
    }
    /*--------------------
    Message Box
    --------------------*/
    .message-box {
        flex: 0 1 40px;
        width: 100%;
        background: rgba(0, 0, 0, 0.3);
        padding:0 10px;
        position: relative;

        & .message-input {
            background: none;
            border: none;
            outline: none!important;
            resize: none;
            margin: 0;
            width: 100%;
            height: 100%;
        }
        textarea:focus:-webkit-placeholder{
            color: transparent;
        }

        & .message-submit {
            position: absolute;
            z-index: 1;
            top: 17px;
            right: 10px;
            color: #fff;
            border: none;
            background: #248A52;
            font-size: 10px;
            text-transform: uppercase;
            line-height: 1;
            padding: 6px 10px;
            border-radius: 10px;
            outline: none!important;
            transition: background .2s ease;
            &:hover {
                background: #1D7745;
            }
        }
    }
</style>
