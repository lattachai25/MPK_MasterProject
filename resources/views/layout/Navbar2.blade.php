
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav" >
        <ul>
            <li style="margin-left:30px;">
            <a href="">
            <img src="{{asset('img/icon_menu/MPK_logo-02.png')}}" width="150" alt="">
            </a>
            </li>
            <li style="margin-left:50px; margin-right:50px;"></li>

            <li class="{{ (request()->is('Home')) ? 'active' : '' }}">  
                <a href="{{ route('Home.index') }}">HOME</a>
            </li>

            <li class="{{ (request()->is('','select_your_bike','category','bike_for_sell')) ? 'active' : '' }}">  
            <a href="">PRODUCT</a>
            <!-- First Tier Drop Down -->
            <ul style="background-color:#f9f9f9; border:1px solid #000;">
                <li class="{{ (request()->is('select_your_bike')) ? 'active' : '' }}">  
                <a href="{{ route('select_your_bike.index') }}" style="font-size: 12px !important;">SELECT YOUR BIKE</a></li>
                <li class="{{ (request()->is('category')) ? 'active' : '' }}">  
                <a href="{{ route('category.index') }}" style="font-size: 12px !important;">CATEGORY</a>
              <!-- Second Tier Drop Down -->
              <ul style="border:1px solid #000; height:30px;">
                    <li><a style="font-size: 12px !important;" href="#">BRAKE SYSTEM</a></li>
                    <li><a style="font-size: 12px !important;" href="#">CARBON PARTS</a></li>
                    <li><a style="font-size: 12px !important;" href="#">ENGINE & CLUTCH</a></li>
                    <li><a style="font-size: 12px !important;" href="#">EXHUAST</a></li>
                    <li><a style="font-size: 12px !important;" href="#">FLUID TANK</a></li>
                    <li><a style="font-size: 12px !important;" href="#">GRIPS & HANDLEBAR</a></li>
                    <li><a style="font-size: 12px !important;" href="#">MAINTENANCE & CARE</a></li>
                    <li><a style="font-size: 12px !important;" href="#">MIRROR</a></li>
                    <li><a style="font-size: 12px !important;" href="#">PARTS & ACCESSORIES</a></li>
                    <li><a style="font-size: 12px !important;" href="#">PROTECTION</a></li>
                    <li><a style="font-size: 12px !important;" href="#">STEERING & SUSPENSION</a></li>
                    <li><a style="font-size: 12px !important;" href="#">TRANSMISSION</a></li>
                    <li><a style="font-size: 12px !important;" href="#">TURN SIGNAL LIHT</a></li>
                    <li><a style="font-size: 12px !important;" href="#">WHEELS</a></li>
                    <li><a style="font-size: 12px !important;" href="#">OTHER</a></li>
              </ul>           
              
              </li>
              <li class="{{ (request()->is('bike_for_sell')) ? 'active' : '' }}">  
                <a href="{{ route('bike_for_sell.index') }}" style="font-size: 12px !important;">BIKE FOR SELL</a></li>
            </ul>
            </li>
            <li class="{{ (request()->is('Promotion')) ? 'active' : '' }}">  
            <a href="{{ route('Promotion.index') }}">PROMOTION</a> 
            </li>
            <li class="{{ (request()->is('Service')) ? 'active' : '' }}">  
            <a href="{{ route('Service.index') }}">SERVICE</a>
            </li>
            <li class="{{ (request()->is('News')) ? 'active' : '' }}">  
            <a href="{{ route('News.index') }}">NEWS</a>
              <ul>
                    <li><a href="#">NEWS & UPDATE</a></li>
                    <li><a href="{{ route('News.index') }}">IDEA</a></li>
              </ul>  
            </li>
            <li class="{{ (request()->is('Gallery')) ? 'active' : '' }}">  
            <a href="{{ route('Gallery.index') }}">GALLERY</a></li>
            <li class="{{ (request()->is('About')) ? 'active' : '' }}">  
            <a href="{{ route('About.index') }}">ABOUT</a></li>
            <li style="width:170px">
            <input type="text" class="search_input_top" name="search" style="width:170px">
            <i class="fas fa-search search_top" style="margin-left:-20px; position: absolute; fone-size:20px; z-imdex:1;"></i>
            </li>
            <li class="{{ (request()->is('Register')) ? 'active' : '' }}">  
            <a href="{{ route('Register.index') }}">Register</a>
            </li>

            <li>  
            <a href="{{ route('Contact.index') }}"><i class="fas fa-map-marker-alt" class="{{ (request()->is('Register')) ? 'active2' : '' }}"></i></a>
            </li>

            <li><img src="{{asset('img/icon_menu/menu1_14.png')}}" width="90px" /></li>
        </ul>
    </nav>








