<?php
     include('src/header.php');
     ?>
     
    <!-- /header -->
             <style>
                 .meta {
    font-family: Helvetica,Arial,open-sans;
    font-size: .8571rem;
    font-weight: 600;
    color: #0093e0!important;
}



@media (max-width: 991px) {
  .announcements h2 {
    border-bottom: none;
  }
}

@media (max-width: 991px) {
  .announcements h2.events-heading {
    padding-left: 15px;
    margin-top: 20px;
  }
}

.announcements .slick-slider ul {
  font-family: "Open Sans Condensed", Arial, Verdana, sans-serif;
}

.announcements .slick-slider ul li:last-child {
  border-bottom: none;
  margin-bottom:65px;
}

.announcements .slick-slider ul li h3:hover a {
  color: #7d3793;
  text-decoration: underline;
}

.announcements .slick-slider ul p {
  font-size: 1.2rem;
  font-family: "Helvetica Neue", Helvetica, Arial, open-sans;
}

.announcements .slick-slider .all {
  color: #0093e0!important;
  font-family: "Helvetica Neue", Helvetica, Arial, open-sans;
}

.announcements .slick-slider .all:hover {
  border-bottom: none;
}

.announcements .slick-slider .all .fa-caret-right {
  padding-left: 6px;
  position: relative;
}

.announcements .slick-slider .all .fa-caret-right:after {
  content: '';
  position: absolute;
  width: 100%;
  height: 6px;
  bottom: -4px;
  right: 0;
  background-color: #fff;
}

.announcements .left-right-arrows button:first-child {
  margin-right: 3px;
}

@media (max-width: 991px) {
  .announcements {
    margin: 0 auto;
    width: 70%;
  }
}

@media (max-width: 767px) {
  .announcements {
    width: 80%;
  }
}

@media (max-width: 500px) {
  .announcements {
    width: 100%;
  }
}

a {
  //color: #0093e0!important;
    transition: all,.4s,ease;
}

             </style>
        <section>
                
            <style>

                 hgroup h1 span .site-title{
font-family: 'trajan pro';
text-decoration: none;
text-shadow: 0px 0px 1px #aaaaaa;
color: white;
font-size: 40PX;

}
ol, ul {
margin-top: 0;
margin-bottom: 0;
}
            :root {
--r-dark-blue: 10;
--g-dark-blue: 11;
--b-dark-blue: 59;
}


li {
list-style: none
}

.menu-wrapper {
width: 1.5ch;
height: 18.5px;
cursor: pointer
}

.hamburger-menu,
.hamburger-menu:after,
.hamburger-menu:before {
width: 1.5ch;
height: 3.5px
}

.hamburger-menu {
position: relative;
transform: translateY(7.5px);
background: #fff;
transition: all 0ms 300ms
}

.hamburger-menu.dark {
background: #223454
}

.hamburger-menu.animate {
background: rgba(255, 255, 255, 0)
}

.hamburger-menu:before {
content: "";
position: absolute;
left: 0;
bottom: 7.5px;
background: #fff;
transition: bottom 300ms 300ms cubic-bezier(.23, 1, .32, 1), transform 300ms cubic-bezier(.23, 1, .32, 1)
}

.hamburger-menu.dark:before {
background: #223454
}

.hamburger-menu:after {
content: "";
position: absolute;
left: 0;
top: 7.5px;
background: #fff;
transition: top 300ms 300ms cubic-bezier(.23, 1, .32, 1), transform 300ms cubic-bezier(.23, 1, .32, 1)
}

.hamburger-menu.dark:after {
background: #223454
}

.hamburger-menu.animate:after {
top: 0;
transform: rotate(45deg);
transition: top 300ms cubic-bezier(.23, 1, .32, 1), transform 300ms 300ms cubic-bezier(.23, 1, .32, 1)
}

.hamburger-menu.animate:before {
bottom: 0;
transform: rotate(-45deg);
transition: bottom 300ms cubic-bezier(.23, 1, .32, 1), transform 300ms 300ms cubic-bezier(.23, 1, .32, 1)
}

/**SEARCH CSS***/

.search-super {
position: relative;
height: 35px;
width: 35px
}

