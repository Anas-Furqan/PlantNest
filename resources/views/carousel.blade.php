
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Responsive Owl Carousel | Free Download</title>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../carousel/css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="../carousel/css/style.css">
</head>
<body>
<section id="slider" class="pt-5">
  <div class="container">
    <h1 class="text-center"><b>Responsive Owl Carousel</b></h1>
	  <div class="slider">
				<div class="owl-carousel">
                    @foreach($items as $p)
					<div class="slider-card">
						<div class="d-flex justify-content-center align-items-center mb-4">
							<img src="../{{$p->Image}}" alt="" >
						</div>
						<h5 class="mb-0 text-center"><b>{{$p->Name}}</b></h5>
						<p class="text-center p-4">{{$p->Details}}</p>
					</div>
                @endforeach
			</div>
  </div>
</section>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script> 
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
	<script src="../carousel/js/owl.carousel.min.js"></script>
	<script src="../carousel/js/script.js"></script>
</body>
</html>
