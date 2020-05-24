 <?php $__env->startSection('title'); ?> <?php echo e($title); ?> :: ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8## <?php $__env->stopSection(); ?> <?php $__env->startSection('styles'); ?> ##parent-placeholder-bf62280f159b1468fff0c96540f3989d41279669## <?php $__env->stopSection(); ?> <?php $__env->startSection('main'); ?> <?php echo $__env->make('app.user.layouts.records', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> <div class="row"> <div class="col-sm-12"> <div class="panel "> <div class="panel-heading"> <h6 class="panel-title"><?php echo e(trans('dashboard.referral_link')); ?></h6> </div> <div class="panel-body"> <div class="input-group"> <input id="replicationlink" type="text" readonly="true" class="selectall copyfrom form-control" spellcheck="false" value="https://algolight.net/<?php echo e(Auth::user()->username); ?>" /> <span class="input-group-addon copylink"> <button class="btn btn-link btn-copy" style="margin: 0 auto;padding: 0px;font-size: 12px;" data-clipboard-target="#replicationlink"> <i class="fa fa-copy"></i> </button> </span> </div> </div> </div> </div> </div> <?php if($date_diff != 'na' && $numberdays != 'na'): ?> <?php if($numberdays < 10 && $numberdays > 0 && $date_diff > 0): ?> <div class="row"> <div class="col-md-12"> <div class="alert alert-warning alert-dismissible" role="alert"> <button type = "button" class="close" data-dismiss = "alert">x</button> Dear User, Your Package will expire in <?php echo e($numberdays); ?>. Please Upgrade the package on the expiration date to receive commissions. </div> </div> </div> <?php endif; ?> <?php if($date_diff < 0): ?> <div class="row"> <div class="col-md-12"> <div class="alert alert-warning alert-dismissible" role="alert"> <button type = "button" class="close" data-dismiss = "alert">x</button> Your Package Expired, Please Upgrade to receive commissions </div> </div> </div> <?php endif; ?> <?php endif; ?> <div class="row"> <div class="col-lg-12"> <div class="panel panel-flat"> <div class="panel-heading"> <h6 class="panel-title"> <?php echo e(trans('dashboard.users_join')); ?> </h6> <div class="heading-elements"> </div> </div> <div class="container-fluid"> <div class="row"> <div class="col-lg-4"> <ul class="list-inline text-center"> <li> <a href="#" class="btn border-teal text-teal btn-flat btn-rounded btn-icon btn-xs valign-text-bottom"><i class="icon-plus3"></i></a> </li> <li class="text-left"> <div class="text-semibold"><?php echo e(trans('dashboard.week_join')); ?></div> <div class="text-muted"><?php echo e($weekly_users_count); ?></div> </li> </ul> </div> <div class="col-lg-4"> <ul class="list-inline text-center"> <li> <a href="#" class="btn border-warning-400 text-warning-400 btn-flat btn-rounded btn-icon btn-xs valign-text-bottom"><i class="icon-watch2"></i></a> </li> <li class="text-left"> <div class="text-semibold"><?php echo e(trans('dashboard.month_join')); ?></div> <div class="text-muted"><?php echo e($monthly_users_count); ?></div> </li> </ul> </div> <div class="col-lg-4"> <ul class="list-inline text-center"> <li> <a href="#" class="btn border-indigo-400 text-indigo-400 btn-flat btn-rounded btn-icon btn-xs valign-text-bottom"><i class="icon-people"></i></a> </li> <li class="text-left"> <div class="text-semibold"><?php echo e(trans('dashboard.year_join')); ?></div> <div class="text-muted"> <?php echo e($yearly_users_count); ?> </div> </li> </ul> </div> </div> </div> <hr/> <div class="chart-container"> <div class="chart has-fixed-height" id="users_join_user" style="height:350px"> </div> </div> </div> </div> </div> <div class="row"> <div class="row"> <div class="col-md-4"> <div class="panel panel-body "> <div class="panel-heading"> <h6 class="panel-title text-semibold"><?php echo e(trans('dashboard.recent_activities')); ?></h6> </div> <div class="col-sm-12"> <ul class="list-feed media-list"> <?php $key =0; ?>
 <?php $__currentLoopData = $activities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php if($key < 10): ?> <li class="media"> <div class="media-body"> <a href="#" target="_blank"><?php echo e($activity->name); ?></a> <?php echo e($activity->description); ?> </div> </li> <?php $key++; ?>
 <?php endif; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> </ul> </div> </div> </div> <div class="col-md-8"> <div class="panel panel-inverse" data-sortable-id="index-4"> <div class="panel-heading"> <h4 class="panel-title"> <?php echo e(trans('dashboard.new-registered-users')); ?> <span class="pull-right label label-success"> <?php echo $count_new; ?> <?php echo e(trans('dashboard.new-users')); ?> </span> </h4> </div> <div class="panel-body"> <?php $__currentLoopData = $new_users->chunk(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chunk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <div class="col-sm-4"> <ul class="media-list media-list-linked"> <?php $__currentLoopData = $chunk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <li class="media"> <a href="#" target="_blank" class="media-link"> <div class="media-left"> <?php echo e(Html::image(route('imagecache', ['template' => 'profile', 'filename' => $user->image]), 'Admin', array('class' => 'img-circle img-xs'))); ?> </div> <div class="media-body"> <div class="media-heading text-semibold"> <?php echo $user->name; ?></div> <span class="text-muted"> <?php echo $user->username; ?></span> </div> <div class="media-right media-middle text-nowrap"> <span class="text-muted"> <i class="icon-pin-alt text-size-base"></i> &nbsp;<?php echo $user->country; ?> </span> </div> </a> </li> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> </ul> </div> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> </ul> </div> </div> </div> <?php $__env->stopSection(); ?>
<?php echo $__env->make('app.user.layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>