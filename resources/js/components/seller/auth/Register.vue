<template>
	<div class="wrapper" dir="rtl">
		<!-- Header section -->


		<div id="pageContent">
			<section class="breadcrumbs breadcrumbs-boxed">
				<div class="container">
					<ol class="breadcrumb breadcrumb--wd pull-left">
						<li><a href="index.html">الرئيسية</a></li>
						<li class="active"> انشاء حساب تاجر</li>
					</ol>
				<!-- <ul id="productOther" class="product-other pull-right hidden-xs">
					<li class="product-other__link product-prev"><a href="#">تشيرت أسود بأكمام طويلة</a><span class="product-other__link__image"><img src='images/products/product-4.jpg'/></span></li>
					<li class="product-other__link product-next"><a href="#">فستان أبيض</a><span class="product-other__link__image"><img src='images/products/product-3.jpg'/></span></li>
				</ul> -->
			</div>
		</section>
		<!-- Content section -->

		<section class="content  ">
			<div class="container">
				<div class="text-center"><a href="user account.html" class="btn btn--wd text-uppercase wave">حساب زبون</a> <a href="#" class="btn btn--wd text-uppercase wave">حساب عميل</a></div>
				<div class="divider divider--sm"></div>
        <!-- <h2 class="h-pad-sm text-uppercase text-center">إنشاء حساب تاجر</h2>
        <h6 class="text-uppercase text-center">
          <a href="user account.html" class="txt-decoration-under"> إضغط هنا لإنشاء حساب زبون </a>
      </h6> -->

  <form @submit.prevent="onSubmit" enctype="multipart/form-data">
      	<div class="form-row">
      		<div class="form-group col-md-3">
      			<span  v-if="errors.full_name">يجب أداخل الاسم</span>
      			<label for="">الاسم رباعي</label>
      			<input type="text" class="form-control" id="" placeholder="الاسم رباعي" v-model="form.full_name">
				  
      		</div>
      		<div class="form-group col-md-3">
      			<label for="">رقم الهاتف</label>
      			<input type="tel" class="form-control" id="" placeholder="رقم الهاتف" v-model="form.phone_number">
      		</div>
      		<div class="form-group col-md-3">
      			<label for="">البريد الالكتروني</label>
      			<input type="email" class="form-control" id="" placeholder="البريد الالكتروني" v-model="form.email">
      		</div>
      		<div class="form-group col-md-3">
      			<label for="">اثبات الشخصية</label>
      			<input type="file" class="form-control" ref="identity" @change="onUploadIdentity()">
      		</div>

      	</div>

      	<div class="form-row">
      		<div class="form-group col-md-3">
      			<label for="">الدولة</label>
      			<input type="text" class="form-control" id="" v-model="form.country">
      		</div>
      		<div class="form-group col-md-3">
      			<label for="inputState">المحافظة</label>
      			<!-- <select id="inputState" class="form-control">
      				<option selected>اختار...</option>
      				<option>...</option>
      			</select> -->
				  <input type="text" class="form-control" name="" id="" v-model="form.state">
      		</div>
      		
      		<div class="form-group col-md-3">
      			<label for="inputZip">المنطقة</label>
      			<input type="text" class="form-control" id="inputZip" v-model="form.city">
      		</div>
      	</div>

      	<div class="form-row">
      		<div class="form-group col-md-6">
      			<label for="">اسم المتجر</label>
      			<input type="text" class="form-control" id="" placeholder="اسم المتجر" v-model="form.shop_name">
      		</div>
      		<div class="form-group col-md-3">
      			<label for="">صورة المتجر</label>
      			<input type="file" class="form-control"   id="file" ref="shop_image"  @change="onFileSelected()">
				
      		</div>
      		<div class="form-group col-md-3">
      			<label for="">اسم المستخدم</label>
      			<input type="text" class="form-control" id="" placeholder="اسم المستخدم" v-model="form.username">
      		</div>

      	</div>


      	<div class="form-row">

      		<div class="form-group col-md-3">
      			<label for="">كلمة السر</label>
      			<input type="password" class="form-control" id="" placeholder="كلمة السر" v-model="form.password">
      		</div>

      		<div class="form-group col-md-3">
      			<label for="">تأكيد كلمة السر</label>
      			<input type="password" class="form-control" id="" placeholder="تأكيد كلمة السر" v-model="form.confirmPassword"> 
      		</div>
      		<div class="my-products-edits form-group col-md-3">
      			<button type="submit" class="btn btn-primary edit" style="margin: 23px 0;">اضافة</button>
      		</div>


      	</div>


  </form>

  </div>
</section>

<!-- End Content section -->
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
		return {

			form:{
				full_name:'',
				phone_number:'',
				email:'',
				country:'',
				state:'',
				city:'',
				username:'',
				password:'',
				confirmPassword:'',
				shop_name:'',
				identity:'',
				lat:90,
				lng:89,
				shop_image:'',
				
			},
			errors:[]
			
			
		}
	} ,
	
	methods:{

			onFileSelected () {
			this.form.shop_image = this.$refs.shop_image.files[0];
			},
			onUploadIdentity(){
               this.form.identity = this.$refs.identity.files[0];
			},

		onSubmit(){
			let formData = new FormData();
			 formData.append('shop_image', this.form.shop_image);
			 formData.append('identity', this.form.identity);
			 formData.append('full_name', this.form.full_name);
			 formData.append('phone_number', this.form.phone_number);
			 formData.append('email', this.form.email);
			 formData.append('country', this.form.country);
			 formData.append('state', this.form.state);
			 formData.append('city', this.form.city);
			 formData.append('username', this.form.username);
			 formData.append('password', this.form.password);
			 formData.append('shop_name', this.form.shop_name);
			 formData.append('lat', 90);
			 formData.append('lng', 89);
			 
			mainAxios.post('/seller/authentication/register',formData,{
				
			}).then((response) => {
				 console.log(response)
				swal({
				title: "تم التسجيل بنجاح ",
				text: `سوف يتم تأكيد حسابك من  قبل الأدارة  ..رقم تفعيل حسابك هو  ${response.data.activation_code}` ,
				icon: "success",
				});
				window.location.href = `/seller/activation_code/${response.data.activation_code}`;
			}).catch((message) => {
				this.errors = message.response.data.errors
				
			})
		}
	}
 }
</script>