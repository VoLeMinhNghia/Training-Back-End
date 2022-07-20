<section class="module-TheLatest relative font-poppins xx:-ml-2 xx:-mt-48 2xl:-mt-64 2xl:ml-64 xx:w-full 2xl:w-91-per lg:w-88-per lg:-mt-235 lg:ml-30 md:-mt-57">
    <span class="icomoon icon-iconC text-70xl absolute z-1 xx:-right-148 2xl:-right-88 lg:-right-139 lg:top-86 md:top-2 md:-right-28 opacity-25 text-gray-100"></span>
        <div class="container w-full relative z-3 py-60">
            <div class="xx:ml-51 2xl:ml-3 lg:ml-5 md:ml-25"> 
                <div class="font-extrabold text-red-700">
                    <?php echo $data->module['title']; ?>

                </div>
            </div>
            <div class="flex flex-row flex-wrap w-full">
                <div class="left xx:w-1/2 xx:ml-48 lg:w-full 2xl:w-57-per lg:-ml-1 md:ml-13 md:w-93-per p-4 ">
                    <div class="bg-white rounded-4xl shadow-2xl">
                        <div class="rounded-t-4xl w-full lg:h-293 2xl:h-270 xx:h-262 md:h-295 bg-no-repeat bg-cover" style="background-image:url(<?php echo e($data->module['image']->url); ?>)" ></div>
                        <!-- <img class="rounded-t-3xl" src="<?= \App\asset_path('/images/May-27.jpg'); ?>"> -->
                        <div class="2xl:p-15 lg:p-20 md:p-15">
                            <div class="font-bold">
                                <?php echo $data->module['contentl']; ?>

                            </div>
                            <div class="font-light">
                                <?php echo $data->module['paral']; ?>

                                    
                                <div class="flip1 font-bold text-red-700 hover:text-green-500">
                                    <a class="no-underline" href="<?php echo e($data->module['link1']->url); ?>" target="<?php echo e($data->module['link1']->target); ?>"><?php echo e($data->module['link1']->title); ?></a>
                                    <span class="icomoon icon-chevron-right"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right xx:w-38-per xx:-ml-3 flex-col flex-wrap 2xl:w-38-per 2xl:ml-0 lg:-ml-12  lg:w-full 2xl:mt-0 lg:mt-14 md:mt-8 md:w-93-per md:ml-1">
                    <div class="up md:w-full p-4 w-70-per ml-10">
                        <div class="bg-white rounded-4xl 2xl:p-15 lg:p-31 md:p-28 shadow-2xl">
                            <div class="font-bold">
                                <?php echo $data->module['contentr1']; ?>

                            </div>
                            <div class="font-light">
                                <?php echo $data->module['parar1']; ?>

                                    
                                <div class="flip2 font-bold text-red-700 hover:text-green-500">
                                    <a class="no-underline" href="<?php echo e($data->module['link2']->url); ?>" target="<?php echo e($data->module['link2']->target); ?>"><?php echo e($data->module['link2']->title); ?></a>
                                    <span class="icomoon icon-chevron-right"></span>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="down md:w-full p-4 w-70-per 2xl:mt-2 ml-10 lg:mt-15 md:mt-12">
                        <div class="bg-white rounded-4xl 2xl:p-15 lg:p-31 md:p-28 shadow-2xl">
                            <div class="font-bold">
                                <?php echo $data->module['contentr2']; ?>

                            </div>
                            <div class="font-light">
                                <?php echo $data->module['parar2']; ?>

                                    
                                <div class="flip3 font-bold text-red-700 hover:text-green-500">
                                    <a class="no-underline" href="<?php echo e($data->module['link3']->url); ?>" target="<?php echo e($data->module['link3']->target); ?>"><?php echo e($data->module['link3']->title); ?></a> 
                                    <span class="icomoon icon-chevron-right"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>