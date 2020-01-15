

<html>
<head>

<title>UNBK 2017</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
 <title>DEMO</title>

 <link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css"/>
   <link type="text/css" rel="stylesheet" href="../assets/dataTables/css/dataTables.bootstrap.min.css">	
   <script type="text/javascript" src="../assets/jquery/jquery-2.0.2.min.js"></script>
   <script type="text/javascript" src="../assets/bootstrap/js/bootstrap.min.js"></script>
     <script type="text/javascript" src="js/main.js"></script>
    	<link href="css/ujian.css" rel="stylesheet">
<script type="text/javascript" src="js/sidein_menu.js"></script>

<script type="text/javascript" src="js/jquery.min.js"></script>

    <script>
        function disableBackButton() {
            window.history.forward();
        }
        setTimeout("disableBackButton()", 0);
		
    </script>
    
<link href="css/klien.css" rel="stylesheet">

<link href="css/sikil.css" rel="stylesheet">

<script src="js/inline.js"></script>

</head>

<body class="font-medium" style="background-color:#c9c9c9"><div style="visibility: hidden; overflow: hidden; position: absolute; top: 0px; height: 1px; width: auto; padding: 0px; border: 0px none; margin: 0px; text-align: left; text-indent: 0px; text-transform: none; line-height: normal; letter-spacing: normal; word-spacing: normal;"></div>
   
    <div class="container">

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


	
	   <header style='background-color:rgb(51, 103, 153)'>
<div class='group'>
    <div class='left' style='position: absolute; top: 12px; background-color:rgb(51, 103, 153)'><img src='../images/logo.png' syle=' margin-top: 0px; margin-left: 15px ! important;'>
    </div>
    
        	<div class='right1'><table width='100%' border='0' cellspacing='5px;' style='margin-top:10px'>   
     					<tr>
						<td rowspan='3' width='100px' align='center'><img src='../images/avatar.png' height='60px' width='60px' style=' margin-left:0px; margin-top:5px' class='foto'> </td>
						<td><span  style=' margin-left:0px; margin-top:5px'>Selamat Datang</span></td></tr>
                        <tr><td><span class='user'>M. Ichwan Fanani</span></td></tr>
                        <tr><td><span class='log'><a href='logout.php'>Logout</a><span></td></tr>
						</table>
                        </div>
           
      	</div>
	</div> 
</div>         
</header>
      
<div id="isi"><script type="text/javascript" src="js/ujian.js"></script>
<script type="text/javascript">
function AlertIt() {
$("#awal").css("display", "block");
$("#ahir").css("display", "none");	
if($("#slideMenu").hasClass('closed')){
				$("#slideMenu").animate({right:0}, 200, function(){
					$(this).removeClass('closed').addClass('opened');
					document.getElementById("kakisoal").style.width = '74%';					
					$("a#toggleLink").removeClass('toggleBtn').addClass('toggleBtnHighlight');
				});
$("#awal").css("display", "block");
$("#ahir").css("display", "none");					
//e.preventDefault();
		//return false;
			}//if close
			if($("#slideMenu").hasClass('opened')){
			
			if ( $(window).width() > 739) {      
				$("#slideMenu").animate({right:-400}, 200, function(){// jika screen kecil gunakan right:-240, untuk lebar right:-400
					$(this).removeClass('opened').addClass('closed');
					document.getElementById("kakisoal").style.width = '97.7%';
					$("a#toggleLink").removeClass('toggleBtnHighlight').addClass('toggleBtn');
				});
			} else if ( $(window).width() > 409) {      
				$("#slideMenu").animate({right:-200}, 200, function(){// jika screen kecil gunakan right:-240, untuk lebar right:-400
					$(this).removeClass('opened').addClass('closed');
					document.getElementById("kakisoal").style.width = '97.7%';
					$("a#toggleLink").removeClass('toggleBtnHighlight').addClass('toggleBtn');
				});
			
			} else {
				$("#slideMenu").animate({right:-240}, 200, function(){// jika screen kecil gunakan right:-240, untuk lebar right:-400
					$(this).removeClass('opened').addClass('closed');
					document.getElementById("kakisoal").style.width = '30%';
					$("a#toggleLink").removeClass('toggleBtnHighlight').addClass('toggleBtn');
				});
}

				

$("#awal").css("display", "none");
$("#ahir").css("display", "block");					
//e.preventDefault();
			}//if close
}
</script>
<script type="text/javascript" src="js/jquery.countdownTimer.js"></script>
<script src="js/kakyusuf.js"></script>


