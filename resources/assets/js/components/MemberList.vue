<template>
    <div class="row">
        <div class="col-md-4 text-center" v-for="member in members">
            <div class="avatar-about margin-auto">  
                <img 
                    :src="member.url"
                />
            </div>
            </br>
            <h4 class="white font-sub">{{member.first_name}} {{member.last_name}}</h4>
            <h4 class="white">{{member.role}}, {{member.major}}</h4>
            </br>
            <div class="text-center margin-auto" style="width: 140px; height: 40px; ">
                <div class="margin-auto" style="height: 40px; width: 40px;">
                    <a :href="member.facebook_link">
                        <img 
                            src="/images/facebook.png"
                            height="40"
                            width="40"
                        />
                    </a>
                </div>
                <div class="margin-auto" style="height: 40px; width: 40px; background-color: #fff">
                    <a :href="member.twitter_link">
                        <img 
                            src="/images/twitter.png"
                            height="40"
                            width="40"
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
