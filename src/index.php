<?php
include_once("./connect/session_check.php");
?>

<?php ob_start(); ?>

<?php $styles = ob_get_clean(); ?>

<?php ob_start(); ?>

<main>
	<!--  Your Contents here -->
</main>

<?php $content = ob_get_clean(); ?>

<?php ob_start(); ?>

<?php $scripts = ob_get_clean(); ?>

<?php include './layouts/base.php'; ?>
<script src="./assets/js/default.js?=<?php echo $randomNumber; ?>"></script>