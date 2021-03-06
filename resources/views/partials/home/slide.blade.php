
<div id="rev_slider_1078_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classic4export" data-source="gallery" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
    <!-- START REVOLUTION SLIDER 5.3.0.2 auto mode -->
    <div id="rev_slider_1078_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.3.0.2">
        <div class="slotholder"></div>
        <ul><!-- SLIDE  -->

            @foreach($slides as $slide)
            <li data-index="rs-{{ $slide->id }}" data-transition="slideremovedown" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"    data-rotate="0"  data-saveperformance="off"  data-title="{{ $slide->title }}" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

                <!-- MAIN IMAGE -->
                <img src="/storage/{{ $slide->picture }}"  alt=""  data-bgposition="center center" data-kenburns="off" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->

                <!-- LAYER NR. 12 -->
                <div class="tp-caption title-slide"
                     id="slide-3049-layer-1"
                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                     data-y="['middle','middle','middle','middle']" data-voffset="['-95','-95','-95','-95']"
                     data-fontsize="['72','65','45','30']"
                     data-lineheight="['80','65','45','35']"
                     data-fontweight="['400','400','400','400']"
                     data-width="none"
                     data-height="none"
                     data-whitespace="nowrap"

                     data-type="text"
                     data-responsive_offset="on"

                     data-frames='[{"delay":100,"speed":2000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                     data-textAlign="['center','center','center','center']"
                     data-paddingtop="[10,10,10,10]"
                     data-paddingright="[0,0,0,0]"
                     data-paddingbottom="[0,0,0,0"
                     data-paddingleft="[0,0,0,0]"

                     style="z-index: 16; white-space: nowrap;text-transform:none;">{{ $slide->caption }}
                </div>

                <!-- LAYER NR. 13 -->
                <div class="tp-caption position sub-title"
                     id="slide-3049-layer-4"
                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                     data-y="['middle','middle','middle','middle']" data-voffset="['-150','-150','-30','-30']"
                     data-fontsize="['18',18','16','14']"
                     data-fontweight="['700','700','700','700']"
                     data-width="660"
                     data-height="none"
                     data-whitespace="nowrap"

                     data-type="text"
                     data-responsive_offset="on"

                     data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                     data-textAlign="['center','center','center','center']"
                     data-paddingtop="[0,0,0,0]"
                     data-paddingright="[0,0,0,0]"
                     data-paddingbottom="[0,0,0,0]"
                     data-paddingleft="[0,0,0,0]"

                     style="z-index: 17; white-space: nowrap;text-transform:none;">{{ $slide->title }}
                </div>

            </li>
            @endforeach


            <!-- SLIDE 2 -->
            {{--<li data-index="rs-3050" data-transition="fade" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"    data-rotate="0"  data-saveperformance="off"  data-title="Ken Burns" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">--}}

                {{--<!-- MAIN IMAGE -->--}}
                {{--<img src="assets/images/slides/3.jpg"  alt=""  data-bgposition="center center" data-kenburns="off" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>--}}
                {{--<!-- LAYERS -->--}}

                {{--<!-- LAYER NR. 12 -->--}}
                {{--<div class="tp-caption title-slide color-white"--}}
                     {{--id="slide-3050-layer-1"--}}
                     {{--data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"--}}
                     {{--data-y="['middle','middle','middle','middle']" data-voffset="['-95','-95','-95','-95']"--}}
                     {{--data-fontsize="['72','65','45','30']"--}}
                     {{--data-lineheight="['80','65','45','35']"--}}
                     {{--data-fontweight="['400','400','400','400']"--}}
                     {{--data-width="none"--}}
                     {{--data-height="none"--}}
                     {{--data-whitespace="nowrap"--}}

                     {{--data-type="text"--}}
                     {{--data-responsive_offset="on"--}}

                     {{--data-frames='[{"delay":100,"speed":2000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'--}}

                     {{--data-textAlign="['center','center','center','center']"--}}
                     {{--data-paddingtop="[10,10,10,10]"--}}
                     {{--data-paddingright="[0,0,0,0]"--}}
                     {{--data-paddingbottom="[0,0,0,0"--}}
                     {{--data-paddingleft="[0,0,0,0]"--}}

                     {{--style="z-index: 16; white-space: nowrap;text-transform:left;">The Premium Courses System--}}
                {{--</div>--}}

                {{--<!-- LAYER NR. 13 -->--}}
                {{--<div class="tp-caption position sub-title color-white"--}}
                     {{--id="slide-3050-layer-4"--}}
                     {{--data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"--}}
                     {{--data-y="['middle','middle','middle','middle']" data-voffset="['-150','-150','-30','-30']"--}}
                     {{--data-fontsize="['18',18','16','14']"--}}
                     {{--data-fontweight="['700','700','700','700']"--}}
                     {{--data-width="660"--}}
                     {{--data-height="none"--}}
                     {{--data-whitespace="nowrap"--}}

                     {{--data-type="text"--}}
                     {{--data-responsive_offset="on"--}}

                     {{--data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'--}}
                     {{--data-textAlign="['center','center','center','center']"--}}
                     {{--data-paddingtop="[0,0,0,0]"--}}
                     {{--data-paddingright="[0,0,0,0]"--}}
                     {{--data-paddingbottom="[0,0,0,0]"--}}
                     {{--data-paddingleft="[0,0,0,0]"--}}

                     {{--style="z-index: 17; white-space: nowrap;text-transform:left;">Intelligent that is the goal of true education--}}
                {{--</div>--}}

            {{--</li>--}}

        </ul>
    </div>
</div><!-- END REVOLUTION SLIDER -->