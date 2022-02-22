	</div>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="./cs-framework.js"></script>
	<script type="text/javascript" src="./app.js"></script>
</body>
</html>

<?php
	$length = ob_get_length();
	header('Content-Length: '.$length."\r\n");
	header('Accept-Ranges: bytes'."\r\n");
	ob_end_flush();
?>

