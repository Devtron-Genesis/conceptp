<?php /* Template Name: Sample Page */ ?>

<?php get_header(); ?>
<style>
#navigation{display: none;} #fscf_form_error1{display: none;} input:focus { outline: none !important;} #page{background: #000000;} #text-5 {display: none;}#footer blockquote {font-size: 24px;margin: 27px 0 0 9%;padding-left: 6%;text-align: left; width: 500px;} #wp-admin-bar-top-secondary,#footer-bottom{display: none;}
</style>
<div id="page">
	<div class="wrap">
		
		<?php the_content(); ?>
	
	</div>
</div>
<?php if(!empty($_GET['quote'])){ $data = ''; $retail = 'Retail/Commercial Stripcurtain'; $heavy = 'Heavy Industrial/Freezer Stripcurtain';
if($_GET['quote']=='r1') {$data = $retail.' – 2100H X 800W';}
if($_GET['quote']=='r2') {$data = $retail.' – 2100H X 1100W';}
if($_GET['quote']=='r3') {$data = $retail.' – 2100H X 1600W';}
if($_GET['quote']=='r4') {$data = $retail.' – 2100H X 1900W';}
if($_GET['quote']=='r5') {$data = $retail.' – 2100H X 2200W';}
if($_GET['quote']=='r6') {$data = $retail.' – 2400H X 800W';}
if($_GET['quote']=='r7') {$data = $retail.' – 2400H X 1100W';}
if($_GET['quote']=='r8') {$data = $retail.' – 2400H X 1600W';}
if($_GET['quote']=='r9') {$data = $retail.' – 2100H X 1900W';}
if($_GET['quote']=='r10') {$data = $retail.' – 2400H X 2200W';}
if($_GET['quote']=='r11') {$data = $retail.' – 2400H X 2400W';}


if($_GET['quote']=='h1') {$data = $heavy.' – 2100H X 800W';}
if($_GET['quote']=='h2') {$data = $heavy.' – 2100H X 1100W';}
if($_GET['quote']=='h3') {$data = $heavy.' – 2100H X 1600W';}
if($_GET['quote']=='h4') {$data = $heavy.' – 2100H X 1900W';}
if($_GET['quote']=='h5') {$data = $heavy.' – 2100H X 2200W';}
if($_GET['quote']=='h6') {$data = $heavy.' – 2400H X 800W';}
if($_GET['quote']=='h7') {$data = $heavy.' – 2400H X 1100W';}
if($_GET['quote']=='h8') {$data = $heavy.' – 2400H X 1600W';}
if($_GET['quote']=='h9') {$data = $heavy.' – 2100H X 1900W';}
if($_GET['quote']=='h10') {$data = $heavy.' – 2400H X 2200W';}
if($_GET['quote']=='h11') {$data = $heavy.' – 2400H X 2400W';}

 ?>
<script type="text/javascript">
$('#autopop').html('<h1><span style="color: #ffffff;"><?php echo $data; ?></span></h1>');
</script>
<script type="text/javascript">
$('#fscf_div_field1_13 input').val('<?php echo $data; ?>');
</script>
<?php } ?>
<?php get_footer(); ?>