<li class="header" style="z-index: 1000;">
           <div class="main">
           
           <span class="flex-putih">Pelajaran:  </span>
            <span class="flex-item" style="background-color:#06C" id="soal">UTS</span>
             <span class="flex-biru"> <div id="h_timer" class="style colorDefinition size_lg">01:29:03</div></span>
			 <span class="flex-abu">Sisa Waktu</span>            
            </div>
        </li><div></div>


<input type="hidden" id="ujian" value="1">
<input type="hidden" id="jam" value="01">
<input type="hidden" id="menit" value="30">
<input type="hidden" id="detik" value="00"> <div id="picture">
<div class="blok-soal soal-1 active">
 <div id="fontlembarsoal" class="fontlembarsoal">
<span id="hurufsoal"> Soal Nomor :  <a id="jfontsize-d2" style="font-size: 16px; text-decoration: none; cursor: pointer;">&nbsp; 1 &nbsp;</a> </span></div>   
  <div id="lembaran">
<div id="lembaransoal">
<div class="cc-selector">
<p class="soal">Apa yang di maksud dengan hewan amfibi?</p><br> 
	<table cellspacing="0px" cellpadding="0px" border="0">

		<tbody><tr>
        <td valign="top">
        
        <input type="radio" name="jawab-1" id="huruf-1-0">
          <label for="huruf-1-0" class="huruf" onclick="kirim_jawaban(0, 1)">  A  </label>
 </td>   
        <td class="pilihanjawaban" valign="top">&nbsp; hewan yang hidup di dua alam </td></tr>
		<tr>
        <td valign="top">
        
        <input type="radio" name="jawab-1" id="huruf-1-1">
          <label for="huruf-1-1" class="huruf" onclick="kirim_jawaban(0, 2)">  B  </label>
 </td>   
        <td class="pilihanjawaban" valign="top">&nbsp; hewan yang memakan semua jenismakanan </td></tr>
		<tr>
        <td valign="top">
        
        <input type="radio" name="jawab-1" id="huruf-1-2">
          <label for="huruf-1-2" class="huruf" onclick="kirim_jawaban(0, 3)">  C  </label>
 </td>   
        <td class="pilihanjawaban" valign="top">&nbsp; hewan yang berkembang biak dengan cara bertelur dan melahirkan </td></tr>
		<tr>
        <td valign="top">
        
        <input type="radio" name="jawab-1" id="huruf-1-3">
          <label for="huruf-1-3" class="huruf" onclick="kirim_jawaban(0, 4)">  D  </label>
 </td>   
        <td class="pilihanjawaban" valign="top">&nbsp; hewan yang menyusui </td></tr>
        </tbody></table>


 
</div></div></div>
	  

 


<style>
.container1 {
    font-size: 0; /*fix white space*/
	
}
.container1 > div {
    font-size: 16px; /*reset font size*/
    display: inline-block;
    vertical-align: top;
    width: 30.33%;
	border:thin; border-color:#0000FF;
    box-sizing: border-box;
	text-align:left;
	margin-left:20px;

}
@media (max-width: 480px) { /*breakpoint*/
    .container1 > div {
        display: block;
        width: 100%;
		margin-left:20px;
		padding-bottom:15px;
    }
}

</style>
    <style>

.piljwb{
	margin-left:0;    
	border-radius: 30px;
	border-style:solid;
	border-color:#999;
	list-style:none;}


.main {
	margin-right:15px;
	margin-top:10px;
}

.content {
    padding: 20px;
    overflow: hidden;
}
.left {
    float: left;
    width: 680px;
}
.right {
    float: left;
    margin-left: 40px;
}
.summary {
    border: 1px solid #dddddd;
    overflow: hidden;
    margin-top: 20px;
    background-color: white;
}
.summary .caption {
    border-bottom: 1px solid #dddddd;
    background-color: #dddddd;
    font-size: 12pt;
    font-weight: bold;
    padding: 5px;
}
.summary.scroll-to-fixed-fixed {
    margin-top: 0px;
}
.summary.scroll-to-fixed-fixed .caption {
    color: red;
}
.contents {
    width: 150px;
    margin: 10px;
    font-size: 80%;
}
.kakisoal{
	margin-left:15px;
	margin-bottom:10px;
	margin-right:15px;
	background-color:#fff;
	font-size:12px;
	font-weight:bold;
	height:70px;
	left:140px;

	}

