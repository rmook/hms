<footer>
		<p>This site contains links to other internet sites. Such links are not endorsements of any products or services in such sites, and no information in such site has been endorsed or approved by Highland Motorsport LLC</p>
	</footer>
	<script src="js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/app.js" type="text/javascript" charset="utf-8"></script>
	<script>
			$.getJSON("js/scooter.json", function(response){
			$.each(response, function(index, bike) {
				if (bike.feature === true) {
				$("#scooter-browse-list").append('<div class="col-sm-4"><li class="bike-card"><div class="bike-header"><h2>'+bike.scooterName+'</h2><img src="'+bike.scooterImage+'" alt="Scooter image" class="bike-picture"><img src="'+bike.scooterBrand+'" alt="Scooter Brand" class="brand-logo"></div><div class="bike-info"><h3>Specifications</h3><ul class="specs"><li class="left-specs"><ul><li class="price">'+bike.price + '</li><li class="engine">'+bike.engine+'cc</li></ul></li><li class="right-specs"><ul><li class="mpg">'+bike.mpg+'MPG</li><li class="speed">'+bike.speed+'MPH</li></ul></li></ul></div></div></li>');
			}; //end if
			})//end each
		});
	</script>
	<script>
	$(document).ready(function(){
    // *******slideshow*****************************************************
       var t=setInterval(function(){
         $(".slideshow ul").animate({marginLeft:0}, "slow", "linear", function(){
           $(this).find("li:last").after($(this).find("li:first"));
           $(this).css({marginLeft:0});
           $(".slideshow li").each(function(){
          $(this).css("display", "none");
         })
         $(".slideshow li:first-child").css("display", "block");
         })
       }, 5000);
       });
	</script>

</body>
</html>
