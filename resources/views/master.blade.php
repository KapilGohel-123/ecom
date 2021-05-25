<!DOCTYPE html>
<html>
<head>
	<title>Master page</title>
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js">
	</script>
	<script src="jquery-3.5.1.slim.min"></script>

</head>
<body>
@include("header")
@yield("content")


<br><br>
@include("footer")
</body>
<style>
	.custom-login{
		height: 500px;
		padding-top: 100px;
	}
	img.img-slider{
		height: 500px | important;
	}
	.trending-img{
		height: 200px;
	}
	.trending-item{
		float: left;
		width: 25%;
	}
	.trending-wrapper{
		margin: 20px;
	}
</style>
</html>
