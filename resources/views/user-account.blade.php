@extends('layouts.alaalimshop')
@section('content')
<body dir="rtl">
<div id="loader-wrapper" class="loader-off">
<div id="loader"></div>
</div>
<div class="wrapper">
  <!-- Header section -->
  <section class="breadcrumbs breadcrumbs-boxed">
    <div class="container">
      <ol class="breadcrumb breadcrumb--wd pull-left">
        <li><a href="index.html">الرئيسية</a></li>
        <li class="active"> انشاء حساب زبون</li>
      </ol>
      <!-- <ul id="productOther" class="product-other pull-right hidden-xs">
        <li class="product-other__link product-prev"><a href="#">تشيرت أسود بأكمام طويلة</a><span class="product-other__link__image"><img src='images/products/product-4.jpg'/></span></li>
        <li class="product-other__link product-next"><a href="#">فستان أبيض</a><span class="product-other__link__image"><img src='images/products/product-3.jpg'/></span></li>
      </ul> -->
    </div>
  </section>

  <div id="pageContent">

    <!-- Content section -->

    <section class="content  ">
      <div class="container">
				<div class="text-center"><a href="#" class="btn btn--wd text-uppercase wave">حساب زبون</a> <a href="seller account.html" class="btn btn--wd text-uppercase wave">حساب عميل</a></div>
				  <div class="divider divider--sm"></div>
        <!-- <h2 class="h-pad-sm text-uppercase text-center">إنشاء حساب زبون</h2>
        <h6 class="text-uppercase text-center">
          <a href="seller account.html" class="txt-decoration-under">إضغط هنا لإنشاء حساب تاجر </a>
        </h6> -->
        <form  method="post" action="/createUser" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-row">
            <div class="form-group col-md-3">
              <label for="inputEmail4">الاسم رباعي</label>
              <input type="text" class="form-control" id="full_name" name="full_name" placeholder="الاسم رباعي" required>
            </div>
            <div class="form-group col-md-3">
              <label for="inputPassword4">رقم الهاتف</label>
              <input type="tel" class="form-control" id="phone_number" name="phone_number" placeholder="رقم الهاتف" required>
            </div>
            <div class="form-group col-md-3">
              <label for="inputEmail4">البريد الالكتروني</label>
              <input type="text" class="form-control" id="email" name="email" placeholder="البريد الالكتروني">
            </div>
            <div class="form-group col-md-3">
              <label for="inputCity">اثبات الشخصية</label>
              <input type="file" class="form-control" id="identity" name="identity">
            </div>

          </div>

          <div class="form-row">
            <div class="form-group col-md-3">
              <label for="inputCity">الدولة</label>
              <input type="text" class="form-control" id="country" name="country" required>
            </div>
            <div class="form-group col-md-3">
              <label for="inputState">المحافظة</label>
              <select id="state" name="state" class="form-control" required>
                <option selected>اختار...</option>
                <option>...</option>
              </select>
            </div>
            <div class="form-group col-md-3">
              <label for="inputState">المديرية</label>
              <select id="city"  name="city" class="form-control" required>
                <option selected>اختار...</option>
                <option>...</option>
              </select>
            </div>
            <!-- <div class="form-group col-md-3">
              <label for="inputZip">المنطقة</label>
              <input type="text" class="form-control" id="inputZip">
            </div> -->
          </div>


          <div class="form-row">

            <div class="form-group col-md-3">
              <label for="inputEmail4">اسم المستخدم</label>
              <input type="text" class="form-control" id="username"  name="username" placeholder="اسم المستخدم" required>
            </div>

            <div class="form-group col-md-3">
              <label for="inputEmail4">كلمة السر</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="كلمة السر" required>
            </div>

            <div class="form-group col-md-3">
              <label for="inputPassword4">تأكيد كلمة السر</label>
              <input type="password" class="form-control" id="confirm-password" name="confirm-password" placeholder="تأكيد كلمة السر" required>
            </div>
            <div class="my-products-edits form-group col-md-3">
              <button type="submit" class="btn btn-primary edit" style="margin: 23px 0;">اضافة</button>
            </div>


          </div>

          <!-- <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck">
                تذكرني
              </label>
            </div>
          </div> -->

  </form>

      </div>
    </section>






    <!-- End Content section -->
  </div>
</div>

@endsection
