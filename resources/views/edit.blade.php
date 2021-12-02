
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
							<div class="row">
                            <form action="/edit/{{$token->token}}/{{$token->edit_token}}" method="post" enctype="multipart/form-data">
                        @csrf
                        
                        <a href="/template/1" class="btn btn-primary mb-5">Show Template</a>
                        <div class="form-group">
                            <h6 class="mb-2">Page Header</h6>
                            <input type="text" class="form-control" placeholder="Type Text Header" required="required" name="title" value="{{ $token->title }}">
                        </div>
                        <div class="form-group">
                            <h6 class="mb-2">Page Description</h6>
                            <input type="text" class="form-control" placeholder="Type Text Description" required="required" name="description" value="{{ $token->description }}">					
                        </div>
                        <div class="form-group">
                            <h6 class="mb-2">Google Drive Link</h6>
                            <input type="text" class="form-control" placeholder="Google Drive Link" name="drive" value="{{ $token->drive }}">					
                        </div>
                        <div class="form-group">
                            <h6 class="mb-2">Upload Video</h6>
                            <input type="file" id="video" name="file" accept="video/*" value="{{ $token->video }}">					
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-block btn-lg" value="Next">
                        </div>
                    </form>

	<!-- Modal HTML -->
	<div id="myModal" class="modal fade">
        <div class="modal-dialog modal-login">
            <div class="modal-content">
                <div class="modal-header">				
                    <h4 class="modal-title">Add New Customer</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form action="/token/new" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nama Customer" required="required" name="customer">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Token (6 Char)" required="required" name="token">					
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Edit Token (2 Char)" required="required" name="edit_token">					
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