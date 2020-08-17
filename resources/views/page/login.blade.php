@extends('layouts.alaalimshop2')
@section('content')

<div class="container my-48" dir="rtl">
	<div class="row">
		<div class="col-md-5 col-md-offset-4">
			<p class="text-4xl text-center font-semibold mb-16">تسجيل دخول </p>
			<div>
				<div class="shadow-md p-8 rounded flex justify-between px-32">
					<a href="/seller/login" class="btn btn-primary ">تاجر</a>
					<a href="/user/login" class="btn btn-primary">مشتري</a>
				</div>


			</div>
		</div>
	</div>
</div>

@endsection