.search {
display: table-row;
}
.search input {
background: none;
border: none;
outline: none;
width: 28px;
min-width: 0;
padding: 0;
z-index: 1;
position: relative;
line-height: 18px;
margin: 5px 0;
font-size: 14px;
-webkit-appearance: none;
font-family: "Mukta Malar";
transition: all 0.6s ease;
cursor: pointer;
color: #fff;
}
.search input + div {
position: relative;
height: 28px;
width: 100%;
margin: -28px 0 0 0;
}
.search input + div svg {
display: block;
position: absolute;
height: 28px;
width: 160px;
right: 0;
top: 0;
fill: none;
stroke: #fff;
stroke-width: 1.5px;
stroke-dashoffset: 271.908;
stroke-dasharray: 59 212.908;
transition: all 0.6s ease;
}
.search input:not(:-moz-placeholder-shown) {
width: 160px;
padding: 0 4px;
cursor: text;
}
.search input:not(:-ms-input-placeholder) {
width: 160px;
padding: 0 4px;
cursor: text;
}
.search input:not(:placeholder-shown), .search input:focus {
width: 160px;
padding: 0 4px;
cursor: text;
}
.search input:not(:-moz-placeholder-shown) + div svg {
stroke-dasharray: 150 212.908;
stroke-dashoffset: 300;
}
.search input:not(:-ms-input-placeholder) + div svg {
stroke-dasharray: 150 212.908;
stroke-dashoffset: 300;
}
.search input:not(:placeholder-shown) + div svg, .search input:focus + div svg {
stroke-dasharray: 150 212.908;
//stroke-dashoffset: 300;
}

::-moz-selection {
background: rgba(255, 255, 255, 0.2);
}

::selection {
background: rgba(255, 255, 255, 0.2);
}

::-moz-selection {
background: rgba(255, 255, 255, 0.2);
}

.search-wrapper {
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
width: 35px;
height: 35px;
transition: all 0.5s cubic-bezier(.53, .96, .44, .9);
cursor: pointer
}

.search-wrapper::before {
content: "";
position: absolute;
top: 28%;
right: 18.5%;
width: 0;
height: 3.5px;
margin-top: -2px;
background-color: #fff;
transform: rotate(-45deg);
transform-origin: right top
}

.search-wrapper.dark::before {
background-color: #223454
}

.search-wrapper::after {
content: "";
position: absolute;
bottom: 15.5%;
right: 14.5%;
width: 40%;
height: 3.5px;
margin-top: -2px;
background-color: #FFF;
transform: rotate(45deg);
transform-origin: right bottom
}

.search-wrapper.dark::after {
background-color: #223454
}

.search-icon {
position: absolute;
display: block;
top: 20%;
left: 20%;
width: 50%;
height: 50%;
border-radius: 50%;
border-width: 3.5px;
border-style: solid;
border-color: #fff
}

.search-icon.dark {
border-color: #223454
}

nav:not(.rank-math-breadcrumb)  {
width: 100%;
z-index: 0;
position: none;
top: 0;
left: 0;
right: 0;
}

nav:not(.rank-math-breadcrumb) ul {
display: flex;
justify-content: space-between;
align-items: center;
padding: 10px 35px;
transition: padding 0.5s cubic-bezier(.53,.96,.44,.9);
}

.nav-icons {
color: #fff;
font-size: 2rem;
cursor: pointer
}

.nav-icons.dark {
color: #081428
}

.top-crest {
width: auto;
position: relative;
transition: transform 0.5s cubic-bezier(.53, .96, .44, .9)
}

@media (max-width:599px) {
.top-crest {
    height: auto;
    width: auto
}
}

@media (min-width:600px) and (max-width:767px) {
.top-crest {
    height: 100px;
    width: auto
}
}

@media (min-width:768px) {
.top-crest {
height: 160px;
width: auto;
padding-right: 11rem;
position: sticky;
align-items: center;
}
}

.top-crest.hidden {
visibility: hidden
}

@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap");
html {
scroll-behavior: smooth;
}

