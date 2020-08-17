<template>
	<div>
		
		
	<div v-for="cat in categories">
		<div class="product-category hover-squared" > <a href="#"><img src="images/category-empty.png" data-lazy="images/category-img-01.png" alt="#"></a>
        <div class="product-category__hover caption"></div>
        <div class="product-category__info">
          <div class="product-category__info__ribbon">
            <h5 class="product-category__info__ribbon__title">{{ cat.title }}</h5>
            <div class="product-category__info__ribbon__count">227 منتج</div>
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
	export default{

		data(){
			return{

				categories:[]
			}
		},

		mounted(){
            
            this.getCategories()
		},

		methods:{
			getCategories(){

			mainAxios.get('/seller/product/create',{
				headers: {
					Authorization: 'Bearer ' + Seller.getToken()
				}
			}).then((response) =>{
				this.categories = response.data
				console.log(this.categories)
			}).catch((err) => {
				alert("nooo")
			})
		}
		}
	}
</script>