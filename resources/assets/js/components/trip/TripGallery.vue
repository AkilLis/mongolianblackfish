<template>
    <div class="carousel" style="overflow: hidden;">
      <div class="carousel-img" v-for="photo in photos" @click="onOpenGallery()">
        <img 
            class="carousel-img" 
            :src="photo.url" 
        />
        <div class="caption">
            <h5 class="white">{{photo.pivot.caption}}</h5>
        </div>
      </div>


      <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

    <!-- Background of PhotoSwipe. 
         It's a separate element, as animating opacity is faster than rgba(). -->
            <div class="pswp__bg"></div>

            <!-- Slides wrapper with overflow:hidden. -->
            <div class="pswp__scroll-wrap">

                <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
                <div class="pswp__container">
                    <!-- don't modify these 3 pswp__item elements, data is added later on -->
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                </div>

                <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
                <div class="pswp__ui pswp__ui--hidden">

                    <div class="pswp__top-bar">

                        <!--  Controls are self-explanatory. Order can be changed. -->

                        <div class="pswp__counter"></div>

                        <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                        <button class="pswp__button pswp__button--share" title="Share"></button>

                        <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                        <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                        <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
                        <!-- element will get class pswp__preloader--active when preloader is running -->
                        <div class="pswp__preloader">
                            <div class="pswp__preloader__icn">
                              <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                              </div>
                            </div>
                        </div>
                    </div>

                    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                        <div class="pswp__share-tooltip"></div> 
                    </div>

                    <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                    </button>

                    <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                    </button>

                    <div class="pswp__caption">
                        <div class="pswp__caption__center"></div>
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
        props: {
            photos: [],
            openGallery: {},
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
        },
        methods: {
            onOpenGallery() {
               // alert("WTF")
               this.$emit('opened');
               //debugger
                //this.$parent.$options.methods.openPhotoSwipe()
            }
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
