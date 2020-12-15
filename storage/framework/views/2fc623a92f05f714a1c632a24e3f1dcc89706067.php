

<?php $__env->startSection('title', 'Upload Artikel'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
		<div class="form-group">
			<textarea class="ckeditor" id="ckedtor"></textarea>
			<button type="submit" class="btn btn-success">Simpan</button>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\FileII\Website\CInfo\resources\views/admin/adminupload.blade.php ENDPATH**/ ?>