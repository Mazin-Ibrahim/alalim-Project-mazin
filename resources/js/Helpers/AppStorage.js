class AppStorage {

	storeToken(token){
		return localStorage.setItem('token',token);
	}

	storeSeller(seller){
		return localStorage.setItem('seller',seller);
	}

	store(token,seller){
		 console.log(seller)
		this.storeToken(token)
		this.storeSeller(seller)
	}

	clear(){
		localStorage.removeItem('token');
		localStorage.removeItem('seller');
	}

	getToken(){
		return localStorage.getItem('token');
	}

	getSeller(){
		return localStorage.getItem('seller');
	}
}

export default AppStorage = new AppStorage();