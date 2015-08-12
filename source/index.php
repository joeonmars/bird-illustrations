<?php include "assets/php/path.php"; ?>

<!DOCTYPE html>
<html>

	<head>
		<title>Bird Illustrations</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, minimum-scale=1, maximum-scale=1">
		<meta name="keywords" content="">
		<meta name="description" content="">

		<meta content="" property="og:url">
		<meta content="" property="og:title">
		<meta content="" property="og:description">
		<meta content="assets/images/misc/facebook.png" property="og:image">

		<script>(function(w){var dpr=((w.devicePixelRatio===undefined)?1:w.devicePixelRatio);if(!!w.navigator.standalone){var r=new XMLHttpRequest();r.open('GET','assets/php/retinaimages.php?devicePixelRatio='+dpr,false);r.send()}else{document.cookie='devicePixelRatio='+dpr+'; path=/'}})(window)</script>

		<link rel="apple-touch-icon" href="assets/images/misc/icon-iphone.png">
		<link rel="apple-touch-icon" sizes="72x72" href="assets/images/misc/icon-ipad.png">
		<link rel="apple-touch-icon" sizes="114x114" href="assets/images/misc/icon-iphone4.png">
		<link rel="apple-touch-icon" sizes="144x144" href="assets/images/misc/icon-ipad3.png">
		<link rel="shortcut icon" href="assets/images/misc/favicon.ico">
		<link rel="stylesheet" href="assets/styles/css/brd.css" media="screen">
	</head>

	<body>

		<?php
			$USE_COMPILE_JS = false;

			$url = parse_url('http://dev.brd.com')['host'];

			if (strpos(URLADDR, $url) == false) {
		    $USE_COMPILE_JS = true;
			}
			if (isset($_GET['compile'])) {
				$USE_COMPILE_JS = true;
			}
		?>

		<!-- third-party -->
		<script src="assets/js/client/output/thirdparty.js"></script>

		<!-- project js -->
		<?php
			if($USE_COMPILE_JS == true) {
				echo('
					<script src="assets/js/client/output/brd-compiled.js"></script>
				');
			}else {
				echo('
					<script src="http://localhost:35729/livereload.js"></script>
					<script src="assets/js/client/thirdparty/closure-library/closure/goog/base.js"></script>
					<script src="assets/js/client/output/brd-deps.js"></script>
					<script src="assets/js/client/project/brd.js"></script>
				');
			}
		?>

		<!-- execute project js-->
		<script>
			var config = {
				basePath: '<?php echo URLADDR; ?>',
				app: 'main'
			};

			brd.init( config );
		</script>
	</body>
	

</html>