<html>
    <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" text="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/styling.css">
  <title>Khulla Pathsala </title>
  <body>

<!--internal CSS start-->
  <style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
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

.card{
     width: 25%;
     display: inline-block;
     box-shadow: 2px 2px 20px black;
     border-radius: 5px; 
     margin: 4%;
    }

.image img{
  width: 100%;
  border-top-right-radius: 5px;
  border-top-left-radius: 5px;
  height: 300px;
 }

.title{
 height:60px;
 text-align: center;
 padding: 0px;
  
 }

.des{
  padding: 3px;
  text-align: center;
  padding-top: 10px;
  border-bottom-right-radius: 5px;
  border-bottom-left-radius: 5px;
}


@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
</style>
<!--internal CSS ends-->

</head>
<div class="sidebar">
  <a class="active" href="#">Course</a>
  <a href="onlinematerial.php"> Video Materials</a>
  <a href="#">E-library</a>
  <a href="carrer.php">Carrer Directory</a>
  <a href="contact.php">Feedback</a>
  <a href="logout.php">logout</a>
</div>
<div class="content">

<body>
<!--course starts-->

 <!--cards -->

<div class="card">

<div class="image">
   <img src="image/engg.jpg" class="card-img-top">
</div>
<div class="title">
<a href="https://www.sanjeevniraula.com/class-12-english-book-new-course/#" class="btn btn-primary text-white  float-right">English</a>
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="image/nepali.png" class="card-img-top">
</div>
<div class="title">
<a href="http://www.khullakitab.com/nepali/chapters/grade-12/32/notes" class="btn btn-primary text-white float-right">Nepali</a>
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="image/physics.jpg" class="card-img-top">
</div>
<div class="title">
<a href="http://www.khullakitab.com/physics/chapters/grade-12/30/notes" class="btn btn-primary text-white float-right">Physics</a>
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
<img src="image/chem.jpg" class="card-img-top">
</div>
<div class="title">
<a href="http://www.khullakitab.com/chemistry/chapters/grade-12/33/notes" class="btn btn-primary text-white  float-right">Chemistry</a>
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
<img src="image/math.jpg" class="card-img-top">
</div>
<div class="title">
 <a href="http://www.khullakitab.com/mathematics/chapters/grade-12/13/notes" class="btn btn-primary text-white  float-right">Maths</a>
</div>
</div>
<!--cards -->

<div class="card">

<div class="image">
<img src="image/comp.jpg" class="card-img-top">
</div>
<div class="title">
<a href="http://www.khullakitab.com/computer-science/chapters/grade-12/28/notes" class="btn btn-primary text-white  float-right">Computer</a>
</div>
</div>
</div>
<!--course ends-->

</body>
</html>