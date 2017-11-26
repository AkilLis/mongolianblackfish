<template>
    <div class="lake-container">
        <div class="row">
            <div 
                v-for="(river, index) in rivers" 
                class="col-md-4" 
                :class="river.is_selected ? 'lake-card-selected': 'lake-card'" 
                :style="{
                    left: (index) * 272 + 125 + 'px',
                    'border-bottom': '6px solid ' + colorFilter(index),
                }" 
                @click="onRiverClicked(river)"
            >
                <div 
                    class="lake-cover" 
                    :style="'background-image:url(' + river.url + ')'"
                    :class="river.is_selected ? 'large-cover': ''"
                >
                </div>
                
                <div class="row text-center" >
                    <h3>LAKE</h3>
                    <h2 :style="{color: colorFilter(index)}">{{river.name.toUpperCase()}}</h2>
                </div>
                
                <div class="triangle"></div>
            </div>
        </div>
    </div>
</template>

<script>
    import _ from 'lodash'

    export default {
        mounted() {
            console.log('Component mounted.')
        },

        methods: {
            colorFilter: (index) => {
                switch(index) {
                    case 0:  return "#DCA852"
                    case 1:  return "#5CAAC6"
                    case 2:  return "#C58093"
                    default: return "#DCA852"
                }
            },

            setSelected: (state) => {
                this.rivers.forEach((river) => {

                    river.is_selected = state
                })
            },

            onRiverClicked: function(river) {
                _.forEach(this.rivers, (river) => {
                    river.is_selected = false
                })

                river.is_selected = true
                //alert(river.name)
            }
        },

        data() {
            return {
                rivers: [{
                    id: 1,
                    name: 'Orkhon',
                    url: "http://localhost:8000/images/river/orkhon.jpg",
                    is_selected: false,
                }, {
                    id: 2,
                    name: "Shigshid",
                    url: "http://localhost:8000/images/river/shegshid.jpg",
                    is_selected: true,
                }, {
                    id: 3,
                    name: "Eg uur",
                    url: "http://localhost:8000/images/river/eg_uur.jpg",
                    is_selected: false,
                }]
            }
        }
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
        width: -webkit-calc(100% - 30px);
        width:    -moz-calc(100% - 30px);
        width:         calc(100% - 30px);
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
