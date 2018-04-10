<!DOCTYPE html>
<html lang="en">
<head>
  <title>YourWealthPlanner</title>
  <meta charset="utf-8">
  <link href="images/icon.jpg" rel="Shortcut Icon" />

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link href='http://fonts.googleapis.com/css?family=Buenard:700' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
  <script src="assets/js/jquery.smooth-scroll.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
      jQuery(document).ready(function($) {
        $(".scroll").click(function(event){   
          event.preventDefault();
          $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
      });
    </script>
  <style>
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }

    .carousel-inner img {
      width: 100%; /* Set width to 100% */
      min-height: 70px;
    }

    /* Hide the carousel text when the screen is less than 600 pixels wide */
    @media (max-width: 600px) {
      .carousel-caption {
        display: none;
      }
    }
    table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
.banner-info {
    margin-top: 206px;
}

.banner-info h3{
line-height: 1.4em;
color: #fff;
font-family: 'Alegreya', serif;
font-size: 72px;
text-align: center;
}
/*-- //banner-info --*/
.bottom-grid{
position:relative;
}
/*.banner-bottom{
padding:80px 0;
background:#eee;
}*/
h3.tittle,h2.tittle{
text-align:center;
font-size:32px;
font-family: 'Alegreya', serif;
color:#0d1090;
margin-bottom:20px;
text-decoration: underline;
}
.bottom-text{
background:#fff;
padding: 52px 35px;
border-radius: 100%;
-webkit-border-radius: 100%;
-o-border-radius: 100%;
-ms-border-radius: 100%;
-moz-border-radius: 100%;
border: 2px solid transparent;
}
.bottom-text h3{
text-align:center;
font-size:20px;
font-weight:600;
color:#646464;
}
.bottom-text p{
margin-top: 14px;
text-align:center;
font-size:14px;
color:#757575;
line-height:2em;
}
.bottom-grid span{
    position: absolute;
    font-size: 27px;
    color: #646464;
    background: #c2c2c2;
    border-radius: 100%;
    padding: 20px 20px;
    top: -37px;
    text-align: center;
    left: 37%;
}
.bottom-grids {
    margin-top: 90px;
}
.bottom-grid:hover div.bottom-text{
border:2px solid #2FD828;
transition: 0.5s all;
  -webkit-transition: 0.5s all;
  -o-transition: 0.5s all;
  -moz-transition: 0.5s all;
  -ms-transition: 0.5s all;
}
.bottom-grid:hover div.bottom-text h3{
color:#2FD828;
transition: 0.5s all;
  -webkit-transition: 0.5s all;
  -o-transition: 0.5s all;
  -moz-transition: 0.5s all;
  -ms-transition: 0.5s all;
}
.bottom-grid:hover div.bottom-spa span{
background:#2FD828 !important;
color:#fff !important;
transition: 0.5s all;
  -webkit-transition: 0.5s all;
  -o-transition: 0.5s all;
  -moz-transition: 0.5s all;
  -ms-transition: 0.5s all;
}
@import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);


.box {
    border-radius: 3px;
    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    padding: 10px 25px;
    text-align: right;
    display: block;
    
}
.box-icon {
    background-color: #57a544;
    border-radius: 50%;
    display: table;
    height: 100px;
    margin: 0 auto;
    width: 100px;
    margin-top: -61px;
}
.box-icon span {
    color: #fff;
    display: table-cell;
    text-align: center;
    vertical-align: middle;
}
.info h4 {
    font-size: 26px;
    letter-spacing: 2px;
    text-transform: uppercase;
}
.info > p {
    color: #000fda;
    font-size: 16px;
    padding-top: 10px;
    text-align: justify;
}
.info > a {
    background-color: #03a9f4;
    border-radius: 2px;
    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    color: #fff;
    transition: all 0.5s ease 0s;
}
.info > a:hover {
    background-color: #0288d1;
    box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 0.16), 0 2px 5px 0 rgba(0, 0, 0, 0.12);
    color: #fff;
    transition: all 0.5s ease 0s;
}

/*.box > .icon > .info > p {
    font-family: "Roboto",sans-serif !important;
    font-size: 13px;
    color: #2609bd;
    line-height: 1.5em;
    margin: 20px;
}*/
/*=============================================================
    Authour URL: www.designbootstrap.com
    
    http://www.designbootstrap.com/

    License: MIT     
========================================================  */

/*============================================================
BACKGROUND COLORS
============================================================*/
.db-bk-color-one {
    background-color: #f55039;
}

.db-bk-color-two {
    background-color: #46A6F7;
}

.db-bk-color-three {
    background-color: #47887E;
}

.db-bk-color-six {
    background-color: #F59B24;
}
/*============================================================
PRICING STYLES
==========================================================*/
.db-padding-btm {
    padding-bottom: 50px;
}
.db-button-color-square {
    color: #fff;
    background-color: rgba(0, 0, 0, 0.50);
    border: none;
    border-radius: 0px;
    -webkit-border-radius: 0px;
    -moz-border-radius: 0px;
}

    .db-button-color-square:hover {
        color: #fff;
        background-color: rgba(0, 0, 0, 0.50);
        border: none;
    }


.db-pricing-eleven {
    margin-bottom: 30px;
    margin-top: 50px;
    text-align: center;
    box-shadow: 0 0 5px rgba(0, 0, 0, .5);
    color: #fff;
    line-height: 30px;
}

    .db-pricing-eleven ul {
        list-style: none;
        margin: 0;
        text-align: center;
        padding-left: 0px;
    }

        .db-pricing-eleven ul li {
            padding-top: 0px;
            padding-bottom: 0px;
            cursor: pointer;
        }

            .db-pricing-eleven ul li i {
                margin-right: px;
            }


    .db-pricing-eleven .price {
        background-color: rgba(0, 0, 0, 0.5);
        padding: 20px 10px 15px 10px;
        font-size: 60px;
        font-weight: 900;
        color: #FFFFFF;
    }

        .db-pricing-eleven .price small {
            color: #B8B8B8;
            display: block;
            font-size: 12px;
            margin-top: 22px;
        }

    .db-pricing-eleven .type {
        background-color: #52E89E;
        padding: 20px 10px;
        font-weight: 900;
        text-transform: uppercase;
        font-size: 30px;
    }

    .db-pricing-eleven .pricing-footer {
        padding: 0px;
    }

.db-attached > .col-lg-4,
.db-attached > .col-lg-3,
.db-attached > .col-md-4,
.db-attached > .col-md-3,
.db-attached > .col-sm-4,
.db-attached > .col-sm-3 {
    padding-left: 0;
    padding-right: 0;
}

