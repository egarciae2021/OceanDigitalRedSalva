<?php
// require_once($_SERVER['DOCUMENT_ROOT'] . '/blog/wp-load.php'); 
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Required Meta Tags Always Come First -->
	<meta charset="utf-8">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
	<!-- Title -->
	<title><?php echo $page_title; ?></title>
	<meta property="og:image" content="<?php echo $page_image; ?>" />
	<meta name="description" content="<?php echo $page_description; ?>">
	<link rel="preload" as="image" href="/images/slide-001.webp">
	<link rel="preload" as="image" href="/images/slide-002.webp">
	<link rel="preload" as="image" href="/images/slide-003.webp">
	<?php require_once('estilos.php'); ?>
	<script>
	  document.addEventListener("DOMContentLoaded", function() {
      setTimeout(() => {
        document.body.style.zoom = "80%";
      }, 500);
    }); 
	</script>
</head>
<?php require_once('nav.php'); ?>
