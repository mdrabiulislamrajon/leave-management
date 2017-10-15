<form class="form" method="POST" action="<?php echo e(url('settings/leave/' . $leave->id)); ?>" style="margin-top: 25px;padding-bottom: 10px;">
    <?php echo e(csrf_field()); ?>

    <?php echo e(method_field('PATCH')); ?>

    <div class="row clearfix">
        <div class="form-group<?php echo e($errors->has('title')  ? ' has-error' : ''); ?>">
            <div class="col-md-2 col-md-offset-1 text-right">
                <label for="name">ছুটির কারণ<small style="color: red; font-size: 1.2em;">*</small></label>
            </div>
            <div class="col-md-5">
                <input type="text" name="title"  class="form-control" id="title"  value="<?php echo e(old('title') ? : $leave->title); ?>">
            </div>
            <div class="col-md-4">
                <?php echo $__env->make('layouts.common.formError', ['key' => 'title'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
    </div>
    <div class="row clearfix" style="margin-top: 20px;">
        <div class="form-group<?php echo e($errors->has('from_date') ? ' has-error' : ''); ?>">
            <div class="col-md-2 col-md-offset-1 text-right">
                <label for="from_date">শুরুর তারিখ<small style="color: red; font-size: 1.2em;">*</small></label>
            </div>
            <div class="col-md-5">
                <input type="text" name="from_date" class="form-control datepicker" id="from_date" value="<?php echo e(old('from_date') ? : $leave->from_date->format('m/d/Y')); ?>">
            </div>
            <div class="col-md-4">
                <?php echo $__env->make('layouts.common.formError', ['key' => 'from_date'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
    </div>
    <div class="row clearfix" style="margin-top: 20px;">
        <div class="form-group<?php echo e($errors->has('to_date') ? ' has-error' : ''); ?>">
            <div class="col-md-2 col-md-offset-1 text-right">
                <label for="to_date">শেষের তারিখ<small style="color: red; font-size: 1.2em;">*</small></label>
            </div>
            <div class="col-md-5">
                <input type="text" name="to_date" class="form-control datepicker" id="to_date" value="<?php echo e(old('to_date') ? : $leave->to_date->format('m/d/Y')); ?>">
            </div>
            <div class="col-md-4">
                <?php echo $__env->make('layouts.common.formError', ['key' => 'to_date'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
    </div>
    <div class="row clearfix" style="margin-top: 20px;">
        <div class="form-group<?php echo e($errors->has('year') ? ' has-error' : ''); ?>">
            <div class="col-md-2 col-md-offset-1 text-right">
                <label for="year">ছুটির বছর<small style="color: red; font-size: 1.2em;">*</small></label>
            </div>
            <div class="col-md-5">
                <select name="year" id="" class="form-control">
                    <option value="">বছর সিলেক্ট করুন</option>
                    <?php for($i = date('Y'); $i < 2050; $i++): ?>
                        <option value="<?php echo e($i); ?>" <?php echo e((old('year') ? : $leave->year) == $i ? 'selected' : ''); ?>>
                            <?php echo e(entobn($i)); ?>

                        </option>
                    <?php endfor; ?>
                </select>
            </div>
            <div class="col-md-4">
                <?php echo $__env->make('layouts.common.formError', ['key' => 'year'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
    </div>
    
    <div class="row" style="margin-top: 25px;">
        <div class="col-md-8 text-right">
            <button class="btn btn-default" style="margin-right:8px;" type="reset">
                <i class="fa fa-times-circle-o"></i> বাতিল করুন
            </button>
            <button type="submit" class="btn btn-primary">
                <i class="fa fa-save"></i> পরিবর্তন করুন
            </button>
        </div>
    </div>
</form>