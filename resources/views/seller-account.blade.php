@extends('layouts.alaalimshop')
@section('content')

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

        <form>
          <div class="form-row">
            <div class="form-group col-md-3">
              <label for="inputEmail4">الاسم رباعي</label>
              <input type="text" class="form-control" id="inputEmail4" placeholder="الاسم رباعي">
            </div>
            <div class="form-group col-md-3">
              <label for="inputPassword4">رقم الهاتف</label>
              <input type="tel" class="form-control" id="inputPassword4" placeholder="رقم الهاتف">
            </div>
            <div class="form-group col-md-3">
              <label for="inputEmail4">البريد الالكتروني</label>
              <input type="text" class="form-control" id="inputEmail4" placeholder="البريد الالكتروني">
            </div>
            <div class="form-group col-md-3">
              <label for="inputCity">اثبات الشخصية</label>
              <input type="file" class="form-control" id="inputCity">
            </div>

          </div>

          <div class="form-row">
            <div class="form-group col-md-3">
              <label for="inputCity">الدولة</label>
              <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-3">
              <label for="inputState">المحافظة</label>
              <select id="inputState" class="form-control">
                <option selected>اختار...</option>
                <option>...</option>
              </select>
            </div>
            <div class="form-group col-md-3">
              <label for="inputState">المديرية</label>
              <select id="inputState" class="form-control">
                <option selected>اختار...</option>
                <option>...</option>
              </select>
            </div>
            <div class="form-group col-md-3">
              <label for="inputZip">المنطقة</label>
              <input type="text" class="form-control" id="inputZip">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">اسم المتجر</label>
              <input type="text" class="form-control" id="inputEmail4" placeholder="اسم المتجر">
            </div>
            <div class="form-group col-md-3">
              <label for="inputCity">صورة المتجر</label>
              <input type="file" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-3">
              <label for="inputEmail4">اسم المستخدم</label>
              <input type="text" class="form-control" id="inputEmail4" placeholder="اسم المستخدم">
            </div>

          </div>


          <div class="form-row">

            <div class="form-group col-md-3">
              <label for="inputEmail4">كلمة السر</label>
              <input type="password" class="form-control" id="inputEmail4" placeholder="كلمة السر">
            </div>

            <div class="form-group col-md-3">
              <label for="inputPassword4">تأكيد كلمة السر</label>
              <input type="number" class="form-control" id="inputPassword4" placeholder="تأكيد كلمة السر">
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


@endsection
