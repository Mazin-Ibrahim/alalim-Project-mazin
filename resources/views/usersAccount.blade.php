@extends('layouts.alaalimshop')
@section('content')
<body class="rtl">
<div id="loader-wrapper" class="loader-off">
<div id="loader"></div>
</div>
<!-- Modal Search -->
<div class="overlay overlay-scale">
  <button type="button" class="overlay-close"> ✕ </button>
  <div class="overlay__content">
    <form id="search-form" class="search-form outer" action="#" method="post">
      <div class="input-group input-group--wd">
        <input type="text" class=" input--full" placeholder="search text here ...">
        <span class="input-group__bar"></span> </div>
      <button class="btn btn--wd text-uppercase wave waves-effect">Search</button>
    </form>
  </div>
</div>
<!-- / end Modal Search -->
<div class="wrapper">
  <!-- Header section -->






  <div id="pageContent">

    <!-- Breadcrumb section -->

    <section class="breadcrumbs breadcrumbs-boxed">
      <div class="container">
        <ol class="breadcrumb breadcrumb--wd pull-left">
          <li><a href="bankAccount.html">حسابات البنك</a></li>
          <li class="active"> حسابات المستخدمين</li>
        </ol>
        <ul id="productOther" class="product-other pull-right hidden-xs">
          <!-- <li class="product-other__link product-prev"><a href="#">تشيرت أسود بأكمام طويلة</a></li> -->
          <!-- <li class="product-other__link product-next"><a href="#">فستان أبيض</a><span class="product-other__link__image"><img src='images/products/product-3.jpg'/></span></li> -->
        </ul>
      </div>
    </section>

    <!-- Content section -->
    <section class="content">
      <div class="container">

        <div class="row product-info-outer my-orders">

          <div class="col-sm-1 col-md-2 col-lg-2">
            <label class="my-checkbox">
              <input type="checkbox" id="blankCheckbox" checked="checked">
              <span class="checkmark"></span>
            </label>
          </div>

          <div class="col-sm-6 col-md-5 col-lg-5">
            <h3>أحمد علي</h3>
          </div>

          <div class="col-sm-5 col-md-5 col-lg-5">
            <input type="checkbox" checked data-toggle="toggle" data-style="ios" data-onstyle="success" data-offstyle="danger">
          </div>


            <div class="divider divider--sm"></div>
          </div>

          <div class="divider divider--xs product-info__divider"></div>

          <div class="row product-info-outer my-orders">

            <div class="col-sm-1 col-md-2 col-lg-2">
              <label class="my-checkbox">
                <input type="checkbox" id="blankCheckbox" checked="checked">
                <span class="checkmark"></span>
              </label>
            </div>

            <div class="col-sm-6 col-md-5 col-lg-5">
              <h3>علي عثمان</h3>
            </div>

            <div class="col-sm-5 col-md-5 col-lg-5">
              <input type="checkbox" checked data-toggle="toggle" data-style="ios" data-onstyle="success" data-offstyle="danger">
            </div>


            <div class="divider divider--sm"></div>
            <div class="divider divider--xs product-info__divider"></div>

            </div>


            <div class="row product-info-outer my-orders">

              <div class="col-sm-1 col-md-2 col-lg-2">
                <label class="my-checkbox">
                  <input type="checkbox" id="blankCheckbox" checked="checked">
                  <span class="checkmark"></span>
                </label>
              </div>

              <div class="col-sm-6 col-md-5 col-lg-5">
                <h3>عبد الله صالح</h3>
              </div>

              <div class="col-sm-5 col-md-5 col-lg-5">
                <input type="checkbox" checked data-toggle="toggle" data-style="ios" data-onstyle="success" data-offstyle="danger">
              </div>


                <div class="divider divider--sm"></div>
                <div class="divider divider--xs product-info__divider"></div>

              </div>

              <div class="my-products-edits text-center">
                <button type="button" class="btn btn-primary edit">تعديل</button>
                <button type="button" class="btn btn-primary del">حذف</button>
                <button type="button" class="btn btn-primary cir">+</button>
              </div>

        </div>
    </section>

@endsection
