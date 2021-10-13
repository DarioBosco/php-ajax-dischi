Vue.config.devtools = true;

const app = new Vue({
	el: '#app',
	data: {
		API_URL: './api/server.php',
		db : [],
		genres: [],
		search: '',
	},
	methods: {
		newSearch () {
			this.db = [];
			axios.get(this.API_URL) 
			.then(response => {
				console.log(response.data);
				response.data.forEach(element => {
					if (this.search == element.genre || this.search == 'all') {
						this.db.push(element)
					}
					return
				});
			})
			.catch(err => console.log(err));
		}
	},
	created () {
		axios.get(this.API_URL) 
		.then(response => {
			console.log(response.data);
			this.db = response.data;
			response.data.forEach(element => {
				if (!this.genres.includes(element.genre)) {
					this.genres.push(element.genre);
					console.log(this.genres)
				}
				return
			});
		})
		.catch(err => console.log(err));
	}
});
