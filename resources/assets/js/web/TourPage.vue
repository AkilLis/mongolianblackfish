<script>
	//import RelatedNews frimportom '../components/RelatedNews.vue'
	import moment from 'moment'

	export default {
		 data() {
		 	return {
		 		date: "123",
		 	}
		 },

		 mounted() {
		 	const width = $(window).width()
		 	if(width < 544) {
		 		$('#gMap').width(width)
		 		return
		 	}
		 	if(width < 768) {
		 		$('#gMap').width(width - 20)
		 		return
		 	}
		 	if(width < 1024) {
		 		$('#gMap').width(width - 310)
		 		return
		 	}

		 	$('#gMap').width(width - 1024)
		 		return
		 },
		 methods: {
		 	openPhotoSwipe() {
		 		this.$refs.full.openPhotoSwipe()
		 	},
            dateFormat: (date) => {
                return moment(date).format("MMM, DD")
            },

            dateBetween: (start, end) => {
                return moment(end).diff(start, 'days') + ' DAYS '
            }
        },
	}
</script>