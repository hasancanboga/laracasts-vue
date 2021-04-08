window.Event = new class { // custom event dispatcher. just a wrapper. can use this.$emit instead of Event.fire inside Vue components.
	constructor(){
		this.vue = new Vue();
	}

	fire(event, data = null){
		this.vue.$emit(event, data)
	}

	listen(event, callback){
		this.vue.$on(event, callback)
	}
}

Vue.component('coupon', {
	template: '<input placeholder="Enter your coupon code" @blur="onCouponApplied">',

	methods:{
		onCouponApplied(){
			Event.fire('applied');
		}
	}
})

new Vue({
	el: '#root',

	data:{
		couponApplied: false,
		onCouponApplied: false
	},

	created(){
		Event.listen('applied', () => alert('Handling it!'));
	}
})