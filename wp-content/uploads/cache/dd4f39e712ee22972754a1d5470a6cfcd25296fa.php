<div class="container">
    <div class="bg-cover -left-2 right-0 top-0 bottom-0 xx:h-943 2xl:h-794 lg:h-802 md:h-839 absolute z-1" style="background-image:url(<?php echo e($data->module['background']->url); ?>)"
        alt="<?php echo e($data->module['background']->alt); ?>"></div>
    <div class="container lg:text-left absolute z-2 xx:top-19 xx:left-360 2xl:left-130 2xl:top-19 lg:top-19 lg:left-0 md:top-19 md:left-25">
        <div class="logo w-30-per 2xl:ml-1 lg:ml-43">
            <img src="<?php echo e($data->module['logo']->url); ?>" alt="<?php echo e($data->module['logo']->alt); ?>">
        </div>
        <div class="menu hidden lg:flex row w-52-per text-left absolute z-2 2xl:left-508 2xl:w-52-per 2xl:top-1 2xl:-ml-2 lg:top-0 lg:right-39 lg:w-57-per">
            <div class="btn-white w-1/4 font-semibold text-lg">
                <a class="no-underline" href="<?php echo e($data->module['about']->url); ?>" target="<?php echo e($data->module['about']->target); ?>"><?php echo e($data->module['about']->title); ?></a>
            </div>
            <div class="btn-white w-1/4 font-semibold text-lg">
                <a class="no-underline" href="<?php echo e($data->module['leader']->url); ?>" target="<?php echo e($data->module['leader']->target); ?>"><?php echo e($data->module['leader']->title); ?></a>
            </div>
            <div class="btn-white w-1/4 font-semibold text-lg pl-6">
                <a class="no-underline" href="<?php echo e($data->module['careers']->url); ?>" target="<?php echo e($data->module['careers']->target); ?>"><?php echo e($data->module['careers']->title); ?></a>
            </div>
            <div class="btn-white w-1/4 font-semibold text-lg">
                <a class="no-underline" href="<?php echo e($data->module['contact']->url); ?>" target="<?php echo e($data->module['contact']->target); ?>"><?php echo e($data->module['contact']->title); ?></a>
            </div>
        </div>
        <div class="menu slide absolute z-4 -top-4 left-522 lg:hidden">
            <div class="flip_d ml-44">
                <span class="icomoon icon-menu text-5xl text-orange hover:text-white"></span>
            </div>
            <div class="menu_hide col text-left bg-green-500" style="display: none">
                <div class="btn-white2 font-semibold text-lg pl-14 border-b-1">
                    <a class="no-underline" href="<?php echo e($data->module['about']->url); ?>" target="<?php echo e($data->module['about']->target); ?>"><?php echo e($data->module['about']->title); ?></a>
                </div>
                <div class="btn-white2 font-semibold text-lg pl-6 border-b-1">
                    <a class="no-underline" href="<?php echo e($data->module['leader']->url); ?>" target="<?php echo e($data->module['leader']->target); ?>"><?php echo e($data->module['leader']->title); ?></a>
                </div>
                <div class="btn-white2 font-semibold text-lg pl-18 border-b-1">
                    <a class="no-underline" href="<?php echo e($data->module['careers']->url); ?>" target="<?php echo e($data->module['careers']->target); ?>"><?php echo e($data->module['careers']->title); ?></a>
                </div>
                <div class="btn-white2  font-semibold text-lg">
                    <a class="no-underline" href="<?php echo e($data->module['contact']->url); ?>" target="<?php echo e($data->module['contact']->target); ?>"><?php echo e($data->module['contact']->title); ?></a>
                </div>
            </div>
        </div>
        <div class="title md:text-center text-white xx:w-34-per lg:text-left lg:w-40-per md:w-full xx:mt-180 xx:ml-1 2xl:mt-68 2xl:-ml-1 lg:mt-64 lg:ml-43 animate-opacity
        md:-ml-26 md:mt-101">
            <div class="font-bold text-7xl">
                    <?php echo $data->module['content']; ?>

            </div> 
            <div class="content 2xl:w-70-per lg:w-95-per md:w-60-per lg:ml-0 md:ml-149 text-xl font-light">
                    <?php echo $data->module['para']; ?>

            </div>
            <div class="text-base">
                <button class="btn-red font-extrabold rounded-full w-240 h-26">
                    <a class="no-underline" href="<?php echo e($data->module['button']->url); ?>" target="<?php echo e($data->module['button']->target); ?>"><?php echo e($data->module['button']->title); ?></a>
                </button>
            </div>
        </div>
        <div class="pic xx:w-60-per">
            <div class="pic absolute lg:w-71-per md:w-111-per md:top-457 md:-right-110 xx:top-126 xx:-right-173 2xl:-right-152 2xl:top-109 lg:-right-192 lg:top-139">
                <img src="<?php echo e($data->module['image_1']->url); ?>" alt="<?php echo e($data->module['image_1']->alt); ?>"></div>
            <div class="phone absolute xx:top-370 xx:right-430 xx:w-16-per 2xl:right-464 2xl:top-353 lg:w-15-per lg:top-324 lg:right-254 md:w-24-per md:top-667 md:right-413">
                <img src="<?php echo e($data->module['image_2']->url); ?>" alt="<?php echo e($data->module['image_2']->alt); ?>"></div>
        </div>
        
</div>