<html>
    <head>
        <title>Test</title>
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    </head>
    <body>
        <div id="app">
	        <nav class="navbar navbar-expand-lg navbar-light bg-light">
		        <a class="navbar-brand" href="#">Upload Image</a>
		        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			        <span class="navbar-toggler-icon"></span>
		        </button>
	        </nav>

	        <div class="container">

		        <div class="row">
			        <div class="col-lg-6 offset-3">
				        <div>
					        <input type="file" @change="uploadToServer" ref="file">
				        </div>
			        </div>
		        </div>

	        </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script src="/src/js/app.js"></script>
    </body>
</html>