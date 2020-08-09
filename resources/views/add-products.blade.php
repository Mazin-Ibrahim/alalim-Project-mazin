@extends('layouts.alaalimshop')

@section('content')
  <div id="pageContent">

    <!-- Breadcrumb section -->

    <section class="breadcrumbs breadcrumbs-boxed">
      <div class="container">
        <ol class="breadcrumb breadcrumb--wd pull-left">
          <li><a href="index.html">الرئيسية</a></li>
          <li class="active">اضافة منتج</li>
        </ol>
        <ul id="productOther" class="product-other pull-right hidden-xs">
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
              <option selected>اختار...</option>
              <option>ملابس رجالية</option>
              <option>الكترونيات</option>
              <option>أدوات منزلية</option>
              <option>أخرى</option>
            </select>
          </div>
        </div>

        <div class="row product-info-outer my-orders">

          <!-- <div class="col-sm-1 col-md-1 col-lg-1">
            <label class="my-checkbox">
              <input type="checkbox" id="blankCheckbox" checked="checked">
              <span class="checkmark"></span>
            </label>
          </div> -->

          <div class="col-sm-12 col-md-3 col-lg-3">
            <div class="details text-center">
              <span>اسم المنتج</span>
              <!-- <span class="details-l">22<span> -->
            </div>
          </div>

          <div class="col-sm-12 col-md-3 col-lg-3">
            <div class="details text-center">
              <span>سعر المنتج</span>
              <!-- <span class="details-l">Apple watch<span> -->
            </div>
          </div>

          <div class="col-sm-12 col-md-3 col-lg-3">
              <div class="details text-center">
                <span>الكمية</span>
                <!-- <span class="details-l">14<span> -->
              </div>
          </div>

          <div class="col-sm-12 col-md-3 col-lg-3">
              <div class="details text-center">
                <span>صورة المنتج</span>
                <!-- <span class="details-l">250000$<span> -->
              </div>
          </div>


            <div class="divider divider--sm"></div>
          </div>

          <div class="row product-info-outer my-orders">

            <!-- <div class="col-sm-1 col-md-1 col-lg-1">
              <label class="my-checkbox">
                <input type="checkbox" id="blankCheckbox" checked="checked">
                <span class="checkmark"></span>
              </label>
            </div> -->

            <div class="col-sm-12 col-md-3 col-lg-3">
              <div class="details text-center">
                <span>لون المنتج</span>
                <!-- <span class="details-l">محمد علي<span> -->
              </div>
            </div>

            <div class="col-sm-12 col-md-3 col-lg-3">
              <div class="details text-center">
                <span>الوزن</span>
                <!-- <span class="details-l">هزاع عويضة<span> -->
              </div>
            </div>

            <div class="col-sm-12 col-md-3 col-lg-3">
                <div class="details text-center">
                  <span>الموديل</span>
                  <!-- <span class="details-l">114/12/2020<span> -->
                </div>
            </div>

            <div class="col-sm-12 col-md-3 col-lg-3">
                <div class="details text-center">
                  <span>اجمالي السعر</span>
                  <!-- <span class="details-l">تم التوصيل<span> -->
                </div>
            </div>


              <div class="divider divider--sm"></div>
            </div>

          <div class="divider divider--xs product-info__divider"></div>



          <div class="my-products-edits text-center">
            <button type="button" class="btn btn-primary edit">اضافة</button>
            <!-- <button type="button" class="btn btn-primary del">حذف</button> -->
            <!-- <button type="button" class="btn btn-primary cir">+</button> -->
          </div>



        </div>
    </section>
  </div>
@endsection
