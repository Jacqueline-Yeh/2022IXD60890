<!DOCTYPE html>
<html lang="en">
<head>
	<title>Store Home Page</title>
	<? include "parts/meta.php"; ?>
</head>
<body>
	<header>
	 	<div class="container display-flex"> 
	 		<div class="flex-none">
	 			<h1>Luxury store</h1>
	 		</div>
			<div class="flex-stretch"></div>
			<div class="flex-none nav">
     			<ul class="container2 display-flex">
					<li><a href="#article1">Handbags</a></li>
					<li><a href="#article2">Shoes</a></li>
					<li><a href="#article3">Jewelry</a></li>
					<li><a href="#article4">Clothing</a></li>
				</ul>
			</div>
		</div>
    </header>
     <div class="container">
    	<div class="card soft">
    		<h2>Grid</h2>
    			<div class="grid">
    				<div class="col-xs-6">Column 6</div>
    				<div class="col-xs-6">Column 6</div>
    			</div>
    			<div class="grid gap xs-small md-medim">
    				<div class="col-xs-4">Column 4</div>
    				<div class="col-xs-4">Column 4</div>
    				<div class="col-xs-4">Column 4</div>

    				<div class="col-xs-3">Column 3</div>
    				<div class="col-xs-3">Column 3</div>
    				<div class="col-xs-3">Column 3</div>
    				<div class="col-xs-3">Column 3</div>
    			</div>
    			<div class="grid ten">
    				<div class="col-xs-2">Column 2</div>
    				<div class="col-xs-2">Column 2</div>
    				<div class="col-xs-2">Column 2</div>
    				<div class="col-xs-2">Column 2</div>
    				<div class="col-xs-2">Column 2</div>
    			</div>
    	</div>
    </div>
    <div class="container">
    	<div class="card soft">
    		<h2>Responsive Grid</h2>
    		<div class="grid">
    			<div class="col-xs-12 col-md-6">Column 6</div>
    			<div class="col-xs-12 col-md-6">Column 6</div>
    		</div>
    		<div class="grid">
    			<div class="col-xs-12 col-md-4 col-xl-3">Column 3</div>
    			<div class="col-xs-12 col-md-4 col-xl-6">Column 6</div>
    			<div class="col-xs-12 col-md-4 col-xl-3">Column 3</div>

    			<div class="col-xs-12 col-md-3 col-xl-2">Column 2</div>
    			<div class="col-xs-12 col-md-3 col-xl-4">Column 4</div>
    			<div class="col-xs-12 col-md-3 col-xl-4">Column 4</div>
    			<div class="col-xs-12 col-md-3 col-xl-2">Column 2</div>

    			<div class="col-xs-12 col-md-4 col-xl-3">Column 3</div>
    			<div class="col-xs-12 col-md-4 col-xl-3">Column 3</div>
    			<div class="col-xs-12 col-md-4 col-xl-6">Column 6</div>
    		</div>
    	</div>
    </div>
    <div class="container">
    	<div class="grid gap xs-small md-medim">
    		<div class="col-xs-6 col-md-3">
    			<div class="card soft"><img src="https://via.placeholder.com/500" alt="" class="media-image"></div>
    		</div>
    		<div class="col-xs-6 col-md-3">
    			<div class="card soft"><img src="https://via.placeholder.com/500" alt="" class="media-image"></div>
    		</div>
    		<div class="col-xs-6 col-md-3">
    			<div class="card soft"><img src="https://via.placeholder.com/500" alt="" class="media-image"></div>
    		</div>
    		<div class="col-xs-6 col-md-3">
    			<div class="card soft"><img src="https://via.placeholder.com/500" alt="" class="media-image"></div>
    		</div>
    	</div>
    </div>
    <div class="container">
    	<article id="article1" class="article">
    		<h2>Tiger Print Calf Hair and Logo Shoulder Bag</h2>
    		<div class="article-body">
    			<p>Our mixed-media Parker bag is sure to infuse every day with a little glamour.</p>
    			<p>From the sliding, braided chain strap and contrasting leather trim to the bold Empire hardware on the front, the details are polished and eye-catching.</p>
    			<p>Inside, dedicated zip-and-slip pockets keep a day’s worth of essentials organized.</p>
    		</div>
    	</article>
    	<article id="article2" class="article">
    		<h2>Corey Logo Jacquard Combat Boot</h2>
    		<div class="article-body">
    			<p>Give a nod to grunge with our Corey combat boots.</p>
    			<p>Constructed from logo jacquard and set on gripped rubber soles, they’re finished with the iconic MK circle charm and rubber toe caps for protection.</p>
    			<p>Wear yours with floral dresses, then switch to sweaters and jeans come fall.</p>
    		</div>
    	</article>
    </div>
    	<div class="view-window"style="background-image: url(img/background.jpeg)"></div>
    <div class="container">
    	<article id="article3" class="article">
    		<h2>14K Gold-Plated Brass Pavé Logo Ring</h2>
    		<div class="article-body">
    			<p>A bold accessory with endless versatility, this eye-catching ring is defined by the brand’s “MK” initials highlighted with sparkling pavé accents.</p>
    			<p>Cast in brass, it’s designed in a thick, chunky silhouette for statement-making flair. Play up the maximalist aesthetic with complementing accessories.</p>
    		</div>
    	</article>
    	<article id="article4" class="article">
    		<h2>Logo Jacquard Tank Dress</h2>
    		<div class="article-body">
    			<p>Our iconic MK initials lend a heritage-chic mood to this jacquard dress. It has a slim, figure-flattering fit and solid ribbed trim along the mini hem.</p>
    			<p>Team yours with the season’s fashion-forward footwear for added impact.</p>
    		</div>
    	</article>
    </div>
</body>
</html>