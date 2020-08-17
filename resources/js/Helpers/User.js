import Token from './Token.js'
import UserAppStorage from './UserAppStorage'
window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
const mainAxios = window.axios.create({
	baseURL: 'https://api.alaalimshop.com'
});


class User {

	login(data){
		mainAxios.post('/user/authentication/login',data).then((response) =>{
                 // /Token.payload(response.data.token)
                  console.log(response)
                 this.responseAfterLogin(response)
                  // window.location.href = "/user/profile";
			}).catch((message) =>{
				// console.log(message.data)
			})
	}

	responseAfterLogin(res){
		const token = res.data.token
		const user = res.data.user.full_name
		if(Token.isVaild(token)){
			AppStorage.store(token,user)
		}
	}

	hasToken(){
		const storedToken = AppStorage.getToken()
		 if(storedToken) {
		 	return Token.isVaild(storedToken) ? true : false
		 }
		 return false
	}

	loggedIn(){
		return this.hasToken()
	}

	logOut(){
		AppStorage.clear()
	}

	user(){
		if(this.loggedIn()){
			AppStorage.getUser()
		}
	}

	userId(){
		if(this.loggedIn()){
			const payload = Token.payload(AppStorage.getToken())
			return payload.sub
		}
	}

	getToken(){
		return AppStorage.getToken()
	}


}

export default User = new User();