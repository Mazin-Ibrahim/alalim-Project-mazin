@extends('layouts.alaalimshop')
@section('content')
  <div id="pageContent">
    <!-- Breadcrumb section -->
    <section class="breadcrumbs  hidden-xs">
      <div class="container">
        <ol class="breadcrumb breadcrumb--wd pull-left">
          <li><a href="#">الرئيسية</a></li>
          <li class="active">اتصل بنا</li>
        </ol>
      </div>
    </section>

    <!-- Content section -->
    <section class="content content--parallax content--parallax--high top-null bottom-null" data-image="images/parallax-bg-03.jpg"> </section>
    <section class="content-2 content--fill top-null">
      <div class="container">
		<form id="contactform" class="contact-form" name="contactform" method="post" novalidate>
          <div class="row">
            <div class="col-sm-7">
              <h2 class="text-uppercase text-center">اتصل بنا</h2>
			 <div id="success">
				<p>تم ارسال رسالتك بنجاح!</p>
			 </div>
			 <div id="error">
				<p>شئ ما خاطئ, اعد تحميل الصفحة من جديد.</p>
			 </div>
             <div class="input-group input-group--wd">
                <input type="text" class="input--full" name="name">
                <span class="input-group__bar"></span>
                <label>اسمك (لازم)</label>
              </div>
              <div class="input-group input-group--wd">
                <input type="text" class="input--full" name="email">
                <span class="input-group__bar"></span>
                <label>ايميلك(لازم)</label>
              </div>
              <div class="input-group input-group--wd">
                <input type="text" class="input--full" name="subject">
                <span class="input-group__bar"></span>
                <label>الموضوع</label>
              </div>
              <div class="input-group input-group--wd">
                <textarea class="textarea--full" name="message"></textarea>
                <span class="input-group__bar"></span>
                <label>رسالتك</label>
              </div>
              <button type="submit" id="submit" class="btn btn--wd text-uppercase wave">ارسل</button>
            </div>
            <div class="divider divider--sm visible-xs"></div>
            <div class="col-sm-5 text-center">
              <div class="divider divider--lg visible-lg"></div>
              <h2 class="text-uppercase">فالتبدأ معنا الان!</h2>
              <p>المتجر يعمل على الويب متجر الكتروني متكامل بهويتك عدد العملاء و الطلبات لا محدود الدفع عند الاستلام أو الحوالة البنكية المتجر يعمل على الويب متجر الكتروني متكامل بهويتك عدد العملاء و الطلبات لا محدود الدفع عند الاستلام أو الحوالة البنكية ا.</p>
              <p>عنوان مكتبنا : السودان | الخرطوم | بحري | شمبات<br/>
                تلفونات: 321321321, 321321321<br/>
                ايميل: <a href="#">info@mydomain.com</a></p>
            </div>
          </div>
        </form>
      </div>
    </section>
    <section class="content-2 fullwidth top-null bottom-null">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3842.655476877103!2d32.53817601416413!3d15.610045655727404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x168e92010f511351%3A0x4daf9d1886e2ff2a!2sFaisal%20Islamic%20Bank%20Sudan%20%2C%20University%20Branch!5e0!3m2!1sen!2s!4v1595325751966!5m2!1sen!2s"
		 width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

    </section>
    <!-- End Content section -->
  </div>

@endsection
