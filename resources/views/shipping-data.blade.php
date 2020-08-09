@extends('layouts.alaalimshop')
@section('content')
  <div id="pageContent">

    <!-- Breadcrumb section -->

    <section class="breadcrumbs breadcrumbs-boxed">
      <div class="container">
        <ol class="breadcrumb breadcrumb--wd pull-left">
          <li><a href="index.html">الرئيسية</a></li>
          <li class="active"> بيانات التوصيل</li>
        </ol>
        <ul id="productOther" class="product-other pull-right hidden-xs">
          <!-- <li class="product-other__link product-prev"><a href="#">حسابات المستخدمين</a></li> -->
          <!-- <li class="product-other__link product-next"><a href="#">فستان أبيض</a><span class="product-other__link__image"><img src='images/products/product-3.jpg'/></span></li> -->
        </ul>
      </div>
    </section>

    <!-- Content section -->
    <section class="content-2">
      <div class="container">

        <div class="row product-info-outer my-orders">

          <!-- <div class="col-sm-1 col-md-1 col-lg-1">
            <label class="my-checkbox">
              <input type="checkbox" id="blankCheckbox" checked="checked">
              <span class="checkmark"></span>
            </label>
          </div> -->

          <div class="col-sm-12 col-md-3 col-lg-3">
            <div class="details">
              <span>الاسم</span>
              <span class="details-l">محمد عثمان<span>
            </div>
          </div>

          <div class="col-sm-12 col-md-3 col-lg-3">
            <div class="details">
              <span> رقم الجوال</span>
              <span class="details-l">0912345678<span>
            </div>
          </div>

          <div class="col-sm-12 col-md-6 col-lg-6">
              <div class="details">
                <span>العنوان</span>
                <span class="details-l">عمان - الأردن<span>
              </div>
          </div>

            <div class="divider divider--sm"></div>
          </div>

          <div class="divider divider--xs product-info__divider"></div>

          <div class="my-products-edits text-center">
            <button type="button" class="btn btn-primary edit">التالي</button>
            <!-- <button type="button" class="btn btn-primary del">حذف</button> -->
            <!-- <button type="button" class="btn btn-primary cir">+</button> -->
          </div>



        </div>
    </section>
  </div>

@endsection
