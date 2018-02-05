<template>
    <div class="row carousel" style="margin-left: 50px; margin-top: 50px; overflow: hidden;">
        <div 
            class="partner-circle"
            v-for="(partner, i) in partners"
        >
            <a :href="partner.link">
                <img 
                   :src="partner.url"
                />
            </a>
        </div>
    </div>
</template>

<script>
    import Flickity from 'flickity'
    import config from '../env'

    export default {
        data() {
            return {
                partners: []
            }
        },

        created () {
            this.getItems()
        },

        methods: {
            flickity: function() {
                var flkty = new Flickity('.carousel', {
              // options
                  cellAlign: 'left',
                  contain: true,
                  prevNextButtons: false,
                  pageDots: false
                });
            },
            getItems: function () {
                axios.get(config.API_KEY + 'partner/all').then(res => {
                    this.partners = res.data.result
                }).catch(err => {
                });
            },
        },

        watch: {
            partners: function() {
                setTimeout(() => {
                    this.flickity()
                }, 300)
            }
        }
    }
</script>
