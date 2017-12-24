<template>
    <div class="row carousel" style="margin-left: 50px; margin-top: 50px;">
        <div 
            class="partner-circle"
            v-for="(partner, i) in partners"
        >
            <img 
               :src="partner.cover_url"
            />
        </div>
    </div>
</template>

<script>
    import Flickity from 'flickity'

    export default {
        data() {
            return {
                partners: [{
                    _id: 1,
                    cover_url: "http://localhost:8000/images/partner/gmobile.png",
                    link: "https://www.g-mobile.mn/"
                }, {
                    _id: 2,
                    cover_url: "http://localhost:8000/images/partner/corporate.png",
                    link: "https://www.facebook.com/The-Corporate-Hotel-Ulaanbaatar-214709581894385/"
                }, {
                    _id: 3,
                    cover_url: "http://localhost:8000/images/partner/miat.jpg",
                    link: "http://www.miat.com/index.php?lang=en"
                }, {
                    _id: 4,
                    cover_url: "http://localhost:8000/images/partner/mautlin.png",
                    link: "https://www.killasheehotel.com/?gclid=Cj0KCQiA9_LRBRDZARIsAAcLXjcpe6bI8tJs1iT3u0r1jUupn18XGFl2eMGHJRwbWuAcwG8tHEeieeEaAgH0EALw_wcB"
                }]
            }
        },

        mounted() {
            var flkty = new Flickity('.carousel', {
              // options
              cellAlign: 'left',
              contain: true,
              prevNextButtons: false,
              pageDots: false
            });
        }
    }
</script>
