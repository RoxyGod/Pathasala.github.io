<html>
    <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" text="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/innerstyle.css">
  <title>Khulla Pathsala </title>
  <body>

<!--internal CSS start-->
  <style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
  background-color: skyblue;
  background-attachment: fixed;
  background-size: 100% 100%;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: orange;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}
.fixed-content {
    top: 0;
    bottom:0;
    position:fixed;
    overflow-y:hidden;
    overflow-x:hidden;
}
.container{
	position: relative;
	width: 100%;
	height: 100%;
	display: flex;
	justify-content: center;
	align-items: center;
	padding: 80px 100px;

}

.container:after{
	position: absolute;
	width: 100%;
	height: 100%;
	background: url("image/map.jpg") no-repeat center;
	background-size: cover;
	z-index: -1;
}
.contact-box{
	max-width: 980px;
}
  .container:after{
	position: absolute;
	width: 100%;
	height: 100%;
	background: url("image/map.jpg") no-repeat center;
	background-size: cover;
	z-index: -1;
}
.contact-box{
	max-width: 980px;
	display: grid;
	justify-content: center;
	align-items: center;
	text-align: center;
	box-shadow: 0px 0px 19px 5px rgba(0,0,0,0.19);

}

.left{
	background: url("image/map.jpg") no-repeat center;
	background-size: cover;
	height: 100%;
}

.right{
	display: grid;
	justify-content: center;
	align-items: center;
	text-align: center;
	background-color:#ffff;
	box-shadow: 0px 0px 19px 5px rgba(0,0,0,0.19);
}

.left{
	background: url("image/map.jpg") no-repeat center;
	background-size: cover;
	height: 100%;
}

.right{
	padding: 50px 100px;
}


</style>
<!--internal CSS ends-->

</head>
<div class="sidebar">
  <a href="course.php">Course</a>
  <a href="onlinematerial.php"> Video Materials</a>
  <a href="#">E-library</a>
  <a href="carrer.php">Carrer Directory</a>
  <a class="active" href="contact.php">Feedback</a>

  
  <a href="logout.php">logout</a>
</div>
<div class="content">

<body>
<div class="fixed-content">
	<div class="container">
		<div class="contact-box">
			<div class="left"></div>
			<div class="right">
				<h2>Contact Us</h2>
				<input type="text" class="field" placeholder="Enter Name">
				<input type="text" class="field" placeholder="Enter Email">
				<input type="text" class="field" placeholder="Phone number">
				<textarea placeholder="Message" class="field"></textarea>
				<button class="btn">Send</button>
			</div>
		</div>
	</div>
</div>
</body>
</html