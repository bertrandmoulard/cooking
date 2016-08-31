<html>
<head>
<link href="https://unpkg.com/basscss@8.0.1/css/basscss.min.css" rel="stylesheet">
<link rel="stylesheet" href="/css/application.css" />
<body>
<!-- application layout -->
<?
include __DIR__ . "/header.php";
?>
<div class="main-content">
<?
include __DIR__ . "/../$template";
?>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
<script src="/js/application.js"></script>
</body>
</html>
