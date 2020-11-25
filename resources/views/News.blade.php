@extends('layout.Themepage2')

@section('content')


<style>

@font-face{
	        font-family: RSU;
	        
	        src:    url('rsu_light-webfont.eot');
            src:    url('rsu_light-webfont.eot?#iefix') format('embedded-opentype'),
                    url('rsu_light-webfont.woff') format('woff'),
                    url('rsu_light-webfont.ttf') format('truetype'),
                    url('rsu_light-webfont.svg#rsulight') format('svg');
        }


.bx-viewport, .bx-wrapper{
    position:relative;
    width:100%;
    height:auto!important;
    top:0;
    left:0;
}
.bx-wrapper .bx-controls-direction a {
    position: absolute;
    top: 50%;
    margin-top: -16px;
    outline: 0;
    width: 40px !important;
    height: 40px !important;
    text-indent: -9999px;
    z-index: 9999;
}
.bxslider, .bxslider li{
    height: 100% !important;
}
.bxslider li{
    background-repeat: no-repeat;
    background-position: top center;
    background-size: cover;
}
.bx-wrapper .bx-viewport{
    border: none !important;
}
.bx-wrapper {
    -moz-box-shadow: 0 0 0px #ccc !important;
    -webkit-box-shadow: 0 0 0px #ccc !important;
    box-shadow: 0 0 9px #ccc !important;
    border: 0px solid #fff !important;
    background: #fff !important;
}

.bx-wrapper .bx-prev {
    left: 22px;
    background: url(img/promotion/previous_black.png) no-repeat 6px -1px;
}
.bx-wrapper .bx-next {
    right: 10px;
    background: url(img/promotion/next_black.png) no-repeat 0px 5px;
}

.bx-wrapper {
    position: relative;
    margin-bottom: 0px!important;
    padding: 0;
    *: ;
    zoom: 1;
    -ms-touch-action: pan-y;
    touch-action: pan-y;
}
.bx-pager.bx-default-pager a.active, .bx-wrapper .bx-pager.bx-default-pager a:focus {
    background: #ff6634 !important;
}
.bx-pager.bx-default-pager a {
    color: #ff6634 !important;
    text-decoration: none;
    background-color: transparent;
}
.bx-wrapper .bx-pager.bx-default-pager a {
    background: #6660;
    text-indent: -9999px;
    display: block;
    width: 10px;
    height: 10px;
    margin: 0 5px;
    outline: 0;
    border: 2px solid;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
}

.container {
    position: relative;
    width: 100%;
    height: auto;
    padding: 0px;
}
}

.image {
  display: block;
  width: 190px;
  height:190px;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color: #ff5e0d;
}

.container:hover .overlay {
  opacity: 0.8;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
  border:2px solid #fff;
  padding:10px;
  width:200px;
}

.show_top{
    width:150px;
    margin-top: -5px;
    margin-left: -5px;
    position: absolute;
    color:#FFF;
    font-size: 15px;
    font-weight: 700;
    background-image:url("{{asset('img/promotion/orange.png')}}");
    background-repeat: no-repeat, repeat;
}
.show_top2{
    width:150px;
    margin-top: -5px;
    margin-left: -5px;
    position: absolute;
    color:#FFF;
    font-size: 15px;
    font-weight: 700;
    background-image:url("{{asset('img/promotion/red.png')}}");
    background-repeat: no-repeat, repeat;
}

.show_top3{
    width:150px;
    margin-top: -5px;
    margin-left: -5px;
    position: absolute;
    color:#FFF;
    font-size: 15px;
    font-weight: 700;
    background-image:url("{{asset('img/promotion/blue.png')}}");
    background-repeat: no-repeat, repeat;
}



.text_title{
    font-family: 'RSU';
    font-weight: bold;
    text-align:center;
    margin-top:50px;
    margin-bottom:50px;
    font-size:25px;
    color:#000;
}
.text_price1{
font-size:15px;
color:#bbbbbb;
font-weight: bold;
}
.text_price2{
  font-size:15px;
  color:#ff5e0d;
  font-weight: bold;
}

span{
   color:#ff6633; 
}

.line{
    width:50px;
    border-top:3px solid #000;
    height:10px;
    margin-bottom:10px;
}


.bg{
    margin-top:0px;
}


</style>


<div class="bg"></div>
<img src="{{asset('img/news/latest.png')}}" width="100%" alt=""/>
<br><br>
<div class="row">
<div class="col-12">
<img src="{{asset('img/news/slide.png')}}" width="100%" alt=""/>
</div>
</div>

<div class="row" style="margin-top:50px;">
        <div class="col-1"></div>
        <div class="col-10" style="min-height:500px;">
            <div class="row justify-content-center">
                <div class="col-11" style="min-height:500px;">

                    <div class="row">


<!-- box -->     
                        <div class="col-4">
                        <br>
                        <a href="{{ route('News_show.index') }}">
                            <div class="container">
                                <center>
                                <img src="{{asset('img/news/news1.jpg')}}" alt="Avatar" class="image" style="width:100%">
                                </center>
                                <div class="overlay">
                                    <div class="text">READ MORD <i class="fas fa-arrow-right"></i></div>
                                </div>
                            </div>
                        </a> 
                            <div class="row">
                                
                            <div class="col-12 text_title">
                                <center>
                                <div class="line"></div>
                                </center>
                                ทำไมต้องใส่กันล้ม?</div>
                            </div>
                              
                        </div>
