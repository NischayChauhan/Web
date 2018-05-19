<!DOCTYPE html>
<html>
<head>
	<title>Team accelerons</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/animate.css" type="text/css">

	<link rel="stylesheet" href="css/style.css" type="text/css">

  <style>
  body{
  	background-color:black;
  }

  h1:hover{
	font-weight: bolder;
	cursor: pointer;
  }

  #about-us{
  	text-align: center;
  	border-top:4px solid #4e9481;
  	padding:10px;
  	border-bottom:4px solid #4e9481;
  }

  #achieve{
  	color:#455247;
  	text-align: center;
  }

  #members{
  	text-align: center;
  	color:#fff;
  	font-size: 45px;
  }
  #gallery{
  	text-align:center;
  	font-size: 55px;
  	color:#bfb98f;
  	border-top: 4px solid #bfb98f;
  	border-bottom: 4px solid #bfb98f;
  	margin-left: 20px;
  	margin-right: 20px;
  }

  .gal{
  	display:flex;
  }

  h2{
  	color:#628a84;
  }

  h2:hover{
  	color:purple;
  }

  img{
  	width:100%;
  	height: 100%;
  }

  .row1{
  	display:block;
  	width:100%;
  	height:40px;
  }

  button{
  	border:2px solid black;
  	color: white;
  	font-size: 30px;
  }

  button:active{
  	transform:translateY(4px);
  }
  
  a{
  	color:pink;
  	text-decoration: none;
  }
  
  a:hover{
  	cursor:pointer;
  	text-decoration: underline;
  	color:cyan;
  	max-height:100%;
  }
  
  .glyphicon{
  	font-size: 30px; /* to set the size of glyphicon*/
  	color:pink;
  	max-height:100%;
  }
  .colorBlack{
  	background-color: #0000;
  }
