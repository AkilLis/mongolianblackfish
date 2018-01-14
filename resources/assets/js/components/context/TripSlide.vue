<template>
	<div 
        class="carousel-cell"
    >
        <div class="col-md-4 col-sm-12">
            <a :href="'/tour/' + item.id">
                <div 
                    class="trip-cover" 
                    :style="'background-image:url(' + item.url +')'"
                >
                </div>
            </a>
        </div>

        <div class="col-md-8" style="">
            <a :href="'/tour/' + item.id">
                <h1>{{item.name}}</h1>
            </a>

            <div class="row trip-detail">
                <div class="col-md-3 text-center trip-row" style="background: #9BD2E6">
                    <h6 class="font-sub" style="font-weight: bold; color: #fff">DEPARTURE</h6>
                    <h5 class="font-sub" style="font-weight: bold; margin-top: 15px; color: #0d0d0d;">{{ dateFormat(item.departure_date) }}</h5>
                </div>
                <div class="col-md-3 text-center trip-row" style="border-left: 1px dashed #9BD2E6">
                    <h6 class="font-sub" style="font-weight: bold; color: #60B383">GROUP SIZE</h6>
                    <h5 class="font-sub" style="font-weight: bold; margin-top: 15px; color: #0d0d0d;">{{item.group_size}} MEMBER</h5>
                </div>
                <div class="col-md-3 text-center trip-row" style="border-left: 1px dashed #9BD2E6">
                    <h6 class="font-sub" style="font-weight: bold; color: #DCA852">DURATION</h6>
                    <h5 class="font-sub" style="font-weight: bold; margin-top: 15px; color: #0d0d0d;">{{ dateBetween(item.start_date, item.end_date) }}</h5>
                </div>
                <div class="col-md-3 text-center trip-row" style="border-left: 1px dashed #9BD2E6">
                    <h6 class="font-sub" style="font-weight: bold; color: #C58093">TYPE</h6>
                    <h5 class="font-sub" style="font-weight: bold; margin-top: 15px; color: #0d0d0d;">{{item.type}}</h5>
                </div>
            </div>

            <p class="hidden-xs white">
                {{item.info[0].description}}
            </p>
            <div class="row" style="margin-left: 15px; margin-top: 30px;">
                <div class="col-md-3 row purchase-btn">
                    <a :href="'/booking/' + item.id">
                        <h4 class="font-sub" style="color: #fff; text-align: center">BOOK TRIP</h4>
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>
<script>

	import moment from 'moment'

	export default {
		props : {
			item: {
				required : true
			}
		},

		methods: {
			dateFormat: (date) => {
                return moment(date).format("MMM, DD")
            },

            dateBetween: (start, end) => {
                return moment(end).diff(start, 'days') + ' DAYS '
            },
		},

		filters : {
			newsFilter : function (value) {
				var parsed = parseInt(value)
				switch (parsed) {
					case 1: 
						return 'Мэдээлэл'
					case 2:
						return 'Тэтгэлэг'
					case 3: 
						return 'Зар'
					case 4:
						return 'Сургалт'
				}
			}
		}

	}
</script>
<style lang="scss">
.slide {
	width: 100%;background-size: cover;
	background-position: center;
	height: 475px;
}
.relative {
	position: relative !important;
	height: 100%;
}
.news-container {
	position: absolute;
	bottom: 80px;
	width: 650px;
	height: 270px;
	left: 0px;
    right: 0px;
    margin: 0 auto;
    text-align: center;
    text-shadow: 0px 0px 2px #000000;
	.news-title {
		font-size: 42px;
    	font-weight: 400;
    	line-height: 1;
	    margin-bottom: 15px;
		a {
			color: #fff;
			&:hover {
				text-decoration: none;
				color: #fff;
			}
		}
	}
	.news-description {
		margin: 10px 0px;
		font-size: 15px;
	}
	.news-title-seperator {
		margin: 0px;
		border-top: 3px solid #fff;
	}
}
.social-container {
	top: 75px;
	font-size: 17px;
	font-weight: 800;
	color: #fff;
	position: absolute;
	i {
		font-size: 20px;
		cursor: pointer;
		margin-right: 10px;
		&.fa-facebook-official {
			color: #3b5998;
		}
		&.fa-twitter-square {
			color: #68c4e2;
		}
		&:first-child {
			margin-left: 30px;
		}
	}
}
</style>