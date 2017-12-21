<template>
    <div class="container row margin-auto">
        <h1>
            Travel map to Sheshged
        </h1>
        <div id="map">
            <iframe src="https://www.google.com/maps/d/u/0/embed?mid=17qxnH3FB8lytoFNycOSkyUKXeTGUlvqg" width="1170" height="600"></iframe>

            <!-- <iframe src="https://www.google.com/maps/d/embed?mid=1D2N6tVsjt88-oSxNQ9IZrT-1m9Y" width="1170" height="600"></iframe> -->
        </div>
    </div>
</template>

<script>
    //import { mapGetters, mapActions } from 'vuex'

    export default {
        // created () {
        //     this.$store.dispatch('getRivers')
        // }, 

        mounted() {
            // var map = new google.maps.Map(document.getElementById('map'), {
            //   zoom: 6,
            //   center: {
            //     lat: 49.099725, 
            //     lng: 102.901374}, 
            // });     

            // var kmlLayer = new google.maps.KmlLayer('http://localhost:8000/images/test.kml', {
            //   suppressInfoWindows: true,
            //   preserveViewport: false,
            //   map: map
            // });
        }


    }
</script>

<style lang="scss">
    #map {
        height: 600px;
    }
</style>
