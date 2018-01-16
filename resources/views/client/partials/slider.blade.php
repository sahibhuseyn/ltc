<!-- Master Slider -->
<div class="overflo-h">
    <div class="master-slider ms-skin-default" id="masterslider">

        @foreach($sliders as $slider)

            <div class="ms-slide slide-1" data-delay="9"> <img src="{{ url('/uploads/'.$slider->image) }}" class="img-responsive" alt=""/>
                <h3 class="ms-layer text-center full-width text-title margin-top"
                    style="top:220px;left:0px;"
                    data-type="text"
                    data-delay="1000"
                    data-ease="easeOutExpo"
                    data-duration="1230"
                    data-effect="bottom(250)"><span class="orange">{{ $slider->orange_caption }}</span> <span class="text-white"> {{ $slider->white_caption }}</span> </h3>
                <h3 class="ms-layer text-center text-subtitle full-width margin-top"
                    style="top:330px;left:0; right:0;"
                    data-type="text"
                    data-delay="1500"
                    data-ease="easeOutExpo"
                    data-duration="1230"
                    data-effect="bottom(250)">{{ $slider->overlay }}</h3>

                <p class="ms-layer text-center full-width margin-top"
                   style="top:410px;right:0;"
                   data-type="text"
                   data-delay="2500"
                   data-ease="easeOutExpo"
                   data-duration="1230"
                   data-effect="bottom(250)"><a href=" {{ $slider->btn_url }}" class="btn btn-radius2 rounded-0  btn-xs text-uppercase">{{ $slider->btn_name }} </a></p>


            </div>


        @endforeach

    </div>
</div>
