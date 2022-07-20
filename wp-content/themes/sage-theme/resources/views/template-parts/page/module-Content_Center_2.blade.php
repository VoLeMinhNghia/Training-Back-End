<div class="container relative font-poppins w-full m-auto xx:-mt-41 xx:ml-0 2xl:-mt-30 2xl:ml-9 lg:ml-3 md:-mt-37">  
    <div class="container">
        <div class="pic2 md:rotate-90 lg:rotate-0 2xl:w-27.5-per md:w-16-per absolute xx:left-350 xx:top-5 2xl:top-5 2xl:left-334 lg:w-16-per lg:left-234 lg:top-9 md:top-338 md:left-319">
            <img class="inline-block" src="{{$data->module['pic2']->url}}" alt="{{$data->module['pic2']->alt}}">
        </div>
        <div class="pic4 md:rotate-90 lg:rotate-0 2xl:w-27.5-per md:w-16-per absolute xx:right-358 xx:top-4 2xl:right-370 2xl:top-4 lg:w-16-per lg:right-247 lg:top-9 md:top-801 md:right-322">
                    <img class="inline-block" src="{{$data->module['pic4']->url}}" alt="{{$data->module['pic4']->alt}}">
        </div>
        <div class="lg:row md:col w-full relative xx:h-556 xx:ml-18">
            @foreach ($data->module['content'] as $item)
                <div class="para1 col xx:w-30-per h-445 2xl:w-32-per lg:w-33-per xx:ml-8 md:w-full text-center float-left">
                    <div class="pic1 2xl:h-46 lg:h-46 md:h-39">
                        <img class="inline-block" src="{{$item->icon->url}}" alt="">
                    </div>
                    <div class="content text-center m-auto xx:w-77-per 2xl:w-75-per lg:w-full md:w-95-per xx:h-436">
                        <div class="title font-semibold text-2xl m-auto text-center">
                            @if($item->content)
                                {!! $item->content !!}
                            @endif
                        </div>
                        <div class="para font-light text-lg m-auto leading-6">
                            @if($item->para)
                                <p>{!! $item->para !!}</p>
                            @endif
                            {{-- <div class="explore1" style="display:none">
                                -tier automation, process.
                            </div> --}}
                        </div>
                        <div class="flip_a text-base font-bold">
                            <p class="align-bottom btn-slick-none">
                                @if($item->link->url)
                                    <a class="no-underline" href="{{$item->link->url}}" target="{{$item->link->target}}">{{$item->link->title}}</a>
                                @endif
                                <span class="icomoon icon-chevron-right"></span>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{-- @foreach ($data->module['content'] as $item)
        <img src="{{$item->icon->url}}" alt="">
        @if($item->content)
            <p>{!! $item->content !!}</p>
        @endif
        @if($item->link->url)
            <a href="{{$item->link->url}}" target="{{$item->link->target}}">{{$item->link->title}}</a>
        @endif
    @endforeach --}}
</div>