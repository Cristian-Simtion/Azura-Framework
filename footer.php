	</div>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="app/js/cs-framework.js"></script>
	<script type="text/javascript" src="app/js/app.js"></script>
</body>
</html>

<?php
	$length = ob_get_length();
	header('Content-Length: ' . $length);
	header('Accept-Ranges: bytes');
	header('Accept-Type: text/html');
	ob_end_flush();
?>