<!DOCTYPE html>
<?php
  ini_set('display_errors', '1');
  ini_set('display_startup_errors', '1');
  error_reporting(E_ALL);
  
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoLstudy</title>
    <link rel="icon" href="images/logo.webp">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.js"></script>


    <style>
       *{
    margin: 0;
    box-sizing: border-box;
}

*,
*:before,
*:after {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  outline: none;
}
*::-webkit-scrollbar {
  display: none;
  height: 0;
  width: 0;
}

body{
    /*   font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif; */
    font-family: "Roboto", sans-serif;
    background: #181818;
    color: white;
    margin: 0;
}

.nav__logo{
    width: 80px;
    object-fit: contain;
}

.nav{
    position: fixed;
    top: 0;
    width: 100%;
    display: flex;
    justify-content: space-between;
    padding: 20px;
    z-index: 1;
    transition-timing-function: ease-in;
    transition: all 0.5s;
}

        .banner {
    background-image: url(/images/historylogo.webp);
    background-size: cover;
    background-position: center center;
    color: white;
    object-fit: contain;
    height: 448px;
    margin-bottom: 50px;
}

.banner__contents{
    margin-left: 30px;
    padding-top: 140px;
    height: 190px;
}

.banner__title{
    font-size: 3rem;
    font-weight: 800;
    padding-bottom: 0.3rem;
}

.banner__description{
    width: 10rem;
    line-height: 1.3;
    padding-top: 1rem;
    font-size: 1rem;
    max-width: 360px;
    height: 180px;
}

.banner__button{
    cursor: pointer;
    color: white;
    text-align: center;
    outline: none;
    border: none;
    font-weight: bold;
    font-size: 1em;
    border-radius: 1vw;
    padding-left: 3rem;
    padding-right: 3rem;
    margin-right: 1rem;
    padding-top: 0.7rem;
    padding-bottom: 0.7rem;
    background-color: rgba(51, 51, 51, 0.5);
}

.banner__button:hover, .banner__button:focus{
    color: #000;
    background-color: #e6e6e6;
    transition: all 0.2s;
}

.inv {
      display: none;
    }

.banner--fadeButtom{
    margin-top: -65px;
    /* if it interupts the user than  change the height to 5 or more */
    height: 2rem;
    background-image: linear-gradient(180deg, transparent, rgba(37,37,37,0.61), #181818);
}

::-webkit-scrollbar{
    width: 10px;
  }
  
  ::-webkit-scrollbar-track{
    border: 5px solid #283a4d;
    box-shadow: inset 0 0 15px #283a4d;
  }
  
  ::-webkit-scrollbar-thumb{
    background: linear-gradient(#eecda3, #da1e6f);
    border-radius: 50px;
  }

  *, *::after, *::before {
  box-sizing: border-box;
}

:root {
  --handle-size: 3rem;
  --img-gap: .25rem;
}

.container {
  display: flex;
  justify-content: center;
  overflow: hidden;
}

.slider {
  --items-per-screen: 4;
  --slider-index: 0;
  display: flex;
  flex-grow: 1;
  margin: 0 var(--img-gap);
  transform: translateX(calc(var(--slider-index) * -100%));
  transition: transform 250ms ease-in-out;
}

a video{
    width: 100%; 
    border-radius: 1rem;
}

a iframe{
    width: 100%;
    border-radius: 1rem;
}

.staff{
  margin-right: 10px;
}

.handle {
  border: none;
  border-radius: 1rem;
  flex-grow: 0;
  flex-shrink: 0;
  background-color: rgba(255, 255, 255, .25);
  z-index: 10;
  margin: var(--img-gap) 0;
  width: var(--handle-size);
  cursor: pointer;
  font-size: 5rem;
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  line-height: 0;
  transition: background-color 150ms ease-in-out;
}

.left-handle {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
  margin-right: auto;
}

.right-handle {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.handle:hover,
.handle:focus {
  background-color: rgba(255, 255, 255, .5);
}

.text {
  transition: transform 150ms ease-in-out;
}

.handle:hover .text,
.handle:focus .text {
  transform: scale(1.2);
}

.header {
  display: flex;
  justify-content: space-between;
  padding: .5rem calc(var(--img-gap) * 2 + var(--handle-size));
  align-items: center;
}

.title {
  font-size: 2rem;
  margin: 0;
}

.progress-bar {
  display: flex;
  gap: .25rem;
}

.progress-item {
  flex: 0 0 1.5rem;
  min-width: 1.5rem;
  height: .5rem;
  background-color: rgba(255, 255, 255, .5);
}

.progress-item.active {
  background-color: rgba(255, 255, 255, .9);
}

#fade {
  display: none;
  position: fixed;
  top: 0%;
  left: 0%;
  width: 100%;
  height: 100%;
  background-color: black;
  z-index: 1001;
  -moz-opacity: 0.8;
  opacity: .80;
  filter: alpha(opacity=80);
}

#boxclose {
  cursor: pointer;
  color: #fff;
  border: 1px solid #AEAEAE;
  border-radius: 3px;
  background: #222222;
  font-size: 31px;
  font-weight: bold;
  display: inline-block;
  line-height: 0px;
  padding: 11px 3px;
  position: absolute;
  right: 2px;
  top: 2px;
  z-index: 1002;
  opacity: 0.9;
}

#fade:hover ~ #boxclose {
  display:none;
}