.db-pricing-eleven.popular {
    margin-top: 10px;
}

    .db-pricing-eleven.popular .price {
        padding-top: 80px;
    }
    .jumbotron {
background: #358CCE;
color: #FFF;
border-radius: 0px;
}
.jumbotron-sm { padding-top: 24px;
padding-bottom: 24px; }
.jumbotron small {
color: #FFF;
}
.h1 small {
font-size: 24px;
}
 .copyright { min-height:40px; background-color:#000000;}
 .copyright p { text-align:left; color:#FFF; padding:10px 0; margin-bottom:0px;}
#toTop {
  display: none;
  text-decoration: none;
  position: fixed;
  bottom: 28px;
  right: 1%;
  overflow: hidden;
  z-index: 999; 
  width: 32px;
  height: 32px;
  border: none;
  text-indent: 100%;
  background: url("arr.png") no-repeat 0px 0px;
}
#toTopHover {
  width: 32px;
  height: 32px;
  display: block;
  overflow: hidden;
  float: right;
  opacity: 0;
  -moz-opacity: 0;
  filter: alpha(opacity=0);
}
/*-- //to-top --*/
.sticky-container{
   
    padding: 0px;
    margin: 0px;
    position: fixed;
    right: -60px;
    top:130px;
    width: 140px;

  }

  .sticky li{
    list-style-type: none;
    background-color: #333;
    color: #efefef;
    height: 43px;
    padding: 0px;
    margin: 0px 0px 1px 0px;
    -webkit-transition:all 0.25s ease-in-out;
    -moz-transition:all 0.25s ease-in-out;
    -o-transition:all 0.25s ease-in-out;
    transition:all 0.25s ease-in-out;
    cursor: pointer;
    filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\'/></filter></svg>#grayscale"); 
                filter: gray; 
                -webkit-filter: grayscale(100%); 

  }

  .sticky li:hover{
    margin-left: -215px;
    background-color: #8e44ad;
   /* -webkit-transform: translateX(-115px);
    -moz-transform: translateX(-115px);
    -o-transform: translateX(-115px);
    -ms-transform: translateX(-115px);
    transform:translateX(-115px);*/
    filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'1 0 0 0 0, 0 1 0 0 0, 0 0 1 0 0, 0 0 0 1 0\'/></filter></svg>#grayscale");
                -webkit-filter: grayscale(0%);
  }

  .sticky li img{
    float: left;
    margin: 5px 5px;
    margin-right: 0px;

  }

  .sticky li p{
    padding: 0px;
    margin: 0px;
    text-transform: uppercase;
    line-height: 40px;
    margin-left: 40px;

  }
  a a:hover{
    color: white;

  }
  .navbar-inverse .navbar-nav>li>a {
    color: white;
}
.head{
  font-family: 'Prompt', sans-serif;
}
  
@import url('http://fonts.googleapis.com/css?family=Lato:400,300,700,900');


@import "//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css";
@import "http://fonts.googleapis.com/css?family=Roboto:400,500";

