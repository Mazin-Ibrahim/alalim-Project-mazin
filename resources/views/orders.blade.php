@extends('layouts.alaalimshop')
@section('content')
  <section dir="rtl" class="container-orders mrg-bottom-5" id="orders2">
    <div class="wrapper">
            <form action="" id="wizard">
            <!-- SECTION 1 -->
                <h4></h4>
                <section>
                    <h3>نوعية التوصيل</h3>
                  <div class="form-row">
                        <div class="form-holder">
                          <input type="radio" class="form-control radio-style"  id="shipping1" name="shipping-type" value="method1" checked>
                          <label for="">طريقة التوصيل 1</label>

                        </div>
                        <div class="form-holder">
                            <span>
                                سعر التوصيل:  500 $
                            </span>
                        </div>
                  </div>
                  <div class="form-row">
                        <div class="form-holder">
                          <input type="radio" class="form-control radio-style"  id="shipping1" name="shipping-type" value="method2" >
                          <label for="">طريقة التوصيل 2</label>

                        </div>
                        <div class="form-holder">
                            <span>
                                سعر التوصيل:  500 $
                            </span>
                        </div>
                  </div>
                  <div class="form-row">
                        <div class="form-holder">
                          <input type="radio" class="form-control radio-style"  id="shipping1" name="shipping-type" value="method1" >
                          <label for="">طريقة التوصيل 3</label>

                        </div>
                        <div class="form-holder">
                            <span>
                                سعر التوصيل:  500 $
                            </span>
                        </div>
                  </div>




                </section>

        <!-- SECTION 2 -->
                <h4></h4>
                <section>
                  <h3>عنوان السكن</h3>
                  <div class="form-row">
                        <div class="form-holder">
                          <select class="form-control" name="">
                            <option value=""> الدولة </option>
                            <option value=""> اليمن </option>
                            <option value=""> السودان </option>
                          </select>
                        </div>
                        <div class="form-holder">
                            <input type="text" class="form-control" placeholder="إسم الشارع">
                        </div>
                  </div>
                    <div class="form-row">
                        <div class="form-holder">
                            <input type="text" class="form-control" placeholder="المدينة">
                        </div>
                        <div class="form-holder">
                            <input type="text" class="form-control" placeholder="رقم المنزل">
                        </div>
                    </div>
                </section>

                <!-- SECTION 3 -->
                <h4></h4>
                <section>
                    <h3>تأكيد الدفعية</h3>
                    <table cellspacing="0" class="table-cart shop_table shop_table_responsive cart woocommerce-cart-form__contents table" id="shop_table">
                      <thead>
                          <th >&nbsp;</th>
                          <th style="text-align: right;">المنتج</th>
                          <th >الكمية</th>
                          <th >السعر</th>
                          <th >&nbsp;</th>
                      </thead>
                      <tbody>
                          <tr>
                              <td class="product-thumb">
                                  <a href="#" class="item-thumb">
                                      <img src="images/orders/item-1.jpg" alt="">
                                  </a>
                              </td>
                              <td class="product-detail" data-title="Product Detail">
                                  <div>
                                      <a href="#">إسم المنتج</a>
                                      <span>$</span>
                                      <span>35</span>
                                  </div>
                              </td>
                              <td class="product-quantity" data-title="Quantity">
                                  <div class="quantity">
                                      <span class="plus">+</span>
                                      <input type="number" id="quantity_5b4f198d958e1" class="input-text qty text" step="1" min="0" max="" name="cart[5934c1ec0cd31e12bd9084d106bc2e32][qty]" value="1" title="Qty" size="4" pattern="[0-9]*" inputmode="numeric" />
                                      <span class="minus">-</span>
                                  </div>
                              </td>
                              <td class="total-price" data-title="Total Price">
                                  <span class="woocommerce-Price-amount amount">
                                      <span class="woocommerce-Price-currencySymbol">$</span>
                                      70
                                  </span>
                              </td>
                              <td class="product-remove">
                                  <a href="#">
                                      <i class="zmdi zmdi-close-circle-o"></i>
                                  </a>
                              </td>
                          </tr>

                      </tbody>
                  </table>
                    <div class="cart_totals">
                        <table cellspacing="0" class="shop_table shop_table_responsive">
                            <tr class="cart-subtotal">
                                <th>سعر الشحن</th>
                                <td data-title="Subtotal">
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span>10.00
                                    </span>
                                </td>
                            </tr>
                            <tr class="order-total border-0">
                                <th>السعر الكلي</th>
                                <td data-title="Total">
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span>64.69
                                    </span>
                                </td>
                            </tr>
                        </table>
                    </div>

                </section>


            </form>
    </div>
  </section>


  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="vendor/jquery/jquery.js"></script>
  <script src="js/jquery.steps.js"></script>
  <script src="js/orders-main.js"></script>
@endsection
