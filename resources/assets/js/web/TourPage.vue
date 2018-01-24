<script>
	//import RelatedNews frimportom '../components/RelatedNews.vue'
	import moment from 'moment'

	export default {
		 data() {
		 	return {
		 		date: "123",
		 	}
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