<?php $__env->startSection('content'); ?>
<div class="table-responsive">
	<table id="jamaah" class="table table-bordered table-stripe">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama</th>
				<th>Gender</th>
				<th>Tempat Lahir</th>
				<th>Tgl Lahir</th>
				<th>Nama Ayah</th>
				<th>No KTP</th>
				<th>Alamat</th>
				<th>Gol Darah</th>
				<th>Telp</th>
				<th>HP</th>
				<th>Email</th>
				<th>Pendidikan</th>
				<th>Pekerjaan</th>
				<th>Status</th>
				<th>No Passport</th>
				<th>Tempat Keluar</th>
				<th>Masa Berlaku</th>
				<th>Tanggal Keluar</th>
				<th>Jml Umrah</th>
				<th>Terakhir Umrah</th>
				<th>Jml Haji</th>
				<th>Terakhir Haji</th>
				<th>KTP</th>
				<th>Akta</th>
				<th>Passport</th>
				<th>KK</th>
				<th>Buku Nikah</th>
				<th>Foto</th>
				<th>Nama Instansi</th>
				<th>Jabatan</th>
				<th>Alamat Instansi</th>
				<th>Kota Instansi</th>
				<th>Kode Pos</th>
				<th>Nama Keluarga</th>
				<th>Hub Keluarga</th>
				<th>Telp Keluarga</th>
				<th>HP Keluarga</th>
				<th>Alamat Keluarga</th>
				<th>Penyakit</th>
			</tr>
		</thead>
		<tbody>
			<?php ($no=1); ?>
				<?php $__currentLoopData = $jamaah; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jamaahs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td><?php echo e($no++); ?></td>
						<td><?php echo e($jamaahs->nama_lengkap); ?></td>
						<td><?php echo e($jamaahs->jenis_kelamin); ?></td>
						<td><?php echo e($jamaahs->tempat_lahir); ?></td>
						<td><?php echo e($jamaahs->tgl_lahir); ?></td>
						<td><?php echo e($jamaahs->nama_ayah); ?></td>
						<td><?php echo e($jamaahs->no_ktp); ?></td>
						<td class="over"><?php echo e($jamaahs->alamat); ?></td>
						<td><?php echo e($jamaahs->gol_darah); ?></td>
						<td><?php echo e($jamaahs->telp); ?></td>
						<td><?php echo e($jamaahs->handphone); ?></td>
						<td><?php echo e($jamaahs->email); ?></td>
						<td><?php echo e($jamaahs->pendidikan); ?></td>
						<td><?php echo e($jamaahs->pekerjaan); ?></td>
						<td><?php echo e($jamaahs->status_perkawinan); ?></td>
						<td><?php echo e($jamaahs->no_passport); ?></td>
						<td><?php echo e($jamaahs->tempat_passport); ?></td>
						<td><?php echo e($jamaahs->masa_berlaku_passport); ?></td>
						<td><?php echo e($jamaahs->tanggal_passport); ?></td>
						<td><?php echo e($jamaahs->jumlah_umrah); ?></td>
						<td><?php echo e($jamaahs->terakhir_umrah); ?></td>
						<td><?php echo e($jamaahs->jumlah_haji); ?></td>
						<td><?php echo e($jamaahs->terakhir_haji); ?></td>
						<td><a href="<?php echo e(asset('storage/'.$jamaahs->file_ktp)); ?>">Download</a></td>
						<td><a href="<?php echo e(asset('storage/'.$jamaahs->file_akta_lahir)); ?>">Download</a></td>
						<td><a href="<?php echo e(asset('storage/'.$jamaahs->file_passport)); ?>">Download</a></td>
						<td><a href="<?php echo e(asset('storage/'.$jamaahs->file_kartu_keluarga)); ?>">Download</a></td>
						<td><a href="<?php echo e(asset('storage/'.$jamaahs->file_buku_nikah)); ?>">Download</a></td>
						<td><img src="<?php echo e(asset('storage/'.$jamaahs->file_foto)); ?>" width="100px"></td>
						<td><?php echo e($jamaahs->nama_instansi); ?></td>
						<td><?php echo e($jamaahs->jabatan); ?></td>
						<td class="over"><?php echo e($jamaahs->alamat_instansi); ?></td>
						<td><?php echo e($jamaahs->kota_instansi); ?></td>
						<td><?php echo e($jamaahs->kodepos_instansi); ?></td>
						<td><?php echo e($jamaahs->nama_keluarga); ?></td>
						<td><?php echo e($jamaahs->hub_keluarga); ?></td>
						<td><?php echo e($jamaahs->telp_keluarga); ?></td>
						<td><?php echo e($jamaahs->handphone_keluarga); ?></td>
						<td class="over"><?php echo e($jamaahs->alamat_keluarga); ?></td>
						<td><?php echo e($jamaahs->penyakit); ?></td>
					</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tbody>
	</table>
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
	
	<script>
		$(function() {
		    $('#jamaah').DataTable({
		      "paging": true,
		      "lengthChange": true,
		      "searching": true,
		      "ordering": true,
		      "info": true,
		      "autoWidth": false
		    });
		  });
	</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>