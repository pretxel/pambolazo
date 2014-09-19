<!doctype html>
 <html class="no-js" lang="en">
 <head>
 	<meta charset="utf-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 	<title>Pambolazo 2014</title>
 	<link rel="stylesheet" href="{{ URL::asset('stylesheets/app.css') }}" />
     <link rel="stylesheet" href="{{ URL::asset('foundation-icons/foundation-icons.css') }}" />
     <script src="{{ URL::asset('bower_components/modernizr/modernizr.js') }}"></script>
     <script src="{{ URL::asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
     <script src="{{ URL::asset('bower_components/foundation/js/foundation.min.js') }}"></script>
     <script src="{{ URL::asset('bower_components/foundation/js/foundation/foundation.joyride.js') }}"></script>
     <script src="{{ URL::asset('bower_components/jquery.cookie/jquery.cookie.js') }}"></script>
     <script type="text/javascript">
     $(document).foundation();
     </script>
 
     <style type="text/css">
 
     .fussball-table {
   position: relative;
   z-index: 1;
   width: 500px;
   height: 275px;
   margin: 125px auto;
 }
 .fussball-table .pitch {
   position: relative;
   width: 100%;
   height: 100%;
   background: #279e31;
 }
 .fussball-table .pitch:before {
   content: " ";
   position: absolute;
   z-index: 10;
   top: 0;
   left: 0;
   height: 100%;
   width: 100%;
   box-shadow: inset 0px 0px 130px 60px rgba(0, 0, 0, 0.25);
 }
 .fussball-table .pitch:after {
   content: " ";
   position: absolute;
   z-index: 20;
   top: -10px;
   left: -10px;
   height: 100%;
   width: 100%;
   border: 10px solid black;
 }
 .fussball-table .markings {
   opacity: 0.9;
 }
 .fussball-table .markings div {
   background: white;
 }
 .fussball-table .markings .halfway-line {
   position: absolute;
   left: 50%;
   height: 100%;
   width: 6px;
   margin-left: -3px;
 }
 .fussball-table .markings .halfway-line:before {
   content: " ";
   position: absolute;
   top: 33%;
   left: -700%;
   height: 30%;
   width: 1500%;
   margin-left: -6px;
   background: #279e31;
   border: 6px solid white;
   border-radius: 50%;
 }
 .fussball-table .markings .halfway-line:after {
   content: " ";
   position: absolute;
   top: 50%;
   left: 50%;
   height: 12px;
   width: 12px;
   margin-left: -6px;
   margin-top: -6px;
   background: white;
   border-radius: 50%;
 }
 .fussball-table .markings .blue-box, .fussball-table .markings .red-box {
   position: absolute;
   top: 23.5%;
   width: 20%;
   height: 50%;
   background: #279e31;
   border: 6px solid white;
 }
 .fussball-table .markings .blue-box:before, .fussball-table .markings .red-box:before {
   content: " ";
   position: absolute;
   z-index: 1;
   top: 7.5%;
   right: -20%;
   height: 75%;
   width: 100%;
   border: 6px solid white;
   border-radius: 50%;
 }
 .fussball-table .markings .blue-box:after, .fussball-table .markings .red-box:after {
   content: " ";
   position: absolute;
   z-index: 2;
   right: 0;
   height: 100%;
   width: 100%;
   background: #279e31;
 }
 .fussball-table .markings .blue-box .six-yard-box, .fussball-table .markings .red-box .six-yard-box {
   position: absolute;
   z-index: 3;
   top: 20%;
   left: -6px;
   width: 35%;
   height: 50%;
   background: #279e31;
   border: 6px solid white;
 }
 .fussball-table .markings .blue-box {
   left: -6px;
 }
 .fussball-table .markings .red-box {
   right: -6px;
   transform: rotate(180deg);
   -webkit-transform: rotate(180deg);
 }
 .fussball-table .teams {
   position: absolute;
   top: 0;
   top: 0;
   left: 0;
   right: 0;
   margin: 0 auto;
   height: 100%;
   width: 92.5%;
   z-index: 15;
 }
 .fussball-table .teams > div {
   position: absolute;
   top: 0;
   height: 100%;
   width: 100%;
 }
 .fussball-table .teams > div > div {
   position: absolute;
   top: 0;
   bottom: 0;
   width: 6px;
   margin: auto 0 auto -3px;
   height: 160%;
   background: #f5f6f6;
   background: -webkit-linear-gradient(left, #f5f6f6 0%, #b9babf 20%, #878891 48%, #dddfe3 80%, #f5f6f6 100%);
   box-shadow: 15px 0px 5px 0px rgba(0, 0, 0, 0.1);
 }
 .fussball-table .teams > div > div:after, .fussball-table .teams > div > div:before {
   content: " ";
   position: absolute;
   bottom: 0;
   width: 200%;
   height: 10%;
   margin-left: -50%;
   background: #959595;
   background: -webkit-linear-gradient(left, #959595 0%, #0d0d0d 46%, #010101 50%, #0a0a0a 53%, #4e4e4e 76%, #383838 87%, #1b1b1b 100%);
   box-shadow: 15px 0px 5px 0px rgba(0, 0, 0, 0.1);
   border-radius: 2px;
 }
 .fussball-table .teams > div > div:before {
   bottom: auto;
   top: 0;
   width: 110%;
   height: 2%;
   margin-left: -10%;
   border-radius: 2px;
 }
 .fussball-table .teams .goalie {
   left: 0%;
 }
 .fussball-table .teams .goalie .player:nth-of-type(1) {
   top: 50%;
 }
 .fussball-table .teams .goalie .players:before {
   top: 46%;
 }
 .fussball-table .teams .goalie .players:after {
   top: 54%;
 }
 .fussball-table .teams .defence {
   left: 14.28571%;
 }
 .fussball-table .teams .defence .player:nth-of-type(1) {
   top: 40%;
 }
 .fussball-table .teams .defence .player:nth-of-type(2) {
   top: 60%;
 }
 .fussball-table .teams .defence .players:before {
   top: 36%;
 }
 .fussball-table .teams .defence .players:after {
   top: 64%;
 }
 .fussball-table .teams .mid-field {
   left: 42.85714%;
 }
 .fussball-table .teams .mid-field .player:nth-of-type(1) {
   top: 25%;
 }
 .fussball-table .teams .mid-field .player:nth-of-type(2) {
   top: 37.5%;
 }
 .fussball-table .teams .mid-field .player:nth-of-type(3) {
   top: 50%;
 }
 .fussball-table .teams .mid-field .player:nth-of-type(4) {
   top: 62.5%;
 }
 .fussball-table .teams .mid-field .player:nth-of-type(5) {
   top: 75%;
 }
 .fussball-table .teams .mid-field .players:before {
   top: 21%;
 }
 .fussball-table .teams .mid-field .players:after {
   top: 79%;
 }
 .fussball-table .teams .forwards {
   left: 71.42857%;
 }
 .fussball-table .teams .forwards .player:nth-of-type(1) {
   top: 30%;
 }
 .fussball-table .teams .forwards .player:nth-of-type(2) {
   top: 50%;
 }
 .fussball-table .teams .forwards .player:nth-of-type(3) {
   top: 70%;
 }
 .fussball-table .teams .forwards .players:before {
   top: 26%;
 }
 .fussball-table .teams .forwards .players:after {
   top: 74%;
 }
 .fussball-table .teams .red-team {
   transform: rotate(180deg);
   -webkit-transform: rotate(180deg);
 }
 .fussball-table .teams .players:before, .fussball-table .teams .players:after {
   content: " ";
   width: 10px;
   background: black;
   height: 10px;
   position: absolute;
   left: -2px;
   top: 50%;
   margin-top: -5px;
   opacity: 0.75;
 }
 .fussball-table .teams .player {
   position: absolute;
   top: 50%;
   left: 4px;
   margin-top: -10px;
 }
 .fussball-table .teams .player:before {
   content: " ";
   position: absolute;
   width: 18px;
   height: 20px;
   left: -10px;
   border-radius: 3px;
   box-shadow: inset -2px 0px 5px 0px rgba(0, 0, 0, 0.5);
 }
 .fussball-table .teams .player:after {
   position: absolute;
   width: 12px;
   height: 12px;
   left: -6px;
   top: 3px;
   border-radius: 100%;
   box-shadow: inset -2px 0px 5px 0px rgba(0, 0, 0, 0.25);
 }
 .fussball-table .teams .red-team .player:before {
   background-color: red;
 }
 .fussball-table .teams .red-team .player:after {
   background-color: #ff3333;
 }
 .fussball-table .teams .blue-team .player:before {
   background-color: blue;
 }
 .fussball-table .teams .blue-team .player:after {
   background-color: #3333ff;
 }
 
     </style>
 </head>
 
 <body style="background: rgb(150, 215, 252);">
 
 <section class="text-center">
 	<h1>Pambolazo</h1>
 	
 
 	<div class='fussball-table'>
   <div class='pitch'>
     <div class='markings'>
       <div class='halfway-line'></div>
       <div class='blue-box'>
         <div class='six-yard-box'></div>
       </div>
       <div class='red-box'>
         <div class='six-yard-box'></div>
       </div>
     </div>
   </div>
   <div class='teams'>
     <div class='blue-team'>
       <div class='goalie'>
         <div class='players'>
           <div class='player'></div>
         </div>
       </div>
       <div class='defence'>
         <div class='players'>
           <div class='player'></div>
           <div class='player'></div>
         </div>
       </div>
       <div class='mid-field'>
         <div class='players'>
           <div class='player'></div>
           <div class='player'></div>
           <div class='player'></div>
           <div class='player'></div>
           <div class='player'></div>
         </div>
       </div>
       <div class='forwards'>
         <div class='players'>
           <div class='player'></div>
           <div class='player'></div>
           <div class='player'></div>
         </div>
       </div>
     </div>
     <div class='red-team'>
       <div class='goalie'>
         <div class='players'>
           <div class='player'></div>
         </div>
       </div>
       <div class='defence'>
         <div class='players'>
           <div class='player'></div>
           <div class='player'></div>
         </div>
       </div>
       <div class='mid-field'>
         <div class='players'>
           <div class='player'></div>
           <div class='player'></div>
           <div class='player'></div>
           <div class='player'></div>
           <div class='player'></div>
         </div>
       </div>
       <div class='forwards'>
         <div class='players'>
           <div class='player'></div>
           <div class='player'></div>
           <div class='player'></div>
         </div>
       </div>
     </div>
   </div>
 </div>
 <h2>Próximamente</h2>
 
 </section>
 	
 
 </body>
 
 
 </html>