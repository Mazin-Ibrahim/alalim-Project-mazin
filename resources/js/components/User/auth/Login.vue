<template>
	<div dir="rtl" class="wrapper" style="margin:8rem;">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-2 shadow-md rounded p-4">
					<div class="form-group">
						<label>أسم  المستخدم</label>
						<input type="text" v-model="form.username" class="form-control">
					</div>

					<div class="form-group">
						<label>كلمة المرور</label>
						<input type="password" v-model="form.password" class="form-control">
					</div>
					<div class="form-group">
						<button class="btn btn-primary edit" @click="login">تسجيل دخول</button>
					</div>

				</div>
			</div>
		</div>
	</div>
</template>


<script type="text/javascript">

export default {

	data(){
		return{

			form:{
				username:'',
				password:''
			}
		}
	},

	methods:{

		login(){
			User.login(this.form)
		}
	}
}

</script>