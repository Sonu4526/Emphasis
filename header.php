
<link rel="stylesheet" type="text/css" href="css/style.css">
<header style="text-align: center;">

    <h1 style="font-weight: bold;">LOGO</h1>
    <p>Description</p>
</header>
<nav id="sticky_nav">
    <div class="container_left">
        <a class="home" href="#" target="blank_">
            <i class="fa fa-home"></i>
        </a>
        <button id="btnMenu" onclick="openMenu()">
            <i class="fa fa-bars"></i>
            <i class="fa fa-close"></i>
        </button>
    </div>
    <div class="container_menu" style="font-weight: bold;color: red;" id="thisMenu">
        <div class="container_list">
            <button class="btnList" onclick="openList('1')">
                <span class="drop">HOME</span>
                <i class="caret"></i>
                <span class="acc">HOME</span>
            </button>
            <div class="content_list left" id="thisList_1" style="background: rgba(0,0,0,0.9); color: white;text-align: center;">
                <p>1<br><hr> Lorem ipsum<br><hr>Lorem ipsum<br><hr>Lorem ipsum</p>
            </div>
        </div>
        <div class="container_list">
            <button class="btnList" >
                <span class="drop">ABOUT</span>
                <span class="acc">ABOUT</span>
            </button>
            <div class="content_list left" id="thisList_2" >
                
            </div>
        </div>
        <div class="container_list">
            <button class="btnList" onclick="openList('3')">
                <span class="drop">MARKET</span>
                <i class="caret"></i>
                <span class="acc">MARKET</span>
            </button>
            <div class="content_list left" id="thisList_3" style="background: rgba(0,0,0,0.8); color: white;text-align: center;">
                <p>Application<br><hr> Automotive<br><hr>Building Products<br><hr>Consumer<br><hr>Electronics</p>
            </div>
        </div>
        <div class="container_list">
            <button class="btnList" onclick="openList('4')">
                <span class="drop">SERVICES</span>
                <i class="caret"></i>
                <span class="acc">SERVICES</span>
            </button>
            <div class="content_list left" id="thisList_4" style="background: rgba(0,0,0,0.8); color: white;text-align: center;">
                <p>1<br><hr style="background-color: red"> Lorem ipsum<br><hr style="background-color: red">Lorem ipsum<br><hr style="background-color: red">Lorem ipsum</p>
            </div>
        </div>
        <div class="container_list">
            <button class="btnList" >
                <span class="drop">GALLARY</span>
                <span class="acc">GALLARY</span>
            </button>
            <div class="content_list left" id="thisList_5" >
               
            </div>
        </div>
    </div>
    <div class="container_right">
        <div class="content_search" id="thisSearch">
            <form><input type="text" placeholder="Search..."></form>
        </div>
        <button id="btnSearch" onclick="openSearch()">
            <i class="fa fa-search"></i>
            <i class="fa fa-close"></i>
        </button>
    </div>
</nav>
<div class="title" style="padding-top: 145px;">
    <?php include("foot1.php");?>
</div>
     
           

<!--This Is Not Part Of Responsive Slide Down A Sticky Navbar On Scroll-->
<a class="me" href="https://www.facebook.com" target="blank_">
    <span>Facebook Page</span>
</a>




<script>
    window.onscroll = function(){
   scrollFunction()
}
function scrollFunction(){
   var sn = document.getElementById("sticky_nav");
      if(document.body.scrollTop > 100 || document.documentElement.scrollTop > 100){
         sn.style.top = "0"
      }
      else{
         sn.style.top = "-45px"
      }
}

function openList(x){
   var cL = document.getElementsByClassName("content_list");
   var i;
      for(i = 0; i < cL.length; i++){
         var OcL = cL[i];
            if(cL[i] != document.getElementById("thisList_" + x)){
               OcL.classList.remove("show_list")
            }
      }
   document.getElementById("thisList_" + x).classList.toggle("show_list")
}

function openSearch(){
   document.getElementById("thisSearch").classList.toggle("show_search");
   document.getElementById("btnSearch").getElementsByTagName("i")[0].classList.toggle("hidden");
   document.getElementById("btnSearch").getElementsByTagName("i")[1].classList.toggle("visible")
}

function openMenu(){
   document.getElementById("thisMenu").classList.toggle("show_menu");
   document.getElementById("btnMenu").getElementsByTagName("i")[0].classList.toggle("hidden");
   document.getElementById("btnMenu").getElementsByTagName("i")[1].classList.toggle("visible")
}
</script>