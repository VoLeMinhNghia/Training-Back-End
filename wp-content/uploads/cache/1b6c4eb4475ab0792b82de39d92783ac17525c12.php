<?php
    $class = 'h2';
?>
<div class="container">
    <h3> <?php echo e(App::getNameModule(1)); ?>

        : demo1
    </h3>
    <?php echo e(page::filterDemo([
        'class' => $class,
        'num1' => $data->num1,
        'num2' => $data->num2,
        'num3' => $data->num3,
        'sub' => $data->sub
       ])); ?>

   
</div>
