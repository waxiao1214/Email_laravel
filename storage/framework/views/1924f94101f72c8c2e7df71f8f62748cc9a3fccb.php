 <?php $__env->startSection('content'); ?> <div class="alert bg-success alert-styled-left"> <button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button> <span class="text-semibold">Registration Completed!</span> You have successfully registered <strong><?php echo e($userresult->username); ?> (<?php echo e($userresult->name); ?> <?php echo e($userresult->lastname); ?>)</strong> under sponsor, <strong><?php echo e($sponsorUserName); ?></strong>. Payment done via <strong><?php echo e($userresult->register_by); ?> .</strong> </div> <div class="panel"> <div class="panel-heading bg-primary"> <h6 class="panel-title">Registration details</h6> <div class="heading-elements"> <ul class="icons-list"> <li><a data-action="collapse"></a></li> </ul> </div> </div> <div class="panel-body"> <div class="col-sm-6"> <table class="table table-striped table-hover"> <tbody> <tr> <th><strong class="h6">Network</strong></th> <td></td> </tr> <tr> <th><?php echo e(trans('register.username')); ?></th> <td><?php echo e($userresult->username); ?></td> </tr> <tr> <th><?php echo e(trans('register.email')); ?></th> <td><?php echo e($userresult->email); ?></td> </tr> <tr> <th><?php echo e(trans('register.password')); ?></th> <td>This password is <strong>Encrypted</strong> - You can change in settings if you've forgotten it!</td> </tr> <tr> <th class="col-md-2"><?php echo e(trans('register.sponsor')); ?></th> <td><?php echo e($sponsorUserName); ?></td> </tr> <tr> <th><?php echo e(trans('register.firstname')); ?></th> <td><?php echo e($userresult->name); ?></td> </tr> <tr> <th><?php echo e(trans('register.lastname')); ?></th> <td><?php echo e($userresult->lastname); ?></td> </tr> <tr> <th><?php echo e(trans('register.gender')); ?></th> <td> <?php if($userresult->profile_info->gender == 'm'): ?> <?php echo e(trans('register.male')); ?> <?php else: ?> <?php echo e(trans('register.female')); ?> <?php endif; ?> </td> </tr> <tr> <th><?php echo e(trans('register.phone')); ?></th> <td><?php echo e($userresult->profile_info->mobile); ?></td> </tr> <tr> <th><?php echo e(trans('register.wechat')); ?></th> <td><?php echo e($userresult->id); ?></td> </tr> </tbody> </table> </div> <div class="col-sm-6"> <table class="table table-striped table-hover"> <tbody> <tr> <th><strong class="h6">Locale</strong></th> <td></td> </tr> <tr> <th><?php echo e(trans('register.country')); ?></th> <td><?php echo e($country); ?></td> </tr> <tr> <th> <div class="flag-icon flag-icon-<?php echo e(strtolower($userresult->profile_info->country)); ?>" style="height:200px;width:200px"></div> </th> <td></td> </tr> <tr> <th><?php echo e(trans('register.state')); ?></th> <td><?php echo e($state); ?></td> </tr> <tr> <th><?php echo e(trans('register.zipcode')); ?></th> <td><?php echo e($userresult->profile_info->zip); ?></td> </tr> <tr> <th><?php echo e(trans('register.address')); ?></th> <td><?php echo e($userresult->profile_info->address1); ?></td> </tr> <tr> <th><?php echo e(trans('register.city')); ?></th> <td><?php echo e($userresult->profile_info->city); ?></td> </tr> </tbody> </table> </div> </div> <div class="panel-footer"><a class="heading-elements-toggle"><i class="icon-more"></i></a> <div class="heading-elements"> <span class="heading-text text-semibold"> </span> <div class="heading-btn pull-right"> <a href="<?php echo e(url('login')); ?>" class="btn btn-primary btn-labeled btn-xlg"> <b> <i class="icon-circle-right2 position-right"></i> </b> Sign in </a> </div> </div> </div> </div> <?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.auth', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>