<template>
    <div class="container hidden-xs hidden-sm">
        <div class="lake-container">
            <div class="row">
                <div 
                    v-for="(river, index) in rivers.data" 
                    class="col-md-4"
                    :id="'river-card'+index" 
                    :class="river.id == selectedRiver.id ? 'lake-card-selected': 'lake-card'" 
                    :style="{
                        left: (index) * 272 + 125 + 'px',
                        'border-bottom': '6px solid ' + colorFilter(index),
                    }" 
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
                        <h2 class="font-sub" :style="{color: colorFilter(index)}">{{river.name.toUpperCase()}}</h2>
                    </div>
                    
                    <div class="triangle"></div>
                </div>
            </div>
            <!-- Clicked: {{ $store.state.count }} times
            <button @click="increment">+</button>
            <button @click="decrement">-</button> -->
        </div>
    </div>
</template>

<script>
    import _ from 'lodash'
    import { mapGetters, mapActions } from 'vuex'
    export default {
        created () {
            this.$store.dispatch('getRivers')
        }, 
        computed: mapGetters({
            rivers: 'allRivers',
            selectedRiver: 'selectedRiver',
        }),
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
    .lake-container {
        position: absolute;
        top: 500px;
        width: -webkit-calc(1170px - 30px);
        width:    -moz-calc(1170px - 30px);
        width:         calc(1170px - 30px);
        height: 700px;
        padding-left: 125px;
        padding-right: 125px;
    }
    .lake-card {
        position: absolute;
        background: #fff;
        top: 48px;
        height: 546px;
        padding-right: 0px;
        padding-left: 0px;
        -webkit-box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.75);
        -moz-box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.75);
        box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.75);
        z-index: 2;
        width: -webkit-calc(33% - 30px);
        width:    -moz-calc(33% - 30px);
        width:         calc(33% - 30px);
        padding-top: 4px;
        transition: height 0.25s ease-out;
    }
    .lake-card:hover {
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
    .lake-card-selected {
        position: absolute;
        background: #fff;
        top: 48px;
        height: 546px;
        padding-right: 0px;
        padding-left: 0px;
        -webkit-box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.75);
        -moz-box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.75);
        box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.75);
        z-index: 2;
        width: -webkit-calc(33% - 30px);
        width:    -moz-calc(33% - 30px);
        width:         calc(33% - 30px);
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
    .lake-card-selected::after{
        content: '';
        position: absolute;
        left: 0;
        top: calc(100% + 1px);
        width: 0;
        height: 0;
        border-left: 173px solid transparent;
        border-right: 173px solid transparent;
        border-top: 40px solid #fff;
        clear: both;
        transition: all 200ms ease-in;
        -ms-transition: all 200ms ease-in;
        -moz-transition: all 200ms ease-in;
        -webkit-transition: all 200ms ease-in;
    }
    .lake-card-selected:before {
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 100px 150px 0 150px;
        border-color: #007bff #007bff #007bff #007bff;
    }
    .lake-cover {
        background-size: cover; 
        background-position: center;
        height: 228px;
        transition: height 200ms ease-in;
    }
    .large-cover {
        height: 368px;
        transition: height 200ms ease-in;
    }
</style>