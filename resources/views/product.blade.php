@extends('layouts.alaalimshop')
@section('content')
  <!-- End Header section -->
  <!-- end of header -->
  <div id="pageContent">

    <!-- Breadcrumb section -->

    <section class="breadcrumbs breadcrumbs-boxed">
      <div class="container">
        <ol class="breadcrumb breadcrumb--wd pull-left">
          <li><a href="index.html">الرئيسية</a></li>
          <li class="active"> تشيرت أبيض بأكمام</li>
        </ol>
        <ul id="productOther" class="product-other pull-right hidden-xs">
          <li class="product-other__link product-prev"><a href="#">تشيرت أسود بأكمام طويلة</a><span class="product-other__link__image"><img src='images/products/product-4.jpg'/></span></li>
          <li class="product-other__link product-next"><a href="#">فستان أبيض</a><span class="product-other__link__image"><img src='images/products/product-3.jpg'/></span></li>
        </ul>
      </div>
    </section>

    <!-- Content section -->
    <section class="content-2">
      <div class="container">
        <div class="row product-info-outer">
          <div class="col-sm-4 col-md-4 col-lg-5 hidden-xs">
            <div class="product-main-image">
              <div class="product-main-image__item"><img class="product-zoom" src='images/products/product-big-1.jpg' data-zoom-image="images/products/product-big-1-zoom.jpg"/></div>
              <div class="product-main-image__zoom"></div>
            </div>
            <div class="product-images-carousel">
              <ul id="smallGallery">
                <li><a href="#" data-image="images/products/product-big-1.jpg" data-zoom-image="images/products/product-big-1-zoom.jpg"><img src="images/products/product-small-1.jpg" alt="" /></a></li>
                <li><a href="#" data-image="images/products/product-big-2.jpg" data-zoom-image="images/products/product-big-2-zoom.jpg"><img src="images/products/product-small-2.jpg" alt="" /></a></li>
                <li><a href="#" data-image="images/products/product-big-3.jpg" data-zoom-image="images/products/product-big-3-zoom.jpg"><img src="images/products/product-small-3.jpg" alt="" /></a></li>
                <li><a href="#" data-image="images/products/product-big-4.jpg" data-zoom-image="images/products/product-big-4-zoom.jpg"><img src="images/products/product-small-4.jpg" alt="" /></a></li>
                <li><a href="#" data-image="images/products/product-big-5.jpg" data-zoom-image="images/products/product-big-5-zoom.jpg"><img src="images/products/product-small-5.jpg" alt="" /></a></li>
                <li><a href="http://www.youtube.com/watch?v=JW8M32oHTKw" class="video-link"><img src="images/products/product-small-empty.png" alt="" /></a></li>
              </ul>
            </div>
          </div>
          <div class="product-info col-sm-8 col-md-8 col-lg-7">
            <div class="product-info__title">
              <h2>تشيرت أبيض بأكمام</h2>
              <!-- <div class="rating product-info__rating visible-xs"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span></div> -->
            </div>
            <div class="product-info__sku pull-right">الكمية: 00065 &nbsp;&nbsp;<span class="label label-success">في المخزن</span></div>
            <ul id="singleGallery" class="visible-xs">
              <li><img src="images/products/product-big-1.jpg" alt="" /></li>
              <li><img src="images/products/product-big-2.jpg" alt="" /></li>
              <li><img src="images/products/product-big-3.jpg" alt="" /></li>
              <li><img src="images/products/product-big-4.jpg" alt="" /></li>
              <li><img src="images/products/product-big-5.jpg" alt="" /></li>
            </ul>
            <div class="price-box product-info__price"><span class="price-box__new">$65.00</span> <span class="price-box__old">$84.00</span></div>
            <!-- <div class="rating product-info__rating hidden-xs"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span></div> -->
            <div class="divider divider--xs product-info__divider"></div>
            <div class="product-info__description">هذا التي شيرت مصنوع من جيرسي بوليستر مطاطي معاد تدويره ويحفظ الموارد ويقلل من الانبعاثات.. كما أنه يحافظ على بقائك جافًا بفضل الخامة التي تمنع الرطوبة. بطانة من نسيج شبكي من الظهر تساعد على عملية تدفق الهواء ما يبقيك جافًا.

              مواصفات التصميم تي شيرت مقاس مضبوط </div>
            <div class="divider divider--xs product-info__divider"></div>
            <div class="app-product">
              <div class="row">
                <div class=" col-lg-8 col-sm-6 col-xs-6">
                  <p class="app-style-name">المدينة</p>
                </div>
                <div class=" col-lg-4 col-sm-6 col-xs-6">
                  <p class="app-style-value">صنعاء</p>
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
              <div class="divider divider--xs product-info__divider"></div>
              <div class="row">
                <ul class="app-list">
                  <li>متجر عثمان</li>
                  <li>اتصال</li>
                  <li><a href="#">دردشة</a></li>
                </ul>
              </div>

            <div class="divider divider--sm"></div>
            <label>الكمية:</label>
            <div class="outer">
              <div class="input-group-qty pull-left"> <span class="pull-left"> </span>
                <input type="text" name="quant[1]" class="input-number input--wd input-qty pull-left" value="1" min="1" max="100">
                <span class="pull-left btn-number-container">
                <button type="button" class="btn btn-number btn-number--plus" data-type="plus" data-field="quant[1]"> + </button>
                <button type="button" class="btn btn-number btn-number--minus" disabled="disabled" data-type="minus" data-field="quant[1]"> &#8211; </button>
                </span> </div>
              <div class="pull-left">
                <button class="btn btn--wd text-uppercase">احجز</button>
              </div>
              <div class="social-links social-links--colorize social-links--invert social-links--padding pull-right">
                <ul>
                  <li class="social-links__item"><a class="icon icon-facebook tooltip-link" href="#" data-placement="top" data-toggle="tooltip" data-original-title="Share on facebook"></a></li>
                  <li class="social-links__item"><a class="icon icon-twitter tooltip-link" href="#" data-placement="top" data-toggle="tooltip" data-original-title="Share on twitter"></a></li>
                  <li class="social-links__item"><a class="icon icon-google tooltip-link" href="#" data-placement="top" data-toggle="tooltip" data-original-title="Share on google"></a></li>
                  <li class="social-links__item"><a class="icon icon-pinterest tooltip-link" href="#" data-placement="top" data-toggle="tooltip" data-original-title="Share on pinterest"></a></li>
                </ul>
              </div>
            </div>
            <div class="divider divider--xs"></div>
            <ul class="product-links product-links--inline">
              <!-- <li><a href="#"><span class="icon icon-bars"></span>Add to compare</a></li> -->
              <li><a href="#"><span class="icon icon-favorite"></span>أضف الى المفضلة</a></li>
              <!-- <li><a href="#"><span class="icon icon-mail-fill"></span>Email to friend</a></li> -->
            </ul>
          </div>
          <!-- <div class="col-sm-12 col-md-4 col-lg-3">
            <h4>CUSTOM HTML BLOCK</h4>
            <div class="card">
              <div class="card__row"> You can add your content here, like promotions or some additional info </div>
              <a href="#" class="card__row card__row--icon">
              <div class="card__row--icon__icon"> <span class="icon icon-shop-label"></span></div>
              <div class="card__row--icon__text">
                <div class="card__row__title">Special offer: 1+1=3</div>
                Get a gift!</div>
              </a> <a href="#" class="card__row card__row--icon">
              <div class="card__row--icon__icon"> <span class="icon icon-money"></span></div>
              <div class="card__row--icon__text">
                <div class="card__row__title">Free Reward Card</div>
                Worth $10, $50, $100. <br>
              </div>
              </a> <a href="#" class="card__row card__row--icon">
              <div class="card__row--icon__icon"> <span class="icon icon-identification-alt"></span></div>
              <div class="card__row--icon__text">
                <div class="card__row__title">Join to our Club</div>
              </div>
              </a> <a class="card__row card__row--icon">
              <div class="card__row--icon__icon"> <span class="icon icon-truck"></span></div>
              <div class="card__row--icon__text">
                <div class="card__row__title">Free shipping</div>
              </div>
              </a> </div>
          </div> -->
        </div>
      </div>
    </section>
    <section class="content content--fill">
      <div class="container">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-tabs--wd" role="tablist">
          <li class="active"><a href="#Tab1" aria-controls="home" role="tab" data-toggle="tab" class="text-uppercase">تفاصيل المنتج</a></li>
          <!-- <li><a href="#Tab2" role="tab" data-toggle="tab" class="text-uppercase">Reviews</a></li>
          <li><a href="#Tab3" role="tab" data-toggle="tab" class="text-uppercase">Tags</a></li>
          <li><a href="#Tab4" role="tab" data-toggle="tab" class="text-uppercase">CUSTOM TAB</a></li>
          <li><a href="#Tab5" role="tab" data-toggle="tab" class="text-uppercase">Sizing Guide</a></li> -->
        </ul>

        <!-- Tab panes -->
        <div class="tab-content tab-content--wd">
          <div role="tabpanel" class="tab-pane active" id="Tab1">
            <p>هذا التي شيرت مصنوع من جيرسي بوليستر مطاطي معاد تدويره ويحفظ الموارد ويقلل من الانبعاثات.. كما أنه يحافظ على بقائك جافًا بفضل الخامة التي تمنع الرطوبة. بطانة من نسيج شبكي من الظهر تساعد على عملية تدفق الهواء ما يبقيك جافًا.

              مواصفات التصميم تي شيرت مقاس مضبوط </p>
            <div class="divider divider--xs"></div>
            <table class="table table-params">
              <tbody>
                <tr>
                  <td class="text-right"><strong>الحجم</strong></td>
                  <td class="my-td-color">32 كجم</td>
                </tr>
                <tr>
                  <td class="text-right"><strong>الوزن</strong></td>
                  <td class="my-td-color">50 طن</td>
                </tr>
                <tr>
                  <td class="text-right"><strong>الكمية المتوفرة</strong></td>
                  <td class="my-td-color">555</td>
                </tr>
                <tr>
                  <td class="text-right"><strong>الشركة المنتجة</strong></td>
                  <td class="my-td-color">Apple</td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- <div role="tabpanel" class="tab-pane" id="Tab2">
            <h6><strong>CUSTOMER REVIEWS 1 ITEM(S)</strong></h6>
            <p> GREAT!</p>
            <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, sollicitudin eu, vehicula venenatis, tempor vitae, est. Praesent vitae dui. Morbi id tellus. Nullam ac nisi non eros gravida venenatis. Ut euismod, turpis sollicitudin lobortis pellentesque, libero massa dapibus dui, eu dictum justo urna et mi. Integer dictum est vitae sem. </p>
            <div class="divider divider--xs"></div>
            <table class="table table-params">
              <tbody>
                <tr>
                  <td class="text-right"><strong>QUALITY</strong></td>
                  <td><div class="rating rating--big"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star empty-star"></span></div></td>
                </tr>
                <tr>
                  <td class="text-right"><strong>PRICE</strong></td>
                  <td><div class="rating rating--big"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star empty-star"></span></div></td>
                </tr>
                <tr>
                  <td class="text-right"><strong>VALUE</strong></td>
                  <td><div class="rating rating--big"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star empty-star"></span></div></td>
                </tr>
              </tbody>
            </table>
            <p class="color-light">Review by User / (posted on 16/9/2016)</p>
            <div class="divider divider--xs"></div>
            <h6><strong>WRITE YOUR OWN REVIEW</strong></h6>
            <p>YOU'RE REVIEWING:  Lorem ipsum dolor sit amet conse ctetur</p>
            <p>HOW DO YOU RATE THIS PRODUCT?</p>
            <div class="divider divider--xs"></div>
            <div class="table-responsive">
              <table class="table table-params">
                <tbody>
                  <tr>
                    <td class="text-right"></td>
                    <td class="text-center"><div class="rating rating--big"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star empty-star"></span></div></td>
                    <td class="text-center"><div class="rating rating--big"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star empty-star"></span></div></td>
                    <td class="text-center"><div class="rating rating--big"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star empty-star"></span></div></td>
                    <td class="text-center"><div class="rating rating--big"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star empty-star"></span></div></td>
                    <td class="text-center"><div class="rating rating--big"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star empty-star"></span></div></td>
                  </tr>
                  <tr>
                    <td class="text-right"><strong>QUALITY</strong></td>
                    <td class="text-center"><span class="icon-enable">&#x25cf;</span></td>
                    <td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
                    <td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
                    <td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
                    <td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
                  </tr>
                  <tr>
                    <td class="text-right"><strong>PRICE</strong></td>
                    <td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
                    <td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
                    <td class="text-center"><span class="icon-enable">&#x25cf;</span></td>
                    <td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
                    <td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
                  </tr>
                  <tr>
                    <td class="text-right"><strong>VALUE</strong></td>
                    <td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
                    <td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
                    <td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
                    <td class="text-center"><span class="icon-enable">&#x25cf;</span></td>
                    <td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="divider divider--xs"></div>
            <form action="#" class="contact-form">
              <label>Nickname<span class="required">*</span></label>
              <input type="text" class="input--wd input--wd--full">
              <label>Summary of Your Review<span class="required">*</span></label>
              <input type="text" class="input--wd input--wd--full">
              <label>Review<span class="required">*</span></label>
              <textarea class="textarea--wd input--wd--full"></textarea>
              <div class="divider divider--xs"></div>
              <button type="submit" class="btn btn--wd text-uppercase wave">Submit Review</button>
            </form>
          </div>
          <div role="tabpanel" class="tab-pane" id="Tab3">
            <h6><strong>OTHER PEOPLE MARKED THIS PRODUCT WITH THESE TAGS:</strong></h6>
            <p class="color-light">Pattern (1)</p>
            <div class="divider divider--xs"></div>
            <p class="text-uppercase">Add Your Tags:</p>
            <form action="#" class="contact-form">
              <input type="text" class="input--wd input--wd--full">
              <p class="color-light">Use spaces to separate tags. Use single quotes (') for phrases.</p>
              <div class="divider divider--xs"></div>
              <button type="submit" class="btn btn--wd text-uppercase wave">Add Tags</button>
            </form>
          </div>
          <div role="tabpanel" class="tab-pane" id="Tab4">
            <h6><strong>Lorem ipsum dolor sit amet conse ctetur adipisicing elit</strong></h6>
            <div class="divider divider--xs"></div>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, sollicitudin eu, vehicula venenatis, tempor vitae, est. Praesent vitae dui. Morbi id tellus. Nullam ac nisi non eros gravida venenatis. Ut euismod, turpis sollicitudin lobortis pellentesque, libero massa dapibus dui, eu dictum justo urna et mi. Integer dictum est vitae sem. Vestibulum justo. Nulla mauris ipsum, convallis ut, vestibulum eu, tincidunt vel, nisi. Curabitur molestie euismod erat. Proin eros odio, mattis rutrum, pulvinar et, egestas vitae, magna. Integer semper, velit ut nisl. Nam lectus nulla, bibendum pretium, dictum a, mattis nec, dolor. Nullam id justo sed diam aliquam tincidunt. </p>
            <div class="row">
              <div class="col-sm-6">
                <ul class="simple-list">
                  <li>Lorem ipsum dolor amet</li>
                  <li>Consectetur adipiscing elit </li>
                  <li>Integer molestie lorem massa </li>
                  <li>Facilisis in pretium nisl aliquet</li>
                </ul>
                <div class="divider divider--xs visible-sm visible-xs"></div>
              </div>
              <div class="col-sm-6">
                <ul class="simple-list">
                  <li>Lorem ipsum dolor amet</li>
                  <li>Consectetur adipiscing elit </li>
                  <li>Integer molestie lorem massa </li>
                  <li>Facilisis in pretium nisl aliquet </li>
                </ul>
              </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="Tab5">
            <h6 class="text-uppercase"><strong>Clothing - Single Size Conversion (Continued)</strong></h6>
            <div class="divider divider--xs"></div>
            <div class="table-responsive">
              <table class="table table-params">
                <tbody>
                  <tr>
                    <td class="text-right"><strong>UK</strong></td>
                    <td><ul class="sizes-row">
                        <li>18</li>
                        <li>20</li>
                        <li>22</li>
                        <li>24</li>
                        <li>26</li>
                      </ul></td>
                  </tr>
                  <tr>
                    <td class="text-right"><strong>European</strong></td>
                    <td><ul class="sizes-row">
                        <li>46</li>
                        <li>48</li>
                        <li>50</li>
                        <li>52</li>
                        <li>54</li>
                      </ul></td>
                  </tr>
                  <tr>
                    <td class="text-right"><strong>US</strong></td>
                    <td><ul class="sizes-row">
                        <li>14</li>
                        <li>16</li>
                        <li>18</li>
                        <li>20</li>
                        <li>22</li>
                      </ul></td>
                  </tr>
                  <tr>
                    <td class="text-right"><strong>Australia</strong></td>
                    <td><ul class="sizes-row">
                        <li>8</li>
                        <li>10</li>
                        <li>12</li>
                        <li>14</li>
                        <li>16</li>
                      </ul></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div> -->
        </div>
      </div>
    </section>
    <section class="content">
      <div class="container">

        <!-- Modal -->
        <div class="modal quick-view zoom" id="quickView"  style=" opacity: 1">
          <div class="modal-dialog">
            <div class="modal-content"> </div>
          </div>
        </div>
        <!-- /.modal -->

        <h2 class="text-center text-uppercase">الأكثر مبيعًا في هذه الفئة</h2>
        <div class="row product-carousel mobile-special-arrows animated-arrows product-grid four-in-row">
          <div class="product-preview-wrapper">
            <div class="product-preview">
              <div class="product-preview__image"><a href="product.html"><img src="images/products/product-empty.png" data-lazy="images/products/product-1.jpg" alt=""/></a></div>
              <div class="product-preview__label product-preview__label--left product-preview__label--new"><span>جديد</span></div>
              <div class="product-preview__label product-preview__label--right product-preview__label--sale"><span>بيع<br>
                -10%</span></div>
              <div class="product-preview__info text-center">
                <div class="product-preview__info__btns"><a href="#" class="btn btn--round"><span class="icon-ecommerce"></span></a> <a href="quick-view.html" class="btn btn--round btn--dark btn-quickview" data-toggle="modal" data-target="#quickView"><span class="icon icon-eye"></span></a></div>
                <div class="product-preview__info__title">
                  <h2><a href="#">تيشيرت بدون اكمام</a></h2>
                </div>
                <!-- <div class="rating"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span></div> -->
                <ul class="options-swatch options-swatch--color">                  <li><a href="#"><span class="swatch-label"><img src="images/colors/blue.png" width="10" height="10" alt=""/></span></a></li>
                  <li><a href="#"><span class="swatch-label"><img src="images/colors/yellow.png" width="10" height="10" alt=""/></span></a></li>
                  <li><a href="#"><span class="swatch-label"><img src="images/colors/green.png" width="10" height="10" alt=""/></span></a></li>
                  <li><a href="#"><span class="swatch-label"><img src="images/colors/dark-grey.png" width="10" height="10" alt=""/></span></a></li>
                  <li><a href="#"><span class="swatch-label"><img src="images/colors/grey.png" width="10" height="10" alt=""/></span></a></li>
                  <li><a href="#"><span class="swatch-label"><img src="images/colors/red.png" width="10" height="10" alt=""/></span></a></li>
                  <li><a href="#"><span class="swatch-label"><img src="images/colors/white.png" width="10" height="10" alt=""/></span></a></li>
                </ul>
                <div class="price-box "><span class="price-box__new">$65.00</span> <span class="price-box__old">$84.00</span></div>
                <div class="product-preview__info__description">
                  <p>Nulla at mauris leo. Donec quis ex elementum, tincidunt elit quis, cursus tortor. Sed sollicitudin enim metus, ut hendrerit orci dignissim venenatis.</p>
                  <p>Suspendisse consectetur odio diam, ut consequat quam aliquet at.</p>
                </div>
                <div class="product-preview__info__link"> <a href="#"><span class="icon icon-favorite"></span><span class="product-preview__info__link__text">أضف الى المفضلة</span></a><a href="#" class="btn btn--wd buy-link"><span class="icon icon-ecommerce"></span><span class="product-preview__info__link__text">Add to cart</span></a></div>
              </div>
            </div>
          </div>
          <div class="product-preview-wrapper">
            <div class="product-preview">
              <div class="product-preview__image"><a href="product.html"><img src="images/products/product-empty.png" data-lazy="images/products/product-2.jpg"  alt=""/></a></div>
              <div class="product-preview__info text-center">
                <div class="product-preview__info__btns"><a href="#" class="btn btn--round"><span class="icon-ecommerce"></span></a> <a href="quick-view.html" class="btn btn--round btn--dark btn-quickview" data-toggle="modal" data-target="#quickView"><span class="icon icon-eye"></span></a></div>
                <div class="product-preview__info__title">
                  <h2><a href="#">طقم شنط سفر بعجلات</a></h2>
                </div>
                <!-- <div class="rating"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span></div> -->
                <ul class="options-swatch options-swatch--color">                  <li><a href="#"><span class="swatch-label"><img src="images/colors/blue.png" width="10" height="10" alt=""/></span></a></li>
                  <li><a href="#"><span class="swatch-label"><img src="images/colors/yellow.png" width="10" height="10" alt=""/></span></a></li>
                  <li><a href="#"><span class="swatch-label"><img src="images/colors/green.png" width="10" height="10" alt=""/></span></a></li>
                  <li><a href="#"><span class="swatch-label"><img src="images/colors/dark-grey.png" width="10" height="10" alt=""/></span></a></li>
                  <li><a href="#"><span class="swatch-label"><img src="images/colors/grey.png" width="10" height="10" alt=""/></span></a></li>
                  <li><a href="#"><span class="swatch-label"><img src="images/colors/red.png" width="10" height="10" alt=""/></span></a></li>
                  <li><a href="#"><span class="swatch-label"><img src="images/colors/white.png" width="10" height="10" alt=""/></span></a></li>
                </ul>
                <div class="price-box"><span class="price-box__new">$65.00</span> <span class="price-box__old">$84.00</span></div>
                <div class="product-preview__info__description">
                  <p>Nulla at mauris leo. Donec quis ex elementum, tincidunt elit quis, cursus tortor. Sed sollicitudin enim metus, ut hendrerit orci dignissim venenatis.</p>
                  <p>Suspendisse consectetur odio diam, ut consequat quam aliquet at.</p>
                </div>
                <div class="product-preview__info__link"> <a href="#"><span class="icon icon-favorite"></span><span class="product-preview__info__link__text">أضف الى المفضلة</span></a><a href="#" class="btn btn--wd buy-link"><span class="icon icon-ecommerce"></span><span class="product-preview__info__link__text">Add to cart</span></a></div>
              </div>
            </div>
          </div>
          <div class="product-preview-wrapper">
            <div class="product-preview">
              <div class="product-preview__image"><a href="product.html"><img src="images/products/product-empty.png" data-lazy="images/products/product-3.jpg"  alt=""/></a></div>
              <div class="product-preview__info text-center">
                <div class="product-preview__info__btns"><a href="#" class="btn btn--round"><span class="icon-ecommerce"></span></a> <a href="quick-view.html" class="btn btn--round btn--dark btn-quickview" data-toggle="modal" data-target="#quickView"><span class="icon icon-eye"></span></a></div>
                <div class="product-preview__info__title">
                  <h2><a href="#">بنطلون رياضي قطن برباط للنساء</a></h2>
                </div>
                <!-- <div class="rating"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span></div> -->
                <div class="price-box">$65.00</div>
                <div class="product-preview__info__description">
                  <p>Nulla at mauris leo. Donec quis ex elementum, tincidunt elit quis, cursus tortor. Sed sollicitudin enim metus, ut hendrerit orci dignissim venenatis.</p>
                  <p>Suspendisse consectetur odio diam, ut consequat quam aliquet at.</p>
                </div>
                <div class="product-preview__info__link"> <a href="#"><span class="icon icon-favorite"></span><span class="product-preview__info__link__text">أضف الى المفضلة</span></a><a href="#" class="btn btn--wd buy-link"><span class="icon icon-ecommerce"></span><span class="product-preview__info__link__text">Add to cart</span></a></div>
              </div>
            </div>
          </div>
          <div class="product-preview-wrapper">
            <div class="product-preview">
              <div class="product-preview__image"><a href="product.html"><img src="images/products/product-empty.png" data-lazy="images/products/product-4.jpg"  alt=""/></a></div>
              <div class="product-preview__info text-center">
                <div class="product-preview__info__btns"><a href="#" class="btn btn--round"><span class="icon-ecommerce"></span></a> <a href="quick-view.html" class="btn btn--round btn--dark btn-quickview" data-toggle="modal" data-target="#quickView"><span class="icon icon-eye"></span></a></div>
                <div class="product-preview__info__title">
                  <h2><a href="#">حذاء قماش شبكي سهل الارتداء بأجزاء جلد واستك جانبي للرجال من سكوادرا </a></h2>
                </div>
                <!-- <div class="rating"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span></div> -->
                <div class="price-box">$65.00</div>
                <div class="product-preview__info__description">
                  <p>Nulla at mauris leo. Donec quis ex elementum, tincidunt elit quis, cursus tortor. Sed sollicitudin enim metus, ut hendrerit orci dignissim venenatis.</p>
                  <p>Suspendisse consectetur odio diam, ut consequat quam aliquet at.</p>
                </div>
                <div class="product-preview__info__link"> <a href="#"><span class="icon icon-favorite"></span><span class="product-preview__info__link__text">أضف الى المفضلة</span></a><a href="#" class="btn btn--wd buy-link"><span class="icon icon-ecommerce"></span><span class="product-preview__info__link__text">Add to cart</span></a></div>
              </div>
            </div>
          </div>
          <div class="product-preview-wrapper">
            <div class="product-preview">
              <div class="product-preview__image"><a href="product.html"><img src="images/products/product-empty.png" data-lazy="images/products/product-5.jpg"  alt=""/></a></div>
              <div class="product-preview__info text-center">
                <div class="product-preview__info__btns"><a href="#" class="btn btn--round"><span class="icon-ecommerce"></span></a> <a href="quick-view.html" class="btn btn--round btn--dark btn-quickview" data-toggle="modal" data-target="#quickView"><span class="icon icon-eye"></span></a></div>
                <div class="product-preview__info__title">
                  <h2><a href="#">ساعة ستانلس ستيل لونين دائرية انالوج بعقارب ومينا اسود بإطار تاكيميتر للرجال من كاسيو</a></h2>
                </div>
                <!-- <div class="rating"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span></div> -->
                <div class="price-box">$65.00</div>
                <div class="product-preview__info__description">
                  <p>Nulla at mauris leo. Donec quis ex elementum, tincidunt elit quis, cursus tortor. Sed sollicitudin enim metus, ut hendrerit orci dignissim venenatis.</p>
                  <p>Suspendisse consectetur odio diam, ut consequat quam aliquet at.</p>
                </div>
                <div class="product-preview__info__link"> <a href="#"><span class="icon icon-favorite"></span><span class="product-preview__info__link__text">أضف الى المفضلة</span></a><a href="#" class="btn btn--wd buy-link"><span class="icon icon-ecommerce"></span><span class="product-preview__info__link__text">Add to cart</span></a></div>
              </div>
            </div>
          </div>
          <div class="product-preview-wrapper">
            <div class="product-preview">
              <div class="product-preview__image"><a href="product.html"><img src="images/products/product-empty.png" data-lazy="images/products/product-6.jpg"  alt=""/></a></div>
              <div class="product-preview__info text-center">
                <div class="product-preview__info__btns"><a href="#" class="btn btn--round"><span class="icon-ecommerce"></span></a> <a href="quick-view.html" class="btn btn--round btn--dark btn-quickview" data-toggle="modal" data-target="#quickView"><span class="icon icon-eye"></span></a></div>
                <div class="product-preview__info__title">
                  <h2><a href="#">بنطلون رياضي قطن برباط للنساء</a></h2>
                </div>
                <!-- <div class="rating"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span></div> -->
                <div class="price-box">$65.00</div>
                <div class="product-preview__info__description">
                  <p>Nulla at mauris leo. Donec quis ex elementum, tincidunt elit quis, cursus tortor. Sed sollicitudin enim metus, ut hendrerit orci dignissim venenatis.</p>
                  <p>Suspendisse consectetur odio diam, ut consequat quam aliquet at.</p>
                </div>
                <div class="product-preview__info__link"> <a href="#"><span class="icon icon-favorite"></span><span class="product-preview__info__link__text">أضف الى المفضلة</span></a><a href="#" class="btn btn--wd buy-link"><span class="icon icon-ecommerce"></span><span class="product-preview__info__link__text">Add to cart</span></a></div>
              </div>
            </div>
          </div>
          <div class="product-preview-wrapper">
            <div class="product-preview">
              <div class="product-preview__image"><a href="product.html"><img src="images/products/product-empty.png" data-lazy="images/products/product-7.jpg"  alt=""/></a></div>
              <div class="product-preview__info text-center">
                <div class="product-preview__info__btns"><a href="#" class="btn btn--round"><span class="icon-ecommerce"></span></a> <a href="quick-view.html" class="btn btn--round btn--dark btn-quickview" data-toggle="modal" data-target="#quickView"><span class="icon icon-eye"></span></a></div>
                <div class="product-preview__info__title">
                  <h2><a href="#">طقم شنط سفر بعجلات</a></h2>
                </div>
                <!-- <div class="rating"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span></div> -->
                <div class="price-box">$65.00</div>
                <div class="product-preview__info__description">
                  <p>Nulla at mauris leo. Donec quis ex elementum, tincidunt elit quis, cursus tortor. Sed sollicitudin enim metus, ut hendrerit orci dignissim venenatis.</p>
                  <p>Suspendisse consectetur odio diam, ut consequat quam aliquet at.</p>
                </div>
                <div class="product-preview__info__link"> <a href="#"><span class="icon icon-favorite"></span><span class="product-preview__info__link__text">أضف الى المفضلة</span></a><a href="#" class="btn btn--wd buy-link"><span class="icon icon-ecommerce"></span><span class="product-preview__info__link__text">Add to cart</span></a></div>
              </div>
            </div>
          </div>
          <div class="product-preview-wrapper">
            <div class="product-preview">
              <div class="product-preview__image"><a href="product.html"><img src="images/products/product-empty.png" data-lazy="images/products/product-8.jpg"  alt=""/></a></div>
              <div class="product-preview__info text-center">
                <div class="product-preview__info__btns"><a href="#" class="btn btn--round"><span class="icon-ecommerce"></span></a> <a href="quick-view.html" class="btn btn--round btn--dark btn-quickview" data-toggle="modal" data-target="#quickView"><span class="icon icon-eye"></span></a></div>
                <div class="product-preview__info__title">
                  <h2><a href="#">تيشيرت بدون اكمام </a></h2>
                </div>
                <!-- <div class="rating"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span></div> -->
                <div class="price-box">$65.00</div>
                <div class="product-preview__info__description">
                  <p>Nulla at mauris leo. Donec quis ex elementum, tincidunt elit quis, cursus tortor. Sed sollicitudin enim metus, ut hendrerit orci dignissim venenatis.</p>
                  <p>Suspendisse consectetur odio diam, ut consequat quam aliquet at.</p>
                </div>
                <div class="product-preview__info__link"> <a href="#"><span class="icon icon-favorite"></span><span class="product-preview__info__link__text">أضف الى المفضلة</span></a><a href="#" class="btn btn--wd buy-link"><span class="icon icon-ecommerce"></span><span class="product-preview__info__link__text">Add to cart</span></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Content section -->
  </div>
@endsection