body {
font-family: "Poppins", sans-serif;
}


                .carousel>.carousel-inner>.item>.circleElement {
                    background-color: #000;
                    border-radius: 50%;
                    position: absolute;
                    top: 11%;
                    left: 39%;
                    width: 400px;
                    height: 400px;
                    opacity: .5;
                }
                .center_home .carousel-indicators li { cursor: pointer }
                .center_home .carousel-control {
                    width: 60px;
                    height: 0;
                    margin-top:20%;
                    font-size: 100px;
                    background: none;
                    border: none;
                    font-weight: 300;
                }
                .carousel-indicators li {
                    background-color: #999;
                    background-color: rgba(255,255,255,0.3);
                }
                .carousel-caption {
                    padding: 25px 15px 20px 15px;
                    background:#ffffff7a;
                    bottom:0;
                }
                .carousel-caption h3 {
                   color:#0c01a1;
                }
                .carousel-caption h1 {
                   color:#fff;
                    font-size:80px; 
                }
                .carousel-caption p {
                    font-weight: 300;
                    line-height: 25px;
                    color:#fff;
                }
                .carousel-caption ul li {
                display:inline-block;
                margin-right:20px;
                }
                
                .carousel-fade .carousel-inner .item {
                    opacity: 0;
                    -webkit-transition-property: opacity;
                    -moz-transition-property: opacity;
                    -o-transition-property: opacity;
                    transition-property: opacity;
                }
                .carousel-fade .carousel-inner .active { opacity: 1 }
                .carousel-fade .carousel-inner .active.left,
                .carousel-fade .carousel-inner .active.right {
                    left: 0;
                    opacity: 0;
                    z-index: 1;
                }
                .carousel-fade .carousel-inner .next.left,
                .carousel-fade .carousel-inner .prev.right { opacity: 1 }
                .carousel-fade .carousel-control { z-index: 11 }
                @media only screen and (max-width:767px) { 
                    .carousel-caption {
                        padding: 15px;
                     }
                    .carousel-caption h4 { font-size: 30px }
                    .carousel-caption p {
                        margin-top: 10px;
                        font-size: 10px;
                        margin-bottom: -10px;
                    }
                    .carousel { margin-bottom: 0 }
                    .hero-unit { padding-bottom: 60px }
                    .hero-unit p { font-size: 16px }
                
                .carousel-container {
                    width: 80% !important;
                    padding-left: 10%;
                    margin-top: 35px;
                }
                }
                .carousel-caption_1{
                height:55%;
                width:45%;
                left:27%;
                bottom:0;
                text-align:center;
                  }
                .center_home img{
                margin-top:0;
                width:100%;  
                  }
                /*********************center_home****************/
                
                /*********************progress****************/
                #progress{
                  background: #f4f4f4;
                  padding-top:70px;
                  padding-bottom:40px;
                  }
                .progress_1i{
                 background:#fff;
                 padding:40px 15px; 
                 border-radius: 1rem;
                  }
                .progress_1i span i{
                 background: #d43c18;
                 color:#fff;
                 border-radius:50%;
                 width:60px;
                 height:60px;
                 line-height:60px;
                 font-size:30px; 
                  }
                .progress_1i span{
                 display:block;
                 margin-top:-75px; 
                 margin-bottom:25px;
                  }
                .progress_2{
                margin-top:40px;
                background:#fff;  
                  }
                  
                #progress .progress{
                    width: 150px;
                    height: 150px;
                    line-height: 150px;
                    background: none;
                    margin: 0 auto;
                    box-shadow: none;
                    position: relative;
                }
                #progress .progress:after{
                    content: "";
                    width: 100%;
                    height: 100%;
                    border-radius: 50%;
                    border: 12px solid #f4f4f4;
                    position: absolute;
                    top: 0;
                    left: 0;
                }
                #progress .progress > span{
                    width: 50%;
                    height: 100%;
                    overflow: hidden;
                    position: absolute;
                    top: 0;
                    z-index: 1;
                }
                #progress .progress .progress-left{
                    left: 0;
                }
                #progress .progress .progress-bar{
                    width: 100%;
                    height: 100%;
                    background: none;
                    border-width: 12px;
                    border-style: solid;
                    position: absolute;
                    top: 0;
                }
                #progress .progress .progress-left .progress-bar{
                    left: 100%;
                    border-top-right-radius: 80px;
                    border-bottom-right-radius: 80px;
                    border-left: 0;
                    -webkit-transform-origin: center left;
                    transform-origin: center left;
                }
                #progress .progress .progress-right{
                    right: 0;
                }
                #progress .progress .progress-right .progress-bar{
                    left: -100%;
                    border-top-left-radius: 80px;
                    border-bottom-left-radius: 80px;
                    border-right: 0;
                    -webkit-transform-origin: center right;
                    transform-origin: center right;
                    animation: loading-1 1.8s linear forwards;
                }
                #progress .progress .progress-value{
                    width: 90%;
                    height: 90%;
                    border-radius: 50%;
                    background: #44484b;
                    font-size: 24px;
                    color: #fff;
                    line-height: 135px;
                    text-align: center;
                    position: absolute;
                    top: 5%;
                    left: 5%;
                }
                .progress.blue .progress-bar{
                    border-color: #049dff;
                }
                .progress.blue .progress-left .progress-bar{
                    animation: loading-2 1.5s linear forwards 1.8s;
                }
                .progress.yellow .progress-bar{
                    border-color: #d43c18;
                }
                .progress.yellow .progress-left .progress-bar{
                    animation: loading-3 1s linear forwards 1.8s;
                }
                .progress.pink .progress-bar{
                    border-color: #ed687c;
                }
                .progress.pink .progress-left .progress-bar{
                    animation: loading-4 0.4s linear forwards 1.8s;
                }
                .progress.green .progress-bar{
                    border-color: #1abc9c;
                }
                .progress.green .progress-left .progress-bar{
                    animation: loading-5 1.2s linear forwards 1.8s;
                }
                @keyframes loading-1{
                    0%{
                        -webkit-transform: rotate(0deg);
                        transform: rotate(0deg);
                    }
                    100%{
                        -webkit-transform: rotate(180deg);
                        transform: rotate(180deg);
                    }
                }
                @keyframes loading-2{
                    0%{
                        -webkit-transform: rotate(0deg);
                        transform: rotate(0deg);
                    }
                    100%{
                        -webkit-transform: rotate(144deg);
                        transform: rotate(144deg);
                    }
                }
                @keyframes loading-3{
                    0%{
                        -webkit-transform: rotate(0deg);
                        transform: rotate(0deg);
                    }
                    100%{
                        -webkit-transform: rotate(90deg);
                        transform: rotate(90deg);
                    }
                }
                @keyframes loading-4{
                    0%{
                        -webkit-transform: rotate(0deg);
                        transform: rotate(0deg);
                    }
                    100%{
                        -webkit-transform: rotate(36deg);
                        transform: rotate(36deg);
                    }
                }
                @keyframes loading-5{
                    0%{
                        -webkit-transform: rotate(0deg);
                        transform: rotate(0deg);
                    }
                    100%{
                        -webkit-transform: rotate(126deg);
                        transform: rotate(126deg);
                    }
                }
                @media only screen and (max-width: 990px){
                   #progress  .progress{ margin-bottom: 20px; }
                }
                .progress_2i1{
                 padding-top:30px; 
                  }
                .progress_2i2{
                 padding-top:100px; 
                  }
                /*********************progress_home****************/
                
                /*********************cause****************/
                #cause{
                 padding-top:40px;
                 padding-bottom:30px; 
                  }
                .cause_1_r .btn-success{
                  color:#999;
                  background:none;
                  border:none;
                  padding:0;
                  margin-left:3px;
                  margin-right:3px;
                  font-size:20px;
                  }
                .cause_2i{
                position:relative;  
                  }
                .cause_2ii1{
                position:absolute;
                top:0;
                width:100%;
                height:100%;
                background:#d43c187d;
                text-align:center;
                padding-top:95px;
                display:none;  
                  }
                .cause_2ii1 span{
                font-size:50px; 
                color:#fff;
                  }
                .cause_2i:hover .cause_2ii1{
                 display:block;
                 }
                .cause_2i2 .progress{
                height:8px;
                border-radius:0;
                margin-top:10px; 
                  }
                .cause_2{
                margin-top:20px;  
                  }
                /*********************cause_home****************/
                
                /*********************event_home****************/
                #event_home{
                  background: #f4f4f4;
                  padding-top:40px;
                  padding-bottom:40px;
                  }
                .event_h1li1l{
                 text-align:center;
                 background:#fff;
                 padding:0px 10px 20px 10px;
                 border-radius: 1rem;
                 }
                .event_h1li1l hr{
                  border-width:3px;
                  border-color:#ffd000;
                  width:50%;
                  margin-top:0;
                  }
                .event_h1li1l h3 span{
                  display:block;
                  color:#999;
                  font-size:16px;
                  }
                .event_h1li{
                 margin-bottom:30px; 
                  }
                .event_h1li1r h6{
                 color:#999; 
                  }
                .event_h1li1r h6 i{
                margin-right:5px;
                  }
                .event_h1li1{
                 border-bottom:1px solid #ddd;
                 margin-bottom:15px;
                 padding-bottom:15px; 
                  }
                .event_h1r1{
                  margin-bottom:30px;
                  }
                .event_h1r2 ul li{
                 display:inline-block;
                 margin-right:3px;
                  }
                .event_h1r2 ul .active a {
                   background: #fff;
                   border-top:3px solid #d43c18;
                }
                .event_h1r2 ul li a {
                    padding: 15px 30px;
                    display: block;
                    background:#fafafa;
                }
                .event_h1r2 ul li a:hover {
                   background: #fff;
                   border-top:3px solid #d43c18;
                }
                .home_i{
                 background:#fff;
                 padding:40px 20px;
                 margin-left:15px;
                 margin-right:15px; 
                 border-radius: 1rem;
                  }
                /*********************event_home_end****************/
                
                /*********************donate_home****************/
                #donate_home {
                    background-image: url(https://raw.githubusercontent.com/kasuncfdo/dls/main/img/Media%20Unit/DLS%20Media%20UnitDLS%20Media%20UnitS.jpg);
                    background-repeat: no-repeat;
                    background-position: center;
                    background-attachment: fixed;
                    background-size: 123.3rem;
                }
                
                
                .donate_hm {
                    padding-top: 150px;
                    padding-bottom: 150px;
                    background: #00000091;
                }
                /*********************donate_home_end****************/
                
                /*********************news_home****************/
                #news_home{
                 padding-top:40px;
                 padding-bottom:40px;
                 //background:#f4f4f4; 
                  }
                .news_home_2l{
                position:relative;  
                  }
                .news_home_2li1{
                 position:absolute;
                 background:#d43c187d;
                 top:0;
                 width:100%;
                 height:100%;
                 display:none;
                 }
                .news_home_2l:hover .news_home_2li1{
                 display:block; 
                  }
                .news_home_2r h6 a span{
                 color:#999; 
                  }
                .news_home_2r h6 a span i{
                margin-left:5px;
                  }
                .news_home_2r{
                background:#fff;
                padding:40px 15px;
                min-height:244px  
                  }
                .news_home_1{
                 margin-bottom:30px; 
                  }
                /*********************news_home_end****************/
                
                /*********************custom****************/
                #custom{
                 padding-top:40px;
                 padding-bottom:40px; 
                  }
                .custom_1i1 {
                background:#f4f4f4; 
                padding:10px 15px 15px 15px;
                  }
                .custom_1i2 {
                background:#f4f4f4; 
                padding:10px 15px 15px 15px;
                border-top:1px solid #ddd; 
                  }
                .custom_1i2 h6 span{
                font-size:22px; 
                 }
                /*********************custom_end****************/
                
                @media screen and (max-width : 767px){
                .center_home img{
                min-height:400px; 
                 }
                .carousel-caption_1{
                width:100%;
                left:0; 
                height:auto; 
                  }
                .carousel-caption h1{
                font-size:45px;  
                  }
                .carousel-caption p{
                font-size:18px;  
                  }
                .progress_1i {
                margin-bottom:45px; 
                 }
                #progress{
                text-align:center; 
                 }
                .cause_1 {
                 text-align:center; 
                 }
                .cause_1 .controls{
                float:none!important;
                margin-top:15px; 
                 } 
                .cause_2{
                text-align:center; 
                 }
                .cause_2i2 h5{
                 text-align:left;
                 }
                #event_home{
                 text-align:center; 
                 }
                .event_h1li1r {
                 margin-top:15px;
                 }
                .event_h1r2 ul li{
                margin-bottom:8px; 
                 }
                #news_home{
                 text-align:center; 
                 }
                .news_home_2r h6{
                 text-align:left; 
                 }
                .news_home_2r .tc{
                 text-align:center; 
                 }
                #custom{
                  text-align:center;
                 }
                .custom_1i2  h6{
                 text-align:left;  
                  }
                .custom_1  .col-sm-3{
                 margin-top:10px; 
                  }
                }
                
                @media (min-width:768px) and (max-width:991px) {
                .center_home img{
                min-height:600px;  
                  }
                .center_home h3{
                font-size:24px;  
                  }
                .center_home p{
                font-size:14px;  
                  }
                .center_home h1{
                font-size:50px;  
                  }
                .carousel-caption_1{
                 height:60%; 
                  }
                .progress_2i1 {
                padding-bottom:20px;
                 }
                .event_h1r2 ul li{
                margin-bottom:8px; 
                 }
                .news_home_2li img{
                 min-height:244px;
                 }
                .news_home_2r{
                 padding:10px; 
                  }
                .custom_1i1 h4{
                 font-size:18px;
                 }
                .custom_1i1 h5{
                 font-size:14px;
                 }
                .custom_1i2 h6 span{
                 font-size:18px;
                 }
                .cause_2ii1{
                 padding-top:30%;
                 }
                 }
                @media (min-width:992px) and (max-width:1200px) {
                .center_home img{
                min-height:600px;  
                  }
                .center_home h1{
                font-size:50px;  
                  }
                .progress_2i1 {
                padding-bottom:20px;
                 }
                .news_home_2li img{
                 min-height:244px;
                 }
                .news_home_2r{
                 padding:25px 10px; 
                  }
                 }
                @media (min-width:1201px) and (max-width:1345px) {
                .carousel-caption_1{
                 height:60%; 
                  }
                 }
                
                 @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap");
                
                 .button{
                background:#ffc400;
                display:inline-block;
                color:#fff;
                padding:15px 30px!important;
                margin-top:10px;
                border-radius:30px;
                  }
                .button:hover{
                color:#fff;
                background:#000!important;
                  }
                .button_1{
                background:#000;
                display:inline-block;
                color:#fff;
                padding:15px 30px;
                margin-top:10px;
                border-radius:30px;
                  }
                .button_1:hover{
                color:#fff;
                background:#d43c18;
                  }
                .border_none{
                  border:none!important;
                  }
                 </style>
                           
                           <section id="event_home">
                            <div class="container">
                             <div class="row">
                              <div class="event_h1 clearfix">
                               <div class="col-sm-6">
                                <div class="event_h1l clearfix">
                                 <div class="event_h1li clearfix">
                                  <h3 class="mgt">Announcements</h3>
                                 </div>
                                 <div class="event_h1li1 clearfix">
                                  <div class="col-sm-3 space_left">
                                   <div class="event_h1li1l clearfix">
                                    <hr>
                                    <h3 class="mgt">03 <span>October</span></h3>
                                   </div>
                                  </div>
                                  <div class="col-sm-9">
                                   <div class="event_h1li1r clearfix">
                                    <h4 class="mgt bold"><a href="#" class="inactiveLink">Special Program for childrens day & Parents day celibration</a></h4>
                                    <h6><i class="fa fa-clock-o"></i> October 3, 2022 / 8:00 am - October 3, 2022 / 9:00 am</h6>
                                    <h6><i class="fa fa-map-marker"></i> De La Salle Brother's house</h6>
                                   </div>
                                  </div>
                                 </div>
                                 <div class="event_h1li1 clearfix">
                                  <div class="col-sm-3 space_left">
                                   <div class="event_h1li1l clearfix">
                                    <hr>
                                    <h3 class="mgt">06 <span>October</span></h3>
                                   </div>
                                  </div>
                                  <div class="col-sm-9">
                                   <div class="event_h1li1r clearfix">
                                    <h4 class="mgt bold"><a href="#" class="inactiveLink">Teachers day celibration</a></h4>
                                    <h6><i class="fa fa-clock-o"></i> October 6, 2022 / 8:00 am - October 6, 2022 / 11:00 am</h6>
                                    <h6><i class="fa fa-map-marker"></i> De La Salle College</h6>
                                   </div>
                                  </div>
                                 </div>
                                 <div class="event_h1li1 clearfix">
                                  <div class="col-sm-3 space_left">
                                   <div class="event_h1li1l clearfix">
                                    <hr>
                                    <h3 class="mgt">07 <span>October</span></h3>
                                   </div>
                                  </div>
                                  <div class="col-sm-9">
                                   <div class="event_h1li1r clearfix">
                                    <h4 class="mgt bold"><a href="#" class="inactiveLink">Lasallion Concert - "Bloomy Ones"</a></h4>
                                    <h6><i class="fa fa-clock-o"></i> October 7, 2022 / 6:00 pm onwards</h6>
                                    <h6><i class="fa fa-map-marker"></i> De La Salle College Ground</h6>
                                   </div>
                                  </div>
                                 </div>
                                 <div class="event_h1li2 clearfix">
                                  <h5><a class="col_1" href="#" class="inactiveLink">View More…</a></h5>
                                 </div>
                                </div>
                               </div>
                               <div class="col-sm-6">
                                <div class="event_h1r clearfix">
                                 <div class="event_h1r1 clearfix">
                                   <h3 class="mgt">Short Information</h3>
                                 </div>
                                 <div class="event_h1r2 clearfix">
                                  <div class="col-sm-12">
                                     <ul class="mgt">
                                     <li class="active"><a data-toggle="tab" href="#home">Event</a></li>
                                     <li><a data-toggle="tab" href="#menu1">Press</a></li>
                                     <li><a data-toggle="tab" href="#menu2">Video</a></li>
                                   </ul>
                                  </div>
                                 </div>
                                 <div class="event_h1r3 clearfix">
                                       <div class="tab-content clearfix">
                                         <div id="home" class="tab-pane fade in active clearfix">
                                            <div class="click clearfix">
                                             <div class="home_i col-sm-12 clearfix">
                                              <h4 class="mgt bold">Ongoing Events</h4>
                                              <p>None</p>
                                             </div>
                                            </div>
                                         </div>
                                         <div id="menu1" class="tab-pane fade clearfix">
                                            <div class="click clearfix">
                                              <div class="home_i col-sm-12 clearfix">
                                              <h4 class="mgt bold">“INDIVISA MANENT”</h4>
                                              <img src="College Assests/College-Items/crest-bw.jpg" style=" align-content: center; height: 200px; width: auto;">
                                              <p style="text-align: justify;">De La Salle College, Colombo is the only school in Sri Lanka dedicated to the Patron Saint of Christian Teachers St. John Baptist de la Salle, founder of the congregation of De La Salle Brothers of the Christian Schools in Latin: "Fratres Scholarum Christianarum".</p>
                                               <p style="text-align: justify;">De La Salle College was opened on 01 st February 1905 with 22 boys on roll. The object of this School is to give the boys of the Mutwal mission an opportunity to receive an elementary English Education. It is the first “English School” to be set up in this part of Colombo North</p>
                                            
                                             </div>
                                       
                                            </div>
                                         </div>
                                         <style>
                                             .video {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                }
                iframe{
                    padding-right: 1rem;
                }
                                         </style>
                                         <div id="menu2" class="tab-pane fade clearfix">
                                            <div class="click clearfix">
                                              <div class="home_i col-sm-12 clearfix">
                                                <iframe src="https://www.youtube.com/embed/videoseries?list=PLPb7KSoOA4JTxQxsEU57ouyPMFBsuDV3U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen ></iframe>
                                            </div>
                                         </div>
                                       </div>
                                   </div>
                                </div>
                               </div>
                              </div>
                             </div>
                            </div>
                           </div>
                           </section>

    
                <!-- Footer -->
                <?php
     include('src/footer.php');
     ?>
     
    <!-- /Footer -->