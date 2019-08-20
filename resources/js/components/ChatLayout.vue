<template>
    <div v-bind:class="getClass()">
        <div class="chatbox-title">
            <h5>Hỗ trợ trực tuyến</h5>
            <button class="chatbox-title-tray">
                <span></span>
            </button>

        </div>
        <div class="chatbox-body">
            <div  v-for="(content, index) in listMessage" :key="index">
                <div class="chatbox-body-message chatbox-body-message-left">
                    <img src="https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg" alt="Picture">
                    <p>Chào bạn , chúng tôi có thể giúp được gì cho bạn ?.</p>
                </div>
                <div class="chatbox-body-message chatbox-body-message-right">
                    <img src="https://s3.amazonaws.com/uifaces/faces/twitter/arashmil/128.jpg" alt="Picture">
                    <p>{{ content.chat_content }}</p>
                </div>
            </div>
        </div>
        <form class="chatbox-credentials" @submit="sendProfileChat" >
            <div class="form-group">
                <input type="text" v-model="chatName" class="form-control" id="inputName" required
                       placeholder="Tên của bạn:">
            </div>
            <div class="form-group">
                <input type="email" v-model="chatEmail" class="form-control" id="inputEmail" required
                       placeholder="Email:">
            </div>
            <button type="submit" class="btn btn-success btn-block">Chat ngay</button>
        </form>

        <textarea @keyup.enter="sendMessage" v-model="chatContent" class="chatbox-message" name="chat_content"
                  placeholder="Đặt câu hỏi cho chúng tôi ngay"></textarea>

    </div>
</template>

<script>
    export default {
        name: "ChatLayout",
        data() {
            return {
                chatUserID: '',
                chatName: '',
                chatEmail: '',
                chatContent: '',
                listMessage: []
            }
        },
        created: function () {
             // console.log(this.listMessage);
            this.loadMessage();
        }
        ,
        methods: {
            getClass() {
                return {
                    'chatbox' : 'chatbox',
                    'chatbox-tray' : !this.$root.currentUserChat.idUserChat,
                    'chatbox-empty' : !this.$root.currentUserChat.idUserChat,
                }
            },
            loadMessage() {
                axios.get('/messages').then(response => {
                    console.log(response.data)
                    this.listMessage = response.data
                }).catch(error => {
                    console.log(error)
                });
            },
            sendProfileChat(e) {
                e.preventDefault();
                axios.post('/user-info', {
                    chatName: this.chatName,
                    chatEmail: this.chatEmail
                }).then(response => {
                    console.log(response.data)
                }).catch(error => {
                    console.log(error)
                })
            }
            ,
            sendMessage() {
                axios.post('/messages', {
                    chatUserID: this.$root.currentUserChat.idUserChat,
                    chatContent: this.chatContent
                }).then(response => {
                    this.listMessage.push({
                        chatUserID: this.$root.currentUserChat.idUserChat,
                        chatContent: this.chatContent,
                        created_at: new Date().toJSON().replace(/T|Z/gi, ' '),
                        user_email: this.$root.currentUserChat.emailUserChat
                    })
                    this.chatContent = ''
                }).catch(error => {
                    console.log(error)
                })
            }
        }
    }
</script>

