Vue.config.devtools = true;

const app = new Vue({
	el: '#app',
	data: {
		API_URL: './api/server.php',
		db : [],
	},
	created () {
		axios.get(this.API_URL) 
		.then(response => {
			console.log(response.data);
			this.db = response.data;
		})
		.catch(err => console.log(err));
	}
});
