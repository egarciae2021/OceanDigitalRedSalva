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
    // Obtener la ruta relativa de la URL actual
    const currentPath = window.location.pathname;

    // Verificar si la ruta relativa es la página principal o está vacía
    if (currentPath === "/" || currentPath === "") {
      // Si estamos en la página principal (sin ruta), aplicar zoom 61%
      setTimeout(() => {
        document.body.style.zoom = "61%";
      }, 500);
    } else {
      // En cualquier otra ruta (como /blog, /contacto, etc.), aplicar zoom 90%
      setTimeout(() => {
        document.body.style.zoom = "75%";
      }, 500);
    }
  });
</script>


</head>
<?php require_once('nav.php'); ?>
