<template>
	
	<div class="container" style="margin:3rem; padding-right:10rem; padding-left:1-rem;">
		 

	
				<form @submit.prevent="onSubmit" enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
						<label for="inputState">التصنيفات</label>
					
						<select id="inputState" class="form-control" v-model="form.category_id">
							<option :value="product.category.id" selected></option>
							<option  v-for="category in categories" :value="category.id">
								{{ category.title }}
							</option>
						</select>
					</div>
						</div>
					</div>

					<div class="row">
							<div class="form-group col-md-4">
						<label for="inputState">أسم المنتج</label>
						<input type="text" v-model="form.title" class="form-control">
					</div>

					<div class="form-group col-md-4">
						<label for="inputState">السعر</label>
						<input type="number" v-model="form.price" class="form-control">
					</div>

				
					</div>

					<div class="row">
						<div class="form-group col-md-5">
						<label for="inputState">وصف المنتج</label>
						<textarea class="form-control" rows="10" v-model="form.description"></textarea>
					    </div>
					</div>

					<div class="form-group">
						<button class="btn btn-primary edit">تعديل</button>
					</div>

				</form>

				
			</div>



</template>

<script type="text/javascript">
window.axios = require('axios');


window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

const mainAxios = window.axios.create({
	baseURL: 'https://api.alaalimshop.com'
});
export default {

	props:['product_id'],

	data(){
		return{
			categories:[],
			form:{
				category_id:'',
				title:'',
				description:'',
				price:null,
			},
			product:[]	
		}
	},

	mounted(){
		this.getCategories()
	    this.getOneProduct()
	},
	methods:{



		onSubmit(){

			
			let formData = new FormData()
			alert(this.form.title)
			formData.append('category_id', this.form.category_id);
			formData.append('title', this.form.title);
			formData.append('description', this.form.description);
			formData.append('price', this.form.price);
			mainAxios.put(`/seller/product/${this.product_id}`,formData,{
				headers: {
					Authorization: 'Bearer ' + Seller.getToken()
				}
			}).then((response) =>{
				swal({
				title: "تم التسجيل بنجاح ",
				text: `تم تعديل بيانات منتجك` ,
				icon: "success",
				});

			}).catch((err) => {
				alert("nooo")
			})

		},
		getCategories(){

			mainAxios.get('/seller/product/create',{
				headers: {
					Authorization: 'Bearer ' + Seller.getToken()
				}
			}).then((response) =>{
				this.categories = response.data
			}).catch((err) => {
				alert("nooo")
			})
		},

		getOneProduct(){
			mainAxios.get(`/seller/product/${this.product_id}`,{
				headers: {
					Authorization: 'Bearer ' + Seller.getToken()
				}
			}).then((response) => {
				
				this.product = response.data
				 console.log(this.product)
				 this.form.price = this.product.price
				 this.form.description = this.product.description
				 this.form.title = this.product.title
				
			}).catch((err) =>{
				
			})
		}
	}
}
</script>