</style>
<?php include 'page/header.php';?>
<br><br>
	<div class="container">
 		<div class ="row colorBack" >
 			<h1 style=" color:#4e9481" id="about-us">ABOUT US</h1><br>
 			<p style="color:#bfb98f;font-size: 20px;text-align: center;">Lorem ipsum dolor sit amet, est nunc at sit hendrerit sed volutpat, diam pellentesque lorem nullam ipsum id aliquet, exercitation iaculis, tempus sed tincidunt. Consequat mi libero ac sem lorem pede. Leo provident condimentum, eget eget. Tempor fusce odio, convallis vestibulum dis, vivamus urna sed aliquam, natoque vestibulum interdum nulla a amet, suscipit vel felis aenean. Etiam gravida in sem neque ac, lobortis non massa.<br>	<br>	

			Vel elit orci dolor incidunt lectus eleifend, neque torquent at porttitor tellus sed, dictum at eros suspendisse. Risus fermentum. Sit volutpat, sed nisl nec odio dolor, sed justo lacus diam diam etiam. Maecenas magna nisl, cupiditate est, amet iaculis, urna ullamcorper. Integer nec primis pellentesque. Diam mauris aliquam. Euismod eu ipsum ultrices praesent. Consequat ante, in eget pellentesque scelerisque, mattis dui curabitur, nonummy pulvinar sed vivamus sapien, metus ut lobortis lacinia eget. Vitae non mus nullam commodo a ut, dui aliquam fermentum ac orci, volutpat sed fugiat aliquip gravida, eget mollis arcu viverra ullamcorper feugiat conubia, vitae quisque. Dapibus duis est a sed, nibh sapien fusce lectus, sem magnis porttitor pellentesque facilisis, convallis lacus quis quisque aliquam eros lacus, convallis iaculis urna quis ultrices tellus. Elit maecenas tellus faucibus rhoncus pellentesque commodo. Est amet, morbi suspendisse sem velit, nostra ornare adipiscing ac.</p>
 		</div>
 	</div>
 	<div class="container" style="background-color: rgba(0,0,0,0.2)">
 		<h1 id="achieve" style="font-size: 55px">ACHIEVEMENTS</h1><br>
 		<div class="row">
 			<div class="col-sm-4 divSlideLeftAnim">
 				<img class="img-rounded" src="images/data/1.jpg">
 			</div>
	 		<div class="col-sm-8 divHiddenAnim">
	 			<blockquote style="margin-left: 20px;color:#bfb98f;text-align: left;" class="blockquote-reverse">Lorem ipsum dolor sit amet, est nunc at sit hendrerit sed volutpat, diam pellentesque lorem nullam ipsum id aliquet, exercitation iaculis, tempus sed tincidunt. Consequat mi libero ac sem lorem pede. Leo provident condimentum, eget eget. Tempor fusce odio, convallis vestibulum dis, vivamus urna sed aliquam, natoque vestibulum interdum nulla a amet, suscipit vel felis aenean. Etiam gravida in sem neque ac, lobortis non massa.</blockquote>
	 		</div>
 		</div><br>
		<div class="row">
 			<div class="col-sm-8 divHiddenAnim">
	 			<blockquote style="margin-left: 20px;color:#bfb98f;">Lorem ipsum dolor sit amet, est nunc at sit hendrerit sed volutpat, diam pellentesque lorem nullam ipsum id aliquet, exercitation iaculis, tempus sed tincidunt. Consequat mi libero ac sem lorem pede. Leo provident condimentum, eget eget. Tempor fusce odio, convallis vestibulum dis, vivamus urna sed aliquam, natoque vestibulum interdum nulla a amet, suscipit vel felis aenean. Etiam gravida in sem neque ac, lobortis non massa.</blockquote>
	 		</div>
 			<div class="col-sm-4 divSlideRightAnim">
 				<img class="img-rounded" src="images/data/1.jpg">
 			</div>
 		</div><br>
 		<div class="row">
 			<div class="col-sm-4 divSlideLeftAnim">
 				<img class="img-rounded" src="images/data/1.jpg">
 			</div>
 			<div class="col-sm-8 divHiddenAnim">
 				<blockquote style="margin-left: 20px;color:#bfb98f;text-align: left;" class="blockquote-reverse">Lorem ipsum dolor sit amet, est nunc at sit hendrerit sed volutpat, diam pellentesque lorem nullam ipsum id aliquet, exercitation iaculis, tempus sed tincidunt. Consequat mi libero ac sem lorem pede. Leo provident condimentum, eget eget. Tempor fusce odio, convallis vestibulum dis, vivamus urna sed aliquam, natoque vestibulum interdum nulla a amet, suscipit vel felis aenean. Etiam gravida in sem neque ac, lobortis non massa.</blockquote>
 			</div>
 		</div><br>
 		<div class="row">
 			<div class="col-sm-8 divHiddenAnim">
 				<blockquote style="margin-left: 20px;color:#bfb98f;">Lorem ipsum dolor sit amet, est nunc at sit hendrerit sed volutpat, diam pellentesque lorem nullam ipsum id aliquet, exercitation iaculis, tempus sed tincidunt. Consequat mi libero ac sem lorem pede. Leo provident condimentum, eget eget. Tempor fusce odio, convallis vestibulum dis, vivamus urna sed aliquam, natoque vestibulum interdum nulla a amet, suscipit vel felis aenean. Etiam gravida in sem neque ac, lobortis non massa.</blockquote>
 			</div>
 			<div class="col-sm-4 divSlideLeftAnim">
 				<img class="img-rounded" src="images/data/1.jpg">
 			</div>
 		</div><br>
	</div><br><br>
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
		<div class="row 1"><!--teamHeads -->
			<div class="col-lg-3 divSlideLeftAnim">
				<h2>TEAM HEADS</h2>
			</div>
			<div class="col-lg-9 gal divHiddenAnim">
			</div>
		</div>
		<br>
		<div class="row 1"><!--brakes -->
			<div class="col-lg-3 divSlideLeftAnim">
				<h2>BRAKES</h2>
			</div>
			<div class="col-lg-9 gal divHiddenAnim">
			</div>
		</div>
		<br>
		<div class="row 1"><!--suspension -->
			<div class="col-lg-3 divSlideLeftAnim">
				<h2>SUSPENSION</h2>
			</div>
			<div class="col-lg-9 gal divHiddenAnim">
			</div>
		</div>
		<br>
		<div class="row 1"> <!--transmission -->
			<div class="col-lg-3 divSlideLeftAnim">
				<h2>TRANSMISSION</h2>
			</div>
			<div class="col-lg-9 gal divHiddenAnim">
			</div>
		</div>
		<br>
		<div class="row 1"><!--steering -->
			<div class="col-lg-3 divSlideLeftAnim">
				<h2>STEERING</h2>
			</div>
			<div class="col-lg-9 gal divHiddenAnim">
			</div>
		</div>
	</div>
</div>
<div>
	<h1 id="gallery"> GALLERY </h1><br>
	<div id="thumbnail">

	</div>
</div><br><br>
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
<?php include'page/footer.php'?>

<script src="js/anim.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript">
var i;
var img=['1.jpg','2.jpg'];
var dept=['electronics','brake','suspension','engine','teamhead'];
var x=document.getElementsByClassName("gal");
var thumbnail=document.getElementById("thumbnail");
for(i=0;i<x.length;i++)
{
	for(j=0;j<img.length;j++)
	{
		var newImage=document.createElement('img');
		newImage.setAttribute('src','images/2018/'+dept[i]+'/'+img[j]);
		newImage.style.width="30%";
		newImage.style.margin="10px";
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
		newImage.setAttribute('src','images/'+data+'/'+dept[i]+'/'+img[j]);
		newImage.style.width="30%";
		newImage.style.margin="10px";
		x[i].appendChild(newImage);
	}
} 
	}
	//for gallery
	for(i=1;i<=12;i++)
	{
		var image=document.createElement('img');
		image.setAttribute('src','images/data/'+i+'.jpg');
		image.style.width="15%";
		image.style.margin="10px";
		image.style.height="200px";
		if(i==1) image.setAttribute('class','divSlideLeftAnim');
		else image.setAttribute('class','divHiddenAnim');
		thumbnail.appendChild(image);
	}

</script>
</body>
</html>