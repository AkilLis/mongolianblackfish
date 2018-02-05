<!-- <div class="river-container river-carousel" v-show="!rivers.fetching">
                <div 
                    v-for="(river, index) in rivers.data" 
                    class="col-md-4"
                    :class="river.id == selectedRiver.id ? 'river-card-selected': 'river-card'" 
                    :id="'river-card'+index" 
                    @click="onRiverClicked(river)"
                >
                    <div 
                        class="lake-cover" 
                        :style="'background-image:url(' + river.url + ')'"
                        :class="river.id == selectedRiver.id ? 'large-cover': ''"
                    >
                    </div>
                    
                    <div class="row text-center" >
                        <h3 class="font-sub">RIVER</h3>
                        <h3 class="font-sub" :style="{color: colorFilter(index)}">{{river.name.toUpperCase()}}</h3>
                    </div>
                    
                    <div class="triangle"></div>
                </div>
        </div> -->

<template>
    <div class="river-container river-carousel hidden-md hidden-lg">
        <div 
            v-for="(river, index) in rivers.data" 
            class="col-md-4"
            :class="river.id == selectedRiver.id ? 'river-card-selected': 'river-card'" 
            :id="'river-card'+index" 
            @click="onRiverClicked(river)"
        >
            <div 
                class="river-cover" 
                :style="'background-image:url(' + river.url + ')'"
                :class="river.id == selectedRiver.id ? 'river-large-cover': ''"
            >
            </div>
            
            <div class="row text-center" >
                <h3 class="font-sub">RIVER</h3>
                <h3 class="font-sub" :style="{color: colorFilter(index)}">{{river.name.toUpperCase()}}</h3>
            </div>
            
            <div class="triangle"></div>
        </div>
    </div>
</template>

<script>
    import _ from 'lodash'
    import Flickity from 'flickity'
    import { mapGetters, mapActions } from 'vuex'

    export default {
        created () {
            this.$store.dispatch('getRivers')
        }, 

        data() {
            return {
                isLoaded: false,
                flkty: {},
            }
        },

        computed: mapGetters({
            rivers: 'allRivers',
            selectedRiver: 'selectedRiver',
        }),

        mounted() {
            setTimeout(() => {
                this.flkty = new Flickity('.river-carousel', {
                    wrapAround: true,
                    draggable: false,
                    prevNextButtons: false
                });
                this.isLoaded = true
                this.flkty.select(1)
                // this.flkty.on('select', () => {
                //     console.log(this.rivers.data[this.flkty.selectedIndex])
                //     this.onRiverClicked(this.rivers.data[this.flkty.selectedIndex])
                // })
            }, 1000)
        },
        methods: {
            colorFilter: (index) => {
                switch(index) {
                    case 0:  return "#FECA08"
                    case 1:  return "#0075F2"
                    case 2:  return "#F13030"
                    default: return "#FECA08"
                }
            },

            onRiverClicked: function(river) {
                this.flkty.select(river.id - 1)
                this.$store.dispatch('setRiver', { river })
            }
        },
    }
</script>

<style lang="scss">

    .triangle {
        width: 0;
        height: 0;
        border: solid calc(33% - 30px);
        border-color: transparent transparent black transparent;
    }

    .river-container {
        width: 100%;
        height: 500px;
        position: absolute;
        z-index: 2;
        top: 600px;
        overflow: hidden;
    }

    .river-card {
        background: #fff;
        top: 48px;
        height: 446px;
        padding-right: 0px;
        padding-left: 0px;
        -webkit-box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.75);
        -moz-box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.75);
        box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.75);
        z-index: 2;
        width: 66%;
        padding-top: 4px;
        transition: height 0.25s ease-out;

    }

    .river-card:hover {
        cursor: pointer;
        -webkit-transition: all 200ms ease-in;
        -webkit-transform: scale(1.1);
        -ms-transition: all 200ms ease-in;
        -ms-transform: scale(1.1);   
        -moz-transition: all 200ms ease-in;
        -moz-transform: scale(1.1);
        transition: all 200ms ease-in;
        transform: scale(1.1);
        z-index: 4,
    }

    .river-card-selected {
        background: #fff;
        top: 48px;
        height: 446px;
        padding-right: 0px;
        padding-left: 0px;
        -webkit-box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.75);
        -moz-box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.75);
        box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.75);
        z-index: 2;
        width: 66%;
        padding-top: 4px;
        transition: height 0.25s ease-out;
        -webkit-transition: all 200ms ease-in;
        -webkit-transform: scale(1.2);
        -ms-transition: all 200ms ease-in;
        -ms-transform: scale(1.2);   
        -moz-transition: all 200ms ease-in;
        -moz-transform: scale(1.2);
        transition: all 200ms ease-in;
        transform: scale(1.2);
        z-index: 3;
        border-bottom: 2px solid #fff !important;
    }

    .river-cover {
        background-size: cover; 
        background-position: center;
        height: 228px;
        transition: height 200ms ease-in;
    }

    .river-large-cover {
        height: 260px;
        transition: height 200ms ease-in;
    }
</style>
