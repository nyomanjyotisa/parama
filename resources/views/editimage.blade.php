
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="title" content="manjyo" />
		<meta name="description" content="manjyo" />
		<meta
			name="keywords"
			content="bootstrap, creabik, ThemeForest, bootstrap5, agency theme, saas
			theme, sass, html5"
			/>
		<meta name="robots" content="index, follow" />
		<meta name="language" content="English" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Astungkara</title>
		<meta name="msapplication-TileColor" content="#da532c" />
		<meta name="theme-color" content="#ffffff" />
		<!-- 🌈🌈🌈🌈🌈🌈🌈🌈🌈🌈🌈🌈🌈🌈🌈 STYLES -->
		<link rel="stylesheet" href="https://raroin.creabik.com/assets/css/plugins/remixicon.css" />
		<link
			rel="stylesheet"
			href="https://raroin.creabik.com/assets/css/plugins/bootstrap.min.css"
			/>
		<link
			rel="stylesheet"
			href="https://raroin.creabik.com/assets/css/plugins/swiper-bundle.min.css"
			/>
		<link rel="stylesheet" href="https://raroin.creabik.com/assets/css/style.css" />
	</head>
	<body class="body">

		<div class="overflow-hidden">

			<div class="bg-dark py-10">
				<div class="container">
					<div
						class="text-center
						d-flex
						justify-content-between
						space-x-10
						align-items-center">
						<div class="space-x-10 d-flex align-items-center">
							<lottie-player
								src="https://assets6.lottiefiles.com/private_files/lf30_kqshlcsx.json"
								background="transparent"
								speed="2"
								style="width: 50px; height: 50px"
								loop
								autoplay></lottie-player>
							<p class="color_white">
                                Try dark mode 
								<span style="color: rgb(0, 255, 170)">to reduce your eye strain:) </span>
							</p>
						</div>

						<div class="mode_switcher space-x-10">
							<a href="#" class="light d-flex align-items-center is_active">
								<i class="ri-sun-fill"></i> Light
							</a>
							<a href="#" class="dark d-flex align-items-center">
								<i class="ri-moon-fill"></i> Dark
							</a>
						</div>
					</div>
				</div>
			</div>
			
			<div class="container">
			    <div class="hero_newsletter box bg_white">
			        <div class="row gx-5 align-items-center">
			            <div class="col-lg-12 left__side">
			                <div class="content space-y-20">
                            <a href="https://drive.google.com/drive/folders/1YGz-zavdlyCmpNQbJgY1JySmcPtkIZo6" class="btn btn-primary float-right">Finish</a>
                            <a href="#myModal" class="trigger-btn btn btn-success" data-toggle="modal">Add Image</a>
                            
							<div class="row">

                        @foreach ($images as $image)
                        <div class="col-lg-4 col-md-6 col-sm-8">
			        		<div class="collections space-y-10 mb-30">
                                <div class="collections_item">
                                    <div class="images-box space-y-10">
                                        <img src="/imageCust/{{$image->image}}">
                                    </div>
                                </div>
			        			<div class="collections_footer justify-content-between">
			        				<h5 class="collection_title">{{$image->title}}</h5>
			        			</div>
                                <p>{{$image->description}}</p>
			        		</div>
			        	</div>
                        @endforeach

	<!-- Modal HTML -->
	<div id="myModal" class="modal fade">
        <div class="modal-dialog modal-login">
            <div class="modal-content">
                <div class="modal-header">				
                    <h4 class="modal-title">Add Image</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form action="/image/{{$token}}/{{$edit_token}}" method="post"  enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="file" name="file" id="form19" accept="image/*">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Title" required="required" name="title">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Description" required="required" name="description">					
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-block btn-lg" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
		<!-- 🌈🌈🌈🌈🌈🌈🌈🌈🌈🌈🌈🌈🌈🌈🌈 SCRIPTS -->
		<script src="https://raroin.creabik.com/assets/js/jquery-3.6.0.js"></script>
		<script src="https://raroin.creabik.com/assets/js/bootstrap.bundle.min.js"></script>
		<script src="https://raroin.creabik.com/assets/js/swiper-bundle.min.js"></script>
		<script src="https://raroin.creabik.com/assets/js/gsap.min.js"></script>
		<script src="https://raroin.creabik.com/assets/js/ScrollTrigger.min.js"></script>
		<script src="https://raroin.creabik.com/assets/js/sticky-sidebar.js"></script>
		<script src="https://raroin.creabik.com/assets/js/script.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/web3@latest/dist/web3.min.js"></script>
		<script src="https://unpkg.com/moralis/dist/moralis.js"></script>
		<script src="https://raroin.creabik.com/assets/js/nft.js"></script>
		<script
			src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
	</body>
</html>