.test:hover ~ .test2 {
  display: none;
}

#video-placing{
  display:inline-block;
  position: absolute;
  top: 25%;
  left: 60%;
  margin-left: -300px;
  margin-top: -180px;
  width:auto;
  height: auto;
  z-index: 1002;
  overflow: auto;
}

/* main styling */
.video-first {
  display: grid;
  place-items: center;
  height: 100vh;
  width: 100vw;
  text-align: center;
}

.video-container {
  position: relative;
  border-radius: 10px;
  height: 659px;
  width: 330px;
  box-shadow: 0 0 50px #000;
  margin: auto;
  overflow: scroll;
  scroll-snap-type: y mandatory;
  scroll-snap-align: center;
}
/* video container header */
.video-container-header {
  position: absolute;
  top: 20px;
  left: 0;
  width: 100%;
  height: 50px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  text-align: center;
  z-index: 3;
}
.video-container-header div {
  width: 100%;
  height: 100%;
  display: flex;
  font-size: 15px;
  color: #ccc;
  justify-content: center;
  align-items: center;
  cursor: pointer;
}
.video-container-header div.active {
  font-size: 20px;
  color: #fff;
}
.post {
  position: relative;
  height: 659px;
  width: 330px;
  overflow: hidden;
  scroll-snap-align: center;
}

.username-link{
  text-decoration: none;
  color: #333;
  cursor: pointer;
}

.video-player {
  position: relative;
  height: 100%;
  width: 100%;
  cursor: pointer;
}
.video-player::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1;
  height: 100%;
  width: 100%;
  box-shadow: inset 0 0 120px #000;
}
.side-bar {
  position: absolute;
  right: 0;
  top: 50%;
  z-index: 2;
  transform: translate(0, -50%);
}
.post-footer {
  position: absolute;
  width: 80%;
  bottom: 0;
  left: 0;
  padding: 10px;
  color: #fff;
  z-index: 2;
}
.post-footer a {
  color: #fff;
}
.post-footer .username {
  display: flex;
  height: 30px;
  align-items: center;
}
.post-footer .username .username-link::before {
  content: "@ ";
  color: #fff;
}
.verfied .verfied-icon,
.post-comment-user-verified {
  height: 20px;
  width: 20px;
  margin-left: 10px;
  font-size: 9px;
  border-radius: 50%;
  background-color: #008abf;
  display: grid;
  place-items: center;
}
.post-description {
  padding-left: 10px;
  font-size: 10px;
}