.labelprev {
  display: block;
  padding: 10px 10px;
  font-size: 16px;
  margin: 5px auto;  
  background-color: #999;
  border-radius: 2px;
  cursor:pointer;
  width:200px;
  color:#FFF;  
  &:hover {
    cursor: pointer;
  }
}
.labelnext {
  display: block;
  padding: 10px 10px;
  font-size: 16px;
  float:right; 
  margin: 5px auto;   
  background-color: #336898;
  border-radius: 2px;
  cursor:pointer;
  width:200px;
  color:#FFF;  
  &:hover {
    cursor: pointer;
  }
}
input[type="checkbox"] {
  position: relative;
  top: 3px;
  font-size:18px;
    border: 2px solid black;
    width: 20px;
    height: 20px;
    margin: 0;
    padding: 0;
}
.flatRoundedCheckbox
{
    width: 120px;
    height: 40px;
    margin: 20px 50px;
    position: relative;
}
.flatRoundedCheckbox div
{
    width: 100%;
    height:100%;
    background: #d3d3d3;
    border-radius: 50px;
    position: relative;
    top:-30px;
}

</style>

   

<div class="kakisoal" id="kakisoal" style="width: 97.7%;">
 <section class="page-section soal-navigation">
<div class="container1" style="margin-left:-30px;">
         <div><label class="labele" style="padding-bottom:10px; padding-top:10px; width:225px">
    <input type="checkbox" autocomplete="off" onchange="ragu_ragu(1)">&nbsp;RAGU-RAGU</label>
	</div> <div><a onclick="selesai()">
<button class="btn btn-danger btn-next activebutton" style="margin-top:-13px; width:225px">SELESAI</button>                     
                 </a></div></div></section></div></div>
<style>

.labele {
  display: block;
  padding-top:6px;
  padding-bottom:6px;
  font-size: 16px;
  background-color: #eaca08;
  margin-top:-10px;
  padding-left:50px;
  border-radius: 2px;
  cursor:pointer;
  width:210px;
  color:#FFF;  
  &:hover {
    cursor: pointer;
  }
input[type="checkbox"] {
  position: relative;
  top: 3px;
  font-size:18px;
    border: 2px solid black;
    width: 20px;
    height: 20px;
    margin: 0;
    padding: 0;
}

</style>

<style>
#fontlembarsoal{
	margin-top:3px;
	margin-left:15px;
	margin-bottom:0px;
	margin-right:15px;
	background-color:#f0efef;
	font-size:12px;
	font-weight:bold;
	height:45px;
	left:40px;
	padding-top:10px;	
	padding-bottom:3px;	
	}

#tulisansoal{	
	background-color:#fff;
	height:90px;
	font-size:18px;
	font-weight:bold;
	vertical-align:middle;
	top:495px;
}
.tulisansoal{	
	background-color:#fff;
	height:90px;
	font-size:18px;
	font-weight:bold;
	vertical-align:middle;
	top:495px;
}
.nomersoal{	
	top:25px; width:100px;
	background-color:#336898;
	color:#fff;
	height:90px;
	font-size:18px;
	font-weight:bold;
	vertical-align:middle;	
	}	

#lembarsoal{
	margin-top:-8px;
	margin-left:15px;
	margin-bottom:2px;
	margin-right:15px;
	background-color:#fff;
	height:150%;
	    border-radius: 30px;
	border-style:solid;
	border-color:#999;
	}	
	
#hurufsoal{
    padding-left: 30px;
	padding-top:2px;
	padding-bottom:2px;
}

#tampilkan {
    background-color: #336898;
    width: 150px;
    height: 50px;
    margin-right: 20px;
	margin-top:-10px;
    line-height: 20px;
    color: white;
    font-size: 22px;
    text-align: center;
	padding-left:12px;
	padding-right:12px;	
	padding-top:14px;
	padding-bottom:14px;
	float:right;
}	
#kotaksoal{
	width:97%;
	margin:0px auto;
	padding:20px;
	border:solid;
	top:30px;
	border-color:#CCC;
	
}
p{
	padding:20px;
	font-size: 16px;
	}
li{
	list-style:none;
	font-size:18px;
	}

	#lembaran{
	padding:20px;
	margin-left:12px;
	margin-right:12px;
	top:-30px;
	font-size: 12pt;
	background-color:#fff;
	border:solid;
	border-color:#ccc;
	}	
	#lembaransoal{
	padding:20px;
	font-size: 12pt;
	border:solid;
	border-color:#ccc;
	}	
.soal	{
	font-size: 16pt;
	}
.jawaban	{
	padding-bottom:10px;
	font-size: 10pt;
	border:solid;
	border-color:#CCC;
	}	
