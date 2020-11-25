@extends('layout.Themepage2')

@section('content')
<style>
.bg_select{
    height:500px;
    background-image:url('{{asset('img/product/BG_Selectyourvehicle.png')}}');
    background-repeat: no-repeat;
    background-size:cover;
    background-size:100% 100%;
}
.text_select{
    color:#ffff;
    text-align: center;
    font-size:35px;
    font-weight: 600;
}

#inputState{
    text-align:center;
    font-weight:bold;
    color:#ff6634;
    padding-left: 60px;
}
.bottom_searce{
    text-align:center;
    font-weight:bold;
    color:#fff;
    background:#ff6634;
}
.bottom_searce a{
    padding-top:7px;
    color:#fff;

}
.bar_item{
    width:100%;
    min-height:135px;
    background-image:url('{{asset('img/product/bar_top2.png')}}');
    background-repeat: no-repeat;
    background-size:cover;
    background-size:100% 100%;
}
.textbrand{
    margin-top:20px;
    font-size:35px;
    text-align:center;
    font-weight:bold;
    color:#ff6634;
}
.textbrand_sub{
    margin-top:10px;
    font-size:18px;
    text-align:center;
    font-weight:bold;
    color:#666666;  
}
.text_bmw{
    margin-left:50px;
    margin-top:100px;
    font-size:18px;
    text-align:left;
    font-weight:bold;
    color:#666666;   
}



.container {
  position: relative;
  width: 270px;
  height: 270px;
  border:1px solid #bbbbbb;
  padding: 5px;
}

.image {
  display: block;
  width: 220px;
  margin-top:30px;
  background-size: cover;
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
    margin-top:10px;
    font-size:17px;
    color:#000;
    font-weight: bold;
}
.text_price1{
font-size:15px;
color:#bbbbbb;
font-weight: bold;
}
.text_price2{
  padding-left:30px;
  font-size:15px;
  color:#ff5e0d;
  font-weight: bold;
}

span{
   color:#ff6633; 
}

.textmenu{
    font-size:14.5px;
}
.textmenu2{
    padding-left:25px;
    font-weight: 600;
    font-size:13.5px;
}



.sizemenu{
    color:#666666; 
    font-weight:bold; 
    padding-top:8px; 
    padding-bottom:8px;
}
.search{
    color:#ff6634;
    margin-top:25px;
}

.search_input{
  margin-top:20px;
  width:111%;
  height:30px;  
  border: none;
  border-bottom: 2px solid #ff6634;
  float:left;
  margin-left: -13px;
}
.search_input:focus {
    outline: none;
}
.unline{
    width:100%;
    border-bottom:1px solid #000;
    margin-bottom:10px;
}
.text_cate{
font-size:50px;
color:#ff6634;
}
</style>

<div class="bg" style="margin-top:80px;"></div>
<div class="row">
    <div class="col-12 bg_select">

    <div class="row">
    <div class="col-12" style="margin-top:160px;"></div>
</div>
<div class="row">
    <div class="col-3"></div>
    <div class="col-6 text_select"> SELECT YOUR BIKE  </div>
    <div class="col-3"></div>
</div>