.side-bar .side-icon {
  cursor: pointer;
  padding: 20px;
  font-size: 25px;
  text-align: center;
  color: #fff;
}
.side-icon p {
  font-size: 10px;
  padding-top: 5px;
}
/* post comments */
.post-comments {
  position: absolute;
  bottom: -100%;
  left: 0;
  height: 50%;
  width: 100%;
  border-radius: 10px 10px 0 0;
  padding: 10px;
  background-color: #fff;
  z-index: 5;
  transition: all 0.5s ease;
}
.post-comments::before {
  content: "";
  position: absolute;
  top: 5px;
  left: 50%;
  width: 50%;
  padding: 1px;
  background-color: #333;
  border-radius: 50px;
  transform: translate(-50%);
}
.post-comments.open {
  bottom: 0;
}
.close-comment {
  color: #181818;
  position: absolute;
  top: 10px;
  right: 10px;
  cursor: pointer;
  font-size: 20px;
  font-weight: 300px;
}
.post-comments-area {
  color: #181818;
  height: 250px;
  overflow: scroll;
  margin-top: 20px;
}
.post-comment {
  margin: 10px auto;
  display: flex;
  width: 100%;
  height: 50px;
  align-items: center;
  justify-content: space-between;
  text-align: left;
}
.post-comment-user-name {
  display: flex;
}
.post-comment-user-img {
  overflow: hidden;
  border-radius: 50%;
  height: 40px;
  width: 40px;
}
.post-comment-user-verified {
  width: 15px;
  height: 15px;
  font-size: 10px;
}
.post-comment-user-msg {
  font-size: 14px;
}
.post-comment-like-btn {
  text-align: center;
  cursor: pointer;
}
.post-comment-like-btn p {
  font-size: 10px;
}
.post-comment-like-btn .post-comment-like-icon.liked {
  color: #ff2828;
}
.post-comment-content {
  display: flex;
  flex-direction: column;
  padding-left: 20px;
  justify-content: center;
  width: 100%;
}
.post-comment-input {
  display: flex;
  height: 50px;
  width: 100%;
  align-items: center;
  justify-content: flex-start;
}
.post-comment-text {
  height: 40px;
  width: 100%;
  border: 0;
  padding: 10px 20px;
}
.post-comment-send {
  height: 40px;
  width: 40px;
  border: 0;
  background-color: transparent;
  cursor: pointer;
}
video.post-video {
  height: 100%;
  width: 100%;
  object-fit: cover;
}

iframe.post-video {
  height: 100%;
  width: 100%;
  object-fit: cover;
}


@media (max-width: 1000px) {
  .slider {
    --items-per-screen: 3;
  }
}

@media (max-width: 425px) {
  .title{
    font-size: 1.5rem;
  }

  .text{
    height: 15px;
  }

  .slider {
    --items-per-screen: 2;
  }

  .post{
    width: 254px;
  }

  .video-container{
    width: 264px;
  }

  .video-first{
    left: 105%;
  }

  #video-placing {
    top: 30%;
    left: 100%;
  }

  .video-player {
  width: 247px;
  height: 640px;
}

.video-player video{
  border-radius: 10px;
}

.video-player iframe{
  border-radius: 10px;
}

.post-comments.open {
  width: 270px;
}

.post-footer{
  position: absolute;
  top: 85%;
  width: 85%;
}

.side-bar{
  position: absolute;
}
}

@keyframes gradient {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}

