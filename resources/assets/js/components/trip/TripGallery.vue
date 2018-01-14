<template>
    <div class="carousel">
      <div class="carousel-img" v-for="photo in photos" >
        <img 
            class="carousel-img" 
            :src="photo.url" 
        />
        <div class="caption">
            <h5 class="white">{{photo.pivot.caption}}</h5>
        </div>
      </div>
    </div>
</template>

<script>
    import _ from 'lodash'
    import Flickity from 'flickity'
    //import { mapGetters, mapActions } from 'vuex'

    export default {
        props: {
            photos: [],
        },
        // created () {
        //     this.$store.dispatch('getRivers')
        // }, 

        mounted() {
            var flkty = new Flickity('.carousel', {
              // options
              cellAlign: 'left',
              contain: true
            });
        }

        // computed: mapGetters({
        //     rivers: 'allRivers',
        //     selectedRiver: 'selectedRiver',
        // }),

        // methods: {
        //     colorFilter: (index) => {
        //         switch(index) {
        //             case 0:  return "#DCA852"
        //             case 1:  return "#5CAAC6"
        //             case 2:  return "#C58093"
        //             default: return "#DCA852"
        //         }
        //     },

        //     onRiverClicked: function(river) {
        //         this.$store.dispatch('setRiver', { river })
        //     }
        // },

    }
</script>

<style lang="scss">
    .carousel-img {
        height: 240px;
        width: 360px;
        object-fit: cover;
        border-radius: 5px;
        margin-right: 40px;
    }

    .carousel-img:hover .caption {
      opacity: 1;
    }

    .caption {
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        top: 0;
        background-color: rgba(0,0,0,0.6);
        padding: 20px;
        opacity: 0;
        transition: .2s ease;
    }
</style>
