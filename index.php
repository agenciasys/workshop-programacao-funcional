<?php
	require 'base.php';
?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="language" content="pt">
</head>
<body>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
	<script>
		(function(w) {
			w.teams = w.JSON.parse('<?= json_encode($teams); ?>');
			w.players = w.JSON.parse('<?= json_encode($players); ?>');
		}(window));
	</script>
	<script src="main.js"></script>
</body>
