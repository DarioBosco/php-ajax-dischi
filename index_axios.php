<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/style.css">
	<title>Milestone 2</title>
</head>

<body>
	<div id="app">
		<main>
			<ul class="albums">
				<li v-for="(album, index) in db" :key="album.title" class="album">
					<img :src="album.poster" alt="">
					<div class="title">
						{{album.title}}
					</div>
					<div v-for="(detail, index) in Object.entries(album)" :key="index" class="detail" :class="detail[0]" v-if="detail[0] != 'poster' && detail[0] != 'title' ">
						{{detail[1]}}
					</div>
				</li>
			</ul>
		</main>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
	<script src="./js/main.js"></script>
</body>

</html>
