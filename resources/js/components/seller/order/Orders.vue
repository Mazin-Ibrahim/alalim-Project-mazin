<template>
	
	<div>
		<div id="pageContent">

    <!-- Breadcrumb section -->

    <section class="breadcrumbs breadcrumbs-boxed">
      <div class="container"> 
        <ol class="breadcrumb breadcrumb--wd pull-left">
          <li><a href="index.html">الرئيسية</a></li>
          <li class="active"> طلباتي</li>
        </ol>
     
      </div>
    </section>

    <!-- Content section -->
    <section class="content" v-for="(order,index) in ourOrders">
      <div class="container">
        <div class="row product-info-outer my-orders">

          <div class="col-sm-4 col-md-4 col-lg-5">

            <img src="images/wd-present-01.jpg" alt="">

          </div>

          <div class="col-sm-8 col-md-8 col-lg-7">

            <div class="row">
              <div class="details">
                <span v-if="order.products[1]">{{ order.products[1].product.title}}</span>
                <span v-if="!order.products[1]">لا يوجد</span>
                <span class="details-l">{{ order.total }}</span>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="details">
                <span>التاريخ</span>
                <span class="details-l">{{ order.created_at }}</span>
              </div>
            </div>
            <br>
            <div class="row">
              <span class="details-list">
                  {{ order.status }}
              </span>
              <span class="details-list">
                  <a href="order details.html">تصفح</a>
              </span>
            </div>

          </div>

          </div>
          <div class="divider divider--xs product-info__divider"></div>
        </div>
    </section>




    
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
			return {
				orders:[],
        ourOrders:[],
        products:[]
			}
		},
    created(){
       this.getOrders()

    },
		methods:{

			getOrders(){
				mainAxios.get('/seller/order',{
        headers: {
          Authorization: 'Bearer ' + Seller.getToken()
        }
      }).then((response) =>{
        this.orders = response.data
          for(let i =0;i < this.orders.data.length;i++){
            if(this.orders.data[i].seller_id == 31){
               this.ourOrders.push(this.orders.data[i])
          
            }
          }

          console.log(this.ourOrders)
      
      }).catch((err) => {
        alert("nooo")
      })
			},
		},
	}
</script>