<div class="row" style="margin-top:100px;">
<div class="col-2"></div>
<div class="col-8">
    <div class="form-row">
    <div class="form-group col-md-3">
        <select id="inputState" class="form-control">
            <option selected> BRAND <i class="far fa-caret-circle-down"></i> </option>
            <option>ADG</option>
            <option>Aella</option>
            <option>Alpha Racing</option>
            <option>Austin Racing</option>
            <option>Bonamici</option>
            <option>Brembo</option>
            <option>CNC RACING</option>
            <option>Delight</option>
            <option>Desmoworld</option>
            <option>Dinavolt</option>
            <option>DP</option>
            <option>Far</option>
            <option>Futurismoto</option>
            <option>GB Racing</option>
            <option>GIAMOTO</option>
            <option>Hex escan</option>
            <option>Jetprime</option>
            <option>Kellermann</option>
            <option>Kohken</option>
            <option>Luimoto</option>
            <option>Magical Racing</option>
            <option>Motogadget</option>
            <option>Motul</option>
            <option>MPK</option>
            <option>MRA</option>
            <option>Nexzter</option>
            <option>NRC</option>
            <option>Optimate</option>
            <option>PVM</option>
            <option>Rizoma</option>
            <option>RK CHAIN</option>
            <option>STM Rock</option>
            <option>Suter</option>
            <option>Woodcraft</option>
            <option>Yuasa</option>
        </select>
        </div>

        <div class="form-group col-md-3">
        <select id="inputState" class="form-control">
            <option selected> MODEL <i class="far fa-caret-circle-down"></i></option>
            <option> 1098/SF/Diavel</option>
            <option>1199</option>
            <option>1199/899</option>
            <option>1299/959</option>
            <option>748/848/916/996/998/1098/1198</option>
            <option>795/796</option>
            <option>899</option>
            <option>899/1299</option>
            <option>899/959/1199/1299 Panigale </option>
            <option>959/899/1199/1299 panigale</option>
            <option>BMW</option>
            <option>BMW C600Sport /C650GT</option>
            <option>BMW R9T</option>
            <option>C600</option>
            <option>C600/C650</option>
            <option>CBR1000R 2018</option>
            <option>CBR600R</option>
            <option>CBR600RR</option>
            <option>Classic</option>
            <option>DIAVEL</option>
            <option>Diavel / Monster</option>
            <option>Diavel /1199</option>
            <option>DIAVEL /M821/M1200</option>
            <option>Diavel 2012</option>
            <option>Diavel 2012-14</option>
            <option>Diavel 2014</option>
            <option>Diavel 2015</option>
            <option>Diavel,1098-1198,Multi 1200,SF</option>
            <option>Diavel,1098-1198,Multi 1200,SF/Panigale1199/1299/V4</option>
            <option>Diavel/Hyper821/939,Monster797/821/1200,MTS950/1200/1260</option>
            <option>Diavel/Xdiavel/Hyper1100</option>
            <option>DUCATI</option>
            <option>Ducati Scrambler </option>
            <option>ER6N '09 up</option>
            <option>ER-6N 2012</option>
            <option>F800R/ R1200GS/ S1000RR</option>
            <option>GS1200</option>
            <option>gsxr1000 -9-11</option>
            <option>hyp821</option>
            <option>Hyper 1100</option>
            <option>HYPER796</option>
            <option>Hyper796/Monster796/1100/ MTS1200/1260/Scrambler</option>
            <option>Hyper821</option>
            <option>Hyper821/Monster821/Multistrada</option>
            <option>Hyper821/MTS</option>
            <option>Hypermotard 796/1100</option>
            <option>Hypermotard 821</option>
            <option>Hypermotard/Strada 2013</option>
            <option>Kawasaki all</option>
            <option>M795/796</option>
            <option>M796/1100/848</option>
            <option>M796/HYP821</option>
            <option>M797/M1200 '17/M821 2018</option>
            <option>M821 14-17</option>
            <option>M821/795/796</option>
            <option>Monster</option>
            <option>Monster 696/796/1100</option>
            <option>Monster 796/1100, Hyper796/821/939,SF848</option>
        </select>
        </div>

        <div class="form-group col-md-3">
        <select id="inputState" class="form-control">
            <option selected> YEAR <i class="far fa-caret-circle-down"></i></option>
            <option>2020</option>
            <option>2019</option>
            <option>2018</option>
            <option>2017</option>
            <option>2016</option>
            <option>2015</option>
            <option>2014</option>
            <option>2013</option>
            <option>2012</option>
            <option>2011</option>
            <option>2010</option>
            <option>2000</option>
            

        </select>
        </div>

        <div class="form-group col-md-2 bottom_searce">
        <a href="" type="submit" > SEARCE </a>
        </div>
    </div>
    </div>
