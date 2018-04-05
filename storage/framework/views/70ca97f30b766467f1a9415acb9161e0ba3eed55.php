<?php $__env->startSection('content'); ?>

<div class="container">
	<div class="row">
		<div class="col-sm-12" style="border: 1px solid blue;">
			<div class="image">
			    <img src="image/NoImageAvailable.png" alt="hinhanh">
			</div>
		</div>
		<div class="space20">&nbsp;</div>

		<div class="col-sm-12" style="border: 1px solid blue;">
			<div class="title">
				<h2>Title 1</h2>
			</div>
		</div>
		<div class="space20">&nbsp;</div>

		<div class="col-sm-12" style="border: 1px solid blue;">
			<div class="content">
				<h2>Content 1</h2>
			</div>
		</div>
		<div class="space20">&nbsp;</div>

		<div class="col-sm-12" style="border: 1px solid blue;">
			<div class="reaction">
				<span><i class="fa fa-thumbs-o-up"></i></span>
				<span><i class="fa fa-thumbs-o-down"></i></span>
				<span><i class="fa fa-heart-o"></i></span>
				<!-- <span><i class="fa fa-smile-o"></i></span> -->
				<span><i class="fa fa-frown-o"></i></span>
			</div>
			<div class="comment">
				<span><strong>Comment:</strong></span><br/>
				<input type="text" class="form-control" name="cmt">
				<div class="space">&nbsp;</div>
				<input type="submit" name="submit" class="btn btn-info btn-sm">
			</div>
		</div>
		<div class="space">&nbsp;</div>
	</div>
	<!-- .row -->
</div>
<!-- .container -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>