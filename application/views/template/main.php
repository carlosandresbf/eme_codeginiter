<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
   
	<link href="<?=base_url()?>assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/jquery.slider.min.css" type="text/css">
	<link rel="stylesheet" href="<?=base_url()?>assets/bootstrap/css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/owl.carousel.css" type="text/css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/style.css" type="text/css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/selectize.css" type="text/css">
    <?php /*?><script
			  src="https://code.jquery.com/jquery-2.2.4.min.js"
			  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
			  crossorigin="anonymous"></script><?php */?>
              <script src="<?=base_url()?>assets/js/jquery-1.10.2.min.js"></script>
  
  <script type="text/javascript" src="<?=base_url()?>assets/js/jquery-migrate-1.2.1.min.js"></script>
              
    <script type="text/javascript" src="<?=base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/bootstrap-select.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.placeholder.js"></script>
	
	<script type="text/javascript" src="<?=base_url()?>assets/js/retina-1.1.0.min.js"></script>
	<?php /*?><script type="text/javascript" src="<?=base_url()?>assets/js/infobox.js"></script><script type="text/javascript" src="<?=base_url()?>assets/js/masonry.pkgd.min.js"></script><?php /*?>
	 <script type="text/javascript" src="<?=base_url()?>assets/js/waypoints.min.js"></script><?php */?>
	<script type="text/javascript" src="<?=base_url()?>assets/js/selectize.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/tmpl.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/icheck.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.dependClass-0.1.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/draggable-0.1.js"></script>
	   <?php /*?> <script type="text/javascript" src="<?=base_url()?>assets/js/markerwithlabel_packed.js"></script><?php */?>
	<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.slider.js"></script>

	<script type="text/javascript" src="<?=base_url()?>assets/js/custom-map.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/jquery.fallings.js"></script>
	<title>EME Propiedad Raiz - Ventas y Arriendos en Medellín, Colombia</title>
</head>
<body class="page-homepage" id="page-top">
	<div id="page-preloader">
		<div class="loader-ring"></div>
		<div class="loader-ring2"></div>
	</div>
    
<?php    $this->load->view('partials/header_page');?>
    
    
		<?= $section ?>
		
		<!-- end Page Content -->
		
		<!-- Start Footer -->
  <div id="footer">


	<meta charset="UTF-8">
	<title>Footer</title>


	<footer id="page-footer">
		<div class="inner">
			<!-- /#footer-main -->
			<section id="footer-thumbnails" class="footer-thumbnails"></section><!-- /#footer-thumbnails -->
			<section id="footer-copyright">
				<div class="container">
					© EME Propiedad Raíz | Todos los derechos reservados 2016

					<span class="pull-right"><a href="http://imganinamos.com">Desarrollo web : imaginamos.com</a></span>
				</div>
			</section>
		</div><!-- /.inner -->
	</footer>



</div>
    <!-- End Footer -->
	</div>

	<!-- Modal login, register, custom gallery -->
	<div id="login-modal-open"></div>
	<div id="register-modal-open"></div>
    
    
	
	<!-- End Modal login, register, custom gallery -->


    <script>
		jQuery( document ).ready(function() {
	
		$(".main-title").fallings({
			velocity: 3
		});
	
		$(".primary-image").fallings({
			velocity: .5,
			bgParallax: true,
			bgPercent: '50%'
		});
	
	});
	</script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/custom.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/custom-map.js"></script>
<!--[if gt IE 8]>
<script type="text/javascript" src="<?=base_url()?>assets/js/ie.js"></script>
<![endif]-->
</body>
</html>