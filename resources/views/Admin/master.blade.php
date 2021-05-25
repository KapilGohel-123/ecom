<!DOCTYPE html>
<html>
<head>
	<title>Admin master</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>

</head>
<body>
@include('Admin.header')

@yield("Admin.content")


<br><br>
@include("Admin.footer")

</body>
</html>