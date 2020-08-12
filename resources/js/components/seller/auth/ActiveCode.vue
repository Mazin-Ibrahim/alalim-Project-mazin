<template>
	<div dir="rtl" style="margin-top:6rem; margin-bottom:6rem;">

		<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-4">
				<h4 style="margin-top:2rem; margin-bottom:2rem;">رقم  تفعيل حسابك هو  {{ code }}</h4>
				<div class="form-group">
					<label>أدخل رقم تفعيل  الحساب</label>
					<input type="number" class="form-control" v-model="form.activation_code">
				</div>

				<div class="form-group">
					<button class="btn btn-info" @click="doneActive">تفعيل</button>
				</div>
			</div>
		</div>
	</div>
	</div>
</template>

<script type="text/javascript">
window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

const mainAxios = window.axios.create({
        baseURL: 'https://api.alaalimshop.com'
	});

	export default {

		props:['code'],

		data(){
			return{
				form:{

				activation_code:''
				}
			}
		},

		methods:{
			doneActive(){
              // alert(this.activation_code)
              mainAxios.post('/seller/authentication/1/activate_code',this.form).then((respons) => {
              	alert("mazin")
              	// window.location.href = "/seller/profile";
              }).catch((message) => {
              	alert("no")
              })

			}
		}

	}
</script>