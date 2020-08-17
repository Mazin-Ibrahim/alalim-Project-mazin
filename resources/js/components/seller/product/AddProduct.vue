<template>
	
	<div class="container" style="margin:3rem; padding-right:10rem; padding-left:1-rem;">
		
	
				<form @submit.prevent="onSubmit" enctype="multipart/form-data">
					<div class="row">
				
						<div class="col-md-4">
							<div class="form-group">
						<label for="inputState">التصنيفات</label>
						<select id="inputState" class="form-control" v-model="form.category_id" @change="getCountImage($event)">
							<option  v-for="category in categories" :value="category.id">
								{{ category.title }}
							</option>
						</select>
					</div>
					<div col="col-md-4 col-md-offset-2" v-if="numberOfImage">
					   <p class="alert alert-info">يجب أدخال {{ numberOfImage }} صور  لهذا المنتج</p>
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

					<div class="form-group col-md-4">
						<label for="inputState">صور المنتج</label>
						<input type="file" ref="images" @change="onFileSelected()" class="form-control" multiple>
					</div>
				
					</div>

					<div class="row">
						<div class="form-group col-md-5">
						<label for="inputState">وصف المنتج</label>
						<textarea class="form-control" rows="10" v-model="form.description"></textarea>
					    </div>
					</div>

					<div class="form-group">
						<button class="btn btn-primary edit">أضافة</button>
					</div>

				</form>
				<div class="row">
					<div class="form-group col-md-4" v-for="(image,index) in form.arrImage">
						
						 	<img style="width:80px;hight:80px" :src="url[index]">
						 	<p>{{ image.name }}</p>
						
						<button class="btn btn-info" v-on:click="deleteImageBeforUpload(index,image.name)">حذف</button>
					</div>
				</div>
				<button v-on:click="showFormEdit()">show form edit</button>
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
			categories:[],
			countsImage:[],
			numberOfImage:'',
			form:{
				category_id:'',
				title:'',
				description:'',
				price:null,
				images:[],
				arrImage:[]
			},
			url:[]
		}
	},

	mounted(){
		this.getCategories()
	},
	methods:{

         showFormEdit(){
            window.location.href = `/seller/edit-product/${504}`;
         },

		onFileSelected(){

			for(let i = 0; i< this.$refs.images.files.length;i++){
				this.url.push(URL.createObjectURL(this.$refs.images
					.files[i]))
				this.form.arrImage.push(this.$refs.images
					.files[i]);

			}
				// console.log(this.form.arrImage)

		

		},

		deleteImageBeforUpload(index,name){
         // console.log()
       
           this.form.arrImage.splice(index, 1)
           this.$refs.images.files
           // console.log(this.form.arrImage)

		},

		onSubmit(){

			
			let formData = new FormData()
			for(let i = 0; i < this.form.arrImage.length;i++){

				let file = this.form.arrImage[i]
				formData.append('images[' + i + ']',file);
			}
			formData.append('category_id', this.form.category_id);
			formData.append('title', this.form.title);
			formData.append('description', this.form.description);
			formData.append('price', this.form.price);
			mainAxios.post('/seller/product',formData,{
				headers: {
					Authorization: 'Bearer ' + Seller.getToken()
				}
			}).then((response) =>{
				swal({
				title: "تم التسجيل بنجاح ",
				text: `تم أضافة منتجك` ,
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
		getCountImage(event){
			console.log(event.target)
	      for(let i = 0;i< this.categories.length;i++){
					if(event.target.value == this.categories[i].id){
				this.numberOfImage = this.categories[i].products_images_count
          
					}
				}
				// console.log(this.numberOfImage)
		}
	}
}
</script>