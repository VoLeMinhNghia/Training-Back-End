<div class="container font-poppin xx:pt-450">
    <div class="image xx:-ml-420 xx:-mt-579 xx:w-1260 2xl:-mt-430 2xl:-ml-432 2xl:w-1268 lg:w-951 md:w-1271 lg:-ml-323 lg:-mt-140 md:-mt-300 md:-ml-412">
        
        <img src="<?php echo e($data->module['image']->url); ?>" alt="<?php echo e($data->module['image']->alt); ?>">
    </div>
    <div class="container absolute xx:right-318 xx:top-2076 xx:w-26-per 2xl:w-33-per md:w-61-per 2xl:top-1930 2xl:right-111 lg:w-25-per lg:right-158 lg:top-1838 md:top-3860 md:right-189">
        <div class="content">
            <div class="title text-4xl font-bold">
                <?php echo $data->module['content']; ?>

            </div>
            <div class="para text-base font-light leading-5 md:w-122-per lg:w-90-per 2xl:mt-36 lg:mt-0 md:mt-10">
                <?php echo $data->module['para1']; ?>

                <?php echo $data->module['para2']; ?>

                <?php echo $data->module['para3']; ?>

            </div>
            <div class="text-base">
                <button class="btn-red font-extrabold rounded-full w-240 h-26 hidden 2xl:block">
                    <a class="no-underline" href="<?php echo e($data->module['button']->url); ?>" target="<?php echo e($data->module['button']->target); ?>"><?php echo e($data->module['button']->title); ?></a>
                </button>
            </div>
        </div>
    </div>
</div>