<?php
echo <<< HERE
	<div id="galeria" class="grid_24">
	  <div class="slider-wrapper">
	    <div id="slider">
	      <div class="slide1"> <img src="img/1.jpg" alt="" /></div>
	      <div class="slide2"><img src="img/2.jpg" alt="" /></div>
	      <div class="slide3"><img src="img/3.jpg" alt="" /></div>
	      <div class="slide4"><img src="img/4.jpg" alt="" /></div> 
	    </div>
	    <div id="slider-direction-nav"></div>
	    <div id="slider-control-nav"></div>
	  </div>
	<script type="text/javascript">
	  $(document).ready(function() {
	  var slider = $('#slider').leanSlider({
	  directionNav: '#slider-direction-nav',
	  controlNav: '#slider-control-nav'});
	  });
	</script>
	
	</div>

HERE;
?>
