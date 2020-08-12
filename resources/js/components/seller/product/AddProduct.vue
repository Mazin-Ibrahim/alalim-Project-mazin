<template>
	
	<div class="container" style="margin:3rem;">
		<div class="row">
			<div class="col-md-6">
				<form @submit.prevent="onSubmit" enctype="multipart/form-data">
					<div class="form-group">
						<label for="inputState">التصنيفات</label>
						<select id="inputState" class="form-control" v-model="form.category_id">
							<option  v-for="category in categories" :value="category.id">
								{{ category.title }}
							</option>
						</select>
					</div>

					<div class="form-group">
						<label for="inputState">أسم المنتج</label>
						<input type="text" v-model="form.title" class="form-control">
					</div>

					<div class="form-group">
						<label for="inputState">السعر</label>
						<input type="number" v-model="form.price" class="form-control">
					</div>

					<div class="form-group">
						<label for="inputState">صور المنتج</label>
						<input type="file" ref="images" @change="onFileSelected" class="form-control" multiple>
					</div>

					<div class="form-group">
						<label for="inputState">وصف المنتج</label>
						<textarea class="form-control" rows="10" v-model="form.description"></textarea>
					</div>

					<div class="form-group">
						<button class="btn btn-primary edit">أضافة</button>
					</div>

					<div class="form-group">
						<div v-for="image in form.arrImage.file">
							<img :src="image">
						</div>
					</div>
					
				</form>
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

	data(){
		return{
			categories:[],
			form:{
				category_id:'',
				title:'',
				description:'',
				price:null,
				images:[],
				arrImage:[]
			},
		}
	},

	mounted(){
		this.getCategories()
	},
	methods:{

		onFileSelected(){

			for(let i = 0; i< this.$refs.images.files.length;i++){
				this.form.arrImage.push(this.$refs.images
					.files[i]);
				console.log(this.form.arrImage)
			}

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
				console.log(response)
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
		}
	}
}
</script>