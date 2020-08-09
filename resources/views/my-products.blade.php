@extends('layouts.alaalimshop')
@section('content')
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
    <section class="content">
      <div class="container">
        <div class="row product-info-outer">
          <div class="col-sm-4 col-md-4 col-lg-5">

            <label class="my-checkbox">
              <input type="checkbox" id="blankCheckbox" checked="checked">
              <span class="checkmark"></span>
            </label>

            <div class="product-main-image my-products">



              <img src="images/wd-present-01.jpg" alt="">

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
                  <p class="app-style-name">لاب توب </p>
                </div>
                <div class=" col-lg-4 col-sm-6 col-xs-6">
                  <p class="app-style-value">200$</p>
                </div>
              </div>

              <div class="row">
                <div class=" col-lg-8 col-sm-6 col-xs-6">
                  <p class="app-style-name">القسم</p>
                </div>
                <div class=" col-lg-4 col-sm-6 col-xs-6">
                  <p class="app-style-value">الكترونيات</p>
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
    <section class="content">
      <div class="container">
        <div class="row product-info-outer">
          <div class="col-sm-4 col-md-4 col-lg-5">

            <label class="my-checkbox">
              <input type="checkbox" id="blankCheckbox" checked="checked">
              <span class="checkmark"></span>
            </label>

            <div class="product-main-image">

              <img src="images/wd-present-02.jpg" alt="">

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
                  <p class="app-style-name">حقيبة</p>
                </div>
                <div class=" col-lg-4 col-sm-6 col-xs-6">
                  <p class="app-style-value">432$</p>
                </div>
              </div>

              <div class="row">
                <div class=" col-lg-8 col-sm-6 col-xs-6">
                  <p class="app-style-name">القسم</p>
                </div>
                <div class=" col-lg-4 col-sm-6 col-xs-6">
                  <p class="app-style-value">الكترونيات</p>
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

          <div class="my-products-edits text-center">
            <button type="button" class="btn btn-primary edit">تعديل</button>
            <button type="button" class="btn btn-primary del">حذف</button>
            <button type="button" class="btn btn-primary cir">+</button>
          </div>

    </div>
    </section>
  </div>

@endsection
