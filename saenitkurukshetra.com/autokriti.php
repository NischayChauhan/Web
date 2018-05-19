<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>AUTOKRITI</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/autokriti.css">
	<link rel="stylesheet" href="css/animate.css" type="text/css">

	<link rel="stylesheet" href="css/style.css" type="text/css">
<style type="text/css">
	
  #members{
  	text-align: center;
  	color:#fff;
  	font-size: 45px;
  }

  button{
  	border:2px solid black;
  	color: white;
  	font-size: 30px;
  }

</style>

	<?php include 'page/header.php';?>

	<div class="slider">
		<div id="myCarousel" class="carousel slide multi-item-carousel" dataride="carousel" >
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1" ></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			
			<div class="carousel-inner">

				<div class="item active">
					<img src="images\nitrox\data\1.jpg"  style="width:50%;height: 50%;padding-top: 85px;float:left;">  
				</div>
				<div class="item">
					<img src="images\accelerons\data\2.jpg"  style="width:50%;height: 50%;padding-top: 85px;float:left;">  
				</div>      		           
				<div class="item">
					<img src="images\nitrox\data\1.jpg"  style="width:50%;height: 50%;padding-top: 85px;padding-left: 15px;float:left;">
				</div>
			</div>
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
				
				<span class="sr-only">Next</span>
			</a>
			<span class="glyphicon glyphicon-menu-left"></span>
			<span class="glyphicon glyphicon-menu-right"></span>
		</div>
	</div>
	<div align="center" >
		<h2 style="padding-top: 30px;color: #BFB98F;">ABOUT US</h2>
		<p style="color:white;padding-left: 60px; padding-right: 60px;background-color: #2B5461;height: 300px;padding-top: 60px; font-size: 20px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque scelerisque ultrices eros sed tincidunt. Donec malesuada aliquam leo efficitur rutrum. Etiam non augue mattis, imperdiet massa at, dapibus erat. Nunc ac semper dolor. Vestibulum pellentesque tortor sed ipsum interdum congue ac nec felis. Nulla lacinia a massa in imperdiet. Proin congue fermentum nulla, in posuere lacus convallis vitae. Sed ut cursus purus. Ut congue, lacus non pharetra pellentesque, elit nulla pharetra massa, ut congue neque metus nec ante. Donec quis leo tempus, imperdiet orci quis, luctus nisl. </p>
	</div>

	<div class="container" >
		<div class="jumbotron" style="background-color: black">
			<h1 id="members" class=" divflipInY">TEAM MEMBERS</h1><br>
			<div class="row1" align="center">
				<button onclick="display(2018)" style="	background-color: rgba(125,209,129, 0.3);">2018</button>&nbsp;&nbsp;&nbsp;&nbsp;
				<button onclick="display(2017)" style="	background-color: rgba(125,209,129, 0.6);">2017</button>&nbsp;&nbsp;&nbsp;&nbsp;
				<button onclick="display(2016)" style="	background-color: rgba(125,209,129, 0.9);">2016</button>&nbsp;&nbsp;&nbsp;&nbsp;
				<button onclick="display(2015)" style="	background-color: rgba(125,209,129, 0.6);">2015</button>&nbsp;&nbsp;&nbsp;&nbsp;
				<button onclick="display(2014)" style="	background-color: rgba(125,209,129, 0.3);">2014</button>&nbsp;&nbsp;&nbsp;&nbsp;
			</div><br><br>
		</div>
	</div>
	<div class="container" style="width: 100%">
		<div class="row"><!--teamHeads -->
				<div class="col-sm-12 gal divHiddenAnim">
				</div>
		</div>
	<div>


		<h2 align="center" style="color: #fff;padding-top: 30px;">GROWTH</h2>
		<div id="chartContainer" style="height: 370px; max-width: 920px; margin: 0px auto; padding-top: 30PX;">		
		</div>