.pilihanjawaban	{
	font-size: 16pt;
	padding-bottom:15px;
	}	

.noti-jawab {
    position:absolute;
    background-color:white;
    color:#999;
    padding:4px;
    -webkit-border-radius: 30px;
    -moz-border-radius: 30px;
    border-radius: 30px;
	border-style:solid;
	border-color:#999;
    width:30px;
    height:30px;
    text-align:center;
}

	
    </style>
    
<style>
.jawaban	{
	padding-bottom:10px;
	font-size: 10pt;
	border:solid;
	border-color:#CCC;
	}	
.noti-jawab {
    position:absolute;
    background-color:white;
    color:#999;
    padding:4px;
    -webkit-border-radius: 30px;
    -moz-border-radius: 30px;
    border-radius: 30px;
	border-style:solid;
	border-color:#999;
    width:27px;
    height:27px;
    text-align:center;
}

.flatRoundedCheckbox
{
    width: 120px;
    height: 40px;
    margin: 20px 50px;
    position: relative;
}
.flatRoundedCheckbox div
{
    width: 100%;
    height:100%;
    background: #d3d3d3;
    border-radius: 50px;
    position: relative;
    top:-30px;
}  		

.piljwb{
	margin-left:0;    
	border-radius: 30px;
	border-style:solid;
	border-color:#999;
	list-style:none;}

</style>
<!-- Slider !-->

<style>

#slideMenu.closed{
	right:-400px;
}

#slideMenu{
	position:fixed;
	right:0;
	top:120px;
	width:358px;
	height:500px;
	border-left:0px;
	background-color:#efefef;
	z-index:20;
}

#slideMenu a.toggleBtn{
	position:absolute;
	left:-440px;
	margin-left:300px;
	top:0;
	outline:none;
	display:block;
	height:50px;
	background-color:#e46f69;
	width:98px;
	border-width:1px 1px 1px 0px;
	padding:0 5px 0;
	color:#000;
	text-decoration:none;
	font:12px/25px Verdana, Arial, Helvetica, sans-serif;
	z-index:0;
}

#slideMenu a.toggleBtnHighlight{
	position:absolute;
	right:0px;
	margin-right:400px;	
	top:0;
	outline:none;
	display:block;
	height:47px;
	background-color:#e46f69;	
	width:35px;
	border-width:1px 1px 1px 0px;
	padding:0 5px 0;
	color:#000;
	text-decoration:none;
	font:12px/25px Verdana, Arial, Helvetica, sans-serif;
	z-index:0;
}

.contente{
	margin-top:20px;
	margin-left:20px;
	margin-bottom:20px;
	margin-right:20px;
	width:330px;
	z-index:20;
	border-style:solid;
	border:thin;
	border-color:#ccc;
	padding:20px;
	background-color:#FFF;
	overflow:scroll; height:460px;
	font:12px/25px Verdana, Arial, Helvetica, sans-serif;
}

@media (max-width: 500px) { /*breakpoint*/

	#slideMenu.closed{
		right:-240px;
	}
	
	#slideMenu{
		position:fixed;
		right:0;
		top:100px;
		width:238px;
		height:200px;
		border-left:0px;
		/*background-color:#efefef;*/
		background-color:#efefef;
		z-index:20;
	}
	#slideMenu a.toggleBtn{
		position:absolute;
		left:-260px;
		margin-left:160px;
		top:0;
		outline:none;
		display:block;
		height:50px;
		background-color:#e46f69;
		width:98px;
		border-width:1px 1px 1px 0px;
		padding:0 5px 0;
		color:#000;
		text-decoration:none;
		font:12px/25px Verdana, Arial, Helvetica, sans-serif;
		z-index:0;
	}
	#slideMenu a.toggleBtnHighlight{
		position:absolute;
		right:0px;
		margin-right:280px;	
		top:0;
		outline:none;
		display:block;
		height:47px;
		background-color:#e46f69;	
		width:35px;
		border-width:1px 1px 1px 0px;
		padding:0 5px 0;
		color:#000;
		text-decoration:none;
		font:12px/25px Verdana, Arial, Helvetica, sans-serif;
		z-index:60;
	}
	.contente{
		margin-top:20px;
		margin-left:20px;
		margin-bottom:20px;
		margin-right:20px;
		width:200px;
		z-index:20;
		border-style:solid;
		border:thin;
		border-color:#ccc;
		padding:20px;
		background-color:#FFF;
		overflow:scroll; height:160px;
		font:12px/25px Verdana, Arial, Helvetica, sans-serif;
	}
		
}