@keyframes disc-anime {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

    </style>
</head>
<body>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <div class="nav" id="nav">
        <a href="index.html"><img src="/images/logo.webp" alt="" class="nav__logo"></a>
      </div>
    
              <!--header-->
              <div class="banner">
                <div class="banner__contents">
                    <h1>history video page</h1>
                    <div class="banner__description">
                    <p><b>Did you know?</b>
                      Ketchup Was Sold in the 1830s as Medicine
                    </p>
                  </div>
            
                  </div>
                </div>
                <div class="banner--fadeButtom"></div>
              </div>

              <div class="video-first" id="video-placing">
                <div class="video-container">
                  <div class="post">
                    <div class="video-player">
                      <video autoplay="" loop="" class="post-video" id="video">
                      </video>

              
                      
                    </div>
                    <div class="side-bar">
              
                      <div class="side-icon like-btn">
                        <i class="fa fa-heart-o like-icon"></i>
                        <p class="like-number">0</p>
                      </div>
              
                      <div class="side-icon comment-btn">
                        <i class="fa fa-comment comment-icon"></i>
                        <p class="comment-number">0</p>
                      </div>
              
                      <div class="side-icon share-btn">
                        <i class="fa fa-share share-icon"></i>
                        <p class="share-number">0</p>
                      </div>
              
                    </div>
                    <div class="post-comments ">
                      <span class="close-comment">&times;</span>
                      <div class="post-comments-area">
                        <div class="post-comment">
                          <div class="post-comment-user">
                            <img src="https://assets.codepen.io/2483051/internal/avatars/users/default.png?fit=crop&format=auto&height=80&version=1636466200&width=80" class="post-comment-user-img">
                          </div>
                          <div class="post-comment-content">
                            <div class="post-comment-user-name verfied">
                              <a href="https://instagram.com/sahilverma.dev">sahilverma.dev</a>
                              <i class="fa fa-check post-comment-user-verified"></i>
                            </div>
                            <div class="post-comment-user-msg">
                              Follow me on instagram
                            </div>
                          </div>
                          <div class="post-comment-like-btn">
                            <i class="fa fa-heart-o post-comment-like-icon"></i>
                            <p class="post-comment-like-number">9</p>
                          </div>
                        </div>
                      </div>
                      <div class="post-comment-input">
                        <input type="text" name="" class="post-comment-text" placeholder="Enter somethings good...." />
                        <button class="post-comment-send"><i class="fa fa-send send-btn"></i></button>
                      </div>
                    </div>
                    <div class="post-footer">
                      <div class="username verfied">
                        <a href="https://www.instagram.com/yonatansaid123/" class="username-link">Yonatan Said</a>
                        <i class="fa fa-check verfied-icon"></i>
                      </div>
                      <p class="post-description">
                        אם אי פעם תהיתם כיצד האינפלציה השפיעה על האזרח הקטן לאחר מלחמת העולם הראשונה אז הסרטון הזה הוא בשבילכם.
                      </p>
              
                    </div>
                  </div>
              
                </div>
              </div>

              
              

              <div id="fade" onClick="lightbox_close();"></div>




                       <!--Top Rated videos-->
              <!--להוריד מפה את הסרטונים ולשים כריכות של ספרים בתוך לינק שיובל לדף של בחירת תוכן עיניינים-->
              <!--אחר כך להוסיף דף של הסרטונים ולעשות פופאפ לכל סרטון בעת לחיצה -רמז קטן, זה קשור לג'אבא סקריפט-->
              <div id="page 10" class="inv">
                  <div class="row">
                    <div class="header">
                        <h3 class="title">page 10</h3>
                        <div class="progress-bar"></div>
                      </div>
                      <div class="container">
                        <button class="handle left-handle">
                          <div class="text">&#8249;</div>
                        </button>
                        <div class="slider" id="slider">

                          

                          <?php 
                            if (!function_exists('str_contains')) {
                            function str_contains(string $haystack, string $needle): bool
                            {
                                return '' === $needle || false !== strpos($haystack, $needle);
                            }
                            }
                            $path = "videos/history/grade_11/page_10/";
                            
                            if ($handle = opendir($path)) {
                              while (false !== ($file = readdir($handle))) {
                                  
                                  if ('.' === $file) continue;
                                  if ('..' === $file) continue;
                                  if (str_contains($file, ".png")) continue;
                                  $text = "";
                                  $posterlink = $path.$file;
                                  echo "
                                  
                                  <a href=\"#\" onclick=\"lightbox_open('11', '10', '".$file."');\" class=\"staff\">
                                    <video playsInline autoplay muted=\"true\" loop=\"true\" height=\"240px\">
                                      <source src=\"".$posterlink."\">
                                    </video>
                                  </a>
                                  ";
                                  
                              }
                              closedir($handle);
                            }
                          ?>

                         </div>
                        <button class="handle right-handle">
                          <div class="text">&#8250;</div>
                        </button>
                      </div>
                  </div>
              </div>




              <div id="page 13" class="inv">
                <div class="row">
                  <div class="header">
                      <h3 class="title">page 13</h3>
                      <div class="progress-bar"></div>
                    </div>
                    <div class="container">
                      <button class="handle left-handle">
                        <div class="text">&#8249;</div>
                      </button>
                      <div class="slider">
                        <img src="https://via.placeholder.com/210/00FF00?text=1">
                        <img src="https://via.placeholder.com/220/00FF00?text=2">
                        <img src="https://via.placeholder.com/230/00FF00?text=3">
                        <img src="https://via.placeholder.com/240/00FF00?text=4">
                        <img src="https://via.placeholder.com/250/00FF00?text=5">
                        <img src="https://via.placeholder.com/260/00FF00?text=6">
                        <img src="https://via.placeholder.com/270/00FF00?text=7">
                        <img src="https://via.placeholder.com/280/00FF00?text=8">
                        <img src="https://via.placeholder.com/250/00FF00?text=9">
                        <img src="https://via.placeholder.com/260/00FF00?text=10">
                        <img src="https://via.placeholder.com/270/00FF00?text=11">
                        <img src="https://via.placeholder.com/280/00FF00?text=12">
                      </div>
                      <button class="handle right-handle">
                        <div class="text">&#8250;</div>
                      </button>
                    </div>
                </div>
            </div>





            <div id="page 14" class="inv">
                <div class="row">
                  <div class="header">
                      <h3 class="title">page 14</h3>
                      <div class="progress-bar"></div>
                    </div>
                    <div class="container">
                      <button class="handle left-handle">
                        <div class="text">&#8249;</div>
                      </button>
                      <div class="slider">
                        <img src="/images/historylogo.webp">
                        <img src="/images/biologylogo.webp">
                        <img src="/images/englishlogo.webp">
                        <img src="/images/mathlogo.webp">
                        <img src="https://via.placeholder.com/250/00FF00?text=5">
                        <img src="https://via.placeholder.com/260/00FF00?text=6">
                        <img src="https://via.placeholder.com/270/00FF00?text=7">
                        <img src="https://via.placeholder.com/280/00FF00?text=8">
                        <img src="https://via.placeholder.com/250/00FF00?text=9">
                        <img src="https://via.placeholder.com/260/00FF00?text=10">
                        <img src="https://via.placeholder.com/270/00FF00?text=11">
                        <img src="https://via.placeholder.com/280/00FF00?text=12">
                      </div>
                      <button class="handle right-handle">
                        <div class="text">&#8250;</div>
                      </button>
                    </div>
                </div>
            </div>


    <script>
 var page = localStorage.getItem("Pages");
if (localStorage.getItem("Pages") == "page 10"){
    //Tommorow you need to create call an id of page 10 in which will contain all the videos made for this page. 
    var callpage7 = document.getElementById('page 10');
    var checkifhidden = callpage7.style.display;

    if (checkifhidden == 'block'){
      callpage7.style.display = 'none';
    }
    
    else {
      callpage7.style.display = 'block'; 
}

    }


if (localStorage.getItem("Pages") == "page 13"){
    //Tommorow you need to create call an id of page 13 in which will contain all the videos made for this page. 
    var callpage7 = document.getElementById('page 10');
    var checkifhidden = callpage7.style.display;

    if (checkifhidden == 'block'){
      callpage7.style.display = 'none';
    }
    
    else {
      callpage7.style.display = 'block';
    }
}

if (localStorage.getItem("Pages") == "page 14"){
    //Tommorow you need to create call an id of page 14 in which will contain all the videos made for this page. 
    var callpage7 = document.getElementById('page 10');
    var checkifhidden = callpage7.style.display;

    if (checkifhidden == 'block'){
      callpage7.style.display = 'none';
    }
    
    else {
      callpage7.style.display = 'block';
    }
}


document.addEventListener("click", e => {
let handle
if (e.target.matches(".handle")) {
handle = e.target
} else {
handle = e.target.closest(".handle")
}
if (handle != null) onHandleClick(handle)
})

const throttleProgressBar = throttle(() => {
document.querySelectorAll(".progress-bar").forEach(calculateProgressBar)
}, 250)
window.addEventListener("resize", throttleProgressBar)

document.querySelectorAll(".progress-bar").forEach(calculateProgressBar)

function calculateProgressBar(progressBar) {
progressBar.innerHTML = ""
const slider = progressBar.closest(".row").querySelector(".slider")
const itemCount = slider.children.length
const itemsPerScreen = parseInt(
getComputedStyle(slider).getPropertyValue("--items-per-screen")
)
let sliderIndex = parseInt(
getComputedStyle(slider).getPropertyValue("--slider-index")
)
const progressBarItemCount = Math.ceil(itemCount / itemsPerScreen)

if (sliderIndex >= progressBarItemCount) {
slider.style.setProperty("--slider-index", progressBarItemCount - 1)
sliderIndex = progressBarItemCount - 1
}

for (let i = 0; i < progressBarItemCount; i++) {
const barItem = document.createElement("div")
barItem.classList.add("progress-item")
if (i === sliderIndex) {
barItem.classList.add("active")
}
progressBar.append(barItem)
}
}

function onHandleClick(handle) {
const progressBar = handle.closest(".row").querySelector(".progress-bar")
const slider = handle.closest(".container").querySelector(".slider")
const sliderIndex = parseInt(
getComputedStyle(slider).getPropertyValue("--slider-index")
)
const progressBarItemCount = progressBar.children.length
if (handle.classList.contains("left-handle")) {
if (sliderIndex - 1 < 0) {
slider.style.setProperty("--slider-index", progressBarItemCount - 1)
progressBar.children[sliderIndex].classList.remove("active")
progressBar.children[progressBarItemCount - 1].classList.add("active")
} else {
slider.style.setProperty("--slider-index", sliderIndex - 1)
progressBar.children[sliderIndex].classList.remove("active")
progressBar.children[sliderIndex - 1].classList.add("active")
}
}

if (handle.classList.contains("right-handle")) {
if (sliderIndex + 1 >= progressBarItemCount) {
slider.style.setProperty("--slider-index", 0)
progressBar.children[sliderIndex].classList.remove("active")
progressBar.children[0].classList.add("active")
} else {
slider.style.setProperty("--slider-index", sliderIndex + 1)
progressBar.children[sliderIndex].classList.remove("active")
progressBar.children[sliderIndex + 1].classList.add("active")
}
}
}

function throttle(cb, delay = 1000) {
let shouldWait = false
let waitingArgs
const timeoutFunc = () => {
if (waitingArgs == null) {
shouldWait = false
} else {
cb(...waitingArgs)
waitingArgs = null
setTimeout(timeoutFunc, delay)
}
}

return (...args) => {
if (shouldWait) {
waitingArgs = args
return
}

cb(...args)
shouldWait = true
setTimeout(timeoutFunc, delay)
}
}

window.document.onkeydown = function(e) {
if (!e) {
e = event;
}
if (e.keyCode == 27) {
lightbox_close();
}
}

function lightbox_open(grade,page,src) {
var lightBoxVideo = document.getElementById("video");

lightBoxVideo.src = 'videos/history/grade_' + grade + "/page_" + page + "/" + src;
window.scrollTo(0, 0);
document.getElementById('video-placing').style.display = 'block';
document.getElementById('fade').style.display = 'block';
lightBoxVideo.play();
}

function lightbox_open2(src) {
var lightBoxVideo = document.getElementById("video");

lightBoxVideo.src = `https://firebasestorage.googleapis.com/v0/b/sec-attempt.appspot.com/o/${src}`;
window.scrollTo(0, 0);
document.getElementById('video-placing').style.display = 'block';
document.getElementById('fade').style.display = 'block';
lightBoxVideo.play();
}


function lightbox_close() {
var lightBoxVideo = document.getElementById("video");
document.getElementById('video-placing').style.display = 'none';
document.getElementById('fade').style.display = 'none';
lightBoxVideo.pause();
}

if (lightbox_close() == true){
document.getElementById("video").pause();
}


const postVideo = document.querySelectorAll(".post-video");
const videoPlayer = document.querySelectorAll(".video-player");
const post = document.querySelectorAll(".post");
let isPlaying = true;

postVideo.forEach((item, index) => {
item.loop = true;
item.autoBuffer = true;
});

function playVideo(index) {
postVideo[index].play();
isPlaying = true;
}

function pauseVideo(index) {
postVideo[index].pause();
isPlaying = false;
}

// like button
const likeBtn = document.querySelectorAll(".like-btn");
const likeBtnIcon = document.querySelectorAll(".like-icon");
const likeBtnNum = document.querySelectorAll(".like-number");
let isLiked = false;

likeBtn.forEach((item, index) => {
likeBtn[index].addEventListener("click", function () {
//changing like Number
let likeNum = Math.floor(likeBtnNum[index].innerText);
// change like button
isLiked ? unLikePost(index, likeNum) : likePost(index, likeNum);
});
});

function likePost(index, likeNum) {
isLiked = true;
likeBtnIcon[index].classList.replace("fa-heart-o", "fa-heart");
likeBtnNum[index].innerText = likeNum + 1;
}

function unLikePost(index, likeNum) {
isLiked = false;
likeBtnIcon[index].classList.replace("fa-heart", "fa-heart-o");
likeBtnNum[index].innerText = likeNum - 1;
}

// post comment box
const postComments = document.querySelectorAll(".post-comments");
const commentBtn = document.querySelectorAll(".comment-btn");
const commentClose = document.querySelectorAll(".close-comment");

postComments.forEach((item, index) => {
commentBtn[index].addEventListener("click", function () {
postComments[index].classList.add("open");
});

commentClose[index].addEventListener("click", function () {
postComments[index].classList.remove("open");
});
});

//add coments to post

const postCommentSendBtn = document.querySelectorAll(".send-btn");
const postCommentText = document.querySelectorAll(".post-comment-text");
const postCommentArea = document.querySelectorAll(".post-comments-area");

postCommentSendBtn.forEach((item, index) => {
if (postCommentText[index].value == "") {
window.addEventListener("keydown", (evnt) => {
if (evnt.keyCode == 13) submitComment();
});
}
postCommentSendBtn[index].addEventListener("click", function () {
if (postCommentText[index].value != "") {
const postComment = document.createElement("div");
const postCommentUser = document.createElement("div");
const postCommentContent = document.createElement("div");
const postCommentLikeBtn = document.createElement("div");

// postCommentUser
//adding class to postCommentUser
postCommentUser.setAttribute("class", "post-comment-user");
postCommentUser.classList.add("verified");
//creating child elements to postCommentUser
const postCommentUserImg = document.createElement("img");
postCommentUserImg.setAttribute("class", "post-comment-user-img");
postCommentUserImg.setAttribute(
"src",
"http://dankmemeryt.000webhostapp.com/wp-content/uploads/2020/12/logo.webp"
);
//appending to postCommentUser
postCommentUser.appendChild(postCommentUserImg);

//postCommentContent
// adding class to postCommentContent
postCommentContent.setAttribute("class", "post-comment-content");
//creating child elements to postCommentContent
const postCommentUserName = document.createElement("div");
const postCommentUserMsg = document.createElement("div");
postCommentUserName.setAttribute("class", "post-comment-user-name");
postCommentUserName.classList.add("verified");
postCommentUserName.innerHTML = "<a href='#'>theviralboy.ig</a>";
if (postCommentUserName == "verified") {
const postCommentUserVerifiedIcon = document.createElement(i);
postCommentUserVerifiedIcon.setAttribute(
  "class",
  "fa fa-check post-comment-user-verified"
);

postCommentUserName.appendChild(postCommentUserVerifiedIcon);
}
postCommentUserMsg.setAttribute("class", "post-comment-user-msg");
postCommentUserMsg.innerText = postCommentText[index].value;

//appending to postCommentContent
postCommentContent.appendChild(postCommentUserName);
postCommentContent.appendChild(postCommentUserMsg);

//postCommentLikeBtn
postCommentLikeBtn.setAttribute("class", "post-comment-like-btn");

const postCommentLikeBtnIcon = document.createElement("i");
postCommentLikeBtnIcon.setAttribute(
"class",
"fa fa-heart-o post-comment-like-icon"
);
const postCommentLikeNum = document.createElement("p");
postCommentLikeNum.setAttribute("class", "post-comment-like-number");
postCommentLikeNum.innerText = 9;

//appending elements to postCommentLikeBtn
postCommentLikeBtn.appendChild(postCommentLikeBtnIcon);
postCommentLikeBtn.appendChild(postCommentLikeNum);

postComment.setAttribute("class", "post-comment");

postComment.appendChild(postCommentUser);
postComment.appendChild(postCommentContent);
postComment.appendChild(postCommentLikeBtn);
//appending comment into post comment
postCommentArea[index].appendChild(postComment);

//blanking out postCommentText
postCommentText[index].value = "";
}
});
});

// post comments like
const postCommentLikeBtn = document.querySelectorAll(".post-comment-like-btn");
const postCommentLikeIcon = document.querySelectorAll(
".post-comment-like-icon"
);
const postCommentLikeNum = document.querySelectorAll(
".post-comment-like-number"
);
let isPostCommentLiked = false;

postCommentLikeBtn.forEach((item, index) => {
postCommentLikeBtn[index].addEventListener("click", function () {
let num = Math.floor(postCommentLikeNum[index].innerText);
isPostCommentLiked
? unLikePostComment(index, num)
: likePostComment(index, num);
});
});

function likePostComment(index, num) {
isPostCommentLiked = true;
num += 1;
postCommentLikeIcon[index].classList.replace("fa-heart-o", "fa-heart");
postCommentLikeIcon[index].classList.add("liked");
postCommentLikeNum[index].innerText = num;
}

function unLikePostComment(index, num) {
isPostCommentLiked = false;
num -= 1;
postCommentLikeIcon[index].classList.replace("fa-heart", "fa-heart-o");
postCommentLikeIcon[index].classList.remove("liked");
postCommentLikeNum[index].innerText = num;
}

    </script>
</body>
</html>