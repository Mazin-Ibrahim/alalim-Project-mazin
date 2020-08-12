<template>
	<div dir="rtl" style="margin:4rem;">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<h1 class="text-center">الملف الشخصي</h1>
					<form @submit.prevent="onSubmit" enctype="multipart/form-data">
					<div class="form-group">
						<div class="form-group">
							<label for="">تغير صورة المتجر</label>
							<input type="file" class="form-control"   id="file" ref="shop_image"  @change="onFileSelected()">

						</div>
					</div>
					<!-- <input type="hidden" v-model="token"> -->

					<div class="form-group">
						<button class="btn btn-info">تغير</button>
					</div>
				  </form>
                     <hr>
				  <form @submit.prevent="onSubmitChangePhone">
					<div class="form-group">
						<div class="form-group">
							<label for="">تغير رقم الهاتف</label>
							<input type="tel"  class="form-control" v-model="contact_phone_number">

						</div>
					</div>
					

					<div class="form-group">
						<button class="btn btn-info">تغير</button>
					</div>
				  </form>

                    <hr>
				   <form @submit.prevent="onSubmitChangePassword">
					<div class="form-group">
						<div class="form-group">
							<label for="">كلمة المرور</label>
							<input type="password"  class="form-control" v-model="password.new_password">

						</div>
					</div>
					<div class="form-group">
						<div class="form-group">
							<label for="">تأكيد تغير كلمة المرور</label>
							<input type="password"  class="form-control" v-model="password.new_password_confirmation">

						</div>
					</div>


					

					<div class="form-group">
						<button class="btn btn-info">تغير</button>
					</div>
				  </form>

				</div>
			</div>


		</div>
	</div>
</template>

<script type="text/javascript">

import swal from 'sweetalert';



window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

const mainAxios = window.axios.create({
        baseURL: 'https://api.alaalimshop.com'
	});

 export default {

 	data(){
 		return{
          shop_image:'',
          contact_phone_number:'',
          password:{
          	new_password_confirmation:'',
          	new_password:''

          }
       
 		}
 	},

 	created(){
 		
 	},

 	methods:{

 		onFileSelected () {
			this.shop_image = this.$refs.shop_image.files[0];
			},

			onSubmit(){
              let formData = new FormData();
              formData.append('shop_image', this.shop_image);
              
              mainAxios.post('/seller/profile/change_shop_image',formData,{
              	 headers: {
                    Authorization: 'Bearer ' + Seller.getToken()
                }
              }).then((respons) => {
              	swal({
				title: "تم تغير صورة المتجر",
				text: " ",
				icon: "success",
				});
              	window.location.href = "/seller/profile";
              }).catch((message) => {
              	alert("no")
              })
			},

			onSubmitChangePhone(){
                  
				 let formData = new FormData();
                 formData.append('contact_phone_number', this.contact_phone_number);
              mainAxios.put('/seller/profile/change_contact_number',formData
              	,{
              	 headers: {
                    Authorization: 'Bearer ' + Seller.getToken()
                }
              }).then((respons) => {
              	console.log(respons)
              	swal({
				title: "تم تغير  رقم الهاتف",
				text: " ",
				icon: "success",
				});
              	window.location.href = "/seller/profile";
              }).catch((message) => {
              	alert("no")
              })
			},
			onSubmitChangePassword(){
              
              mainAxios.post('/seller/profile/change_password',this.password,{
              	 headers: {
                    Authorization: 'Bearer ' + Seller.getToken()
                }
              }).then((respons) => {
              	swal({
				title: "كلمة السر",
				text: " ",
				icon: "success",
				});
              	window.location.href = "/seller/profile";
              }).catch((message) => {
              	alert("no")
              })

			}
 	}
 }

</script>