#noti-count {
    position:absolute;
    top:-12px;
    right:-15px;
    background-color:white;
    color:#313132;
    padding:5px;
    -webkit-border-radius: 30px;
    -moz-border-radius: 30px;
    border-radius: 30px;
	border-style:solid;
	border-color:#313132;
    width:27px;
    height:27px;
    text-align:center;
}








#noti-count div {
    margin-top:-5px;
}
</style>
<div id="slideMenu" class="closed" style="right: -400px;">
	<div class="contente">
<style>
#awal{
	color:#FFF;
	font-family:Arial, Helvetica, sans-serif;
	line-height: 90%;
	margin:0px auto;
	margin-top:20px;
}
#ahir{
	color:#FFF;
	font-family:Arial, Helvetica, sans-serif;
	line-height: 120%;
	margin:0px auto;
	margin-top:10px;
}
#noti-count {
    position:absolute;
    top:-12px;
    right:-15px;
    background-color:white;
    color:#313132;
    padding:5px;
    -webkit-border-radius: 30px;
    -moz-border-radius: 30px;
    border-radius: 30px;
	border-style:solid;
	border-color:#313132;
    width:30px;
    height:30px;
    text-align:center;
}
#noti-count div {
    margin-top:-5px;
}
</style>


<div id="container" style="text-align: center; height: 67px; position: relative;"> <a onclick="tampil_soal(1)" class="item  item-1 " id="tombil" style="position: absolute; left: 0px; top: 0px;"> 
             <div id="kotakz1">
           <p style="margin-top:-9px; margin-left:-9px; font-family:Arial, Helvetica, sans-serif; font-size:24px align=" center""="">
		   		  1</p>
           <div id="noti-count" style="border-color:#336898"><div>
	<span id="pilja1">0</span>    
           </div></div></div></a><br><br><br><br><br>
    
        </div>

    <style>
        #container
        {
			height:300px;
        }
        
        .item
        {
            width: 50px;
            height: 50px;
			border:#313132;
			color:#fff;
			border-style:solid;
            margin-bottom: 17px;
			font-size:22px;
			line-height:normal;
			position: absolute; 
			left: 72px; 
			top: 0px;
			background-color: rgb(49, 49, 50);
			color: rgb(255, 255, 255); 
			border-color: rgb(49, 49, 50); 
        }
/*Mengatur warna tombol nomor soal*/
.ijo{
background-color: rgb(0, 128, 0);
border-color: rgb(0, 128, 0);
}
.yellow{
	background-color: rgb(234, 202, 8); 
	border-color: rgb(234, 202, 8);
}
.biru{
background-color: rgb(51, 104, 152); 
border-color: rgb(51, 104, 152);

}


    </style>
</div>
	<a style="top:150px; right: -42px;" href="javascript:AlertIt();" class="toggleBtn" id="toggleLink">
    <div id="awal" style="display: none;" align="center"><font size="+3"> &gt; </font></div>
    <div id="ahir" style="display: block;"> <table border="0"><tbody><tr><td width="50px" valign="middle" align="center"><font size="+3" color="#FFFFFF">&lt; </font></td><td> 	
    <font size="-1" color="#FFFFFF">DAFTAR</font> <br><font size="-1" color="#FFFFFF"> SOAL</font></td></tr></tbody></table>
    </div></a>
</div>
                  <!-- Modal -->
<div class="modal fade" id="modal-selesai" role="dialog">
    <div class="modal-dialog">
<form onsubmit="return selesai_ujian(1)">
           <!-- Modal content-->
        <div class="modal-content">
            <div class="panel-default">
                <div class="panel-heading">
                    <h1 class="panel-title page-label">Konfirmasi Tes</h1>
                </div>
                <div class="panel-body">
                    <div class="inner-content">
                        <div class="wysiwyg-content">
                            <p>
                                Terimakasih telah berpartisipasi dalam tes ini.<br>
                                Silahkan klik tombol SELESAI untuk mengakhiri test.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="row" style="background-color:#fff">
                        <div class="col-xs-offset-3 col-xs-6">
						 

                            <button type="submit" class="btn btn-success" onclick="return selesai_ujian(1)">SELESAI</button>
                            <button type="submit" class="btn btn-danger" data-dismiss="modal">TIDAK</button>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </form>
 </div>

</div></div></div> 

   

<script src="js/jquery-scrolltofixed.js" type="text/javascript"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/common.js"></script>
<script src="js/main.js"></script>
<script src="js/cookieList.js"></script>
<script src="js/backend.js"></script>

</body>
</html>