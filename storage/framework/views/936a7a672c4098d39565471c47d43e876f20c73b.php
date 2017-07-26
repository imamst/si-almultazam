<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="jumbotron box-shadow">
		<div class="row">
			<div id="cekForm" class="col-md-10 col-md-offset-1">
				<p><b>Cek Status &amp; Informasi Keberangkatan Umrah dan Haji</b></p>
				<?php echo e(Form::open(['url'=>'jamaah/cek','class'=>'form-inline','role'=>'form'])); ?>


				<?php echo e(csrf_field()); ?>


					<div class="form-group <?php echo e(isset($error_msg) ? ' has-error' : ''); ?>" style="width: 80%;margin-bottom: 10px;">
						<label class="control-label" for="kode_cek">Masukkan No. Identitas (KTP/NIK) Anda</label>
						<input id="kode_cek" type="text" name="kode_cek" class="form-control" style="width: 60%;">
						<?php if(isset($error_msg)): ?>
							<span class="help-block">
	                            <strong><?php echo e($error_msg); ?></strong>
	                        </span>
	                    <?php endif; ?>
					</div>
					<button id="tbl-cek" type="submit" class="btn btn-primary">Cek Status</button>
				<?php echo e(Form::close()); ?>

			</div>
		</div>
		<div class="row status-section">
			<p id="tampil"></p>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>