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

{
  padding: 0;
  margin: 0;
  box sizing: border-box;

}

body {
  height:100vh;
  display: grid;
  align-items:center;
  background: #fff;
  font-family: "Poppins", sans-serif;
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
  margin-left: 100px;
  padding: 1px 16px;
  height: 1000px;
}
.tree 
{
  width:100%;
  height=auto;
  text-align:center;
}

  .tree ul 
  {
    padding-top:20px;
    position:relative;
    transition:.5s;
  }

.tree li{
  display:inline-table;
  text-align:center;
  list-style-type:none;
  position:relative;
  padding:10px;
  transition:.5s;
  

}
.tree li:before, .tree li:after{
  content:'';
  position:absolute;
  top:0; 
  right:50%;
  border-top: 1px solid orange;
  width:51%;height:10px;
}
.tree li:after{
  right:auto;
  left:50%;
  border-left:1px solid orange;

}
  
.tree li:only-child:after,.tree li:only-child:before {
  display: none;
  
}
.tree li:only-child{
  padding-top:0;
}
.tree li:first-child:before, .tree li:last-child:after {
  border:0 none;
}
 .tree li:last-child:before{
  border-right:1px solid orange;
  border-radius:0 5px 0 0;
  -webkit-border-radius:0 5px 0 0;
  -moz-border-radius:0 5px 0 0;
  
}
.tree li:first-child:after{
  border-radius:5px 0 0 0;
  -webkit-border-radius:5px 0 0 0;
  -moz-border-radius:5px 0 0 0;

}
.tree ul ul:before{
content:'';
position:absolute;
top:0;
left:50%;
border-left:1px solid orange;
width:0;height:20px
}
.tree li a{
  border:1px solid orange;
  padding:5px 10px;
  text-decoration:none;
  color:#666;
  font-size:14px; 
  display:inline-block;

  border-radius:5px;
 -webkit-border-radius:5px;
  -moz-border-radius:5px;


}
.tree li a:hover, .tree li a:hover+ul li a{
  background:#c8e4f8;color:#000;border:1px solid#94a0b4;
}
.tree li a:hover+ul li:after{
}
.tree li a:hover+ul li:before{
}

</Style>

<!--internal CSS ends-->

</head>
<div class="sidebar">
  <a href="course.php">Course</a>
  <a href="onlinematerial.php"> Video Materials</a>
  <a href="#">E-library</a>
  <a class="active" href="#">Carrer Directory</a>
  <a href="contact.php">Feedback</a>
  <a href="logout.php">logout</a>
</div>
<div class="content">

<body>
<div class="tree">
  <h2 center> <mark><u> Carrer Pathway After +2</u></mark><h2>
  <ul>
    <li><a href="#"><span>Science(Biology+Mathematics)</span></a>
   <ul>
       <li><a href="#"><span>Medicine(MBBS,BDS,BMLT,B Pharm,BSc MLT)</span></a></li>
      <li><a href="#"><span>Engineering(BE,B ARCH,BSc,B Tech)</span></a></li>
      <li><a href="#"><span>BBS,BBA,BCIS,BBM,BHM</span></a></li>
      <li><a href="#"><span>BA,BCA,BADS,BA LLB</span></a></li>
    </ul>
   </li>
</ul>

<ul>
    <li><a href="#"><span>Science(Biology)</span></a>
 <ul>
      <li><a href="#"><span>Medicine(MBBS,BDS,BMLT,B Pharm,BSc MLT)</span></a></li>
      <li><a href="#"><span>Engineering(BE,B ARCH,BSc,B Tech)</span></a></li>
      <li><a href="#"><span>BA,BCA,BADS,BA LLB</span></a></li>
    </ul>
   </li>
</ul>

<ul>
    <li><a href="#"><span>Science(Physical Group)</span></a>
   <ul>
      <li><a href="#"><span>Engineering(BE,B ARCH,BSc,B Tech)</span></a></li>
      <li><a href="#"><span>BBS,BBA,BCIS,BBM,BHM</span></a></li>
      <li><a href="#"><span>BA,BCA,BADS,BA LLB</span></a></li>
    </ul>
   </li>
</ul>




<ul>
    <li><a href="#"><span>Management</span></a>
   <ul>
      <li><a href="#"><span>BBS,BBA,BCIS,BBM,BHM</span></a></li>
      <li><a href="#"><span>BA,BCA,BADS,BA LLB</span></a></li>
    </ul>
   </li>
</ul>

<ul>
    <li><a href="#"><span>Humanities</span></a>
   <ul>
      <li><a href="#"><span>BA,BCA,BADS,BA LLB,BDevS,BSW</span></a></li>
    </ul>
   </li>
</ul>
</div>
</body>
</html>