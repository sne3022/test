<!DOCTYPE html>
<html>
<head>
<style>

body, html{
  height:100%;
}

*{
  box-sizing:border-box; 
  padding:0;
  margin:0;
}

a:link{
  text-decoration: none;
  color:black;
}
a:hover{
  color:black;
}

a:active{
  color:black;
}
a:visited{
  color:black;
}

li{
list-style: none;
}

.wrap{
  width:100%;
  height:100%;

}

.header{
}

.logo{
  width:100%;
}
.left_logo{
float:left;
}
.right_title{
font-size: 30px;
float:right;
}

.nav{
width:100%;
font-weight: 900;
font-size: 30px;
line-height: 50px;
clear:both;


}

.nav ul{
  width:100%;
  height:50px;
  background: gray;
}

.nav li{
  width:33.3%;
  text-align: center;
  float:left;

}

.container{
font-size: 20px;
height:100%;
}

.left_menu{
  background:#EEE;
  width:20%;
  height:100%;
  float:left;
}

.left_menu ul{

padding-left:40px;
min-height: 100%;

}

.left_menu ._title{
font-size:40px;
color:black;

}

.contents{
  float:left;
  width:80%;
}



</style>
</head>

<body>

 <div class="wrap">
  <div class="header">
   <div class="logo">
    <div class="left_logo">
     <img src="http://www.w3schools.com/images/w3schools.png">
    </div>
    
    <div class="right_title">
     THE WORLD'S LARGEST WEB DEVELOPER SITE
    </div> 
   </div> 

   <div class="nav">
    <ul>
     <li><a href="#">HTML</a></li>
     <li><a href="#">CSS</a></li>
     <li><a href="#">JAVASCRIPT</a></li>
    </ul>
   </div> <!-- nav end -->
  
  </div><!-- header end-->

  <div class="container">
   <div class="left_menu">
    <ul>
     <li class="_title">
     css tutorial
     </li>
     
     <li><a href="#">HOME</a></li>
     <li><a href="#">Introduction</a></li>
     <li><a href="#">Syntax</a></li>
     <li><a href="#">Selector</a></li>
     <li><a href="#">How to</a></li>
     
     
    </ul>
   </div>

   <div class="contents">
    <div class="banner">Banner
    </div>

    <h2 class="content_title">
    css3 opacity
    </h2>

    <div class="content_section">
     <section><p>Creating transparent images with CSS is             easy.<br/>
The CSS opacity property is a part of the CSS3 recommendation.</p>
     </section>
      
     <section>
      <div class="section_title">
      Example 1 - Creating a Transparent Image
      </div>
      
      <div class="section_contents">
      IE8 and earlier use filter:alpha(opacity=x). The x     can take a value from 0 - 100.<br/> A lower value makes the element more transparent.
      </div>
     </section>
    
     
    </div>

   </div>

    <div class="footer">
     <div class="copyright"> 
     W3Schools is optimized for learning, testing, and   training. Examples might be simplified to improve reading and basic understanding.<br/> Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content.<br/> While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy.<br/> Copyright 1999-2015 by Refsnes Data. All Rights Reserved.
     </div>
     
     <div class="footer_logo">
      <img src="http://www.w3schools.com/images/w3schoolscom_gray.gif">
     </div>
    </div>
  </div>


 
</div>
</body>
</html>
