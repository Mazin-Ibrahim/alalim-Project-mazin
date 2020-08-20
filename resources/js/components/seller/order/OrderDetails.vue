<template>
  <div class="container" dir="rtl">
    <div class="row">
     <div class="col-md-10 col-md-offset-2">
      <div class="shadow p-4 bg-gray-100 my-16">
        <div class="flex justify-between">
         <p class="font-semibold text-gray-700">أسم الزبون  : {{ customer }}</p>
         <p class="font-semibold text-gray-700">تاريح  الطلب   : {{ date }}</p>
         <p class="font-semibold text-gray-700">أجمالي  الطلب   : {{ total }}</p>
       </div>
       <p class="font-semibold text-gray-500 mt-2">المنتجات</p>
       <div class="mt-4">
        <div class="p-2 bg-gray-200" >
         <table class="">
          <thead>
            <tr>
              <th class="border px-4 py-2">أسم المنتج</th>
              <th class="border px-4 py-2">السعر</th>
              <th class="border px-4 py-2">الكمية</th>

            </tr>
          </thead>
          <tbody>
            <tr class="my-2" v-for="product in orders.products">
              <td class="border px-4 py-2 w-full">{{ product.product.title }}</td>
              <td class="border px-4 py-2 w-full">{{ product.product.price }}</td>
              <td class="border px-4 py-2 w-full">{{ product.qty }}</td>
               </tr>
            </tbody>
          </table>

        </div>
          <div class="mt-4 p-2 bg-gray-200 flex justify-between px-4 ">
            <p class="font-semiblod">نوع الشحن   :  الشحن  السربع </p>
            <p class="font-semiblod"> طريقة الدفع   : أونلاين </p>
          </div>


      </div>
    </div>
  </div>
</div> 
</div>
</template>

<script type="text/javascript">
export default{

 data(){
  return{

    customer:'',
    total:'',
    date:'',

  }
},
props:['orders'],
mounted(){
  this.orderDetails()
},
methods:{
  orderDetails(){
   this.customer = this.orders.user.full_name
   this.total   = this.orders.total
   this.date    = this.orders.created_at
   console.log(this.orders)

 }
}
}
</script>