.box > .icon { text-align: center; position: relative; }
.box > .icon > .image { position: relative; z-index: 2; margin: auto; width: 88px; height: 88px; border: 8px solid white; line-height: 88px; border-radius: 50%; background: #4466e4; vertical-align: middle; }
.box > .icon:hover > .image { background: #333; }
.box > .icon > .image > i { font-size: 36px !important; color: #fff !important; }
.box > .icon:hover > .image > i { color: white !important; }
.box > .icon > .info { margin-top: -24px; background: rgba(0, 0, 0, 0.04); border: 1px solid #e0e0e0; padding: 15px 0 10px 0; }
.box > .icon:hover > .info { background: rgba(0, 0, 0, 0.04); border-color: #e0e0e0; color: white; }
.box > .icon > .info > h3.title { font-family: "Roboto",sans-serif !important; font-size: 16px; color: #222; font-weight: 500; }
.box > .icon > .info > p { font-family: "Roboto",sans-serif !important; font-size: 13px; color:  #2609bd; line-height: 1.5em; margin: 20px;}
.box > .icon:hover > .info > h3.title, .box > .icon:hover > .info > p, .box > .icon:hover > .info > .more > a { color: #222; }
.box > .icon > .info > .more a { font-family: "Roboto",sans-serif !important; font-size: 12px; color: #222; line-height: 12px; text-transform: uppercase; text-decoration: none; }
.box > .icon:hover > .info > .more > a { color: #fff; padding: 6px 8px; background-color: #4466e4; }
.box .space { height: 30px; }

 

 /*  about us*/
 .srvices_main1 {
    overflow: hidden;
    padding: 30px 0 0;
    width: 100%;
}
.service_first {
    background: #f2efef none repeat scroll 0 0;
    border: 1px dotted #c0c0c0;
    border-radius: 0;
    padding: 20px 10px;
    width: 100%;
}
.service_first h1 {
    color: #000;
    font-family: roboto;
    font-size: 20px;
    font-weight: 400;
    margin-top: 0;
    padding: 5px 0 15px;
    text-align: center;
    text-transform: uppercase;
}
.heading {
    border-bottom: 1px solid #fcab0e;
    padding-bottom: 9px;
    position: relative;
    background-color: blue;
  text-decoration-color: white;
}
.service_first p {
    font-family: roboto;
    font-size: 14px;
    font-weight: 400;
    margin: 0;
    padding: 0 15px 15px;
    text-align: center;
}
.service_button {
    padding: 10px 0;
    width: 100%;
}
.service_button a {
    background-color: rgb(255, 102, 0);
    background-image: linear-gradient(to bottom, rgb(240, 146, 4), rgb(230, 92, 0));
    border: 1px solid;
    border-radius: 0;
    color: #fff;
    font-family: roboto;
    font-size: 16px;
    margin: 0 135px;
    padding: 5px 25px;
    text-align: center;
    text-decoration: none;
    transition: all 0.3s ease-in-out 0s;
}
.service_button a:hover {
    background: #000000 none repeat scroll 0 0;
}
.service_first:hover {
    background: #fff none repeat scroll 0 0;
    border: 1px dashed #aaa;
    cursor: auto;
    display: block;
}

table, th, td {
    border: 0.7px solid black;
    border-collapse: collapse;
}
#logo {
    float: left;
    background: url(images/l123 copys.jpg) no-repeat;
    width: 98px;
    height: 113px;
    margin-top: 60px;
}

#slogan p {
    font-size: 18px;
    color: #ed2126;
    font-weight: bold;
    text-decoration: underline;
    margin-top: 50px;
    margin-left: 90px;
}

  </style>
</head>
<body style="background-color:;">

      
<nav class="navbar navbar-inverse  navbar-fixed-top " style="background-color:#132f5f; color:white;">
  <div class="container-fluid">
    <div class="navbar-header" style="color:#fff;">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <img src="images/001.JPG" style=" height:70px;width: 400px; margin-left:-25px;">
    </div>
    <div class="collapse navbar-collapse" id="myNavbar"   ><!-- style="text-transform: uppercase;" -->
      <ul class="nav navbar-nav" style="text-transform: uppercase;">

        <li class="#home"><a href="#">Home</a></li>
        <li><a href="#aboutus">AboutUs</a></li>
        <li><a href="#why">why YourWealthPlanner</a></li>
        <li><a href="#our">Our services</a></li>
        <li><a href="#portfolio">Portfolio Services</a></li>
        <!-- <li><a href="#wealth">Wealthplanning</a></li> -->
      <!--   <li><a href="#contact">ContactUs</a></li> -->
      </ul>
     
      <ul >
      <a href="#contact"><button type="button" class="btn btn-danger " style="color:white; margin-top:5px;  "><B>TALK TO US<br>9848726226</B></button></a>
       <!--  <li><button data-toggle="modal" data-target="#login" class="btn btn-danger " style="color:white;padding:8px;margin-top:7px;margin-right:10px;">LOGIN</button></li> -->
       </ul>
    </div>
  </div>
</nav>
<!-- <header id="textlogo "  style="background-color:yellow; padding:10px; margin-top:-8px; margin-bottom:-1px;" > 
<h1 class="head"><img src="images/l123 copys.jpg" style="margin-top:  55px;margin-bottom:-45px; height:30px;width: 80px; margin-left:-15px;">BOOK YOUR WEALTHPLANNER NOW
<a href="#wealth"><button type="button" class="btn btn-danger pull-right" style="color:white;padding:8px;margin-right:40px; ">APPOINTMENT</button></a></h1>
</header> -->
<!-- <div id="header">
      <div id="toplogo">
        <div id="logo"><img align="absmiddle" src="images/l123 copys.jpg" height="111px" /></div>        
         <div id="slogan"><p>T.V.RAMANA</p> <span><br>Certified Investment Advisor(NISM) 
<br>NSE Certified Capital Markets Professional<br>
AMFI(NISM)Mutual Fund Advisor(NISM)</span> <img align="absmiddle" src="images/l123 copyss.jpg" height="80px" width="800px" style="margin-left:400px; margin-top:-50px;" /></div>  -->

      <div id="login" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header" style="background-color:#439ec9;border-top-left-radius:5px;
              border-top-right-radius:5px; ">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 style="color:#fff; text-align:center" class="modal-title">Login</h4>
                </div>
                <form class="form-horizontal" role="form" action="loginaccess.php" method="post" >
                <div class="modal-body">
                    <div class="form-group">
                    <label class="control-label col-sm-4" for="companyname">Email:</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="temnem" name="email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-4" for="tname">Password:</label>
                    <div class="col-sm-7">
                        <input type="password" class="form-control" id="temnem" name="password">
                    </div>
                  </div>
                                
                </div>
                    <div class="modal-footer">
                      <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                          <button type="submit" name="submit" class="btn btn-success">Submit</button>
                  </div>
                </div>                  
                  </div>
            </form>
            </div>
          </div>
      </div>

<div class="sticky-container" style="z-index:999;">
  <ul class="sticky">

  <li><a href="https://www.facebook.com/Yourwealthplanner-301211716926257/" target="_blank"> <img width="32" height="32" title="" alt="" src="fb1.png" /04>
  <p>Facebook</p></a>

  </li>

  <li> <a href="https://twitter.com/?lang=en"><img width="32" height="32" title="" alt="" src="tw1.png" />

  <p>Twitter</p></a>

  </li>

  <li> <a href="https://wordpress.com/"><img width="32" height="32" title="" alt="" src="wp1.png" />
        <p>WordPress</p></a>

  </li>

  <li> <a href="https://in.linkedin.com/"><img width="32" height="32" title="" alt="" src="li1.png" />

  <p>Linkedin</p></a>

  </li>
  </ul>

  </div>



<div class="row">&nbsp;</div>
<div class="container-fluid" style="margin-top:43px;">
<div class="row">
  <div class="col-sm-8">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2" ></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4" ></li>
        <li data-target="#myCarousel" data-slide-to="5"></li>
        <li data-target="#myCarousel" data-slide-to="6"></li>
        <li data-target="#myCarousel" data-slide-to="7"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="images/04.jpg" alt="Image" style="height:350px;width:1000px;">
          <div class="carousel-caption">
            
          </div>
        </div>

        

        <div class="item" >
          <img src="images/tracker.png" alt="Image" style="height:350px;width:1000px;">
          <div class="carousel-caption">
           
          </div>
        </div>

        <div class="item">
          <img src="babai.png" alt="Image" style="height:350px;width:1000px;">
          <div class="carousel-caption">

          </div>
        </div>
        <div class="item">
          <img src="images/certicationupdate 2.jpg" alt="Image" style="height:350px;width:1000px;">
          <div class="carousel-caption">

          </div>
        </div>
       
        <div class="item">
          <img src="images/06 copy22.JPG" alt="Image" style="height:350px;width:1000px;">
          <div class="carousel-caption">

          </div>
        </div>
        <div class="item">
          <img src="images/1234.png" alt="Image" style="height:350px;width:1000px;">
          <div class="carousel-caption">

          </div>
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <div class="col-sm-4">
   <iframe width="380" height="315" src="https://www.youtube.com/embed/Ss4fXlL0y-g" frameborder="0" allowfullscreen></iframe>
  </div>
  <a href="youtube.php"><button type="button" class="btn btn-danger center-block" style="text-transform: uppercase;" "><b>watch my more youtube videos</b></button></a>
</div>
</div>

<div class="container ">
<h2 class="tittle" style="margin-left:-300px;" >PERFORMANCE TRACKER</h2> 
  <div class="row" >
    <div class="col-sm-8  ">
    <table>
  <tr>
    <th>Stocks Name</th>
    <th>Recommend Date</th>
    <th>Recommend Price</th>

    <th>HighPrice</th>

    <th>% Return Given</th>

    <th>Months/ years</th>
    <th>High Price Date</th>
  </tr>
  <tr>
    <td>Nilkamal</td>
    <td>06-Dec-14</td>
    <td>Rs 346 +</td>
    <td>Rs 1600 +</td>
    <td>450% +</td>
    <td>13 months</td>

    <td>13-Jan-16</td>
  </tr>
  <tr>
    <td>KEI</td>
    <td>02-nov-14</td>
    <td>Rs 35 +</td>
    <td>Rs 128 +</td>
    <td>300% +</td>
    <td>20 months</td>

    <td>11-Jul-16</td>
  </tr>  <tr>
    <td>MASTEK</td>
    <td>04-NOV-14</td>
    <td>Rs 260(87+) </td>
    <td>Rs 1225 +</td>
    <td>300% +</td>
    <td>20 months</td>

    <td>13-Jan-16</td>
</tr>
  <tr>
    <td>MORPHENLAB</td>
    <td>07-DeAPR-15</td>
    <td>Rs 13 +</td>
    <td>Rs 41 +</td>
    <td>280% +</td>
    <td>10 months</td>

    <td>13-Jan-16</td>
</tr>
  <tr>
    <td>8K MILES</td>
    <td>27-JAN-15</td>
    <td>Rs 700 +</td>
    <td>Rs 2500 +</td>
    <td>250% +</td>
    <td>12 months</td>

    <td>13-Jan-16</td>
</tr>
  <tr>
    <td>VAKARANGE</td>
    <td>27-MAR-15</td>
    <td>Rs 90 +</td>
    <td>Rs 225 +</td>
    <td>250% +</td>
    <td>12 months</td>

    <td>13-Jan-16</td>
</tr>
<tr>
    <td>BEML</td>
    <td>02-AUG-14</td>
    <td>Rs 500-520</td>
    <td>Rs 1600 +</td>
    <td>210% +</td>
    <td>1 YR +</td>

    <td>13-Jan-16</td>
</tr>
<tr>
    <td>JETAIRWAYS</td>
    <td>07-NOV-14</td>
    <td>Rs 240 +</td>
    <td>Rs 795 +</td>
    <td>210% +</td>
    <td>14 months</td>

    <td>13-Jan-16</td>
</tr>
<tr>
    <td>KWALITY</td>
    <td>11-NOV-14</td>
    <td>Rs 50 +</td>
    <td>Rs 152 +</td>
    <td>200% +</td>
    <td>13 months</td>

    <td>13-Jan-16</td>
</tr>
<tr>
    <td>Nilkamal</td>
    <td>06-Dec-14</td>
    <td>Rs 346 +</td>
    <td>Rs 1600 +</td>
    <td>450% +</td>
    <td>13 months</td>

    <td>13-Jan-16</td>
</tr>
<tr>
    <td>KCP</td>
    <td>13-JUL-14</td>
    <td>Rs (37-40) </td>
    <td>Rs 107 +</td>
    <td>200% +</td>
    <td>2 YEARS</td>

    <td>13-Jan-16</td>
</tr>
</table>
<br>
<a href="DOWNLOADURL" class="btn btn-danger pull-right" onclick="javascript:window.location.href='images/MY PERFORMACE PRINT REPORT.xlsx'; return false;">DOWNLOAD PERFORMANCE FULL REPORT </a>



    </div>
    <div class="col-sm-4">
    <div class="well bg-clo" style="background-color: #2618a8;" >
    <div class="123" style="color:white;">
            <h4 style="text-align:center; ">
               <u>OUR SERVICES FOR</u>
            </h4>
            </div>
            <ul type="none" >
          <li>
              <div class="alert alert-danger">
                <p>
                  <i class="fa fa-caret-right"></i>
                     <b>PROFESSIONAL PERSONS
</b>                </p>
              </div>
            
          </li>
          <li>
              <div class="alert alert-danger">
                <p>
                  <i class="fa fa-caret-right"></i>
                    <b>NON-RESIDENT INDIANS
</b>                </p>
              </div>
         
          </li>
          <li>
              <div class="alert alert-danger">
                <p>
                  <i class="fa fa-caret-right"></i>
                     <b>BUSINESS PERSONS
       </b>         </p>
              </div>
           
          </li>
          <li>
              <div class="alert alert-danger">
                <p>
                  <i class="fa fa-caret-right"></i>
                     <b>HIGH NETWORTH INDIVIDUALS
    </b>            </p>
              </div>
     
          </li>
          <li>
            
              <div class="alert alert-danger">
                <p>
                  <i class="fa fa-caret-right"></i>
                    <b> CORPORATES ,FIRMS & TRUSTS</b>
                </p>
              </div>
          
          </li>
           <li>
            
              <div class="alert alert-danger">
                <p>
                  <i class="fa fa-caret-right"></i>
                    <b> HIGH PROFILE PERSONS</b>
                </p>
              </div>
          
          </li>
            </ul>
         </div>

    </div>
  </div>
  <hr>
</div>
<div id="aboutus"></div>
<div class="row">&nbsp;</div>
<div class="row">&nbsp;</div>
<div class="row">&nbsp;</div>
<div class="container"  >
    <div class="row" >
<h2 class="tittle" style="margin-bottom:-50px;">ABOUT US</h2> </BR></BR>
<div class="srvices_main1">
                            
                            
                             <div class="col-lg-4  col-md-4 col-sm-4">
                                <div class="service_first">
                                
                                <!--<img src="images/canon.png" alt=""/>-->
                                <h1 class="heading" style="color:white;">Our Vision</h1>
                                <ol type="1" style="color:#880E4F;">
                                    <li >Your Wealth Planner was founded to provide the best and the most suitable wealth Planning advisory only.</li><li> We won’t sell the other financial products or any other sales. </li><li> Our aim is to provide the best investment advisory in indian financial markets. </li><li> We works for all the Professional/NRI Persons/Business Persons/Celebrities/High Profile People/Sports Starts.</li><li>  We provide professional, experience, & dedicated CERTIFIED INVESTMENT ADVISORY services.</li><li>  We have professional CERTIFIED INVESTMENT ADVISORY Certifications from NISM-National Institute of Securities Markets) (NISM is An Education Initiative by SEBI-Securities and Exchange Board of India), NCCMP (NSE CERTIFIED CAPITAL MARKETS PROFESSIONAL), NISM (Mutual Funds Distibutors Advisory Certification (Earlier AMFI-Association of Mutual Funds in India). </li><li>We Advice for Stocks Markets, Mutual Funds Investments, Tax Saving Investments, Retirement Planning, Portfolio Management & Wealth Management Services, IPO Investing as an independent advisory with a passion into the Indian Financial Markets. </li>
                                    </ol>
                                   
                                   
                            </div>
                            </div>
                             <div class="col-lg-4  col-md-4 col-sm-4">
                                <div class="service_first">
                                
                                <!--<img src="images/canon.png" alt=""/>-->
                                <h1 class="heading" style="color:white;">Our Experience</h1>
                                <ol style="color:#880E4F;">
                                    <li>Your Wealth Planner was started by T.V.Ramana with total of 15+ years of experience with the most Number of Professional Financial Certifications
                                    CIA + NCCMP + NISM + Other Financial Certifications From NISM & NSE Institutions.</li><li>We Have Finanacial Advisory Experience  in Indian Financial Markets in stock markets Investments, Portfolio Management Services, Mutual Funds Investments, Risk Management, Wealth Management Services, Tax Saving Planning, Retirement Planning. </li><li> We are experts in picking the stocks for Short Term/Medium Term/long Term investments.</li><li>  Recommendations only from Top 500 Stocks in Indian Stock Markets.</li><li> We Recommend from Larcap, Midcap/Small Cap Stocks.</li><li>  We recommend based on Research Analysis, Technical Analysis, Fundamental Analysis, Sector Analysis, Trend Analysis, Economy Analysis, and Markets Analysis. </li><li> Good Experience in Picking the Right and the best Mutual Funds Investment Schemes among the industry. </li><li> We Recommend for Short term/Medium/Long Term goals of the Investors.  </li><li>We Recommend Advisory  Based On Individual Risk Profile.</li>
                                   </ol>
                                   
                            </div>
                            </div>
                            
                             <div class="col-lg-4  col-md-4 col-sm-4">
                                <div class="service_first">
                                
                                <!--<img src="images/canon.png" alt=""/>-->
                                <h1 class="heading" style="color:white;">Our Crediantials</h1>
                                     <ol type="1" style=" text-align: left;color:#880E4F;"><li>Certified Investment Advisory Level 1 (From NISM-National Institute of Securities Markets)</li><li>Certified Investment Advisory  Level 2  (From NISM-National Institute of Securities Markets) </li> <b>(NISM is An Education Initiative by SEBI-Securities and Exchange Board of India)</b>
 <li> Mutual Funds Investment Advisory Certification  (From NISM)(Earlier AMFI Exam)</li><li>
    National Stock Exchange Certified Capital Markets Professional Certification (NCCMP)</li><li>
    REGISTERED MEMBER IN AMFI (Association of Mutual Funds of India) </li><li>
    REGISTERED IN SEBI  (Securities and Exchange Board of India)</li><li>
    National Stock Exchange Certification in National Securities Depositories Ltd.(NSDL)</li><li>
    National Stock Exchange Certification in Surveillance & Risk Management.</li><li>
    National Stock Exchange Certification in Commodities.</li><li>
    National Stock Exchange Certification in Capital markets Dealers module.</li><li>
    National Stock Exchange Certification in Capital markets Derivatives.</li>
</ol>         
                                   
                            </div>
                            </div>
                    </div>
                    </div>
                    </div>

<!-- <div class="container">
    <div class="row" id="aboutus">
<h2 class="tittle">ABOUT US</h2> </BR></BR>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="box">
                <div class="box-icon">
                    <span class="fa fa-4x fa-html5"></span>
                </div>
                <div class="info">
                    <h4 class="text-center">Our Vision</h4>
                    <p>Your Wealth Planner was founded to provide the best and the most suitable wealth Planning advisory only. We won’t sell the other products or any other sales.  We works for all the Professional/NRI Persons/Business Persons/Celebrities/High Profile People/Sports Starts with a professional experience, dedicated & CERTIFIED INVESTMENT ADVISORY certification (From NISM-National Institute of Securities Markets) (NISM is An Education Initiative by SEBI-Securities and Exchange Board of India) in the fields of Stocks Markets, Mutual Funds Investments, Tax Saving Investments, Retirement Planning, Portfolio Management & Wealth Management Services, IPO Investing as an independent advisory with a passion into the Indian Financial Markets.  Your Wealth Planner is located in Hyderabad, Telangana, India.
</p>
                    
                </div>
            </div>
        </div>
        <br><br>
        
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="box">
                <div class="box-icon">
                    <span class="fa fa-4x fa-css3"></span>
                </div>
                <div class="info">
                    <h4 class="text-center">Our Experience</h4>
                    <p>Your Wealth Planner was started by T.V.Ramana with total of 15+ year s of experience in Financial Advisory services in Indian Financial Markets in stock markets Investments, Portfolio Management Services, Mutual Funds Investments, Risk Management, Wealth Management Services, Tax Saving Planning, Retirement Planning.   Who is expert in picking the stocks for Short/medium/long term investments from Top 500 Stocks in Indian Stock Markets from Larcap, Midcap/Small Cap Stocks with Research Analysis, Technical Analysis, Fundamental Analysis, Sector Analysis, Trend Analysis, Economy Analysis, and Markets Analysis. 
                    Good Experience in Picking the Right and the best Mutual Funds Investment Schemes among the industry for Short term/Medium/Long Term goals of the Investors.  Advising the clients for their better tax saving schemes for better returns along with the good tax saving returns. </p>
                                        
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="box">
                <div class="box-icon">
                    <span class="fa fa-4x fa-css3"></span>
                </div>
                <div class="info">
                    <h4 class="text-center">Our Crediantials</h4>
                    <ol type="1" style=" text-align: left;"><li>Certified Investment Advisory Level 1 (From NISM-National Institute of Securities Markets)</li><li>Certified Investment Advisory  Level 2  (From NISM-National Institute of Securities Markets) </li> <b>(NISM is An Education Initiative by SEBI-Securities and Exchange Board of India)</b>
 <li> Mutual Funds Investment Advisory Certification  (From NISM)</li><li>
    NSE Certified Capital Markets Professional Certification (NCCMP)</li><li>
    REGISTERED MEMBER IN AMFI (Association of Mutual Funds of India) </li><li>
    REGISTERED IN SEBI  (Securities and Exchange Board of India)</li><li>
    National Stock Exchange Certification in National Securities Depositories Ltd.</li><li>
    National Stock Exchange Certification in Surveillance & Risk Management.</li><li>
    National Stock Exchange Certification in Commodities.</li><li>
    National Stock Exchange Certification in Capital markets Dealers module.</li><li>
    National Stock Exchange Certification in Capital markets Derivatives.</li>
</ol>         
                </div>
            </div>
        </div>
  </div>
</div> -->
<div id="why"></div>
<div class="row">&nbsp;</div>
<div class="row">&nbsp;</div>
<div class="container" >
<h2 class="tittle">WHY YOUR WEALTHPLANNER ONLY</h2>
<div class="row">
<div class="col-md-12">
               <div class="well bg-info text-wrap col-md-6" >
                
                  <p>
                  <ul >
                   <div class="alert alert-danger">
                <p>
                  <i class="fa fa-caret-right"></i>
                     <b>Your Total Financial Wealth Planning Solutions only. 
    </b>            </p>
              </div>
                   <div class="alert alert-danger">
                <p>
                  <i class="fa fa-caret-right"></i>
                     <b>Advisory from <B>“CERTIFIED INVESTMENTS ADVISER” </B>Only
    </b>            </p>
              </div>
              <div class="alert alert-danger">
                <p>
                  <i class="fa fa-caret-right"></i>
                     <b>Professional,Expert,Independent Advisory with Wisdom & Vision.    </b>            </p>
              </div>
              <!-- <div class="alert alert-danger">
                <p>
                  <i class="fa fa-caret-right"></i>
                     <b>Your Personalized & Detailed WEALTH PLANNING REPORT.

    </b>            </p>
              </div> -->
              <div class="alert alert-danger">
                <p>
                  <i class="fa fa-caret-right"></i>
                     <b>SEBI Registered Investment Advisory is Under Process.
    </b>            </p>
              </div>
              <div class="alert alert-danger">
                <p>
                  <i class="fa fa-caret-right"></i>
                     <b>Say NO to Agents, Commissions, or Target Investments.

    </b>            </p>
              </div>
              <div class="alert alert-danger">
                <p>
                  <i class="fa fa-caret-right"></i>
                     <b>We serve Stocks Markets, Mutual Funds, & Financial Investments Only.    
    </b>            </p>
              </div>
              <div class="alert alert-danger">
                <p>
                  <i class="fa fa-caret-right"></i>
                     <b>We work for Professional/Business/NRI/HNI/High Profile People   
    </b>            </p>
              </div>
              <div class="alert alert-danger">
                <p>
                  <i class="fa fa-caret-right"></i>
                     <b>We Serve only 500 Clients for Portfolio Investments Management Services (Non- Discretionary only).
    </b>            </p>
              </div>
              <div class="alert alert-danger">
                <p>
                  <i class="fa fa-caret-right"></i>
                     <b>We takes Company/Corporate/Firms/Trusts/HUF/HNI Investments Accounts Also.
    </b>            </p>
              </div>
              
              </ul>
              </p>
              </div>
                    <div class="well bg-info text-wrap col-md-6" >
                  <p>
                  <ul type="none" >

                   <div class="alert alert-danger">
                <p>
                  <i class="fa fa-caret-right"></i>
                     <b>We Provide Wealth Management & Financial Investments  Advisory only.

    </b>            </p>
              </div>
              <div class="alert alert-danger">
                <p>
                  <i class="fa fa-caret-right"></i>
                     <b> We Won’t SELL/Promote any other Financial Products .  </b>            </p>
              </div>
              <div class="alert alert-danger">
                <p>
                  <i class="fa fa-caret-right"></i>
                     <b>We Advice for INVESTING Only. NO TRADING Advice.




    </b>            </p>
              </div>
              <div class="alert alert-danger">
                <p>
                  <i class="fa fa-caret-right"></i>
                     <b>All Investments In Your Own Account Only with KYC norms.

    </b>            </p>
              </div>
              <div class="alert alert-danger">
                <p>
                  <i class="fa fa-caret-right"></i>
                     <b>Make your hard-earned Money works for you in best way.

    </b>            </p>
              </div>
              <div class="alert alert-danger">
                <p>
                  <i class="fa fa-caret-right"></i>
                     <b>We works for Min 10 Lac-Max 5 Cr Portfolio Investments Accounts.
    </b>            </p>
              </div>
              <div class="alert alert-danger">
                <p>
                  <i class="fa fa-caret-right"></i>
                     <b>Say YES to Hardwork, Experience & Performance Only.
    </b>            </p>
              </div>
              <div class="alert alert-danger">
                <p>
                  <i class="fa fa-caret-right"></i>
                     <b>Get Our Expertism and Wisdom for your financial Investments.
    </b>            </p>
              </div>
               <div class="alert alert-danger">
                <p>
                  <i class="fa fa-caret-right"></i>
                     <b>Get only the BEST from Industry & Pay the Best.</B>.
    </b>            </p>
              </div>
              </ul>
              </p>          
</div>
</div>

<div id="wealth"></div>
<div class="row">&nbsp;</div>
<div class="row">&nbsp;</div>
<!-- <div class="container">
   <div class="row text-center" >
            <div class="col-md-12">
            <br/><br/>
            <h2 class="tittle" style="margin-bottom:-35px;">WEALTH PLANNING</h2>
            <br/><br/>
            </div>
    </div>        
           
  
        <div class="row db-padding-btm db-attached">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="db-wrapper">
                    <div class="db-pricing-eleven db-bk-color-one">
                        <div class="price">
                            <sup>₹</sup>999

                        </div>
                        <div class="type">
                            WEALTH PLANNING BASIC
                        </div>
                        <ul>

                            <li><i class="glyphicon glyphicon-print"></i>We just Give Wealth Planning Overview  </li><hr>
                            <li><i class="glyphicon glyphicon-time"></i>what to invest </li><hr>
                            <li><i class="glyphicon glyphicon-trash"></i>where to invest only</li>
                        </ul>
                        <div class="pricing-footer">

                            <button type="button" class="btn db-button-color-square btn-lg" data-toggle="modal" data-target="#myModal">BOOK NOW</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                 <div class="db-wrapper">
                <div class="db-pricing-eleven db-bk-color-two popular">
                    <div class="price">
                        <sup>₹</sup>1999
                        
                               
                    </div>
                    <div class="type">
                       WEALTH PLANNING ADVANCED
                    </div>
                    <ul>

                        <li><i class="glyphicon glyphicon-print"></i>We Give Wealth Planning Overview  </li><hr>
                        <li><i class="glyphicon glyphicon-time"></i>which products to invest </li><hr>
                        <li><i class="glyphicon glyphicon-trash"></i>recommends the asset allocation for investing Segments also.
</li>
                    </ul>
                    <div class="pricing-footer">

                        <button type="button" class="btn db-button-color-square btn-lg" data-toggle="modal" data-target="#myModal">BOOK NOW</button>
                    </div>
                </div>
                     </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                 <div class="db-wrapper">
                <div class="db-pricing-eleven db-bk-color-three">
                    <div class="price">
                        <sup>₹</sup>5999
                               
                    </div>
                    <div class="type">
                       WEALTH PLANNING PROFESSIONAL
                    </div>
                    <ul>

                        <li><i class="glyphicon glyphicon-print"></i>We takes care of Total Wealth Planning from Overview</li><hr>
                        <li><i class="glyphicon glyphicon-time"></i>Asset Allocations/Recommends best investment options </li><hr>
                        <li><i class="glyphicon glyphicon-trash"></i>Follow-up of the recommended investments</li>
                    </ul>
                    <div class="pricing-footer">

                        <button type="button" class="btn db-button-color-square btn-lg" data-toggle="modal" data-target="#myModal">BOOK NOW</button>
                    </div>
                </div>
                     </div>
            </div>

        </div>

    </div> -->
    </div>
    <!--  -->


  

  <!-- Modal -->

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color:#439ec9;border-top-left-radius:5px;
              border-top-right-radius:5px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="text-align:center;">Wealth Planning</h4>
        </div>
        <div class="modal-body">
          <form method='post' action="insert.php" >
  <div class="form-group">
  <label for="sel1">Select Wealth Planning</label>
  <select class="form-control" name="sel1" id="sel1">
    <option>Basic/$999</option>
    <option>Advance/$1999</option>
    <option>Professional/$5999</option>
  </select>
</div>
  <div class="form-group">
    <label for="text">Name:</label>
    <input type="text" class="form-control" name="fname" id="fname" required>
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" name="email" id="email" required>
  </div>
  <div class="form-group">
    <label for="text">Phone no.:</label>
    <input type="text" class="form-control" name="pno" id="pno" required>
  </div>
  <div class="form-group">
    <label for="text">Professional:</label>
    <input type="text" class="form-control" name="professional" id="pno" required>
  </div>
  <div class="form-group">
    <label for="text">City:</label>
    <input type="text" class="form-control" name="city" id="pno" required>
  </div>
  
  <div class="modal-footer">
                      <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                          <button type="submit" name="submit" class="btn btn-success">Submit</button>
                  </div>
                </div>                  
                  </div>
</form>
        </div>
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div> -->
      </div>
      
    </div>
  </div>
  
</div>

<div id="portfolio"></div>
<div class="row">&nbsp;</div>
<div class="row">&nbsp;</div>
<div class="banner-bottom" >
  <div class="container">
    <h2 class="tittle">PORTFOLIO SERVICES:</h2> 
    <div class="row">
        <!-- Boxes de Acoes -->
      <div class="col-xs-12 col-sm-6 col-lg-4">
      <div class="box">             
        <div class="icon">
          <div class="image"><i class="fa fa-thumbs-o-up"></i></div>
          <div class="info">
            <h3 class="title" style="text-transform: uppercase; font-weight: bold;"><U>Portfolio Analysis & Review</U></h3>
            <p>1.Portfolio Review for 10 Stocks only for Rs 2500.</p>
         <p>2.Rs 200 for additional Each stock Review and analysis in your Portfolio</p>
         <p>3.One time payment only.</p>
         <p>4.For Portfolios limits between 5-10 Lac only.</p>
         <p>5.Will consider only latest Holding Report.</p>
         <p>6.Each scrip wise detailed analysis of your portfolio.</p>
         <p>7.BUY/SELL/HOLD status recommendation of Each Stock.</p>
         <p>8.Suitable for Individual Clients only who invests for Short to Medium to Long Term Investments.</p>
         <p>9.Periodic Review of the Recommended Stocks Twice in a year.</p>
         <p>10.You can invest through US or you can invest with other services providers also.  There are no Restrictions.</p>
          <p>11.All Investments are in Your Own Account only with KYC Norms.</p>
           <p>12.WeTakes Company/Corporate/Firms/Trusts Investment Accounts Also.</p>


  
          
          </div>
        </div>
        <div class="space"></div>
      </div> 
    </div>
      
        <div class="col-xs-12 col-sm-6 col-lg-4">
      <div class="box">             
        <div class="icon">
          <div class="image"><i class="fa fa-flag"></i></div>
          <div class="info">
            <h3 class="title" style="text-transform: uppercase; font-weight: bold;"><U>Portfolio Advisory Services</U></h3>
              <p>1.Will charge only 1.5% of your Portfolio  Value on the half-yearly basis Payment.</p>
         <p>2.Total Portfolio Review of Stocks  for Portfolios limits between 5 Lac-5 Cr only</p>
         <p>3.Will consider only latest Holding Report.</p>
         <p>4.Each scrip wise detailed analysis of your portfolio recommended.</p>
         <p>5.BUY/SELL/HOLD status recommendation of Each Stock.</p>
         <p>6.We will advice you in which stocks to invest for short/Medium/Long Term based on your risk profile.</p>
         <p>7.Suitable for Individual/Business Persons/HIGH NETWORTH INDIVIDUALS/High Profile People/Firms/HUF Clients for Short to Medium to Long Term Investments.</p>
         <p>8.Periodic Reviews of the Recommended Stocks 2-4 times in a year. </p>
         <p>9.Get the customized portfolio recommendations based on your risk profile.</p>
         <p>10.Phone Support Available regarding your portfolio investments.</p>
          <p>11.All Investments are in Your Own Account only with KYC Norms.</p>
           <p>12.WeTakes Company/Corporate/Firms/Trusts Investment Accounts Also.</p>


          </div>
        </div>
        <div class="space"></div>
      </div> 
    </div>
      
        <div class="col-xs-12 col-sm-6 col-lg-4">
      <div class="box">             
        <div class="icon">
          <div class="image"><i class="fa fa-desktop"></i></div>
          <div class="info">
            <h3 class="title" style="text-transform: uppercase; font-weight: bold;"><U>Portfolio Performance Services</U></h3>
              <p>1.Will take 20% of Profits on Above 12% Returns of the Portfolio Investments on half-Yearly Basis Payments.</p>
         <p>2.Total Portfolio Review of Stocks  for Portfolios limits between 10 Lac-5 Cr only  with Non-Discritonary PMS only.</p>
         <p>3.BUY/SELL/HOLD status recommendation of Each Stock</p>
         <p>4.Suitable for Individual/Companies/Firms/HNI/Firms/HUF Clients for Short/Medium/Long Term Investments.
</p>
         <p>5.Regular Reviews of the Portfolio Recommended Stocks with Followup Also.</p>
         <p>6.Portfolio Rebalancing based on discussions with the clients.</p>
         <p>7.Get the customized portfolio recommendations based on your risk profile</p>
         <p>8.Period Review Meetings with the clients on their Portfolios with good time spending </p>
         <p>9.Phone Support Available regarding your portfolio investments.</p>
         <p>10.All Investments are in Your Own Account only with KYC Norms.</p>
           <p>11.WeTakes Company/Corporate/Firms/Trusts Investment Accounts Also.</p>

          </div>
        </div>
        <div class="space"></div>
      </div> 
    </div>        
    <!-- /Boxes de Acoes -->
  </div>
    <!-- <div class="bottom-grids">
      <div class="col-md-4 bottom-grid">
        <div class="bottom-text">
          <h3>Portfolio Analysis & Review</h3>
         <ul><li>Portfolio Review for 10 Stocks only for Rs 2500.</li>
         <li>Rs 200 for additional Each stock Review and analysis in your Portfolio</li>
         <li>One time payment</li>
         <li>For Portfolios limits of upto 10-25 Lac only.</li>
         <li>Will consider only latest Holding Report.</li>
         <li>Each scrip wise detailed analysis of your portfolio.</li>
         <li>BUY/SELL/HOLD status recommendation of Each Stock.</li>
         <li>Suitable for Individual Clients only who invests for Short to Medium Term Investments. </li>
         <li>Periodic Review of the Recommended Stocks Once in a year.</li>
         <li>You can invest through US or you can invest with other services providers also.  There are no Restrictions.
</li>

         </ul>
        </div>
        <div class="bottom-spa"><span class="glyphicon glyphicon-education" aria-hidden="true"></span></div>
      </div>
      <div class="col-md-4 bottom-grid">
        <div class="bottom-text">
          <h3>Portfolio Advisory Services</h3>
          <p>Will charge only 1.5% of your Portfolio Investments Value on the half-yearly basis payments.
           </p>
        </div>
        <div class="bottom-spa"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></div>
      </div>
      <div class="col-md-4 bottom-grid">
        <div class="bottom-text">
          <h3>Portfolio Performance Services</h3>
          <p>20% of Profits on Above 12% Returns of the Portfolio Investments on half-Yearly Basis Payments.</p>
        </div>
        <div class="bottom-spa"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></div>
      </div>
      
      <div class="clearfix"></div>
    </div> -->
  </div>
</div>

<div id="our"></div>
<div class="row">&nbsp;</div>
<div class="row">&nbsp;</div>
<div class="container text-center" >
  <h2 class="tittle" style="margin-bottom:-10px;">OUR SERVICES</h2> 
  <br>
  <div class="row">

    <div class="col-sm-3" style="border:2px solid; margin-right:1px;">
      <img src="images/india.jpg" class="img-responsive" style="width:250px;height:200px;" alt="Image">
      <H3 style="border:2px solid;" >Stock Markets Investments</H3>
      <ol  style=" text-align: left;">
  <li>Short Term Investments</li>
  <li>Medium Term Investments</li>
  <li>Long Term Investments</li>
  <li>LargeCap Stocks Investments</li>
  <li>Mid&Small Cap Stock Investments</li>
</ol>
    </div>
    <div class="col-sm-3" style="border:2px solid; margin:-1px;">
      <img src="images/2.jpg" class="img-responsive" style="width:250px;height:200px;" alt="Image">
      <h3 style="border:2px solid;">Mutual Funds Investments</h3>
      <ol  style=" text-align: left;"><li>Systematic Investment Plans (SIP)</li>
      <li>Diversified Equity Funds</li>
      <li>Largecap/Mid/Small Cap Funds</li>
      <li>Balanced Funds/ELSS Funds</li>
      <li>Fixed Maturity Plan/Debet Funds.</li>
      </ol>
    </div>
    <div class="col-sm-3" style="border:2px solid; margin:-1px;">
      <img src="images/3.jpg" class="img-responsive" style="width:250px;height:200px;" alt="Image">
      <h3 style="border:2px solid;">Wealth Management & Advisory</h3>
      <ol style=" text-align: left;">
      <li> Portfolio Management Services
      </li><li> Non-Discretionary PMS Only.</li><li>
      Portfolio Review & Analaysis</li>
      <li>
      Portfolio Advisory Services</li>
      <li>
      Portfolio Performance Services</li></ol>
    </div>

    <div class="col-sm-3" style="border:2px solid; margin:-1px;">
      <img src="images/4.jpg" class="img-responsive" style="width:250px;height:200px;" alt="Image">
      <h3 style="border:2px solid;">Tax Saving  and Investments</h3>
      <ol style=" text-align: left;">
      <li> Equity Linked Saving Scheme</li>
      <li> National Pension Scheme(NPS)</li>
      <li> Public Provident Fund(PPF)</li>
      <li> Post Office Schemes(POS)</li>
      <li> Sukanya Samrudhi Yogana(SSY)</li>
      </ol>
    </div>
    </div>
    <br>
    <div class="row">

    <div class="col-sm-3" style="border:2px solid; margin:-1px;">
      <img src="images/images.png" class="img-responsive" style="width:250px;height:200px;" alt="Image">
      <h3 style="border:2px solid;">Wealth Planning</h3>
      <ol style=" text-align: left;">
      <li> Investment Planning</li>
      <li> Tax Investment Planning</li>
      <li> Risk Management Planning</li>
      <li> Assets Allocation Planning </li>
      </ol>
      

    </div>

    <div class="col-sm-3" style="border:2px solid; margin:-1px;" >
      <img src="images/6.jpg" class="img-responsive" style="width:250px;height:200px;" alt="Image">
      <h3 style="border:2px solid;"> Retirement Planning</h3>
       <ol style=" text-align: left;">
      <li> National Pension System (NPS)</li>
      <li> Annuity Pension Planning</li>
      <li> Monthly Income Planning </li>
      <li> Health Insurance Planning</li>
      </ol>
      
    </div>

    <div class="col-sm-3" style="border:2px solid; margin:-1px;">
      <img src="images/7.jpg" class="img-responsive" style="width:250px;height:200px;" alt="Image">
      <h3 style="border:2px solid;">Technical Analysis</h3>
       <ol style=" text-align: left;">
      <li>Technical Analysis Training</li>
      <li> Minimum 10 Members per Batch </li>
      <li> Only For Experienced People</li>
      <li> LIVE Technical Analysis </li>
      </ol>
    </div>
      <div class="col-sm-3" style="border:2px solid; margin:-1px;" >
      <img src="images/8.jpg" class="img-responsive" style="width:250px;height:200px;" alt="Image">
      <h3 style="border:2px solid;">IPO Investing</h3>
      <ol style=" text-align: left;">
      <li>Initial Public Offers(IPO)</li>
      <li> Qaulity IPO ISSUES Only</li>
      <li>For New Investors Also</li>
      <li>For Existing Investors Also</li>
      </ol>
    
    </div>
  </div>
</div>
<br>
<footer style="background-color:#262d3a; color:white;" id="contact">
<div class="jumbotron jumbotron-sm" style="background-color:#262d3a;">
    <div class="container">
        <div class="row" style="margin-top:-40px;">
            <div class="col-sm-12 col-lg-12">
                <h2 class="h1">
                    CONTACT US :-  9848726226 </h2>
            </div>
        </div>
    </div>
</div>
<h3 style="margin-top:-40px; margin-left:75px;">ENQUIRY FORM:-</h3>
<div class="container" >
    <div class="row">
        <div class="col-md-5">
            <div class="well well-sm" style="color:black;">

                <form action="insert1.php" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required="required" />
                        </div>
                         <div class="form-group">
                            <label for="number">
                                Contact Number</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span>
                                </span>
                                <input type="text" class="form-control" id="number" name="contact" placeholder="Enter Contact Number" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required="required" /></div>
                        </div>
                         <div class="form-group">
                            <label for="number">
                                City</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span>
                                </span>
                                <input type="text" class="form-control" id="number" name="city" placeholder="Enter city" required="required" /></div>
                        </div>
                       
                        <button type="submit" name="submit" class="btn btn-primary pull-right " id="btnContactUs">
                            SUBMIT</button>
                    </div>
                   
               
                   
                </div>
                </form>
            </div>
        </div>
<div class="col-md-4 "><h3 style="margin-top:-40px;">LOCATE US:-</h3>

      
      <div style="height:350px;width:500px;max-width:100%;list-style:none; transition: none;overflow:hidden;">
        <div id="embed-map-display" style="height:100%; width:100%;max-width:100%;">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3807.031081194924!2d78.36923771443921!3d17.410295988064842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb940931f4d8af%3A0xb1073af2a03a198b!2sLanco+Hills+Rd%2C+Manikonda%2C+Hyderabad%2C+Telangana%2C+India!5e0!3m2!1sen!2s!4v1474618597137" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe><br><small><a href="http://www.map-generator.org/51e54685-bf53-413a-9365-403a83374dcc/large-map.aspx" target="_blank">Open large map<a/></small>
          </div>
          <a class="google-map-html" href="http://www.dog-checks.com" id="grab-map-authorization">dog-checks.com</a>
          <style>#embed-map-display .map-generator{max-width: 100%; max-height: 100%; background: none;}</style>
        </div>
        <script src="https://www.dog-checks.com/google-maps-authorization.js?id=23b52eab-976f-f6df-accd-9056862384e1&c=google-map-html&u=1469019851" defer="defer" async="async"></script>
    </div>

        <div class="col-md-3 " >
        <h3 style="margin-top:-40px;">OUR ADDRESS:-</h3>
            <form>
              <div class="box" style="background: rgba(0, 0, 0, 0.04);
    border: 1px solid #e0e0e0;">
          <span class="glyphicon glyphicon-globe" ></span> OFFICE ADDRESS:-
              
            <address>
                <strong>PLOT No:43&44</strong><br>
                Lanco Hills Road<br>
                Manikonda-500089<br>
                Hyderabad ,Telangana<br>
                <abbr title="Phone">
                    Phone:</abbr>
                9848726226
            </address>
            <address>
                <strong><U>MAIL US ON:-</U></strong><br>
                <a href="mailto:#">support@yourwealthplanner.com</a>
            </address>
            </form>
        </div>
    </div>
</div>
</footer>
<div class="copyright" id="contactus">
   <div class="container-fluid">
      <div class="col-md-12 " >
         <p style="text-align:center;">© 2016 -All rights with yourwealthplanner.com
         <a data-toggle="modal" data-target="#login">login</a></p>
      </div>
   </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
    
      var defaults = {
      containerID: 'toTop', // fading element id
      containerHoverID: 'toTopHover', // fading element hover id
      scrollSpeed: 600,
      easingType: 'linear' 
      };
                    
    $().UItoTop({ easingType: 'easeOutQuart' });
    });
  </script>
  <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</body>
</html>


    
     