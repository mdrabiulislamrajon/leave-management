<?php $roles = app('App\Http\Services\RolesService'); ?>



<?php echo $__env->make('layouts.common.title', ['title' => 'ছুটি অনুমোদনকারী কর্মকর্তাবৃন্দের তালিকা', 'link' => 'Test Link'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->startSection('content'); ?>
	<div class="row">
		<div class="col-xs-12">
			<?php echo $__env->make('settings._tabheader', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<div class="tab-content rendering-content">
				<div class="tab-pane active" id="tabLeaves">
					<form action="" method="POST" role="form">
						<?php echo e(csrf_field()); ?>

						<legend>উর্ধতন কর্মকর্তাগণের তালিকা থেকে ছুটি অনুমোদনকারী কর্মকর্তাবৃন্দের পদবি সিলেক্ট করুন |</legend>
						<div class="row">
						<?php $__currentLoopData = $parents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $parent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="col-md-3">
								<input type="checkbox" name="authorizer_id[]"  <?php echo e(in_array($parent->slug, ['dg', 'secretary']) ? 'checked' : ''); ?> value="<?php echo e($parent->id); ?>" >&nbsp;<?php echo e($parent->text); ?>

							</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>
						<hr>
						<button type="submit" class="btn btn-primary">সেভ করুন</button>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="<?php echo e(asset('AdminLTE/easyui/js/easyui.min.js')); ?>"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#cc').combotree({
			data: <?php echo json_encode($roles->get()); ?>

		});
	});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>