<template>
    <div class="container">
      <div class="carousel carousel-nav day-container">
        <div 
          class="day-field text-center"
          v-for="(item, index) in day_schedule"
        >
            <h4 class="yellow font-sub" style="line-height: 0px;">DAY</h4>
            <h4 class="yellow font-sub" style="color: #464861 !important">{{item.day}}</h4>
        </div>
      </div>

      <div class="carousel carousel-sub">
        <div 
          class="day-info container"
          v-for="(item, index) in day_schedule"
        >
          <h3>Day {{item.day}} - {{item.title}}</h3>
          

          <p>The fishing is a combination of drift boat and wade-walk. This is a great river for both single and double-handed rods. The single-handed rods are used from the drift boats. The double-handed rods are generally fished from shore, but some guests use switch rods to great effect from the boat. Most guests bring a five-weight single hand for the trout and a seven, eight or nine weight single hand for the taimen. This river is great for double-handed rods, either spey or switch. It’s a wonderful thing to fire a Skagit line out across a camp pool at sunset and skate a big mouse pattern to a giant taimen.</p>
          <br />
          
<p>Mongolia likely has the world’s healthiest taimen populations. We catch and release hundreds of taimen annually. Due in part to conservation efforts, the fishing has never been better. Every angler definitely has a chance to catch a trophy fish. However, taimen fishing is not easy. These fish are big, old and smart. A guest may have a double digit day.</p>

<br />
<p>When you sign up for a trip, we will provide you with a very detailed packing list. We supply all of the flies. You are responsible for bringing your own rods, waders, and other fishing gear.</p>

        Taimen will absolutely explode on the fly, sometimes coming completely out of the water on the strike.  On witnessing this impressive smash and grab many anglers pull too soon and miss the hook up.  The trick is to keep stripping until you feel the weight of the fish, then set the hook.  If you miss the first strike, slam the fly right back on the water.  That big, angry and very frustrated taimen will frequently come right back around and absolutely hammer your fly on the second, third or even fourth try.  These taimen will often go airborne.  Like a big tarpon, they will tail walk along the river’s surface.  In skinny water, they will rocket across the river for greater depths.  The four-foot long predator on the end of your line will charge around the pool, bore deep and shake its head violently like a very, very big brown trout.

        </div>
      </div>
    </div>
</template>

<script>
    import _ from 'lodash'
    //import Flickity from 'flickity'
    var Flickity = require('flickity-as-nav-for')
    //import { mapGetters, mapActions } from 'vuex'

    export default {
        data() {
          return {
             day_schedule: [{
                day: "1",
                title: "land in Sevilla around 1pm"
             }, {
                day: "2",
                title: "Sevilla day - take trian to cordoba at night"
             }, {
                day: "3",
                title: "Cordoba day - 7pm train to Granada"
             }, {
                day: "4",
                title: "Granada"
             }, {
                day: "5",
                title: "Half day in Granada then fly/train to Madrid that evening - stay in madrid that night"
             }, {
                day: "6",
                title: "Flight to san sebastian",
             }, {
                day: "7",
                title: "San sebastian / flight to barca early afternoon"
             }, {
                day: "8",
                title: "Barca"
             }]
          }
        },
        mounted() {
            var subFlkty = new Flickity('.carousel-sub', {
              // options
              cellAlign: 'left',
              contain: true,
              pageDots: false,
              prevNextButtons: false
            });

            var flkty = new Flickity('.carousel-nav', {
              // options
              cellAlign: 'left',
              contain: true,
              asNavFor: document.querySelector('.carousel-sub'),
              pageDots: false
            });

            


            //{  }
        }
    }
</script>

<style lang="scss">
    //TOUR PAGE
    .day-container {
      width: 60%;
      margin-left: auto;
      margin-right: auto;
    }

    .day-container .day-field.is-nav-selected {
      background: rgb(155, 210, 230);
    }

    .day-container .day-field.is-nav-selected h4 {
      color: #fff !important;
    }

    .flickity-prev-next-button.previous {
      top: 45px;
      left: -60px;
    }

    .flickity-prev-next-button.next {
      top: 45px;
      right: -60px;
    }

    .day-field {
      height: 80px;
      width: 80px;
      margin-right: 10px;
      background-color: #fff;
      padding-top: 20px;
    }

    .carousel-sub {
      margin-top: 40px;
    }

    .day-info {
      background-color: rgba(255, 255, 255, 0.4);
      padding: 20px 40px;
    }
</style>