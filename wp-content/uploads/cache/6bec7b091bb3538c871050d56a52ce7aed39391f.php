<div class="container xx:ml-10 xx:mt-9 2xl:-ml-20 2xl:mt-0 lg:ml-8 lg:mt-51 md:-ml-8">
    <div class=" xx:m-auto flex lg:flex-row md:flex-col flex-wrap xx:w-90-per 2xl:mt-24 2xl:ml-68 lg:ml-0 lg:mt-0 md:mt-29 md:ml-205">
        <div class="ctent1 xx:w-32-per 2xl:w-32-per lg:w-28-per md:w-71-per lg:border-r-2 md:border-b-2 lg:border-b-0 border-gray-40">
            <div class="h-180">
                <img src="<?php echo e($data->module['image1']->url); ?>" alt="<?php echo e($data->module['image1']->alt); ?>">
            </div>
            <div class="font-bold text-left xx:ml-0 xx:-mt-2 2xl:text-5xl lg:text-4xl md:text-5xl 2xl:-mt-4 lg:-mt-11">
                <?php echo $data->module['content1']; ?>

            </div>
            <div class="font-light text-left 2xl:text-4xl lg:text-3xl md:text-4xl w-80-per -mt-6">
                <?php echo $data->module['para1']; ?>

            </div>
        </div>
        <div class="ctent2 xx:w-33-per 2xl:w-32-per lg:w-31-per md:w-50-per xx:ml-7 lg:border-r-2 md:border-b-2 lg:border-b-0 pl-35 border-gray-40 2xl:ml-20 2xl:pl-24">
            <div class="h-180 2xl:-mt-4 xx:-ml-7 2xl:-ml-19 lg:-ml-14 lg:-mt-1 md:-ml-42 md:mt-40">
                <img src="<?php echo e($data->module['image2']->url); ?>" alt="<?php echo e($data->module['image2']->alt); ?>">
            </div>
            <div class="font-bold text-left xx:-ml-2 xx:-mt-3 2xl:text-5xl lg:text-4xl md:text-5xl lg:-ml-14 2xl:mt-0 lg:-mt-10
            md:-ml-41 md:mt-0">
                <?php echo $data->module['content2']; ?>

            </div>
            <div class="font-light text-left xx:-ml-3 2xl:w-full lg:w-90-per 2xl:text-4xl lg:text-3xl lg:-ml-15
            md:text-4xl -mt-4 md:-ml-42">
                <?php echo $data->module['para2']; ?>

            </div>
        </div>
        <div class="ctent3 xx:w-1/3 xx:ml-1 2xl:w-30-per lg:w-31-per md:w-55-per pl-35 2xl:-ml-6 lg:-ml-13 lg:mt-0
        md:mt-54 md:-ml-37">
            <div class="h-180 ml-5 lg:-mt-7 md:-mt-4">
                <img src="<?php echo e($data->module['image3']->url); ?>" alt="<?php echo e($data->module['image3']->alt); ?>">
            </div>
            <div class="font-bold text-left 2xl:text-5xl lg:text-4xl md:text-5xl 2xl:mt-3 lg:-mt-2">
                <?php echo $data->module['content3']; ?>

            </div>
            <div class="font-light text-left 2xl:text-4xl 2xl:w-85-per lg:text-3xl md:text-4xl xx:w-80-per md:w-130-per -mt-6">
                <?php echo $data->module['para3']; ?>

            </div>
        </div>
    </div>
</div>