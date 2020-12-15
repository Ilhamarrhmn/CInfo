<?php $__env->startSection('content'); ?>
    <div class="row">
		<div class="col">
			<h3 class="lead">Kelola Member</h3>
			<hr>
		</div>
		<div class="col-3 clearfix">
			<a href="" class="float-right btn btn-outline-primary">Tambah</a>
		</div>
	</div>

	<?php if(session()->has('status')): ?>
		<div class="alert alert-info">
			<p><?php echo e(session('status')); ?></p>
		</div>
	<?php endif; ?>

	<table class="table table-bordered" id="table">
		<thead>
			<tr>
				<th>id</th>
				<th>Nama</th>
				<th>Email</th>
				<th>Tanggal Pembuatan</th>
                <th>Tanggal Update</th>
				<th>actions</th>
			</tr>
		</thead>
		<tbody>
			<?php $__currentLoopData = $User; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td><?php echo e($d->id); ?></td>
					<td><?php echo e($d->name); ?></td>
					<td><?php echo e($d->email); ?></td>
					<td><?php echo e($d->created_at); ?></td>
                    <td><?php echo e($d->update_at); ?></td>
					<td>
						<a href="<?php echo e(route('member.edit', $d->id)); ?>" class="btn btn-outline-primary">Edit</a>
						<form action="<?php echo e(route('member.destroy', $d->id)); ?>" method="post" class="d-inline">
						<?php echo csrf_field(); ?>
						<?php echo method_field('delete'); ?>
						<button type="submit" class="btn btn-outline-danger">Delete</button>
						</form>
					</td>
				</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tbody>
	</table>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#table").DataTable();
		});
	</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\CInfo\resources\views//admin.blade.php ENDPATH**/ ?>