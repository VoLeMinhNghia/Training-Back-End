<section class="bg-gray-20 xx:w-141-per xx:-ml-279 2xl:w-125-per lg:w-105-per md:w-105-per md:-ml-9 md:-mt-29 lg:-ml-11 2xl:mt-0 lg:-mt-44 2xl:-ml-23">
    <div class="container font-poppins xx:w-full xx:-mt-13 2xl:h-652 2xl:mt-1 lg:mt-29 lg:h-775 md:mt-22 md:h-1134">
        <div class="xx:w-33-per m-auto 2xl:w-32-per pt-52 pb-28 lg:w-100-per md:w-70-per xx:ml-66 2xl:ml-2 lg:ml-50 md:ml-66">
            <div class="title font-bold text-4xl -ml-9 2xl:w-full lg:w-full md:w-90-per">
                {!! $data->module['content'] !!}
            </div>
        </div>
        <div class="under row xx:-mt-17 xx:ml-44 2xl:mt-0 2xl:ml-0 lg:ml-40 lg:mt-6 md:ml-58 md:-mt-6">
            <div class="para xx:w-46-per 2xl:w-42-per lg:w-35-per md:w-80-per xx:pr-21 2xl:pr-5">
                {!! $data->module['para'] !!}
                {!! $data->module['paraNext'] !!}
            </div>
            <div class="logo xx:-mt-178 2xl:w-1/2 2xl:-mt-184 lg:-mt-9 md:mt-14 md:-ml-15 lg:ml-1 lg:w-60-per 2xl:ml-0 md:w-111-per"> 
                <div class="slick_slide2">
                    <div>
                        <img src="{{$data->module['image']->url}}" alt="{{$data->module['image']->alt}}">
                    </div>
                    <div>
                        <img src="{{$data->module['image']->url}}" alt="{{$data->module['image']->alt}}">
                    </div>
                </div>
                    <div class="button_slick2 text-red-600 lg:w-50 md:w-55-per text-4xl float-right "></div>
            </div>
        </div>
    </div>
</section>