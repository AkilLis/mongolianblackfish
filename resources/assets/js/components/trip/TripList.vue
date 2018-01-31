<template>

    <div class="container row trip-container main-carousel" style="padding-top: 620px; ">
            
        <horizontal-slide 
            :slide-width="100" 
            width-type="%" 
            :step="1" 
            :items="tours.data" 
            :slide-height="620"
            arrow-class="white-arrow">
        </horizontal-slide>
    </div>
</template>

<script>
    import _ from 'lodash'
    import Flickity from 'flickity'
    import { mapGetters, mapActions } from 'vuex'
    import moment from 'moment'
    import HorizontalSlide from '../HorizontalSlide.vue'

    export default {
        created () {
            //this.$store.dispatch('getRiverTours', this.selectedRiver)
        }, 

        mounted() {
            //this.flickity()
        },

        computed: mapGetters({
            tours: 'tours',
            selectedRiver: 'selectedRiver',
            tours_fetching: 'tours_fetching',
        }),

        data() {
            return {
                flkty: null
            }
        },

        methods: {
            dateFormat: (date) => {
                return moment(date).format("MMM, DD")
            },

            dateBetween: (start, end) => {
                return moment(end).diff(start, 'days') + ' DAYS '
            },

            flickity: () => {
                this.flkty = new Flickity('.main-carousel', {
                  // options
                  cellAlign: 'left',
                  contain: true,
                });
            },
        },

        watch: {
            selectedRiver: function(river) {
                this.$store.dispatch('getRiverTours', river)
            },
        },

        components: {
            HorizontalSlide
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
    .trip-container {
        //padding-left: 140px;
        //padding-right: 140px;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 120px;
    }
    .carousel-cell {
        width: 100%;
    }
    .trip-cover {
        background-size: cover; 
        background-position: center;
        height: 528px;
        transition: height 200ms ease-in;
        -webkit-box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.75);
        -moz-box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.75);
        box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.75);
        border: 4px solid #fff;
    }
    .trip-cover:hover {
        cursor: pointer;
        -webkit-transition: all 200ms ease-in;
        -ms-transition: all 200ms ease-in;
        -moz-transition: all 200ms ease-in;
        transition: all 200ms ease-in;
    }
    .trip-detail {
        background:#fff; 
        height: 87px; 
        margin-top: 30px;
        margin-bottom: 30px;
        //border-right: 3px solid #9BD2E6;
        margin-left: 5px;
        margin-right: 5px;
        border-radius: 5px;
    }
    .trip-row {
        padding-top: 10px; 
        padding-bottom: 10px; 
        background: #fff;
    }
    .purchase-btn {
        background: #E56451; 
        border-radius: 5px;   
        display: flex;   
        align-items: center;
        justify-content: center;
        height: 60px;
    }
    .purchase-btn:hover {
        cursor: pointer;
        -webkit-transition: all 200ms ease-in;
        -ms-transition: all 200ms ease-in;
        -moz-transition: all 200ms ease-in;
        transition: all 200ms ease-in;
        background: #DA5542;
    }

    @media only screen and (max-width: 768px) {
         .trip-cover
         {
            height: 200px;
         }
    }

</style>
