@extends('layouts.alaalimshop')
@section('content')
  <div id="pageContent">

    <!-- Breadcrumb section -->

    <section class="breadcrumbs breadcrumbs-boxed">
      <div class="container">
        <ol class="breadcrumb breadcrumb--wd pull-left">
          <li><a href="index.html">الرئيسية</a></li>
          <li class="active"> السجلات</li>
        </ol>
        <!-- <ul id="productOther" class="product-other pull-right hidden-xs">
          <li class="product-other__link product-prev"><a href="#">تشيرت أسود بأكمام طويلة</a><span class="product-other__link__image"><img src='images/products/product-4.jpg'/></span></li>
          <li class="product-other__link product-next"><a href="#">فستان أبيض</a><span class="product-other__link__image"><img src='images/products/product-3.jpg'/></span></li>
        </ul> -->
      </div>
    </section>

    <!-- Content section -->
    <section class="content-2">
      <div class="container">
        <div class="row records">
          <div class="col-sm-12 col-md-12 col-lg-2">
            <div class=" records">

              <!-- <input class="check text-center" type="checkbox" id="vehicle1" name=" " value=" "> -->
              <img src="images/blog-author-img-01.jpg" alt="">

            </div>
          </div>

          <div class="product-info col-sm-12 col-md-12  col-lg-2">
              <div class="divider divider--sm"></div>
              <div class="divider divider--xs"></div>
            <h3>أحمد المصطفى</h3>
              <!-- <div class="divider divider--xs"></div> -->
            <p>تعديل المنتج   <span>09:42 ص</span></p>

          </div>

          <div class="product-info col-sm-12 col-md-12  col-lg-8">
              <div class="divider divider--sm"></div>
              <div class="divider divider--xs"></div>
            <span class="cir">1</span>
              <div class="divider divider--xs"></div>

            <p>15/7/2020</p>

          </div>

       </div>

      <div class="divider divider--xs product-info__divider"></div>

        <div class="row records">
          <div class="col-sm-4 col-md-4 col-lg-2">
            <div class=" records">

              <!-- <input class="check text-center" type="checkbox" id="vehicle1" name=" " value=" "> -->
              <img src="images/blog-author-img-01.jpg" alt="">

            </div>
          </div>

          <div class="product-info col-sm-4 col-md-4  col-lg-2">
              <div class="divider divider--sm"></div>
              <div class="divider divider--xs"></div>
            <h3>محمد علي </h3>
              <!-- <div class="divider divider--xs"></div> -->
            <p>حذف منتج    <span>09:42 ص</span></p>
          </div>

          <div class="product-info col-sm-8 col-md-8 col-lg-8">
              <div class="divider divider--sm"></div>
              <div class="divider divider--xs"></div>
            <span class="cir">4</span>
              <div class="divider divider--xs"></div>
            <p>14/7/2020</p>
          </div>
        </div>

        <div class="divider divider--xs product-info__divider"></div>

        <div class="row records">
        <div class="col-sm-4 col-md-4 col-lg-2">
          <div class=" records">

            <!-- <input class="check text-center" type="checkbox" id="vehicle1" name=" " value=" "> -->
            <img src="images/blog-author-img-01.jpg" alt="">

          </div>
        </div>

        <div class="product-info col-sm-4 col-md-4  col-lg-2">
            <div class="divider divider--sm"></div>
            <div class="divider divider--xs"></div>
          <h3>عثمان علي </h3>
            <!-- <div class="divider divider--xs"></div> -->
          <p>بحث     <span>09:42 ص</span></p>
        </div>

        <div class="product-info col-sm-12 col-md-12  col-lg-8">
            <div class="divider divider--sm"></div>
            <div class="divider divider--xs"></div>
          <span class="cir">5</span>
            <div class="divider divider--xs"></div>
          <p>15/7/2020</p>
        </div>
      </div>

        <div class="divider divider--xs product-info__divider"></div>

      </div>
     </section>
   </div>
@endsection
