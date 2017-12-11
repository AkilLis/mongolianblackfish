<template>
    <div class="carousel">
      <img class="carousel-img" src="http://localhost:8000/images/trip/t4.jpg" alt="orange tree" />
      <img class="carousel-img" src="http://localhost:8000/images/trip/t3.jpg" alt="submerged" />
      <img class="carousel-img" src="http://localhost:8000/images/trip/t2.jpg" alt="look-out" />
      <img class="carousel-img" src="http://localhost:8000/images/trip/t1.jpg" alt="One World Trade" />
      <img class="carousel-img" src="http://localhost:8000/images/trip/t5.jpg" alt="drizzle" />
      <img class="carousel-img" src="http://localhost:8000/images/trip/t6.jpg" alt="cat nose" />
    </div>
</template>

<script>
    import _ from 'lodash'
    import Flickity from 'flickity'
    //import { mapGetters, mapActions } from 'vuex'

    export default {
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
        height: 360px;
        width: 480px;
        object-fit: cover;
        border-radius: 5px;
        margin-right: 40px;

        &:before {
          content: '';
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 480px;
          background-image: linear-gradient(rgba(0,0,0,0.6), rgba(255, 255, 255, 0));
      //opacity: .7; 
        }
    }
</style>