</div>

    </div>
</div>

<!-- row min-height -->
<div class="row">
<div class="col-12" style="background:#fff; min-height:800px;">
    <div class="row">
        <div class="col-4 text_bmw">
        HOME / CATEGORY / BRAKE / DISC BRAKE
        <div class="text_cate">
        DISC BARAKE
        </div> 
        </div>   
        <div class="col-7" style="margin-top: 40px;">
        <img src="{{asset('img/product/bar_right.png')}}" style="float:right;" width="100%" alt=""/>
        </div>

    </div>

<!-- barBMW -->
<div class="row" style="margin-top:50px;">
<div class="col-1"></div>
<div class="col-2">
<div class="row">
    <div class="col-12">

        <div class="row">
        <div class="col-12"> <br></div>        
        <div class="unline">
                <div class="row">  
                <div class="col-6" style="color:#ff6634; font-weight:bold; font-size:18px; ">FILTERS</div>
                <div class="col-6" style="color:#ff6634; font-weight:bold; font-size:12px; margin-bottom:-10px; text-align: right;">RESET FILTERS</div>
                </div> 
            </div>
        </div>
        <div class="row" style="background:#000; font-weight:bold;color:#fff; padding-top:6px; padding-bottom:5px;"> 
            <div class="col-10 textmenu"> CATEGORY </div>
            <div class="col-1"> - </div>
        </div>

        <div class="row" style="color:#666666; font-weight:bold; margin-top:15px; padding-top:8px; padding-bottom:8px;"> 
            <div class="col-10 textmenu" style="color:#ff6634;"> BRAKE SYSTEM </div>
            <div class="col-1"> + </div>
        </div>
        <div class="row sizemenu"> 
            <div class="col-12 textmenu2"> BRAKE MASTER CYLINDER </div>
        </div>
        <div class="row sizemenu"> 
            <div class="col-12 textmenu2"> CLUTCH MASTER CYLINDER </div>
        </div>
        <div class="row sizemenu"> 
            <div class="col-12 textmenu2"> REAR BRAKE MASTER CYLINDER </div>
        </div>
        <div class="row sizemenu"> 
            <div class="col-12 textmenu2"> FRONT CALIPER </div>
        </div>
        <div class="row sizemenu"> 
            <div class="col-12 textmenu2"> REAR CALIPER </div>
        </div>
        <div class="row sizemenu"> 
            <div class="col-12 textmenu2" style="color:#ff6634;"> DISC BRAKE </div>
        </div>
        <div class="row sizemenu"> 
            <div class="col-12 textmenu2"> BRAKE PAD </div>
        </div>
        <div class="row sizemenu"> 
            <div class="col-12 textmenu2"> SWITCH </div>
        </div>



        <div class="row sizemenu"> 
            <div class="col-10 textmenu"> CARBON PARTS </div>
            <div class="col-1">  </div>
        </div>
        <div class="row sizemenu"> 
            <div class="col-10 textmenu"> ENGINE & CLUTCH </div>
            <div class="col-1"> + </div>
        </div>

        <div class="row sizemenu"> 
            <div class="col-10"> EXHAUST </div>
            <div class="col-1">  </div>
        </div>

        <div class="row sizemenu"> 
            <div class="col-10 textmenu"> FLUID TANK</div>
            <div class="col-1">  </div>
        </div>
        <div class="row sizemenu"> 
            <div class="col-10 textmenu"> GRIPS & HANDLEBAR </div>
            <div class="col-1"> + </div>
        </div>
        <div class="row sizemenu"> 
            <div class="col-10 textmenu"> INDICATOR LIGHT </div>
            <div class="col-1">  </div>
        </div>
        <div class="row sizemenu"> 
            <div class="col-10 textmenu"> MAINTENANCE & CARE </div>
            <div class="col-1"> + </div>
        </div>
        <div class="row sizemenu"> 
            <div class="col-10 textmenu"> MIRROR</div>
            <div class="col-1">  </div>
        </div>
        <div class="row sizemenu"> 
            <div class="col-10 textmenu"> PARTS & ACCESSORIES </div>
            <div class="col-1"> + </div>
        </div>
        <div class="row sizemenu"> 
            <div class="col-10 textmenu"> PROTECTION </div>
            <div class="col-1"> + </div>
        </div>
        <div class="row sizemenu"> 
            <div class="col-10 textmenu"> STEERING & SUSPENSION </div>
            <div class="col-1"> + </div>
        </div>
        <div class="row sizemenu"> 
            <div class="col-10 textmenu"> TRANSMISSION </div>
            <div class="col-1"> + </div>
        </div>
        <div class="row sizemenu"> 
            <div class="col-10 textmenu"> TRAN IGNAL LIGHT </div>
            <div class="col-1"> + </div>
        </div>
        <div class="row sizemenu"> 
            <div class="col-10 textmenu"> WHEELS </div>
            <div class="col-1"> + </div>
        </div>
        <div class="row sizemenu"> 
            <div class="col-10 textmenu"> OTHER </div>
            <div class="col-1"> + </div>
        </div>
    </div>


    <div class="col-12" style="background:#000; color:#fff; font-weight:bold; font-size:14px; padding-top:8px; padding-bottom:8px;">BRAND</div>
    <div class="col-12 input">

    <input type="text" class="search_input" name="search" width="48">
    <i class="fas fa-search search" style="margin-left:-20px; position: absolute; fone-size:20px; z-imdex:1;"></i>
    </div>

