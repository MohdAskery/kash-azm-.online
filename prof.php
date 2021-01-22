<!DOCTYPE html>
<!-- Created By CodingNepal -->
  <head>
    <meta charset="utf-8">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <!-- <title>Animated Profile Card | CodingNepal</title> -->
    <style type="text/css">
      @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  font-family: 'Poppins', sans-serif;
}
html,body{
  display: grid;
  height: 100%;
  place-items: center;
  text-align: center;
  background: #f2f2f2;
}
.container{
  position: relative;
  height: 500px;
  width: 400px;
  overflow: hidden;
  background: #fff;
  box-shadow: 0px 1px 5px 0px rgba(0,0,0,0.3);
  transition: 0.3s ease-out;
}
.container:hover{
  box-shadow: 0px 1px 35px 0px rgba(0,0,0,0.3);
}
.container .image{
  background: #000;
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  z-index: 2;
  transition: transform 0.3s ease-out;
}
.container:hover .image{
  transform: translateY(-100px);
}
.image img{
  height: 100%;
  width: 100%;
  object-fit: cover;
  transition: opacity 0.3s ease-out;
}
.container:hover .image img{
  opacity: 0.7;
}
.container:hover .image{
 transform: translateY(-100px);
}
.container ul{
  display: flex;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 3;
  list-style: none;
}
ul li{
  margin: 0 5px;
}
ul li a{
  display: block;
  height: 50px;
  width: 50px;
  color: #000;
  line-height: 50px;
  font-size: 20px;
  border-radius: 50%;
  opacity: 0;
  transform: translateY(200px);
  background: #fff;
  transition: transform 0.3s ease-out, opacity 0.3s ease-out;
}
.container:hover > ul > li > a{
  opacity: 1;
  transform: translateY(0);
}
.container:hover > ul > li:nth-child(2) a{
  transition-delay: 0.1s;
}
.container:hover > ul > li:nth-child(3) a{
  transition-delay: 0.2s;
}
.container:hover > ul > li:nth-child(4) a{
  transition-delay: 0.3s;
}
.container:hover > ul > li:nth-child(5) a{
  transition-delay: 0.4s;
}
.container .content{
  position: relative;
  width: 100%;
  height: 100%;
  background: #fff;
}
.info{
  position: absolute;
  bottom: 20px;
  text-align: center;
  width: 100%;
  color: #000;
  line-height: 26px;
}
.info h2{
  font-size: 27px;
  margin: 3px 0;
}
.info span{
  color: #1a1a1a;
}

    </style>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="image">
        <img src="imgf/dev.jpg">
      </div>
<div class="content">
        <div class="info">
          <h2>
Askery Mehdi</h2>
<span>Developer</span>
        </div>
</div>
<ul>
<li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
<li><a href="#"><span class="fab fa-twitter"></span></a></li>
<li><a href="#"><span class="fab fa-instagram"></span></a></li>
<li><a href="#"><span class="fab fa-github"></span></a></li>
<li><a href="#"><span class="fab fa-youtube"></span></a></li>
</ul>
</div>
</body>
</html>
