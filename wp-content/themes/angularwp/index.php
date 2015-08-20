<!DOCTYPE html>
<html ng-app="app">
<head>
	<base href="/">
	<title>black crows journal</title>
	<?php wp_head(); ?>
</head>
<body>

	<header>
		<h1>
			<a href="<?php echo site_url(); ?>">black crows journal</a>
		</h1>
		<ul> 
<?php wp_list_categories('orderby=name'); ?> 
</ul>
	</header>

	<div ng-view></div>

	<footer>
		&copy; <?php echo date( 'Y' ); ?>
	</footer>

</body>
</html>