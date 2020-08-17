<template>
	<div class="wrapper" dir="rtl">
		<!-- Header section -->


		<div id="pageContent">
			<section class="breadcrumbs breadcrumbs-boxed">
				<div class="container">
					<ol class="breadcrumb breadcrumb--wd pull-left">
						<li><a href="index.html">الرئيسية</a></li>
						<li class="active"> انشاء حساب  مستخدم</li>
					</ol>
			
			</div>
		</section>
		<!-- Content section -->

		<section class="content  ">
			<div class="container">
				<div class="text-center"> </div>
				<div class="divider divider--sm"></div>

				<div class="row">
					<div class="col-md-5">
						<div class="alert alert-danger" role="alert" v-if="errors.full_name">
                             ابرجاء أدخال الاسم رباعي
                         </div>

                         <div class="alert alert-danger" role="alert" v-if="errors.username">
                             االرجاء أدخال  أسم المستخدم 
                         </div>

                          <div class="alert alert-danger" role="alert" v-if="errors.phone_number">
                             الرجاء أدخال رقم الهاتف
                         </div>
                         <div class="alert alert-danger" role="alert" v-if="errors.country">
                               االرجاء أدخال أسم البلد
                         </div>

                         <div class="alert alert-danger" role="alert" v-if="errors.password">
                               االرجاء أدخال كلمة المرور
                         </div>
                          <div class="alert alert-danger" role="alert" v-if="errors.state">
                               الرجاء أدخال الولاية
                         </div>

                         <div class="alert alert-danger" role="alert" v-if="errors.city">
                             الرجاء أدخال أسم المدينة 
                         </div>
					   </div>
				</div>
       


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
      			<input type="text" class="form-control" v-model="form.identity" placeholder="أثبات شخصية">
      		</div>

      	</div>

      	<div class="form-row">
      		<div class="form-group col-md-3">
      			<label for="">الدولة</label>
      			<input type="text" class="form-control" id="" v-model="form.country">
      		</div>
      		<div class="form-group col-md-3">
      			<label for="inputState">المحافظة</label>
      			
				  <input type="text" class="form-control" name="" id="" v-model="form.state">
      		</div>
      		
      		<div class="form-group col-md-3">
      			<label for="inputZip">المنطقة</label>
      			<input type="text" class="form-control" id="inputZip" v-model="form.city">
      		</div>
      	</div>

      	<div class="form-row">
      	
      		
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

      		<div class="my-products-edits form-group col-md-3">
      			<button v-on:click="addUser" class="btn btn-primary edit" style="margin: 23px 0;">اضافة</button>
      		</div>


      	</div>




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
				identity:'',
				
			},
			errors:[]
			
			
		}
	} ,
	
	methods:{

		addUser(){
		
			mainAxios.post('/user/authentication/register',this.form)
			.then((res) =>{
				swal({
				title: "تم التسجيل بنجاح ",
				text: `سوف يتم تأكيد حسابك من  قبل الأدارة  ` ,
				icon: "success",
				});
			}).catch((message) => {
               this.errors = message.response.data.errors
               console.log(this.errors.city[0])
			})
		}
	}
 }
</script>