<style scoped>
    .chatbox {
        position: fixed;
        bottom: 0;
        right: 30px;
        width: 300px;
        height: 400px;
        background-color: #fff;
        font-family: 'Lato', sans-serif;
        -webkit-transition: all 600ms cubic-bezier(0.19, 1, 0.22, 1);
        transition: all 600ms cubic-bezier(0.19, 1, 0.22, 1);
        display: -webkit-flex;
        display: flex;
        -webkit-flex-direction: column;
        flex-direction: column;
    }

    .chatbox-tray {
        bottom: -350px;
    }

    .chatbox-closed {
        bottom: -400px;
    }

    .chatbox .form-control:focus {
        border-color: #1f2836;
    }

    .chatbox-title,
    .chatbox-body {
        border-bottom: none;
    }

    .chatbox-title {
        min-height: 50px;
        padding-right: 10px;
        background-color: #1f2836;
        border-top-left-radius: 4px;
        border-top-right-radius: 4px;
        cursor: pointer;

        display: -webkit-flex;
        display: flex;

        -webkit-align-items: center;
        align-items: center;
    }

    .chatbox-title h5 {
        height: 50px;
        margin: 0 0 0 15px;
        line-height: 50px;
        position: relative;
        padding-left: 20px;

        -webkit-flex-grow: 1;
        flex-grow: 1;
    }

    .chatbox-title h5 a {
        color: #fff;
        font-size: 14px;
        max-width: 195px;
        display: inline-block;
        text-decoration: none;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .chatbox-title h5:before {
        content: '';
        display: block;
        position: absolute;
        top: 50%;
        left: 0;
        width: 12px;
        height: 12px;
        background: #4CAF50;
        border-radius: 6px;

        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
    }

    .chatbox-title-tray,
    .chatbox-title-close {
        width: 24px;
        height: 24px;
        outline: 0;
        border: none;
        background-color: transparent;
        opacity: 0.5;
        cursor: pointer;
        -webkit-transition: opacity 200ms;
        transition: opacity 200ms;
    }

    .chatbox-title-tray:hover,
    .chatbox-title-close:hover {
        opacity: 1;
    }

    .chatbox-title-tray span {
        width: 12px;
        height: 12px;
        display: inline-block;
        border-bottom: 2px solid #fff
    }

    .chatbox-title-close svg {
        vertical-align: middle;
        stroke-linecap: round;
        stroke-linejoin: round;
        stroke-width: 1.2px;
    }

    .chatbox-body,
    .chatbox-credentials {
        padding: 15px;
        border-top: 0;
        background-color: #f5f5f5;
        border-left: 1px solid #ddd;
        border-right: 1px solid #ddd;
        -webkit-flex-grow: 1;
        flex-grow: 1;
    }

    .chatbox-credentials {
        display: none;
    }

    .chatbox-credentials .form-control {
        -webkit-box-shadow: none;
        box-shadow: none;
    }

    .chatbox-body {
        overflow-y: auto;
    }

    .chatbox-body-message {
        position: relative;
    }

    .chatbox-body-message p {
        padding: 15px;
        border-radius: 4px;
        font-size: 14px;
        background-color: #fff;
        -webkit-box-shadow: 1px 1px rgba(100, 100, 100, 0.1);
        box-shadow: 1px 1px rgba(100, 100, 100, 0.1);
    }

    .chatbox-body-message img {
        width: 40px;
        height: 40px;
        border-radius: 4px;
        border: 2px solid #fcfcfc;
        position: absolute;
        top: 15px;
    }

    .chatbox-body-message-left p {
        margin-left: 15px;
        padding-left: 30px;
        text-align: left;
    }

    .chatbox-body-message-left img {
        left: -5px;
    }

    .chatbox-body-message-right p {
        margin-right: 15px;
        padding-right: 30px;
        text-align: right;
    }

    .chatbox-body-message-right img {
        right: -5px;
    }

    .chatbox-message {
        padding: 15px;
        min-height: 50px;
        outline: 0;
        resize: none;
        /*border: none;*/
        font-size: 12px;
        width: 100%;
        border: 1px solid #ddd;
        border-bottom: none;
        background-color: #fefefe;
    }

    .chatbox-empty {
        height: 262px;
    }

    .chatbox-empty.chatbox-tray {
        bottom: -212px;
    }

    .chatbox-empty.chatbox-closed {
        bottom: -262px;
    }

    .chatbox-empty .chatbox-body,
    .chatbox-empty .chatbox-message {
        display: none;
    }

    .chatbox-empty .chatbox-credentials {
        display: block;
    }
</style>
