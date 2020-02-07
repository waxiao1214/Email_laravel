<?php if(Auth::check()): ?> <div class="sidebar sidebar-main "> <div class="sidebar-content"> <div class="sidebar-user"> <div class="category-content"> <div class="media"> <a href="#" class="media-left"> <?php echo e(Html::image(route('imagecache', ['template' => 'profile', 'filename' => $image]), 'User', array('class' => 'img-circle img-sm'))); ?> </a> <div class="media-body"> <span class="media-heading text-semibold"> <?php echo e(Auth::user()->name); ?></span> <div class="text-size-mini text-muted"> <i class="icon-pin text-size-small"></i> <?php echo e($GLOBAL_PACAKGE); ?> </div> </div> <div class="media-right media-middle"> <ul class="icons-list"> <li> <a href="#"><i class="icon-cog3"></i></a> </li> </ul> </div> </div> </div> </div> <div class="sidebar-category sidebar-category-visible"> <div class="category-content no-padding"> <ul class="navigation navigation-main navigation-accordion"> <li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li> <?php if($current_pack > 1): ?> <li class="<?php echo e(set_active('user/dashboard')); ?>"> <a href="<?php echo e(url('user/dashboard')); ?>"> <i class="icon-home4"></i> <span class="text" ><?php echo e(trans('menu.dashboard')); ?></span> </a> </li> <li class="navigation-header"><span>Users</span> <i class="icon-menu" title="Users"></i></li> <li class="has-sub <?php echo e(set_active('user/genealogy')); ?><?php echo e(set_active('user/sponsortree')); ?><?php echo e(set_active('user/tree')); ?>"> <a href="javascript:;"> <span class="badge pull-right"></span> <i class="icon-tree7"></i> <span><?php echo e(trans('menu.genealogy')); ?></span> </a> <ul class="sub-menu"> <li class="<?php echo e(set_active('user/genealogy')); ?>"><a href="<?php echo e(url('user/genealogy')); ?>"><?php echo e(trans('menu.binary-genealogy')); ?></a></li> <li class="<?php echo e(set_active('user/sponsortree')); ?>"><a href="<?php echo e(url('user/sponsortree')); ?>"><?php echo e(trans('menu.sponsor-genealogy')); ?></a></li> <li class="<?php echo e(set_active('user/tree')); ?>"><a href="<?php echo e(url('user/tree')); ?>"><?php echo e(trans('menu.tree-genealogy')); ?></a></li> </ul> </li> <li class="<?php echo e(set_active('user/register')); ?>"> <a href="<?php echo e(url('user/register')); ?>"> <i class="icon-add"></i> <span class="text"><?php echo e(trans('menu.register')); ?> </span> </a> </li> <li class="<?php echo e(set_active('user/incomereport')); ?>"> <a href="<?php echo e(url('user/incomereport')); ?>"> <i class="fa fa-sticky-note"></i> <span class="text"> <?php echo e(trans('menu.income_report')); ?> </span> </a> </li> <li class="has-sub <?php echo e(set_active('user/purchase-plan')); ?> <?php echo e(set_active('user/purchase-history')); ?> "> <a href="javascript:;"> <span class="badge pull-right"></span> <i class="fa fa-shopping-cart"></i> <span> <?php echo e(trans('menu.plan_purchase')); ?> </span> </a> <ul class="sub-menu"> <li class="<?php echo e(set_active('user/purchase-plan')); ?>"><a href="<?php echo e(url('user/purchase-plan')); ?>"> <?php echo e(trans('menu.plan_purchase')); ?> </a></li> <li class="<?php echo e(set_active('user/purchase-history')); ?>"><a href="<?php echo e(url('user/purchase-history')); ?>"> <?php echo e(trans('menu.purchase_history')); ?> </a></li> </ul> </li> <li class="<?php echo e(set_active('user/ewallet')); ?>"> <a href="<?php echo e(url('user/ewallet')); ?>"> <i class="fa fa-credit-card"></i> <span class="text"> <?php echo e(trans('menu.my_ewallet')); ?></span> </a> </li> <li class="has-sub <?php echo e(set_active('user/fund-transfer')); ?><?php echo e(set_active('user/my-transfer')); ?>"> <a href="javascript:;"> <span class="badge pull-right"></span> <i class="fa fa-credit-card"></i> <span><?php echo e(trans('menu.fund_transfer')); ?></span> </a> <ul class="sub-menu"> <li class="<?php echo e(set_active('user/fund-transfer')); ?>"><a href="<?php echo e(url('user/fund-transfer')); ?>"><?php echo e(trans('menu.fund_transfer')); ?></a></li> <li class="<?php echo e(set_active('user/my-transfer')); ?>"><a href="<?php echo e(url('user/my-transfer')); ?>"><?php echo e(trans('menu.my_transfer')); ?></a></li> </ul> </li> <li class="has-sub <?php echo e(set_active('user/requestvoucher')); ?> <?php echo e(set_active('user/myvoucher')); ?> "> <a href="javascript:;"> <span class="badge pull-right"></span> <i class="fa fa-ticket"></i> <span><?php echo e(trans('menu.Voucher')); ?></span> </a> <ul class="sub-menu"> <li class="<?php echo e(set_active('user/requestvoucher')); ?>"><a href="<?php echo e(url('user/myvoucher')); ?>"><?php echo e(trans('menu.my_voucher')); ?></a></li> <li class="<?php echo e(set_active('user/requestvoucher')); ?>"><a href="<?php echo e(url('user/requestvoucher')); ?>"><?php echo e(trans('menu.request_voucher')); ?></a></li> </ul> </li> <?php endif; ?> <li class="<?php echo e(set_active('user/purchasedashboard')); ?>"> <a href="<?php echo e(url('user/purchasedashboard')); ?>"> <i class="icon-home4"></i> <span class="text"> Dashboard</span> </a> </li> <li class="<?php echo e(set_active('user/runsoftware')); ?>"> <a href="#"> <i class="glyphicon glyphicon-user"></i> <span class="text"> Run Software</span> </a> </li> <li class="<?php echo e(set_active('user/profile')); ?>"> <a href="<?php echo e(url('user/profile')); ?>"> <i class="glyphicon glyphicon-user"></i> <span class="text"> <?php echo e(trans('menu.profile')); ?></span> </a> </li> <li class="<?php echo e(set_active('user/compose')); ?>"> <a href="<?php echo e(url('user/compose')); ?>"> <i class="fa fa-envelope"></i> <span class="text"> Support</span> </a> </li> <li class="<?php echo e(set_active('user/viewnews')); ?>"> <a href="<?php echo e(url('user/viewnews')); ?>"> <i class="fa fa-envelope"></i> <span class="text"> News</span> </a> </li> <?php if($current_pack > 1): ?> <li class="<?php echo e(set_active('user/helpdesk/tickets-dashboard')); ?>"> <a href="<?php echo e(url('user/helpdesk/tickets-dashboard')); ?>"> <i class="fa fa-envelope"></i> <span class="text"> <?php echo e(trans('menu.ticket_center')); ?></span> </a> </li> <li class="has-sub <?php echo e(set_active('user/payoutrequest')); ?> <?php echo e(set_active('user/allpayoutrequest')); ?>"> <a href="javascript:;"> <i class="fa fa-money"></i> <span class="text"><?php echo e(trans('menu.payout')); ?> </span> </a> <ul class="sub-menu"> <li class="<?php echo e(set_active('user/payoutrequest')); ?>" ><a href="<?php echo e(url('user/payoutrequest')); ?>"><?php echo e(trans('menu.request_payout')); ?></a></li> <li class="<?php echo e(set_active('user/allpayoutrequest')); ?>"><a href="<?php echo e(url('user/allpayoutrequest')); ?>"><?php echo e(trans('menu.view_my_payout')); ?></a></li> </ul> </li> <?php endif; ?> <li class="has-sub <?php echo e(set_active('user/documentdownload')); ?><?php echo e(set_active('user/viewvideos')); ?>"> <a href="javascript:;" > <i class="fa fa-wrench"></i> <span class="text">Guides</span> </a> <ul class="sub-menu"> <li class="<?php echo e(set_active('user/documentdownload')); ?>"><a href="<?php echo e(url('user/documentdownload')); ?>">Documents</a></li> <li class="<?php echo e(set_active('user/viewvideos')); ?>"><a href="<?php echo e(url('user/viewvideos')); ?>">Videos</a></li> </ul> </li> <li><a href="<?php echo e(url('/logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="icon-switch2"></i> Logout</a></li> </ul> </div> </div> </div> </div> <?php endif; ?>