<style type="text/css">
html{
	scroll-behavior: smooth;
}
.wholepage{
  width: auto;
  margin-left: auto;
  margin-right: auto;
}
*{margin: 0; padding:0; box-sizing: border-box;font-family: 'Muli',sans-serif;}
.nav_style{
    background-color:#9600FE;
    border: 2px solid green!important;
    width: 100%;
     box-shadow: 5px 9px 5px 5px#999;
}


.nav_style a:hover {
  background-color: #99F403;
  color: white;

}
.nav_style a{color:	white!important;
border-radius: 12px;
}
.main_header{
	height: 450px;
	width: 100%;}
	.rightside h1{
		font-size: 3rem;

	}
	.corona_rot img{
		animation: gocorona 5s linear infinite;

	}
	@keyframes gocorona{
		0%{transform: rotate(0);}
		100%{transform: rotate(360deg);}
}
.leftside img{
		animation: leftimg 30s linear infinite;

	}
	@keyframes leftimg {
		0%{transform: rotate(270deg);}
		100%{transform: rotate(360deg);}
		
		
}

.navbar img{
    animation:coronalogo  5s linear infinite;

  }
  @keyframes coronalogo{
    0%{transform: rotate(0);}
    100%{transform: rotate(360deg);}
}
.covupdate {
	animation: update 4s linear infinite;
}


@keyframes update{
  0%   {color: red;}
  25%  {color: yellow;}
  50%  {color: blue;}
  100% {color: green;}
}



/**********corona update*************/

/*//////////////////////about section/////////////*/
.sub_section{
	background-color:#0ABDA0;
  	text-align: center;
       box-shadow: 5px 9px 5px 5px#999;
}

.sub_section{
  animation: prim 50s linear infinite;
}
@keyframes prim {
  0%   {background-color:red; left:0px; top:0px;}
  25%  {background-color:yellow; left:200px; top:0px;}
  50%  {background-color:blue; left:200px; top:200px;}
  75%  {background-color:green; left:0px; top:200px;}
  100% {background-color:red; left:0px; top:0px;}
}





.mb-5{
	animation: primg 4s linear infinite;

}
@keyframes primg {
  0%   {color:red; left:0px; top:0px;}
  25%  {color:yellow; left:200px; top:0px;}
  50%  {color:blue; left:200px; top:200px;}
  75%  {color:green; left:0px; top:200px;}
  100% {color:red; left:0px; top:0px;}
}

/*//////////////////////button/////////////*/
.button {
  background-color: #3498DB; /* Green */
  border: 2px solid black;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none !important;
  display: inline-block;
  font-size: 16px;
  border-radius: 5px;
  margin: 10px 0 10px 0;
  transition-duration: 0.2s;
  cursor: pointer;
  width: 100%;
  vertical-align: middle;
  justify-content: center;
  display:inline-block;


   box-shadow: 5px 9px 5px 5px#999;
}

.button:hover {
  background-color: #99F403;
  color: white;
}
/*//////////////////////fotter/////////////*/
.footer_style{
	 background-color:#9600FE!important;
   border: 2px solid green;
   margin-top: 2px;
	 
}

.footer_style p{margin-bottom: 0!important;

}
/*//////////////////////responsive/////////////*/
@media(max-width: 768px){
	.main_header{height: 700px;text-align:center; }
	.main_header h1{
		text-align: center;
		padding: 0;
		width: 100%;
		font-size: 30px;}

		.count_style{
			display: inline-block;
		}
		.count{
			text-align: center;
		}

	}












/* Slideshow container */
.slideshow-container {
 
  position: relative;
  margin: auto;
  padding: 20px 5px 5px 5px;

}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 2s;
  animation-name: fade;
  animation-duration:2s;

}

@-webkit-keyframes fade {
  from {opacity: .2} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .2} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}











.video-container {
  position: relative;
  top: 0;
  bottom: 0;
  width: auto;
  height: auto; 
  overflow: hidden;

}
.video-container video {
  /* Make video to at least 100% wide and tall */
  min-width: 100%; 
  min-height: 100%; 

  /* Setting width & height to auto prevents the browser from stretching or squishing the video */
  width: auto;
  height: auto;

 
}

 /* Cente banner */
	.banner{ padding 0px 5px 0px 5px;
	}


  /* table */
.table tr th{
  border: 2px solid black;
}


</style>