<div class="container-fluid">
	<div class="jumbotron" style="background-color: black">
		<h1 align="center" class=" divSlideRightAnim" style="color:#4e9481"> FUTURE PLANS</h1><br>
	<blockquote style="margin-left: 20px;color:#bfb98f;" class="divHiddenAnim">Lorem ipsum dolor sit amet, est nunc at sit hendrerit sed volutpat, diam pellentesque lorem nullam ipsum id aliquet, exercitation iaculis, tempus sed tincidunt. Consequat mi libero ac sem lorem pede. Leo provident condimentum, eget eget. Tempor fusce odio, convallis vestibulum dis, vivamus urna sed aliquam, natoque vestibulum interdum nulla a amet, suscipit vel felis aenean. Etiam gravida in sem neque ac, lobortis non massa.</blockquote>
	<br>
	<blockquote style="margin-left: 20px;color:#bfb98f;"  class="divHiddenAnim">Lorem ipsum dolor sit amet, est nunc at sit hendrerit sed volutpat, diam pellentesque lorem nullam ipsum id aliquet, exercitation iaculis, tempus sed tincidunt. Consequat mi libero ac sem lorem pede. Leo provident condimentum, eget eget. Tempor fusce odio, convallis vestibulum dis, vivamus urna sed aliquam, natoque vestibulum interdum nulla a amet, suscipit vel felis aenean. Etiam gravida in sem neque ac, lobortis non massa.</blockquote>
	<br>
	<blockquote style="margin-left: 20px;color:#bfb98f;" class="divHiddenAnim">Lorem ipsum dolor sit amet, est nunc at sit hendrerit sed volutpat, diam pellentesque lorem nullam ipsum id aliquet, exercitation iaculis, tempus sed tincidunt. Consequat mi libero ac sem lorem pede. Leo provident condimentum, eget eget. Tempor fusce odio, convallis vestibulum dis, vivamus urna sed aliquam, natoque vestibulum interdum nulla a amet, suscipit vel felis aenean. Etiam gravida in sem neque ac, lobortis non massa.</blockquote>
	<br>
	<blockquote style="margin-left: 20px;color:#bfb98f;" class="divHiddenAnim">Lorem ipsum dolor sit amet, est nunc at sit hendrerit sed volutpat, diam pellentesque lorem nullam ipsum id aliquet, exercitation iaculis, tempus sed tincidunt. Consequat mi libero ac sem lorem pede. Leo provident condimentum, eget eget. Tempor fusce odio, convallis vestibulum dis, vivamus urna sed aliquam, natoque vestibulum interdum nulla a amet, suscipit vel felis aenean. Etiam gravida in sem neque ac, lobortis non massa.</blockquote>
</div>
</div>
		<h2 align="center" style="color: #fff; padding-top: 30px;">TIMELINE</h2>
		<div style="padding-top: 30px;" class="timeline">
			<div class="cont left">
				<div class="content" style="padding-top: 30px; color: #fff;">
					<h2>2017</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque scelerisque ultrices eros sed tincidunt. Donec malesuada aliquam leo efficitur rutrum. Etiam non augue mattis, imperdiet massa at, dapibus erat. Nunc ac semper dolor. </p>
				</div>
			</div>
			<div class="cont right">
				<div class="content" style="padding-top: 30px;">
					<h2>2016</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque scelerisque ultrices eros sed tincidunt. Donec malesuada aliquam leo efficitur rutrum. Etiam non augue mattis, imperdiet massa at, dapibus erat. Nunc ac semper dolor. </p>
				</div>
			</div>
			<div class="cont left">
				<div class="content">
					<h2>2015</h2>
					<p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
				</div>
			</div>
		</div>

		<?php include'page/footer.php';?>

		<script src="js/anim.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
		<script type="text/javascript">
			var i;
			var img=['1.jpg','5.jpg','6.jpg','1.jpg','5.jpg','6.jpg','1.jpg','5.jpg','6.jpg','1.jpg','5.jpg','6.jpg','1.jpg','5.jpg','6.jpg','1.jpg','5.jpg','6.jpg'];
			var dept=['electronics','brake','suspension','engine','teamhead'];
			var x=document.getElementsByClassName("gal");
			var thumbnail=document.getElementById("thumbnail");
			for(i=0;i<x.length;i++)
			{
				for(j=0;j<img.length;j++)
				{
					var newImage=document.createElement('img');
					newImage.setAttribute('src','images/autokriti/2018/'+img[j]);
					newImage.style.width="240px";
					//newImage.style.margin="10px";
					x[i].appendChild(newImage);
				}
			}
			function display(data){

				for(i=0;i<x.length;i++)
				{
					document.getElementsByClassName('gal')[i].innerHTML=" ";
				}
				for(i=0;i<x.length;i++)
				{
					for(j=0;j<img.length;j++)
					{
						var newImage=document.createElement('img');
						newImage.setAttribute('src','images/autokriti/'+data+'/'+img[j]);
						newImage.style.width="240px";
						newImage.setAttribute('class','divHiddenAnim');
						x[i].appendChild(newImage);
					}
				} 
			}
			$('.multi-item-carousel').carousel({
				interval: 2000
			});

			$('.carousel .item').each(function(){
				var next = $(this).next();
				if (!next.length) {
					next = $(this).siblings(':first');
				}
				next.children(':first-child').clone().appendTo($(this));

			});
		</script>
		<script src="js/autokriti.js"></script>

	</body>
	</html> 