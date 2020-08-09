import Token from './Token.js'
import AppStorage from './AppStorage'
window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
const mainAxios = window.axios.create({
	baseURL: 'https://api.alaalimshop.com'
});


class Seller {

	login(data){
		mainAxios.post('/seller/authentication/login',data).then((response) =>{
                 // /Token.payload(response.data.token)
                 this.responseAfterLogin(response)
                 // console.log(response.data.seller.full_name)
			}).catch((message) =>{
				// console.log(message.data)
			})
	}

	responseAfterLogin(res){
		const token = res.data.token
		const seller = res.data.seller.full_name
		if(Token.isVaild(token)){
			AppStorage.store(token,seller)
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

	seller(){
		if(this.loggedIn()){
			AppStorage.getSeller()
		}
	}

	sellerId(){
		if(this.loggedIn()){
			const payload = Token.payload(AppStorage.getToken())
			return payload.sub
		}
	}


}

export default Seller = new Seller();