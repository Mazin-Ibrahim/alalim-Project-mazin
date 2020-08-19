<template>
	 <div id="pageContent">

    <!-- Breadcrumb section -->

    <section class="breadcrumbs breadcrumbs-boxed">
      <div class="container">
        <ol class="breadcrumb breadcrumb--wd pull-left">
          <li><a href="index.html">الرئيسية</a></li>
          <li class="active"> منتجاتي</li>
        </ol>
        <!-- <ul id="productOther" class="product-other pull-right hidden-xs">
          <li class="product-other__link product-prev"><a href="#">تشيرت أسود بأكمام طويلة</a><span class="product-other__link__image"><img src='images/products/product-4.jpg'/></span></li>
          <li class="product-other__link product-next"><a href="#">فستان أبيض</a><span class="product-other__link__image"><img src='images/products/product-3.jpg'/></span></li>
        </ul> -->
      </div>
    </section>

    <!-- Content section -->
    <section class="content" v-for="product in ourProducts">
      <div class="container">
        <div class="row product-info-outer">
          <div class="col-sm-4 col-md-4 col-lg-5">

            <label class="my-checkbox">
              <input type="checkbox" id="blankCheckbox" checked="checked">
              <span class="checkmark"></span>
            </label>

            <div class="product-main-image my-products">



              <img :src='product.images[0].image' alt="" style="width:200px;hight:200px;">

            </div>
              </div>

          <div class="product-info col-sm-8 col-md-8 col-lg-7">

            <div class="divider divider--sm"></div>
            <div class="divider divider--xs"></div>
            <div class="divider divider--sm"></div>
            <div class="divider divider--xs"></div>

            <div class="app-product">
              <div class="row">
                <div class=" col-lg-8 col-sm-6 col-xs-6">
                  <p class="app-style-name">{{product.title}}</p>
                </div>
                <div class=" col-lg-4 col-sm-6 col-xs-6">
                  <p class="app-style-value">{{product.price}}$</p>
                </div>
              </div>

              <div class="row">
                <div class=" col-lg-8 col-sm-6 col-xs-6">
                  <p class="app-style-name">القسم</p>
                </div>
                <div class=" col-lg-4 col-sm-6 col-xs-6">
                  <p class="app-style-value">{{ product.category_id }}</p>
                </div>
              </div>


              <div class="row">
                <div class=" col-lg-8 col-sm-6 col-xs-6">
                  <p class="app-style-name">عدد المشاهدات</p>
                </div>
                <div class=" col-lg-4 col-sm-6 col-xs-6">
                  <p class="app-style-value">200</p>
                </div>
              </div>
              </div>





          </div>
      </div>
          <div class="divider divider--xs product-info__divider"></div>
    </div>
    </section>



    <!-- Content section -->
  
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
			return {
				products:[],
        ourProducts:[]
			}
		},
    created(){
       this.getProducts()

    },
		methods:{

			getProducts(){
				mainAxios.get('/seller/product',{
        headers: {
          Authorization: 'Bearer ' + Seller.getToken()
        }
      }).then((response) =>{
        this.products = response.data
          for(let i =0;i < this.products.data.length;i++){
            if(this.products.data[i].seller_id == 29){
               this.ourProducts.push(this.products.data[i])
          
            }
          }
       console.log(this.ourProducts)
        // console.log(this.products.data[0])
      }).catch((err) => {
        alert("nooo")
      })
			}
		}
	}
</script>