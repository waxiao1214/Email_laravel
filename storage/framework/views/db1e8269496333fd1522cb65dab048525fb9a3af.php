 <?php $__env->startSection('title'); ?> <?php echo e($title); ?> :: ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8## <?php $__env->stopSection(); ?> <?php $__env->startSection('styles'); ?> ##parent-placeholder-bf62280f159b1468fff0c96540f3989d41279669## <style type="text/css"> </style> <?php $__env->stopSection(); ?> <?php $__env->startSection('main'); ?> <div class="panel panel-border panel-primary" data-sortable-id="ui-widget-11"> <div class="panel-heading"> <h4 class="panel-title">Read News</h4> </div> <div class="panel-body"> <form action="" method=""> <div class="invoice"> <div class="invoice-company"> <span class="pull-right hidden-print"> </span> </div> <div class="invoice-content"> <?php $__currentLoopData = $read_news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <div class="form-group" align="center"> <label class="control-label"><h2><?php echo e($data->title); ?></h2></label> </div> <div class="form-group" align="left"> <label class="control-label"><?php echo $data->description; ?></label> </div> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> </div> </form> </div> </div> <?php $__env->stopSection(); ?> <?php $__env->startSection('scripts'); ?> ##parent-placeholder-16728d18790deb58b3b8c1df74f06e536b532695## <?php $__env->stopSection(); ?> 
<?php echo $__env->make('app.user.layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>