<!-- box -->
<!-- box -->     
<div class="col-4">
                        <br>
                        <a href="{{ route('News_show.index') }}">
                            <div class="container">
                                <center>
                                <img src="{{asset('img/news/news2.jpg')}}" alt="Avatar" class="image" style="width:100%">
                                </center>
                                <div class="overlay">
                                    <div class="text">READ MORD <i class="fas fa-arrow-right"></i></div>
                                </div>
                            </div>
                        </a> 
                            <div class="row">
                                
                            <div class="col-12 text_title">
                                <center>
                                <div class="line"></div>
                                </center>
                                ระยะเวลาการใช้งานของแบตเตอรี่</div>
                            </div>
                              
                        </div>
<!-- box -->
<!-- box -->     
<div class="col-4">
                        <br>
                        <a href="{{ route('News_show.index') }}">
                            <div class="container">
                                <center>
                                <img src="{{asset('img/news/news3.jpg')}}" alt="Avatar" class="image" style="width:100%">
                                </center>
                                <div class="overlay">
                                    <div class="text">READ MORD <i class="fas fa-arrow-right"></i></div>
                                </div>
                            </div>
                        </a> 
                            <div class="row">
                                
                            <div class="col-12 text_title">
                                <center>
                                <div class="line"></div>
                                </center>
                                กันล้มมีกี่ส่วน มีประโยชน์อะไรบ้าง?</div>
                            </div>
                              
                        </div>
<!-- box -->
<!-- box -->     
<div class="col-4">
                        <br>
                        <a href="{{ route('News_show.index') }}">
                            <div class="container">
                                <center>
                                <img src="{{asset('img/news/news4.jpg')}}" alt="Avatar" class="image" style="width:100%">
                                </center>
                                <div class="overlay">
                                    <div class="text">READ MORD <i class="fas fa-arrow-right"></i></div>
                                </div>
                            </div>
                        </a> 
                            <div class="row">
                                
                            <div class="col-12 text_title">
                                <center>
                                <div class="line"></div>
                                </center>
                                การดูแลรักษาแบตเตอรี่</div>
                            </div>
                              
                        </div>
<!-- box -->
<!-- box -->     
<div class="col-4">
                        <br>
                        <a href="{{ route('News_show.index') }}">
                            <div class="container">
                                <center>
                                <img src="{{asset('img/news/news5.jpg')}}" alt="Avatar" class="image" style="width:100%">
                                </center>
                                <div class="overlay">
                                    <div class="text">READ MORD <i class="fas fa-arrow-right"></i></div>
                                </div>
                            </div>
                        </a> 
                            <div class="row">
                                
                            <div class="col-12 text_title">
                                <center>
                                <div class="line"></div>
                                </center>
                                เลือกกันล้มแบบไหนดี?</div>
                            </div>
                              
                        </div>
<!-- box -->
<!-- box -->     
<div class="col-4">
                        <br>
                        <a href="{{ route('News_show.index') }}">
                            <div class="container">
                                <center>
                                <img src="{{asset('img/news/news5.jpg')}}" alt="Avatar" class="image" style="width:100%">
                                </center>
                                <div class="overlay">
                                    <div class="text">READ MORD <i class="fas fa-arrow-right"></i></div>
                                </div>
                            </div>
                        </a> 
                            <div class="row">
                                
                            <div class="col-12 text_title">
                                <center>
                                <div class="line"></div>
                                </center>
                                ปลายแฮนด์ช่วยลดอาการมือชา</div>
                            </div>
                              
                        </div>
<!-- box -->
<!-- box -->     
<div class="col-4">
                        <br>
                        <a href="{{ route('News_show.index') }}">
                            <div class="container">
                                <center>
                                <img src="{{asset('img/news/news7.jpg')}}" alt="Avatar" class="image" style="width:100%">
                                </center>
                                <div class="overlay">
                                    <div class="text">READ MORD <i class="fas fa-arrow-right"></i></div>
                                </div>
                            </div>
                        </a> 
                            <div class="row">
                                
                            <div class="col-12 text_title">
                                <center>
                                <div class="line"></div>
                                </center>
                                อาการมือชาขณะขับมอเตอร์ไซค์<br>เกิดขึ้นได้อย่างไร?</div>
                            </div>
                              
                        </div>
<!-- box -->
<!-- box -->     
<div class="col-4">
                        <br>
                        <a href="{{ route('News_show.index') }}">
                            <div class="container">
                                <center>
                                <img src="{{asset('img/news/news8.jpg')}}" alt="Avatar" class="image" style="width:100%">
                                </center>
                                <div class="overlay">
                                    <div class="text">READ MORD <i class="fas fa-arrow-right"></i></div>
                                </div>
                            </div>
                        </a> 
                            <div class="row">
                                
                            <div class="col-12 text_title">
                                <center>
                                <div class="line"></div>
                                </center>
                                ปลายแฮนด์มีแบบไหนบ้าง?</div>
                            </div>
                              
                        </div>
<!-- box -->
<!-- box -->     
<div class="col-4">
                        <br>
                        <a href="{{ route('News_show.index') }}">
                            <div class="container">
                                <center>
                                <img src="{{asset('img/news/news9.jpg')}}" alt="Avatar" class="image" style="width:100%">
                                </center>
                                <div class="overlay">
                                    <div class="text">READ MORD <i class="fas fa-arrow-right"></i></div>
                                </div>
                            </div>
                        </a> 
                            <div class="row">
                                
                            <div class="col-12 text_title">
                                <center>
                                <div class="line"></div>
                                </center>
                                เลือกยี่ห้อกันล้ม?</div>
                            </div>
                              
                        </div>
<!-- box -->


                    </div>
                </div>
            </div>
        </div>
</div>

<br><br>
<img src="{{asset('img/promotion/03-13-06-2020_promotion_10.png')}}" width="100%" alt=""/>


   <script>
        $('.bxslider').bxSlider({
        pager: true,
        boolean:true,
        
        });
  </script>

@endsection
