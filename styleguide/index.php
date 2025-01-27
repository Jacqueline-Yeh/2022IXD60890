<!DOCTYPE html>
<html lang="en">
<head>
	<title>Style Guide</title>
	<link rel="stylesheet" href="../lib/css/gridsystem.css">
	<link rel="stylesheet" type="text/css" href="../lib/css/styleguide.css">
	<link rel="stylesheet" type="text/css" href="../css/storetheme.css">

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
	<header>
		<div class="container display-flex">
			<div class="flex-none">
				<h1>Style Guide</h1>
			</div>
			<div class="flex-stretch"></div>
			<nav class="nav flex-none">
				<ul class="container display-flex">
					<li><a href="tableofcontents">Table of Contents</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<div class="container" id="tableofcontents">
		<h2>Table of Contents</h2>
		<div class="card">
			<nav class="nav">
				<ul>
					<li><a href="#typography">Typography</a>
						<ul>
							<li><a href="#headings">Headings</a></li>
							<li><a href="#paragraphs">Paragraphs</a></li>
					 	</ul>
					 </li>
					 <li><a href="#cards">Cards</a></li>
					 <li><a href="#viewwindow">View Window</a></li>
					 <li><a href="#navigations">Navigations</a></li>
					 <li><a href="#gridsystem">Grid System</a></li>
					 <li><a href="#flexsystem">Flex System</a></li>
					 <li><a href="#tables">Tables</a></li>
					 <li><a href="#figures">Figures</a></li>
					 <li><a href="#forms">Forms</a></li>
					 	<ul>
					 		<li><a href="#inputs">Inputs</a></li>
					 		<li><a href="#labels">Labels</a></li>
					 		<li><a href="#controls">Controls</a></li>
					 		<li><a href="#buttons">Buttons</a></li>
					 		<li><a href="#hotdog">Hotdog</a></li>
					 		<li><a href="#select">Select</a></li>
					 		<li><a href="#checkboxes">Check Boxes</a></li>
					 	</ul>
				</ul>
			</nav>
		</div>
	</div>
	<div class="container" id="typography">
		<h2>Typography</h2>
		<div class="card soft" id="headings">
			<h3>Headings</h3>
			<h1>Heading 1</h1>
			<h2>Heading 2</h2>
			<h3>Heading 3</h3>
			<h4>Heading 4</h4>
			<h5>Heading 5</h5>
			<h6>Heading 6</h6>	
		</div>
		<div class="card soft" id="paragraphs">
			<h3>Paragraphs</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
		</div>
	</div>
	<div class="container" id="cards">
		<h2>Cards</h2>
		<div class="grid gap"> 
			<div class="col-xs-12 col-md-4">
				<div class="card">Card</div>
			</div>
			<div class="col-xs-12 col-md-4">
				<div class="card soft">Card Soft</div>
			</div>
			<div class="col-xs-12 col-md-4">
				<div class="card hard">Card Hard</div>
			</div>
			<div class="col-xs-12 col-md-4">
				<div class="card flat">Card Flat</div>
			</div>
			<div class="col-xs-12 col-md-4">
				<div class="card dark">Card Dark</div>
			</div>
			<div class="col-xs-12 col-md-4">
				<div class="card medium">Card Medium</div>
			</div>
		</div>
	</div>
	<div class="container" id="viewwindow">
		<h2>View Window</h2>
		<div class="view-window" style="background-image:url(../img/background.jpeg)"></div>
	</div>
	<div class="container" id="navigations">
		<h2>Navigations</h2>

		<script> 
			const makeNav = (classes='') => {
				const links = ['Home','Store','About','Cart'];
				let ran = Math.floor(Math.random()*links.length);
				document.write(`
					<div>
					    <nav class="${classes}">
					    	<ul>
					    		${links.reduce((r,o,i)=>{
					    			return r+`<li class="${ran==i?'active':''}"><a 
					    			    href="#">${o}</a></li>`;
					    		},'')}
					    	</ul>
					    </nav>
					</div>
					`);
				}
		</script>

		<div class="card soft">
			<h3>Basic Nav</h3>
			<script>makeNav('nav')</script>
		</div>
		<div class="card soft">
			<h3>Flex Nav</h3>
			<script>makeNav('nav nav-flex')</script>
		</div>
		<div class="card soft">
			<h3>Stretch Nav</h3>
			<script>makeNav('nav nav-stretch')</script>
		</div>
		<div class="card soft">
			<h3>Pills Nav</h3>
			<script>makeNav('nav nav-pills')</script>
		</div>
		<div class="card soft">
			<h3>Crumbs Nav</h3>
			<script>makeNav('nav nav-crumbs')</script>
		</div>
		<div class="card soft">
			<h3>Material Nav</h3>
			<script>makeNav('nav nav-material')</script>
		</div>
		<script>
			$("#navigation a").on('click',function(e){
			e.preventDefault();
			$(this).closest("li").addClass("active")
				.siblings().removeClass("active");
			})
		</script>
	</div>
	<div class="container" id="gridsystem">
		<h2>Grid System</h2>

		<h3>Basic Structure</h3>
		<h4>Single Column Non Responsive</h4>
		<div class="grid">
			<div class="col-xs-12">
				<div class="well">Column 12</div>
			</div>
		</div>

		<h4>3 Column Responsive</h4>
		<div class="grid">
			<div class="col-xs-12 col-md-4">
				 <div class="well">col-xs-12 col-md-4</div>
			</div>
			<div class="col-xs-12 col-md-4">
				<div class="well">col-xs-12 col-md-4</div>
			</div>
			<div class="col-xs-12 col-md-4">
				<div class="well">col-xs-12 col-md-4</div>
			</div>
		</div>
	
		<h4>4 Column Responsive</h4>
		<div class="grid">
			<div class="col-xs-12 col-md-3">
				<div class="well">col-xs-12 col-md-3</div>
			</div>
			<div class="col-xs-12 col-md-3">
				<div class="well">col-xs-12 col-md-3</div>
			</div>
			<div class="col-xs-12 col-md-3">
				<div class="well">col-xs-12 col-md-3</div>
			</div>
			<div class="col-xs-12 col-md-3">
				<div class="well">col-xs-12 col-md-3</div>
			</div>
		</div>

		<h3>Gap</h3>

		<h4>4 Column Responsive with Gap</h4>
		<div class="grid gap">
			<div class="col-xs-12 col-md-3">
				<div class="well">col-xs-12 col-md-3</div>
			</div>
			<div class="col-xs-12 col-md-3">
				<div class="well">col-xs-12 col-md-3</div>
			</div>
			<div class="col-xs-12 col-md-3">
				<div class="well">col-xs-12 col-md-3</div>
			</div>
			<div class="col-xs-12 col-md-3">
				<div class="well">col-xs-12 col-md-3</div>
			</div>
		</div>

		<h3>Other Examples</h3>

			<h4>Images</h4>
			<div class="grid gap">
				<div class="col-xs-12 col-md-6">
					<img src="https://via.placeholder.com/600" alt="" class="media-image">
				</div>
				<div class="col-xs-12 col-md-6">
					<div class="grid gap">
						<div class="col-xs-12 col-md-6">
							<img src="https://via.placeholder.com/600" alt="" class="media-image">
							<div>Text</div>
						</div>
						<div class="col-xs-12 col-md-6">
							<img src="https://via.placeholder.com/600" alt="" class="media-image">
							<div>Text</div>
						</div>
						<div class="col-xs-12 col-md-6">
							<figure>
								<img src="https://via.placeholder.com/600" alt="" class="media-image">
								<figcaption>Text</figcaption>
							</figure>
						</div>
						<div class="col-xs-12 col-md-6">
							<figure>
								<img src="https://via.placeholder.com/600" alt="" class="media-image">
								<figcaption>Text</figcaption>
							</figure>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container" id="flexsystem">
		<h2>Flex System</h2>
	</div>
	<div class="container" id="tables">
		<script>
			const makeTable = (classes='')=> {
				const head = ['ID','Office','Name','Email','Phone'];
				const body = [
								['522','Jacqueline Yen','jacqueline@email.com','415-910-4058'],
								['512','Sunny Yeh','sunny@email.com','415-910-4058'],
								['522','Carol Wu','carol@email.com','415-910-4058'],
								['514','Ross Geller','ross@email.com','415-910-4058'],
								['516','Amber Kuo','amber@email.com','415-910-4058']
				];
				document.write(`
					<table class="${classes}">
						<thead><tr>${head.reduce((r,o)=>r+`<th>${o}</th>`,'')}</tr></thead>
						<tbody>${body.reduce((r,o,i)=>r+
							`<tr>${
								[i+1,...o].reduce((r,o)=>r+`<td>${o}</td>`,'')
							}</tr>`,''
							)}<tbody>
					</table>
					`);
			}
		</script>
		<h2>Tables</h2>
		<div class="card soft">
			<h3>Basic</h3>
			<script>makeTable('table')</script>
		</div>
		<div class="card soft">
			<h3>Striped</h3>
			<script>makeTable('table striped')</script>
		</div>
		<div class="card soft">
			<h3>Lined Vertical</h3>
			<script>makeTable('table lined vertical')</script>
		</div>
		<div class="card soft">
			<h3>Lined Horizontal</h3>
			<script>makeTable('table lined horizontal')</script>
		</div>
		<div class="card soft">
			<h3>Lind Border</h3>
			<script>makeTable('table lind border')</script>
		</div>
		<div class="card soft">
			<h3>Vertical Lind Border Striped</h3>
			<script>makeTable('table vertical lind border striped')</script>
		</div>
		<div class="card soft">
			<h3>Lined</h3>
			<script>makeTable('table lined')</script>
		</div>
		<div class="card soft">
			<h3>Lined All</h3>
			<script>makeTable('table lined all')</script>
		</div>
	</div>
	<div class="container" id="figures">
		<h2>Figures</h2>

		<div class="card">
			<h3>Basic</h3>
			<figure class="figure">
				<img src="https://via.placeholder.com/400x400?text=product" alt="">
				<figcaption>Product</figcaption>
			</figure>
		</div>
		<h3>Figure Grid</h3>
		<div class="grid gap">
			<div class="col-xs-12 col-md-4">
				<figure class="figure">
					<img src="https://via.placeholder.com/400x400?text=product" alt="">
					<figcaption>Product</figcaption>
				</figure>
			</div>
			<div class="col-xs-12 col-md-4">
				<figure class="figure">
						<img src="https://via.placeholder.com/400x400?text=product" alt="">
						<figcaption>Product</figcaption>
				</figure>
			</div>
			<div class="col-xs-12 col-md-4">
				<figure class="figure">
						<img src="https://via.placeholder.com/400x400?text=product" alt="">
						<figcaption>Product</figcaption>
				</figure>
			</div>			
		</div>
		<h3>Product Grid</h3>
		<div class="grid gap">
			<div class="col-xs-12 col-md-4">
				<figure class="figure product">
					<img src="https://via.placeholder.com/400x400?text=product" alt="">
					<figcaption>
						<div>Product Name</div>
						<div>3.99</div>
					</figcaption>
				</figure>
			</div>
			<div class="col-xs-12 col-md-4">
				<figure class="figure product">
					<img src="https://via.placeholder.com/400x400?text=product" alt="">
					<figcaption>
						<div>Product Name</div>
						<div>3.99</div>
					</figcaption>
				</figure>				
			</div>
			<div class="col-xs-12 col-md-4">
				<figure class="figure product">
					<img src="https://via.placeholder.com/400x400?text=product" alt="">
					<figcaption>
						<div>Product Name</div>
						<div>3.99</div>
					</figcaption>
				</figure>				
			</div>
		</div>
		<h3>Product Overlay</h3>
		<div class="grid gap">
			<div class="col-xs-12 col-md-4">
				<figure class="figure product-overlay">
					<img src="https://via.placeholder.com/400x400?text=product" alt="">
					<figcaption>
						<div class="caption-body">
						<div>Product Name</div>
						<div>3.99</div>
						</div>
					</figcaption>
				</figure>
			</div>
			<div class="col-xs-12 col-md-4">
				<figure class="figure product-overlay">
					<img src="https://via.placeholder.com/400x400?text=product" alt="">
					<figcaption>
						<div class="caption-body">
						<div>Product Name</div>
						<div>3.99</div>
						</div>
					</figcaption>
				</figure>
			</div>
			<div class="col-xs-12 col-md-4">
				<figure class="figure product-overlay">
					<img src="https://via.placeholder.com/400x400?text=product" alt="">
					<figcaption>
						<div class="caption-body">
						<div>Product Name</div>
						<div>3.99</div>
						</div>
					</figcaption>
				</figure>
			</div>
		</div>
	</div>
	<div class="container" id="forms">
		<h2>Forms</h2>
		<h3>Inputs</h3>
		<div class="card soft">
			<form>
				<label>Text</label><br>						
				<input type="text"><br>
				<label>Password</label><br>
				<input type="password"><br>
				<label>Number</label><br>
				<input type="number"><br>
				<label>URL</label><br>
				<input type="url"><br>
				<label>Email</label><br>
				<input type="Email"><br>
				<label>Date Time</label><br>
				<input type="datetime-local"><br>
				<label>Date</label><br>
				<input type="date"><br>
				<label>Search</label><br>
				<input type="search"><br>
				<label>Submit</label><br>
				<input type="submit">
			</form>
			<h3 id="inputs">Form Input</h3>
			<form>
				<input type="text" class="form-input" placeholder="Text">
				<input type="password" class="form-input" placeholder="Password">
				<input type="number" class="form-input" placeholder="Number">
				<input type="search" class="form-input" placeholder="Search">
			</form>
			<h3 id="inputs">Form Label</h3>
			<form>
				<lable class="form-label">Example</lable>
				<input type="text" class="form-input" placeholder="Text">
				<lable class="form-label">Example</lable>
				<input type="password" class="form-input" placeholder="Password">
				<lable class="form-label">Example</lable>
				<input type="number" class="form-input" placeholder="Number">
				<lable class="form-label">Example</lable>
				<input type="search" class="form-input" placeholder="Search">
			</form>
			<h3 id="controls">Form Control</h3>
			<form>
				<div class="form-control">
					<label class="form-label">Example</label>
					<input type="text" class="form-input" placeholder="Text">
				</div>
				<div class="form-control">
					<label class="form-label">Example</label>
					<input type="password" class="form-input" placeholder="Password">
				</div>
				<div class="form-control">
					<label class="form-label">Example</label>
					<input type="number" class="form-input" placeholder="Number">
				</div>
				<div class="form-control">
					<label class="form-label">Example</label>
					<input type="search" class="form-input" placeholder="Search">
				</div>
			</form>
			<h3 id="buttons">Buttons</h3>
			<div class="card soft">
				<h3>Default Buttons</h3>
				<button>Button</button>
				<h3>Form Buttons</h3>
				<div class="form-control">
					<button class="form-button" type="button">Button</button>
				</div>
				<div class="form-control">
					<input type="button" class="form-button" value="input">
				</div>
				<div class="form-control">
					<a href="#" class="form-button">Anchor</a>
				</div>
			</div>
			<h3 id="hotdog">Hotdog</h3>
			<div class="card soft">
				<div class="form-control">
					<form>
						<input type="search" class="hotdog" placeholder="Search">
					</form>
				</div>
				<div class="form-control">
					<form>
						<input type="search" class="hotdog dark" placeholder="Search">
					</form>
				</div>
				<div class="form-control">
					<form class="card dark">
						<input type="search" class="hotdog light" placeholder="Search">
					</form>
				</div>
				<div class="form-control">
					<form class="hotdog">
						<span>&equiv;</span>
						<input type="search" placeholder="Search">
					</form>
				</div>
				<div class="form-control">
					<form class="hotdog">
						<input type="search" placeholder="Search">
						<span>&equiv;</span>
					</form>
				</div>
				<div class="form-control">
					<form>
						<input type="search" class="hotdog" placeholder="Search">
					</form>
				</div>
			</div>
			<h3 id="select">Select</h3>
			<div class="card soft">
				<div class="form-select">
					<select>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
					</select>
				</div>
				<div class="display-flex">
					<div class="flex-stretch"></div>
					<div class="flex-none">
						<select>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
						</select>
						</div>
					</div>
				</div>
			<form></form>
			<h3 id="checkboxes">Check Boxes</h3>
			<div class="card soft">
				<h3>Basic Checkbox</h3>
				<label>Label<input type="checkbox" id="input-1"></label>
				<label for="input-1">Label</label>

				<h3>Heart Checkbox</h3>
				<div class="favorite">
					<input type="checkbox" id="heart-example" class="hidden">
					<label for="heart-example">&hearts;</label>
				</div>

				<h3>Toggle</h3>
				<div class="toggle">
					<input type="checkbox" id="toggle-1" class="hidden">
					<label for="toggle-1"></label>
				</div>
				<div class="display-flex flex-align-center">
					<div class="flex-stretch">
						<label for="toggle-2" class="form-label">Toggle Button?</label>
					</div>
					<div class="flex-none">
						<div class="toggle" style="font-size: 2em;">
							<input type="checkbox" id="toggle-2" class="hidden">
							<label for="toggle-2"></label>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>