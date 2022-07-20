<section class="container font-poppins xx:-ml-300 w-full absolute xx:-mt-254 2xl:-mt-205 lg:-mt-216 md:-mt-336">
    <div class="bg-cover xx:w-156-per xx:h-507 2xl:w-143-per 2xl:-left-35 lg:-left-200 right-0 top-0 bottom-0 lg:h-460 md:h-700 absolute z-1 lg:w-120-per md:w-250-per md:-left-877" style="background-image:url({{$data->module['background']->url}})" ></div>
    <div class="container">
        <div class="logo">
            <img class="absolute z-2 xx:top-319 xx:left-384 2xl:left-47 2xl:top-280 lg:top-284 lg:left-33 md:top-414 md:left-242" src="{{$data->module['logo']->url}}" alt="{{$data->module['logo']->alt}}">
        </div>
        <div class="sm">
            <img class="absolute z-2 xx:top-390 xx:left-383 2xl:left-47 2xl:top-352 lg:top-354 lg:left-33 md:top-469 md:left-263" src="{{$data->module['sm']->url}}" alt="{{$data->module['logo']->alt}}">
        </div>
        <div class="menu xx:w-42-per 2xl:w-42-per flex flex-row text-base font-semibold absolute z-2 xx:top-392
         xx:left-678 2xl:left-385 2xl:top-352 lg:top-352 lg:left-358 lg:w-56-per md:top-532 md:left-33 md:w-78-per">
            <div class="btn-white w-1/3">
                <a class="no-underline" href="{{$data->module['orchestra']->url}}" target="{{$data->module['orchestra']->target}}">{{$data->module['orchestra']->title}}</a>
            </div>
            <div class="btn-white w-1/3 pl-2">
                <a class="no-underline" href="{{$data->module['encompass']->url}}" target="{{$data->module['encompass']->target}}">{{$data->module['encompass']->title}}</a>
            </div>
            <div class="btn-white w-1/3 pl-18">
                <a class="no-underline" href="{{$data->module['handoff']->url}}" target="{{$data->module['handoff']->target}}">{{$data->module['handoff']->title}}</a>
            </div>
        </div>
        <div class="btn-green font-extrabold text-base text-center rounded-full border-solid border-2 border-white pt-5 xx:w-15-per h-22 
        absolute z-2 xx:top-377 xx:-right-167 text-white 2xl:right-64 2xl:top-336 2xl:h-25 2xl:w-15-per
        lg:right-26 lg:top-275 lg:w-20-per md:top-577 md:right-282 md:w-27-per">
            <a class="no-underline" href="{{$data->module['button']->url}}" target="{{$data->module['button']->target}}">{{$data->module['button']->title}}</a>
        </div>
        <div class="text-gray-30 2xl:text-xs lg:text-sm absolute z-2 xx:top-466 xx:left-387 2xl:left-47 2xl:top-428 lg:top-428 lg:left-33 md:top-651 md:left-244">
            {!! $data->module['locate'] !!}
        </div>
    </div>
</section>