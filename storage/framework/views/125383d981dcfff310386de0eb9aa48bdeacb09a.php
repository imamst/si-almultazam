<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="jumbotron box-shadow">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 well">
				<form class="form-horizontal">
				  <fieldset>
				    <legend>Status Jamaah</legend>
				    <div class="form-group">
				      <label for="nama" class="col-lg-3 control-label"><b>Nama</b></label>
				      <div class="col-lg-9">
				        <input type="text" class="form-control" id="nama" value="<?php echo e($status->nama_lengkap); ?>" disabled="">
				      </div>
				    </div>
				    <div class="form-group">
				      <label for="paket" class="col-lg-3 control-label"><b>Paket</b></label>
				      <div class="col-lg-9">
				        <input type="text" class="form-control" id="paket" value="<?php echo e($status->nama_paket); ?>" disabled="">
				      </div>
				    </div>
				    <div class="form-group">
				      <label for="program" class="col-lg-3 control-label"><b>Program</b></label>
				      <div class="col-lg-9">
				        <input type="text" class="form-control" id="program" value="<?php echo e($status->program); ?>" disabled="">
				      </div>
				    </div>
				    <div class="form-group">
				      <label for="tipe_kamar" class="col-lg-3 control-label"><b>Tipe Kamar</b></label>
				      <div class="col-lg-9">
				        <input type="text" class="form-control" id="tipe_kamar" value="<?php echo e($status->tipe_kamar); ?>" disabled="">
				      </div>
				    </div>
				    <div class="form-group">
				      <label for="harga" class="col-lg-3 control-label"><b>Harga</b></label>
				      <div class="col-lg-9">
				        <input type="text" class="form-control" id="harga" value="Rp <?php echo e($status->harga); ?>,-" disabled="">
				      </div>
				    </div>
				    <div class="form-group">
				      <label for="pembayaran" class="col-lg-3 control-label"><b>Pembayaran</b></label>
				      <div class="col-lg-9">
				        <input type="text" class="form-control" id="pembayaran" value="<?php echo e($status->pembayaran); ?>" disabled="">
				      </div>
				    </div>
				    <div class="form-group">
				      <div class="col-lg-2 col-lg-offset-6">
				        <a href="<?php echo e(route('jamaah/cek')); ?>" class="btn btn-warning">Kembali Cek Jamaah</a>
				      </div>
				    </div>
				  </fieldset>
				</form>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>