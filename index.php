<?php include 'components/header.php'; ?>

	<section class="jornada">
		<img src="assets/images/montanha-mobile.png" class="montanha-mob visible-xs" alt="">
		<img src="assets/images/processo1.png" id="smap244" class="hidden-xs" usemap="#image-map">
		<map name="image-map" class="hidden-xs">
		    <area data-toggle="modal" data-target="#myModal1" onmouseover="document.getElementById('smap244').src = 'assets/images/processo2.png'" onmouseout="document.getElementById('smap244').src = 'assets/images/processo1.png'" coords="421,0,730,475" shape="rect">
		    <area data-toggle="modal" data-target="#myModal2" onmouseover="document.getElementById('smap244').src = 'assets/images/processo3.png'" onmouseout="document.getElementById('smap244').src = 'assets/images/processo1.png'" coords="732,0,1108,474" shape="rect">
		    <area data-toggle="modal" data-target="#myModal3" onmouseover="document.getElementById('smap244').src = 'assets/images/processo4.png'" onmouseout="document.getElementById('smap244').src = 'assets/images/processo1.png'" coords="1113,2,1582,474" shape="rect">
		    <area href="https://student.soulphia.com/cadastro" target="_blank" onmouseover="document.getElementById('smap244').src = 'assets/images/processo5.png'" onmouseout="document.getElementById('smap244').src = 'assets/images/processo1.png'" coords="852,693,1066,742" shape="rect">
		</map>
	</section><!-- jornada -->

<?php include 'components/footer.php'; ?>