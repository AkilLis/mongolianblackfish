<template>
    <div class="container row trip-container main-carousel" style="padding-top: 580px; ">
        <div class="carousel-cell">
            <div class="col-md-4 col-sm-12">
                <a href="/tour/1">
                    <div 
                        class="trip-cover" 
                        style="background-image:url('http://localhost:8000/images/trip/canyon.jpg')"
                    >
                    </div>
                </a>
            </div>

            <div class="col-md-8" style="">
                <a href="/tour/1">
                    <h1>Classic Canyon Tour</h1>
                </a>

                <div class="row trip-detail">
                    <div class="col-md-3 text-center trip-row" style="background: #9BD2E6">
                        <h6 class="font-sub" style="font-weight: bold; color: #fff">DEPARTURE</h6>
                        <h4 class="font-sub" style="font-weight: bold; margin-top: 15px;">JULY, 17</h4>
                    </div>
                    <div class="col-md-3 text-center trip-row" style="border-left: 1px dashed #9BD2E6">
                        <h6 class="font-sub" style="font-weight: bold; color: #60B383">GROUP SIZE</h6>
                        <h4 class="font-sub" style="font-weight: bold; margin-top: 15px;">4 MEMBER</h4>
                    </div>
                    <div class="col-md-3 text-center trip-row" style="border-left: 1px dashed #9BD2E6">
                        <h6 class="font-sub" style="font-weight: bold; color: #DCA852">DURATION</h6>
                        <h4 class="font-sub" style="font-weight: bold; margin-top: 15px;">12 DAYS</h4>
                    </div>
                    <div class="col-md-3 text-center trip-row" style="border-left: 1px dashed #9BD2E6">
                        <h6 class="font-sub" style="font-weight: bold; color: #C58093">TYPE</h6>
                        <h4 class="font-sub" style="font-weight: bold; margin-top: 15px;">FLY FISH</h4>
                    </div>
                </div>

                <p class="hidden-xs white">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>
                <div class="row" style="margin-left: 15px; margin-top: 30px;">
                    <div class="col-md-3 row purchase-btn">
                            <h4 class="font-sub" style="color: #fff; text-align: center">BOOK TRIP</h4>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="carousel-cell">
            <div class="col-md-5">
                <div 
                    class="trip-cover" 
                    style="background-image:url('http://localhost:8000/images/trip/fishing.jpg')"
                >
                </div>
            </div>

            <div class="col-md-7" style="">
                <h1>Fly Fishing Tour</h1>

                <div class="row trip-detail">
                    <div class="col-md-3 col-sm-6 text-center trip-row" style="background: #9BD2E6">
                        <h6 class="font-sub" style="font-weight: bold; color: #fff">DEPARTURE</h6>
                        <h4 class="font-sub" style="font-weight: bold; margin-top: 15px;">SEP, 17</h4>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center trip-row" style="border-left: 1px dashed #9BD2E6">
                        <h6 class="font-sub" style="font-weight: bold; color: #60B383">GROUP SIZE</h6>
                        <h4 class="font-sub" style="font-weight: bold; margin-top: 15px;">6 MEMBER</h4>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center trip-row" style="border-left: 1px dashed #9BD2E6">
                        <h6 class="font-sub" style="font-weight: bold; color: #DCA852">DURATION</h6>
                        <h4 class="font-sub" style="font-weight: bold; margin-top: 15px;">6 DAYS</h4>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center trip-row" style="border-left: 1px dashed #9BD2E6">
                        <h6 class="font-sub" style="font-weight: bold; color: #C58093">TYPE</h6>
                        <h4 class="font-sub" style="font-weight: bold; margin-top: 15px;">FLY FISH</h4>
                    </div>
                </div>

                <p class="hidden-xs">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>
                <div class="row" style="margin-left: 15px; margin-top: 30px;">
                    <div class="col-md-6 row purchase-btn">
                        <div class="col-md-6 text-left" style="padding-left: 0px; padding-right: 0px;">
                            <h2 style="color: #fff; margin-top: 0px; margin-bottom: 0px;">
                                $2.750
                            </h2>
                        </div>
                        <div class="col-md-6" style="border-left: 1px dashed #fff;">
                            <h5 class="font-sub" style="color: #fff; text-align: center">BOOK TRIP</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
            var flkty = new Flickity('.main-carousel', {
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
    .trip-container {
        padding-left: 140px;
        padding-right: 140px;
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
        padding-right: 0px;
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
