<style>
.menu-area{background: #f7f7f7;}
.dropdown-menu{
    padding:0;
    margin:0;
    border:0 solid transition!important;
    border:0 solid rgba(0,0,0,.15);
    border-radius:0;
    -webkit-box-shadow:none!important;
    box-shadow:none!important;
 }
.mainmenu a, .navbar-default .navbar-nav > li > a, .mainmenu ul li a , .navbar-expand-lg .navbar-nav .nav-link
{
 color:#000;
 font-weight: bold;
 font-size:16px;
 text-transform:capitalize;
 padding:0px 20px;
 display: block !important;
 }
.mainmenu .active a,
.mainmenu .active a:focus,
.mainmenu .active a:hover,
.mainmenu li a:hover,
.mainmenu li a:focus,
.navbar-default .navbar-nav>.show>a,
.navbar-default .navbar-nav>.show>a:focus,
.navbar-default .navbar-nav>.show>a:hover{
  color:#000;
  background:#f7f7f7;
  outline: 0;
  }
/*==========Sub Menu=v==========*/
.mainmenu .collapse ul > li:hover > a{background:  #FFF;}
.mainmenu .collapse ul ul > li:hover > a,
.navbar-default .navbar-nav .show .dropdown-menu > li > a:focus,
.navbar-default .navbar-nav .show .dropdown-menu > li > a:hover{background:#f7f7f7; height: 0px;}
.mainmenu .collapse ul ul ul > li:hover > a{background:  #FFF;}

.mainmenu .collapse ul ul, .mainmenu .collapse ul ul.dropdown-menu{background:#e2e0e1;}
.mainmenu .collapse ul ul ul, .mainmenu .collapse ul ul ul.dropdown-menu{background:#e2e0e1}
.mainmenu .collapse ul ul ul ul, .mainmenu .collapse ul ul ul ul.dropdown-menu{background:#e2e0e1}

/******************************Drop-down menu work on hover**********************************/
.mainmenu{background: none;border: 0 solid;margin: 0;padding: 0;min-height:20px;width: 100%;}
@media only screen and (min-width: 767px) {
.mainmenu .collapse ul li:hover> ul{display:block}
.mainmenu .collapse ul ul{position:absolute;top:100%;left:0;min-width:250px;display:none}
/*******/
.mainmenu .collapse ul ul li{position:relative; height: 38px; }
.mainmenu .collapse ul ul li:hover> ul{display:block}
.mainmenu .collapse ul ul ul{position:absolute;top:0;left:100%;min-width:250px;display:none}
/*******/
.mainmenu .collapse ul ul ul li{position:relative}
.mainmenu .collapse ul ul ul li:hover ul{display:block}
.mainmenu .collapse ul ul ul ul{position:absolute;top:0;left:-100%;min-width:250px;display:none;z-index:1}

}
@media only screen and (max-width: 767px) {
.navbar-nav .show .dropdown-menu .dropdown-menu > li > a{padding:16px 15px 16px 35px}
.navbar-nav .show .dropdown-menu .dropdown-menu .dropdown-menu > li > a{padding:16px 15px 16px 45px}
}
nav ul ul li {
    width: 100% !important;
    float: none;
    display: list-item;
    position: relative;
}

nav ul ul ul li {
    position: relative;
    top: 0px !important;
    left: 0px !important;
}
.search_input_top{
	margin-top: 0px;
    width: 68%;
    height: 40px;
    border: none;
    margin-top:0px;
    border-bottom: 3px solid #000;
    float: left;
    margin-left: 7px;
    background-color: transparent;
}
.search_input_top:focus {
    margin-top:20px;
  -webkit-box-shadow: none;
  box-shadow: none;
  outline: none;
}

.mainmenu .collapse ul > li> a {

    padding-top: 20px !important;
    padding-bottom: 20px !important;
}





a:hover {
    color: #040100;
    text-decoration-color: #ff6634;
    -moz-text-decoration-color: #ff6634;
}

.mainmenu .collapse ul > li:hover > a {
    background: #FFF;
    padding-top: 20px !important;
    padding-bottom: 20px !important;
}

.active {
    background: #FFF;
    padding-top: 20px !important;
    padding-bottom: 20px !important;
}
</style>


<div id="menu_area" class="menu-area">
        <div class="row">
            <nav class="navbar navbar-light navbar-expand-lg mainmenu">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-top:30px;">
                    <ul class="navbar-nav mr-auto">
                    <a href="" style="margin-left:40px;">
                    <img src="{{asset('img/icon_menu/MPK_logo-02.png')}}" width="150" alt="" style="margin-top:-20px;">
                    </a>
                        <li style="margin-left:50px;"></li>
                        <li><a class="{{ (request()->is('Home')) ? 'active' : '' }}" href="{{ route('Home.index') }}">HOME</a></li>
                        <li class="dropdown {{ (request()->is('','select_your_bike','category','bike_for_sell')) ? 'active' : '' }}">
                            <a href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PRODUCT</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li class="{{ (request()->is('select_your_bike')) ? 'active' : '' }}"><a href="{{ route('select_your_bike.index') }}" style="margin-botton:10px;">SELECT YOUR BIKE</a></li>

                            <li class="{{ (request()->is('category')) ? 'active' : '' }}">
                                <a class="dropdown-toggle" href="{{ route('category.index') }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CATEGORY</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a style="font-size: 16px !important;" href="#">BRAKE SYSTEM</a></li>
                                <li><a style="font-size: 16px !important;" href="#">CARBON PARTS</a></li>
                                <li><a style="font-size: 16px !important;" href="#">ENGINE & CLUTCH</a></li>
                                <li><a style="font-size: 16px !important;" href="#">EXHUAST</a></li>
                                <li><a style="font-size: 16px !important;" href="#">FLUID TANK</a></li>
                                <li><a style="font-size: 16px !important;" href="#">GRIPS & HANDLEBAR</a></li>
                                <li><a style="font-size: 16px !important;" href="#">MAINTENANCE & CARE</a></li>
                                <li><a style="font-size: 16px !important;" href="#">MIRROR</a></li>
                                <li><a style="font-size: 16px !important;" href="#">PARTS & ACCESSORIES</a></li>
                                <li><a style="font-size: 16px !important;" href="#">PROTECTION</a></li>
                                <li><a style="font-size: 16px !important;" href="#">STEERING & SUSPENSION</a></li>
                                <li><a style="font-size: 16px !important;" href="#">TRANSMISSION</a></li>
                                <li><a style="font-size: 16px !important;" href="#">TURN SIGNAL LIHT</a></li>
                                <li><a style="font-size: 16px !important;" href="#">WHEELS</a></li>
                                <li><a style="font-size: 16px !important;" href="#">OTHER</a></li>
                                </ul>
                            </li>
                            <li><a class="{{ (request()->is('bike_for_sell')) ? 'active' : '' }}" href="{{ route('bike_for_sell.index') }}">BIKE FOR SELL</a></li>
                            </ul>
                        </li>
                        <li >  
                        <a class="{{ (request()->is('Promotion')) ? 'active' : '' }}" href="{{ route('Promotion.index') }}">PROMOTION</a> 
                        </li>
                        <li >  
                        <a class="{{ (request()->is('Service')) ? 'active' : '' }}" href="{{ route('Service.index') }}">SERVICE</a>
                        </li>

                        <li class="dropdown">
                                <a class="{{ (request()->is('News')) ? 'active' : '' }}" href="{{ route('News.index') }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">NEWS</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a href="#">NEWS & UPDATE</a></li>
                                <li><a href="{{ route('News.index') }}">IDEA</a></li>
                                </ul>
                            </li>
                        <li >  
                        <a class="{{ (request()->is('Gallery')) ? 'active' : '' }}" href="{{ route('Gallery.index') }}">GALLERY</a>
                        </li>
                        <li >  
                        <a class="{{ (request()->is('About')) ? 'active' : '' }}" href="{{ route('About.index') }}">ABOUT</a>
                        </li>
                        <li style="width:170px">
                        <input type="text" class="search_input_top" name="search" style="width:170px">
                        <i class="fas fa-search search_top" style="margin-left:-20px; position: absolute; margin-top:20px; fone-size:20px; z-imdex:1;"></i>
                        </li>
                        <li >  
                        <a class="{{ (request()->is('Register')) ? 'active' : '' }}" href="{{ route('Register.index') }}">Register</a>
                        </li>

                        <li>  
                        <a href="{{ route('Contact.index') }}"><i class="fas fa-map-marker-alt" style="margin-top:0px;" class="{{ (request()->is('Register')) ? 'active2' : '' }}"></i></a>
                        </li>

                        <li>
                        <img onclick="showSpoiler(this);" src="{{asset('img/icon_menu/menu1_14.png')}}" width="90px" style="margin-top:-10px;" />
                        <div class="inner" style="display:none; width: 340px; margin-left:-250px; top: 120px; position: absolute; z-index:99; background-color: #FFF;">
                        <div class="col-12">

                                <div class="row">
                                <div class="col-12" style="font-weight: bold; margin-top:20px; color: #000;">
                               <span>MPK CONCEPT - </span> The authorized <br>
                               import / distributing center of <br>
                               superbikes’ world leading brand <br>
                               parts and accessories with fully <br>
                               one stop service.
                                </div>
                                </div>


                                <div class="text_title" style="font-weight: bold; color: #ff6634;"> QUICK INFO </div>
                                <div class="box_line" style="font-weight: bold;">
                            <br>
                                <div class="row" style="margin-top:10px; font-weight: bold;">
                                <div class="col-1"><img src="{{asset('img/contact/location_orange.png')}}" width="15px" alt=""/></div> 
                                <div class="col-10" style="color: #000;">1097 Rama 3 Rd. <br>Chong Nonsi  Yannawa, <br>Bangkok 10120</div>
                                </div>

                                <div class="row" style="margin-top:10px; font-weight: bold;">
                                <div class="col-1"><img src="{{asset('img/contact/time_orange.png')}}" width="15px" alt=""/></div> 
                                <div class="col-10" style="color: #000;">Mon-Sat : 10am - 6.30pm</div>
                                </div>

                                <div class="row" style="margin-top:10px; font-weight: bold;">
                                <div class="col-1"><img src="{{asset('img/contact/tel_orange.png')}}" width="15px" alt=""/></div> 
                                <div class="col-10" style="color: #000;">(+66)86-326-1730</div>
                                </div>

                                <div class="row" style="margin-top:10px; font-weight: bold;">
                                <div class="col-1"><img src="{{asset('img/contact/mail_orange.png')}}" width="15px" alt=""/></div> 
                                <div class="col-10" style="color: #000;">mpkconcept.th@gmail.com</div>
                                </div>


                                <div class="row" style="margin-top:10px; font-weight: bold;">
                                <div class="col-1"><img src="{{asset('img/contact/chat_orange.png')}}" width="25px" alt=""/></div> 
                                <div class="col-10" style="color: #000;">@mpkconcept</div>
                                </div>
                            <br><br>
                            </div>
                        </div>
                        </div>
                        
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
</div>





<script>
(function($){
	$('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
	  if (!$(this).next().hasClass('show')) {
		$(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
	  }
	  var $subMenu = $(this).next(".dropdown-menu");
	  $subMenu.toggleClass('show');

	  $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
		$('.dropdown-submenu .show').removeClass("show");
	  });

	  return false;
	});
})(jQuery)
</script>


<script type="text/javascript">
function showSpoiler(obj)
    {
    var inner = obj.parentNode.getElementsByTagName("div")[0];
    if (inner.style.display == "none")
        inner.style.display = "";
    else
        inner.style.display = "none";
    }
    </script>