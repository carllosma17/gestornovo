<!-- BEGIN: Theme CSS-->
<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap" rel="stylesheet">

<link rel="stylesheet" href="<?php echo e(asset(mix('assets/vendor/fonts/tabler-icons.css'))); ?>" />
<!-- Core CSS -->
<link rel="stylesheet" href="<?php echo e(asset(mix('assets/vendor/css' .$configData['rtlSupport'] .'/core.css'))); ?>" class="<?php echo e($configData['hasCustomizer'] ? 'template-customizer-core-css' : ''); ?>" />
<link rel="stylesheet" href="<?php echo e(asset(mix('assets/vendor/css' .$configData['rtlSupport'] .'/' .$configData['theme'].'.css'))); ?>" class="<?php echo e($configData['hasCustomizer'] ? 'template-customizer-theme-css' : ''); ?>" />
<link rel="stylesheet" href="<?php echo e(asset(mix('assets/css/demo.css'))); ?>" />
<link rel="stylesheet" href="<?php echo e(asset(mix('assets/vendor/libs/node-waves/node-waves.css'))); ?>" />
<link rel="stylesheet" href="<?php echo e(asset(mix('assets/vendor/css/pages/front-page.css'))); ?>" />
<!-- Vendor Styles -->
<?php echo $__env->yieldContent('vendor-style'); ?>


<!-- Page Styles -->
<?php echo $__env->yieldContent('page-style'); ?>
<?php /**PATH /home/gestor-pro.vipconnect.top/public_html/resources/views/layouts/sections/stylesFront.blade.php ENDPATH**/ ?>