</div>


</div>
<div class="col-8">
    <div class="row"><!-- row Bar -->
        <div class="col-2" style="margin-left: 20px;
         color:#666666; font-size:14px; font-weight:bold; padding-top:60px;"> 15 ITEMS </div>
        <div class="col-10"> </div>
    </div><!-- row Bar -->



    <!-- ROW BOX -->
    <div class="row">
    <div class="col-1"></div>
    <div class="col-10">
    <div class="row">
                         @for ($i = 1; $i < 13; $i++)
                        <div class="col-4">
                        <a href="http://">
                        <br>
                            <div class="container">
                                <center>
                                <img src="{{asset('img/product/category/6.png')}}" class="image" />
                                </center>
                                <!-- <div class="overlay">
                                    <div class="text">READ MORD <i class="fas fa-arrow-right"></i></div>
                                </div> -->
                            </div>
                            </a> 

                            <div class="row">
                                <div class="col-12 text_title">BRAKE DISC 321X6 EVO S1000 RR 2019</div>
                                <div class="col-12" style="height:10px;"></div>
                                <div class="col-2 text_price1"><s>฿3,210</s></div>
                                <div class="col-2 text_price2">฿1,234</div>
                                <div class="col-5"></div>
                                <div class="col-2"><img src="{{asset('img/promotion/cart.png')}}" width="20px"></div>
                            </div>
                        </div>
                    @endfor
    </div>
    </div>
    </div>
    <!-- ROW BOX -->

    <br>
    <div class="row">
                <div class="col-4"></div>
                    <div class="col-4">
                    <img src="{{asset('img/gallery/back_orange.png')}}"  width="10px" />
                     &nbsp; &nbsp; 1 &nbsp; &nbsp; 2 &nbsp; &nbsp; 3 &nbsp; &nbsp; 4 &nbsp; &nbsp; 5 &nbsp; &nbsp; <span> 6 </span>&nbsp; &nbsp; 
                    <img src="{{asset('img/gallery/next_orange.png')}}"  width="10px" />
                     </div>
                <div class="col-4"></div>     
            </div>        
    <br>            
        </div>
    <img src="{{asset('img/product/bat_footer.png')}}" style="float:right;" width="100%" alt=""/>
</div>
</div>

</div>
</div><!-- row min-height -->
@endsection