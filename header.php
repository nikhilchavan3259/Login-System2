<!DOCTYPE html>
<html>
<head>
<title>
AC PATIL
</title>
<link href='https://fonts.googleapis.com/css?family=Alex Brush' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Amita' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Arbutus' rel='stylesheet'>
<link rel="stylesheet" type="text/css" href="style4.css">
<link rel="stylesheet" type="text/css" href="style5.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>

body{
    margin:0px;
    padding:0px;
}

.menu{
    position: relative;
}
    
ul{
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    width: 100%;
    height: 2cm;
    padding: 50px 0;
}

li{
    float: left;
}
    
li a{
    display: block;
    padding: 10px 20px;
    text-decoration: none;
    font-weight: bold;
    color: black;
    font-size: 21px;
}
    
.home{
    color: #00E87E;
}
    
.acpatil{
    background-color: crimson;
    color: white;
    font-weight: none;
    border-radius: 8px;
    position: relative;
    left: 15%;
    line-height: 45px;
    width: 125px;
    text-align: center;
}
    
.courses:hover,.timetable:hover,.admission:hover,.railway:hover,.about:hover{
    color: #00E87E;
}
    
span{
    position: absolute;
    right:10%;
}
    
.college-gif{
    height: auto;
    width: 100%;
}
    
.image{
    position:relative;
    padding:0px;
    margin:0px;
    z-index:-1;
}
    
.centertext{
    position:absolute;
    top:50%;
    right:32%;
    text-align:center;
    font-size:30px;
    color: darkorange;
    font-weight:bold;
    font-family:"Comic Sans MS", cursive, sans-serif;
}
    
.knowledge{
    height:7cm;
    width:100%;
    font-family: 'Alex Brush';
    text-align:center;
    font-size:50px;
    font-weight:bold;
    line-height:7cm;

}
    
.ourservices{
    font-size:60px;
    font-weight:bold;
    text-align:center;
    padding:80px;
    background-color:#DCDCDC;
}
    
.services{
    float:left;
    width:33.33%;
    font-weight:none;
    font-size:30px;
     font-family: 'Amita';
}
    
.ourservices:after {
    content: "";
    display: table;
    clear: both;
}
    
.some{
    padding-bottom:150px;
    font-family: 'Arbutus';
}
    
.services img{
    width:75%;
    height:7cm;
    border-radius:12px;
}
    
.aboutus{
    width: 100%;
    height: 200px;
    font-size: 60px;
    font-weight:bold;
    text-align:center;
    background-color: #95FFB5;
    color: white;
}

.us{
    position: relative;
    top: 10%;
    text-align: center;
    font-size: 30px;
    color: white;
    
}
    
    
.media{
    position: relative;
    top: 40%; 
    left: 7%;

}
    
.fa {
    padding: 20px;
    font-size: 20px;
    width: 15px;
    border: solid 0px white;
    border-radius: 40px;
    text-align: center;
    text-decoration: none;
    margin: 5px 5px;
}
    
.fa:hover {
    opacity: 0.7;
}

    
.fa-facebook {
  background: white;
  color: black;
}

.fa-twitter {
  background: white;
  color: black;
}

.fa-google {
  background: white;
  color: black;
}

.fa-linkedin {
  background: white;
  color: black;
}

.fa-instagram {
  background: white;
  color: black;
}
    
.footermain{
    position: absolute;
    width: 100%;
    height: 350px;
    background-color: black;
}
    
.contactus{
    position: relative;
    left: 3%;
    width: 250px;
    height: 300px;
    display: inline;
    float: left;
    border: solid 3px red;
    border-left: 0;
    border-bottom: 0;
    border-top: 0;
}
    
.contactus h3{
    font-size: 25px;
    color: white;
}
    
.footerimg{
    position: relative;
    top: 5%;
    width: 350px;
    height: 300px;
    border: solid 2px rgb(255, 247, 0);
    border-top: none;
    border-left: none;
    border-bottom: none;
    display: inline;
    float: left;
}
    
.footerimg img{
    position: relative;
    left: 25%;  
    width: 150px;
}
    
.footerimg p{
    color: #FF4040;
    text-align: center;
    font-size: 20px;
}
    
.mail{
    position: relative;
    left: 1%;
    top: 5%;
    width: 400px;
    height: 300px;
    border: solid 2px rgb(255, 247, 0);
    border-top: none;
    border-left: none;
    border-bottom: none;
    display: inline;
    float: left;
    
}
    
.aboutme{
    position: relative;
    right: 2%;
    top: 5%;
    width: 520px;
    height: 300px;
    border: solid 2px rgb(255, 247, 0);
    border-top: none;
    border-left: none;
    border-bottom: none;
    display: inline;
    float: right;
    color: white;
    text-align: left;
    font-size: 25px;
    font-weight: lighter;
}

.aboutme p{
    font-size: 24px;
    color: firebrick;
}
    
.aboutme h4{
    text-align: center;
    font-size: 18px;
    color: white;
}
@media screen and (max-width:600px){
    
    li{
        float:none;
    }
    
}
    
.drop{
    position:relative;
    display:block;
}
    
.dropcontent{
    position:absolute;
    display:none;
}
    
.dropcontent a{
    text-align: center;
    font-weight: normal;
    background-color: #94CAB1  ;
    border-bottom: solid 0px;
    color: black;
}
    
.dropcontent a: last-child{
    border-bottom: none;
}
    
.drop:hover .dropcontent{
    display: block;
}
    
.dropcontent a:hover{
    color: white;
}
    
.more{
    background-color:white;
    padding:4px 18px;
    font-weight:normal;
    font-size:23px;
    border-radius:8px;
    text-decoration:none;
    color:#867979;
}
    
.more:hover{
    color:#00ffff;
}
    
.te{
    font-size:30px;
    display:none;
}
    
.acpatil:hover{
    color: black;
}
</style>
<script>
    
function myfunction1(){
    document.getElementById("te1").style.display = "block";
    document.getElementById("func1").style.display = "none";
}
    
function myfunction2(){
    document.getElementById("te2").style.display = "block";
    document.getElementById("func2").style.display = "none";
}
    
function myfunction3(){
    document.getElementById("te3").style.display = "block";
    document.getElementById("func3").style.display = "none";

}
   
function printContent(){
    var restorepage=document.body.innerHTML;
    var content=document.getElementById("toprint").innerHTML;
    document.body.innerHTML=content;
    window.print();
    document.body.innerHTML=restorepage;
}
</script>
</head>
<body>
<div class="menu">
    <ul class="navigation">
        <li><a class="acpatil" href="#ACPATIL">A.C.Patil</a></li>
            <span>
                <li><a class="home" href="#Home">HOME</a></li>
                <li>
                    <div class="drop">
                        <a class="courses" href="#Courses">COURSES</a>
                            <div class="dropcontent">
                                <a href="#">COMPUTER</a>
                                <a href="#">IT</a>
                                <a href="#">EXTC</a>
                                <a class="last" href="#">ELECTRICAL</a>
                            </div>
                    </div>
                </li>
                <li><a class="timetable" href="#Time-Tables">TIME-TABLES</a></li>
                <li><a class="admission" href="#Admission">ADMISSION</a></li>
                <li><a class="railway" href="http://localhost/Login%20System2/Loginform.php">RAILWAY CONCESSION</a></li>
                <li><a class="about" href="#About">ABOUT</a></li>
            </span>
    </ul>
</div>