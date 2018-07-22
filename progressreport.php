<?php

include 'lib/header.php';

?>
<?php 

$total = 100;
$current = 10;
$percent = ($total/$current);

echo "Total -  $total Current - . $current Percent - $percent%";

 ?>

<style type="text/css">
	
.outter {
	height: 45px;
	width: 100px;
	border: solid 1px black;
}
.second {
	padding-top: 5px;
	    padding-left: 50px;

	}
.text {
	padding-top: 5px;
	    padding-left: 50px;
}
.mainber{
	height: 450px;
	width: 300px;
	background-color: #ccc;
}
/*.third {
	padding-top: 5px;
	}*/
.inner {
	height: 45px;
	width: <?php echo $percent?>;
	border-right: solid 1px black;
	/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#1e5799+0,2989d8+50,207cca+51,7db9e8+100;Blue+Gloss+Default */
background: #1e5799; /* Old browsers */
background: -moz-linear-gradient(top, #1e5799 0%, #2989d8 50%, #207cca 51%, #7db9e8 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top, #1e5799 0%,#2989d8 50%,#207cca 51%,#7db9e8 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom, #1e5799 0%,#2989d8 50%,#207cca 51%,#7db9e8 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1e5799', endColorstr='#7db9e8',GradientType=0 ); /* IE6-9 */
}
</style>

<div class="mainber"><b>progeree</b>
<div class="outter">
 	<div class="inner">

 		<?php echo "$percent% "?>
 			
 		</div>
 </div>
<div class="text"></div>
<div class="second">
  <div class="outter">
 	<div class="inner">

 		<?php echo "$percent% "?>
 			
 		</div>
 </div>
</div>

<div class="second">
  <div class="outter">
 	<div class="inner">

 		<?php echo "$percent% "?>
 			
 		</div>
 </div>
</div>

<div class="second">
  <div class="outter">
 	<div class="inner">

 		<?php echo "$percent% "?>
 			
 		</div>
 </div>
</div>
</div>

<?php

include 'lib/footer.php';

?>