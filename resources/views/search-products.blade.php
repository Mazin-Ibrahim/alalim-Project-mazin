@extends('layouts.alaalimshop')
@section('content')
  <div id="pageContent">

    <!-- Breadcrumb section -->

    <section class="breadcrumbs breadcrumbs-boxed">
      <div class="container">
        <ol class="breadcrumb breadcrumb--wd pull-left">
          <li><a href="index.html">الرئيسية</a></li>
          <li class="active">بحث عن منتج</li>
        </ol>
        <ul id="productOther" class="product-other pull-right hidden-xs">
          <!-- <li class="product-other__link product-prev"><a href="#">حسابات المستخدمين</a></li> -->
          <!-- <li class="product-other__link product-next"><a href="#">فستان أبيض</a><span class="product-other__link__image"><img src='images/products/product-3.jpg'/></span></li> -->
        </ul>
      </div>
    </section>

    <!-- Content section -->
    <section class="content">
      <div class="container">
        <div class="row">
          <div class="form-group col-md-3">
            <label for="inputState">التصنيفات</label>
            <select id="inputState" class="form-control">
              <option>ملابس رجالية</option>
              <option>الكترونيات</option>
              <option>أدوات منزلية</option>
              <option>أخرى</option>
            </select>
          </div>
        </div>

        <div class="row product-info-outer my-orders">
          <div class="col-sm-12 col-md-3 col-lg-3">
            <div class="details text-center">
              <input class="border-none" type="text" name="Item-name" value="" placeholder="إسم المنتج">
              <!-- <span class="details-l">22<span> -->
            </div>
          </div>

          <div class="col-sm-12 col-md-3 col-lg-3">
            <div class="details text-center">
                <input class="border-none" type="number" name="Item-price" value="" placeholder="سعر المنتج">
            </div>
          </div>

          <div class="col-sm-12 col-md-3 col-lg-3">
            <div class="details text-center">
              <select class="border-none width-100" name="item-color">
                <option value="" selected>لون المنتج</option>
                <option value="white">لون أبيض</option>
              </select>
            </div>
          </div>
          <div class="col-sm-12 col-md-3 col-lg-3">
              <div class="details text-center">
                <input class="border-none" type="text" name="Item-model" value="" placeholder="الموديل">
              </div>
          </div>
        </div> <!-- end row -->
        <div class="my-products-edits text-center mrg-top-3">
            <button type="button" class="btn btn-primary edit width-100">بحث</button>
        </div>
      </div>
    </section>
  </div>
@endsection
