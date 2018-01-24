<template>
    <div class="row">
        <div class="col-md-4 text-center" style="margin-bottom: 150px;" v-for="member in members">
            <div class="avatar-about margin-auto">  
                <img 
                    :src="member.url"
                />
            </div>
            </br>
            <h4 class="white font-sub">{{member.first_name}} {{member.last_name}}</h4>
            <h4 class="white">{{member.role}}, {{member.major}}</h4>
            </br>
            <div class="text-center row margin-auto" style="width: 120px; height: 40px; ">
                <div class="col-md-4" style="height: 40px; width: 40px; padding-left: 0px; padding-right: 0px;">
                    <a :href="member.facebook_link">
                        <img 
                            src="/images/facebook.png"
                            height="40"
                            width="40"
                        />
                    </a>
                </div>
                <div class="col-md-4" style="height: 40px; width: 40px; background-color: #fff; padding-left: 0px; padding-right: 0px;">
                    <a :href="member.twitter_link">
                        <img 
                            src="/images/twitter.png"
                            height="40"
                            width="40"
                        />
                    </a>
                </div>
                <div class="col-md-4" style="height: 40px; width: 40px; background-color: #fff; padding-left: 0px; padding-right: 0px;">
                    <a :href="member.mail">
                        <img 
                            src="/images/gmail.png"
                            height="15"
                            width="20"
                            style="margin-top: 12px;"
                        />
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import config from '../env'

    export default {
        data() {
            return {
                members: []
            }
        },

        created () {
            this.getItems()
        },

        methods: {
            getItems: function () {
                axios.get(config.API_KEY + 'members/all').then(res => {
                    this.members = res.data.result
                }).catch(err => {
                });
            },
        },
    }
</script>
