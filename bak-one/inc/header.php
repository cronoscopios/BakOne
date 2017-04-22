<header id="main-header">
	<div class="container">
		<div class="row">
			<div class="col-xs-3">
				<h1 id="main-logo"><a href="#home">B</a></h1>
				<h2 id="slogan">Bak-One <br><span>One Page Flat Template</span></h2>				
			</div>
			
			<div class="col-xs-8 col-xs-offset-1">
				<ul id="main-menu" class="nav nav-pills"> 
					<li class="active"><a href="#home">HOME</a></li>
					<li><a href="#portfolio">PORTFOLIO</a></li>
					<li><a href="#about">ABOUT</a></li>
					<li><a href="#contact">CONTACT</a></li>
				</ul>
			</div>
		</div>
	</div>
</header>
<script>
	$(function() {
	  $('a[href*=#]:not([href=#])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html,body').animate({
	          scrollTop: target.offset().top
	        }, 1000);
	        return false;
	      }
	    }
	  });
	});
</script>
