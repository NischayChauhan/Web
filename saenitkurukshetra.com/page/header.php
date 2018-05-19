<script type="text/javascript">
	

$(window).scroll(function() {
    if($(this).scrollTop() > 50)  /*height in pixels when the navbar becomes non opaque*/ 
    {
      $('.navbar').addClass('fixed');
      $('.navbar').removeClass('transparentNav');
    } else {
      $('.navbar').addClass('transparentNav');
      $('.navbar').removeClass('fixed');
    }
  });

</script>

<style type="text/css">

.transparent{
	background-color: rgba(255, 255, 255, 0.2);
	transition: background-color 2000ms ease;
	
}
.transparentNav{
	background-color: rgba(255, 255, 255, 0.2);
	height: 60px;
	transition: all 3000ms ease;
	
}
.transparentmost{
	background-color: rgba(255, 255, 255, 0.5);
	transition: background-color 2000ms ease;

}
.item_onbar{
	color: #000;
}
.fixed{
	background-color: rgba(125,209,129, 0.9);
	height: 30px;
	transition: all 3000ms ease;
}

.panel-body{
	color: #000;
	
}

.carousel-control.left, .carousel-control.right {
	background-image: none;
}
</style>
</head>

<body data-spy="scroll" data-target="#myScrollspy" data-offset="10">
	<div id="particle"></div>
	<div id="overlay">

		<nav class="navbar navbar-inverted navbar-fixed-top transparentNav animated bounceInDown">
			<div class="container-fluid ">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed item_onbar" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<i class="fa fa-bars fa-1x" aria-hidden="true"></i>
					</button>
					<a class="navbar-brand item_onbar animated pulse infinite" href="index.php">SAE</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li ><a href="teamacc.php" class="item_onbar animated pulse infinite"> Nitrox </a></li>
						<li><a href="teamacc.php" class="item_onbar animated pulse infinite"> Acclerons</a></li>
						<li><a href="autokriti.php" class="item_onbar animated pulse infinite"> Autokriti</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle item_onbar animated pulse infinite" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Alumni<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#" onclick="myfun(2017)">2017</a></li>
								<li><a href="#" onclick="myfun(2017)">2016</a></li>
								<li><a href="#" onclick="myfun(2017)">2015</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#" onclick="myfun(0000)">Previous</a></li>
							</ul>
						</li>
      </ul><!--
      <form class="navbar-form navbar-right">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">
            <i class="glyphicon glyphicon-search"></i></button>
        </form>-->
        <ul class="nav navbar-nav navbar-right">
        	<li><a href="contact.php"  class="item_onbar animated pulse infinite">Contact</a></li>
        	<li class="dropdown">
        		<a href="#" class="dropdown-toggle item_onbar animated pulse infinite" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SAY HII!<span class="caret"></span></a>
        		<ul class="dropdown-menu">
        			<li><a href="#"><i class="fa fa-facebook animated jello" aria-hidden="true"> - facebook</i></a></li>
        			<li><a href="#"><i class="fa fa-twitter animated jello" aria-hidden="true"> - twitter</i></a></li>
        			<li><a href="#"><i class="fa fa-whatsapp animated jello" aria-hidden="true"> - watsapp</i></a></li>
        		</ul>
        	</li>
        </ul>
    </div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>
