<?php $__env->startSection('content'); ?>
<div class="container">	
	<form role="form" action="" method="post" enctype="multipart/form-data">
		
	<?php echo e(csrf_field()); ?>


		<div id="reg-form" class="owl-carousel owl-theme owl-loaded owl-text-select-on">
			
			<div class="form-pt1">
				<div class="row">
					<div class="col-xs-12">
						<h2>1) Data Pribadi</h2>
						<p></p>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-md-6 col-lg-5">
						<div class="form-group<?php echo e($errors->has('nama') ? ' has-error' : ''); ?>">
							<label for="nama">Nama Lengkap</label><br>
							<span class="nama"><input type="text" name="nama" value="<?php echo e(old('nama')); ?>" size="40" class="form-control" id="nama-lengkap" required autofocus></span>
							<?php if($errors->has('nama')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('nama')); ?></strong>
                                </span>
                            <?php endif; ?>
						</div>
					<p></p>
					</div>
					
					<div class="col-xs-12 col-md-6 col-lg-3">
						<div class="form-group<?php echo e($errors->has('kelamin') ? ' has-error' : ''); ?>">
							<label for="kelamin">Jenis Kelamin</label><br>
							<span class="kelamin">
								<span>
									<span class="first">
										<label><input type="radio" name="kelamin" value="Pria" checked="checked">
											<span class="wpcf7-list-item-label">Pria</span>
										</label>
									</span>
								<span class="wpcf7-list-item last">
							<label><input type="radio" name="kelamin" value="Wanita">
								<span class="wpcf7-list-item-label">Wanita</span>
							</label>
							<?php if($errors->has('kelamin')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('kelamin')); ?></strong>
                                </span>
                            <?php endif; ?>
						</div>
					<p></p>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-md-6 col-lg-5">
						<div class="form-group<?php echo e($errors->has('tempat_lahir') ? ' has-error' : ''); ?>">
							<label for="tempat_lahir">Tempat Kelahiran</label><br>
							<span class="tempat_lahir">
								<input type="text" name="tempat_lahir" value="<?php echo e(old('tempat_lahir')); ?>" size="40" class="form-control" id="tempat_lahir" required autofocus>
							</span>
							<?php if($errors->has('tempat_lahir')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('tempat_lahir')); ?></strong>
                                </span>
                            <?php endif; ?>
						</div>
						<p></p>
					</div>
					<div class="col-xs-12 col-md-6 col-lg-4">
						<div class="form-group<?php echo e($errors->has('tanggal_lahir') ? ' has-error' : ''); ?>">
							<label for="tanggal_lahir">Tanggal Lahir (MM/DD/YYYY) (Sesuai KTP)</label><br>
							<span class="wpcf7-form-control-wrap tanggal_lahir">
								<input type="date" name="tanggal_lahir" value="<?php echo e(old('tanggal_lahir')); ?>" class="wpcf7-form-control wpcf7-date wpcf7-validates-as-required wpcf7-validates-as-date form-control" id="tanggal_lahir" aria-required="true" aria-invalid="false">
							</span>
							<?php if($errors->has('tanggal_lahir')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('tanggal_lahir')); ?></strong>
                                </span>
                            <?php endif; ?>
						</div>
						<p></p>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-md-6 col-lg-5">
						<div class="form-group<?php echo e($errors->has('nama_ayah') ? ' has-error' : ''); ?>">
							<label for="nama_ayah">Nama Ayah Kandung</label><br>
							<span class="wpcf7-form-control-wrap nama_ayah">
								<input type="text" name="nama_ayah" value="<?php echo e(old('nama_ayah')); ?>" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" id="nama_ayah" aria-required="true" aria-invalid="false">
							</span>
							<?php if($errors->has('nama_ayah')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('nama_ayah')); ?></strong>
                                </span>
                            <?php endif; ?>
						</div>
						<p></p>
					</div>
					<div class="col-xs-12 col-md-6 col-lg-5">
						<div class="form-group<?php echo e($errors->has('no_ktp') ? ' has-error' : ''); ?>">
							<label for="no_ktp">No. KTP</label><br>
							<span class="wpcf7-form-control-wrap no_ktp">
								<input type="text" name="no_ktp" value="<?php echo e(old('no_ktp')); ?>" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" id="no_ktp" aria-required="true" aria-invalid="false">
							</span>
							<?php if($errors->has('no_ktp')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('no_ktp')); ?></strong>
                                </span>
                            <?php endif; ?>
						</div>
						<p></p>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-md-6 col-lg-5">
						<div class="form-group<?php echo e($errors->has('alamat') ? ' has-error' : ''); ?>">
							<label for="alamat_1">Alamat Tinggal</label><br>
							<span class="wpcf7-form-control-wrap alamat_1">
								<textarea class="form-control" name="alamat" id="alamat" required=""><?php echo e(old('alamat')); ?></textarea>
							</span>
							<?php if($errors->has('alamat')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('alamat')); ?></strong>
                                </span>
                            <?php endif; ?>
						</div>
						<p></p>
					</div>
					<div class="col-xs-12 col-md-6 col-lg-2">
						<div class="form-group<?php echo e($errors->has('gol_darah') ? ' has-error' : ''); ?>">
							<label for="gol_darah">Golongan Darah</label><br>
							<span class="wpcf7-form-control-wrap gol_darah">
								<input type="text" name="gol_darah" value="<?php echo e(old('gol_darah')); ?>" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" id="gol_darah" aria-required="true" aria-invalid="false">
							</span>
							<?php if($errors->has('gol_darah')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('gol_darah')); ?></strong>
                            </span>
                            <?php endif; ?>
						</div>
						<p></p>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-md-6 col-lg-5">
						<div class="form-group<?php echo e($errors->has('telp') ? ' has-error' : ''); ?>">
							<label for="telp">No. Telp</label><br>
							<span class="wpcf7-form-control-wrap telp">
								<input type="tel" name="telp" value="<?php echo e(old('telp')); ?>" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel form-control" id="telp" aria-required="true" aria-invalid="false">
							</span>
							<?php if($errors->has('telp')): ?>
	                            <span class="help-block">
	                                <strong><?php echo e($errors->first('telp')); ?></strong>
	                            </span>
                            <?php endif; ?>
						</div>
						<p></p>
					</div>
					<div class="col-xs-12 col-md-6 col-lg-5">
						<div class="form-group<?php echo e($errors->has('handphone') ? ' has-error' : ''); ?>">
							<label for="handphone">No. Handphone</label><br>
							<span class="wpcf7-form-control-wrap handphone">
								<input type="tel" name="handphone" value="<?php echo e(old('handphone')); ?>" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel form-control" id="handphone" aria-invalid="false">
							</span>
							<?php if($errors->has('handphone')): ?>
	                            <span class="help-block">
	                                <strong><?php echo e($errors->first('handphone')); ?></strong>
	                            </span>
                            <?php endif; ?>
						</div>
						<p></p>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-md-6 col-lg-5">
						<div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
							<label for="email">Email</label><br>
							<span class="wpcf7-form-control-wrap email">
								<input type="email" name="email" value="<?php echo e(old('email')); ?>" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control" id="email" aria-required="true" aria-invalid="false">
							</span>
							<?php if($errors->has('email')): ?>
	                            <span class="help-block">
	                                <strong><?php echo e($errors->first('email')); ?></strong>
	                            </span>
                            <?php endif; ?>
						</div>
						<p></p>
					</div>
					<div class="col-xs-12 col-md-6 col-lg-5">
						<div class="form-group<?php echo e($errors->has('pendidikan') ? ' has-error' : ''); ?>">
							<label>Pendidikan Terakhir</label><br>
							<span class="wpcf7-form-control-wrap pendidikan">
								<span class="wpcf7-form-control wpcf7-radio" id="pendidikan">
									<span class="wpcf7-list-item first">
										<label>
											<input type="radio" name="pendidikan" value="SD" checked="checked">
												<span class="wpcf7-list-item-label">SD</span>
										</label>
									</span>
									<span class="wpcf7-list-item">
										<label>
											<input type="radio" name="pendidikan" value="SMP">
												<span class="wpcf7-list-item-label">SMP</span>
										</label>
									</span>
									<span class="wpcf7-list-item">
										<label>
											<input type="radio" name="pendidikan" value="SMA">
												<span class="wpcf7-list-item-label">SMA</span>
										</label>
									</span>
									<span class="wpcf7-list-item">
										<label>
											<input type="radio" name="pendidikan" value="Diploma">
												<span class="wpcf7-list-item-label">Diploma</span>
										</label>
									</span>
									<span class="wpcf7-list-item">
										<label>
											<input type="radio" name="pendidikan" value="S1">
											<span class="wpcf7-list-item-label">S1</span>
										</label>
									</span>
									<span class="wpcf7-list-item last">
										<label>
											<input type="radio" name="pendidikan" value="S2">
												<span class="wpcf7-list-item-label">S2</span>
										</label>
									</span>
								</span>
								<?php if($errors->has('pendidikan')): ?>
		                            <span class="help-block">
		                                <strong><?php echo e($errors->first('pendidikan')); ?></strong>
		                            </span>
	                            <?php endif; ?>
							</span>
						</div>
						<p></p>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12">
						<div class="form-group">
							<label>Pekerjaan</label><br>
							<span class="wpcf7-form-control-wrap pekerjaan">
								<span class="wpcf7-form-control wpcf7-radio" id="pekerjaan">
									<span class="wpcf7-list-item first">
										<label>
											<input type="radio" name="pekerjaan" value="PNS" checked="checked">
												<span class="wpcf7-list-item-label">PNS</span>
										</label>
									</span>
									<span class="wpcf7-list-item">
										<label>
											<input type="radio" name="pekerjaan" value="TNI">
												<span class="wpcf7-list-item-label">TNI</span>
										</label>
									</span>
									<span class="wpcf7-list-item">
										<label>
											<input type="radio" name="pekerjaan" value="Dagang">
												<span class="wpcf7-list-item-label">Dagang</span>
										</label>
									</span>
									<span class="wpcf7-list-item">
										<label>
											<input type="radio" name="pekerjaan" value="Tani">
												<span class="wpcf7-list-item-label">Tani</span>
										</label>
									</span>
									<span class="wpcf7-list-item">
										<label>
											<input type="radio" name="pekerjaan" value="BUMN">
												<span class="wpcf7-list-item-label">BUMN</span>
										</label>
									</span>
									<span class="wpcf7-list-item">
										<label>
											<input type="radio" name="pekerjaan" value="Swasta">
												<span class="wpcf7-list-item-label">Swasta</span>
										</label>
									</span>
									<span class="wpcf7-list-item">
										<label>
											<input type="radio" name="pekerjaan" value="Ibu Rumah Tangga">
												<span class="wpcf7-list-item-label">Ibu Rumah Tangga</span>
											</label>
									</span>
									<span class="wpcf7-list-item">
										<label>
											<input type="radio" name="pekerjaan" value="Pelajar">
												<span class="wpcf7-list-item-label">Pelajar</span>
										</label>
									</span>
									<span class="wpcf7-list-item last">
										<label>
											<input type="radio" name="pekerjaan" value="Wiraswasta">
												<span class="wpcf7-list-item-label">Wiraswasta</span>
										</label>
									</span>
								</span>
								<?php if($errors->has('pekerjaan')): ?>
		                            <span class="help-block">
		                                <strong><?php echo e($errors->first('pekerjaan')); ?></strong>
		                            </span>
	                            <?php endif; ?>
							</span>
						</div>
						<p></p>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12">
						<div class="form-group<?php echo e($errors->has('pekerjaan') ? ' has-error' : ''); ?>">
							<label>Status Perkawinan</label><br>
							<span class="wpcf7-form-control-wrap status_perkawinan">
								<span class="wpcf7-form-control wpcf7-radio" id="status_perkawinan">
									<span class="wpcf7-list-item first">
										<label>
											<input type="radio" name="status_perkawinan" value="Menikah" checked="checked">
											<span class="wpcf7-list-item-label">Menikah</span>
										</label>
									</span>
									<span class="wpcf7-list-item">
										<label>
											<input type="radio" name="status_perkawinan" value="Belum Menikah">
											<span class="wpcf7-list-item-label">Belum Menikah</span>
										</label>
									</span>
									<span class="wpcf7-list-item">
										<label>
											<input type="radio" name="status_perkawinan" value="Janda">
											<span class="wpcf7-list-item-label">Janda</span>
										</label>
									</span>
									<span class="wpcf7-list-item last">
										<label>
											<input type="radio" name="status_perkawinan" value="Duda">
											<span class="wpcf7-list-item-label">Duda</span>
										</label>
									</span>
								</span>
							</span>
						</div>
						<p></p>
					</div>
				</div>

				<p class="tombol-form"><a href="#" class="btn btn-primary next-form">Lanjutkan</a></p>
			</div>

			<div class="form-pt2">
				<div class="row">
					<div class="col-xs-12">
						<h2>2) Data Pribadi</h2>
						<p></p>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-md-6 col-lg-5">
						<div class="form-group<?php echo e($errors->has('no_passport') ? ' has-error' : ''); ?>">
							<label for="no_passport">No. Passport</label><br>
							<span class="wpcf7-form-control-wrap no_passport">
								<input type="text" name="no_passport" value="<?php echo e(old('no_passport')); ?>" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" id="no_passport" aria-required="true" aria-invalid="false">
							</span>
							<?php if($errors->has('no_passport')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('no_passport')); ?></strong>
                                </span>
                            <?php endif; ?>
						</div>
						<p></p>
					</div>
					<div class="col-xs-12 col-md-6 col-lg-5">
						<div class="form-group<?php echo e($errors->has('tempat_passport') ? ' has-error' : ''); ?>">
							<label for="tempat_passport">Tempat Dikeluarkan</label><br>
							<span class="wpcf7-form-control-wrap tempat_passport">
								<input type="text" name="tempat_passport" value="<?php echo e(old('tempat_passport')); ?>" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" id="tempat_passport" aria-required="true" aria-invalid="false">
							</span>
							<?php if($errors->has('tempat_passport')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('tempat_passport')); ?></strong>
                                </span>
                            <?php endif; ?>
						</div>
						<p></p>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-md-6 col-lg-5">
						<div class="form-group<?php echo e($errors->has('masa_berlaku_passport') ? ' has-error' : ''); ?>">
							<label for="masa_berlaku_passport">Masa Berlaku</label><br>
							<span class="wpcf7-form-control-wrap masa_berlaku_passport">
								<input type="date" name="masa_berlaku_passport" value="<?php echo e(old('masa_berlaku_passport')); ?>" class="wpcf7-form-control wpcf7-date wpcf7-validates-as-required wpcf7-validates-as-date form-control" id="masa_berlaku_passport" aria-required="true" aria-invalid="false">
							</span>
							<?php if($errors->has('masa_berlaku_passport')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('masa_berlaku_passport')); ?></strong>
                                </span>
                            <?php endif; ?>
						</div>
						<p></p>
					</div>
					<div class="col-xs-12 col-md-6 col-lg-5">
						<div class="form-group<?php echo e($errors->has('tanggal_passport') ? ' has-error' : ''); ?>">
							<label for="tanggal_passport">Tanggal Dikeluarkan</label><br>
							<span class="wpcf7-form-control-wrap tanggal_passport">
								<input type="date" name="tanggal_passport" value="<?php echo e(old('tanggal_passport')); ?>" class="wpcf7-form-control wpcf7-date wpcf7-validates-as-required wpcf7-validates-as-date form-control" id="tanggal_passport" aria-required="true" aria-invalid="false">
							</span>
							<?php if($errors->has('tanggal_passport')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('tanggal_passport')); ?></strong>
                                </span>
                            <?php endif; ?>
						</div>
						<p></p>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-md-6 col-lg-5">
						<div class="form-group<?php echo e($errors->has('jumlah_umroh') ? ' has-error' : ''); ?>">
							<label for="jumlah_umroh">Jumlah Pengalaman Umroh <span>(Tahun)</span></label>
							<p></p>
							<div class="col-xs-12 col-md-3">
								<span class="wpcf7-form-control-wrap jumlah_umroh">
									<input type="text" name="jumlah_umroh" value="<?php echo e(old('jumlah_umroh')); ?>" size="40" class="wpcf7-form-control wpcf7-text form-control" id="jumlah_umroh" aria-invalid="false">
								</span>
								<?php if($errors->has('jumlah_umroh')): ?>
	                                <span class="help-block">
	                                    <strong><?php echo e($errors->first('jumlah_umroh')); ?></strong>
	                                </span>
	                            <?php endif; ?>
							</div>
							<p></p>
						</div>
					</div>
					<div class="col-xs-12 col-md-6 col-lg-5">
						<div class="form-group<?php echo e($errors->has('terakhir_umroh') ? ' has-error' : ''); ?>">
							<label for="terakhir_umroh">Tahun Terakhir Umroh</label>
							<p></p>
							<div class="col-xs-12 col-md-3">
								<span class="wpcf7-form-control-wrap terakhir_umroh">
									<input type="text" name="terakhir_umroh" value="<?php echo e(old('terakhir_umroh')); ?>" size="40" class="wpcf7-form-control wpcf7-text form-control" id="terakhir_umroh" aria-invalid="false">
								</span>
								<?php if($errors->has('terakhir_umroh')): ?>
	                                <span class="help-block">
	                                    <strong><?php echo e($errors->first('terakhir_umroh')); ?></strong>
	                                </span>
	                            <?php endif; ?>
							</div>
							<p></p>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-md-6 col-lg-5">
						<div class="form-group<?php echo e($errors->has('jumlah_haji') ? ' has-error' : ''); ?>">
							<label for="jumlah_haji">Jumlah Pengalaman Haji <span>(Tahun)</span></label>
							<p></p>
							<div class="col-xs-12 col-md-3">
								<span class="wpcf7-form-control-wrap jumlah_haji">
									<input type="text" name="jumlah_haji" value="<?php echo e(old('jumlah_haji')); ?>" size="40" class="wpcf7-form-control wpcf7-text form-control" id="jumlah_haji" aria-invalid="false">
								</span>
								<?php if($errors->has('jumlah_haji')): ?>
	                                <span class="help-block">
	                                    <strong><?php echo e($errors->first('jumlah_haji')); ?></strong>
	                                </span>
	                            <?php endif; ?>
							</div>
							<p></p>
						</div>
					</div>
					<div class="col-xs-12 col-md-6 col-lg-5">
						<div class="form-group<?php echo e($errors->has('terakhir_haji') ? ' has-error' : ''); ?>">
							<label for="terakhir_haji">Tahun Terakhir Haji</label><p></p>
							<div class="col-xs-12 col-md-3">
								<span class="wpcf7-form-control-wrap terakhir_haji">
									<input type="text" name="terakhir_haji" value="<?php echo e(old('terakhir_haji')); ?>" size="40" class="wpcf7-form-control wpcf7-text form-control" id="terakhir_haji" aria-invalid="false">
								</span>
								<?php if($errors->has('terakhir_haji')): ?>
	                                <span class="help-block">
	                                    <strong><?php echo e($errors->first('terakhir_haji')); ?></strong>
	                                </span>
	                            <?php endif; ?>
							</div>
							<p></p>
						</div>
					</div>
				</div>

				<h5>Paket Umroh</h5>

				<div class="row">
					<div class="col-xs-12">
						<label>Upload Files</label><p></p>
						<div class="row">
							<div class="col-xs-6 col-sm-4 col-md-3">
								<div class="form-group<?php echo e($errors->has('file_ktp') ? ' has-error' : ''); ?>">
									<label>KTP</label><br>
									<span class="wpcf7-form-control-wrap file_ktp">
										<input type="file" name="file_ktp" size="40" class="wpcf7-form-control wpcf7-file wpcf7-validates-as-required form-control" id="file_ktp" aria-required="true" aria-invalid="false">
									</span>
									<?php if($errors->has('file_ktp')): ?>
		                                <span class="help-block">
		                                    <strong><?php echo e($errors->first('file_ktp')); ?></strong>
		                                </span>
		                            <?php endif; ?>
								</div>
								<p></p>
							</div>
							<div class="col-xs-6 col-sm-4 col-md-3">
								<div class="form-group<?php echo e($errors->has('file_akta_lahir') ? ' has-error' : ''); ?>">
									<label>Akta Lahir</label><br>
									<span class="wpcf7-form-control-wrap file_akta_lahir">
										<input type="file" name="file_akta_lahir" size="40" class="wpcf7-form-control wpcf7-file wpcf7-validates-as-required form-control" id="file_akta_lahir" aria-required="true" aria-invalid="false">
									</span>
									<?php if($errors->has('file_akta_lahir')): ?>
		                                <span class="help-block">
		                                    <strong><?php echo e($errors->first('file_akta_lahir')); ?></strong>
		                                </span>
		                            <?php endif; ?>
								</div>
								<p></p>
							</div>
							<div class="col-xs-6 col-sm-4 col-md-3">
								<div class="form-group<?php echo e($errors->has('file_passport') ? ' has-error' : ''); ?>">
									<label>Passport</label><br>
									<span class="wpcf7-form-control-wrap file_passport">
										<input type="file" name="file_passport" size="40" class="wpcf7-form-control wpcf7-file wpcf7-validates-as-required form-control" id="file_passport" aria-required="true" aria-invalid="false">
										<?php if($errors->has('file_passport')): ?>
			                                <span class="help-block">
			                                    <strong><?php echo e($errors->first('file_passport')); ?></strong>
			                                </span>
			                            <?php endif; ?>
									</span>
								</div>
								<p></p>
							</div>
							<div class="col-xs-6 col-sm-4 col-md-3">
								<div class="form-group<?php echo e($errors->has('file_kartu_keluarga') ? ' has-error' : ''); ?>">
									<label>Kartu Keluarga</label><br>
									<span class="wpcf7-form-control-wrap file_kartu_keluarga">
										<input type="file" name="file_kartu_keluarga" size="40" class="wpcf7-form-control wpcf7-file wpcf7-validates-as-required form-control" id="file_kartu_keluarga" aria-required="true" aria-invalid="false">
									</span>
									<?php if($errors->has('file_kartu_keluarga')): ?>
			                                <span class="help-block">
			                                    <strong><?php echo e($errors->first('file_kartu_keluarga')); ?></strong>
			                                </span>
			                            <?php endif; ?>
								</div>
								<p></p>
							</div>
							<div class="col-xs-6 col-sm-4 col-md-3">
								<div class="form-group<?php echo e($errors->has('file_buku_nikah') ? ' has-error' : ''); ?>">
									<label>Buku Nikah <span>(Jika Ada)</span></label><br>
									<span class="wpcf7-form-control-wrap file_buku_nikah">
										<input type="file" name="file_buku_nikah" size="40" class="wpcf7-form-control wpcf7-file form-control" id="file_buku_nikah" aria-invalid="false">
									</span>
									<?php if($errors->has('file_buku_nikah')): ?>
		                                <span class="help-block">
		                                    <strong><?php echo e($errors->first('file_buku_nikah')); ?></strong>
		                                </span>
		                            <?php endif; ?>
								</div>
								<p></p>
							</div>
							<div class="col-xs-6 col-sm-4 col-md-3">
								<div class="form-group<?php echo e($errors->has('file_foto') ? ' has-error' : ''); ?>">
									<label>Pas Foto</label><br>
									<span class="wpcf7-form-control-wrap file_foto">
										<input type="file" name="file_foto" size="40" class="wpcf7-form-control wpcf7-file wpcf7-validates-as-required form-control" id="file_foto" aria-required="true" aria-invalid="false">
									</span>
									<?php if($errors->has('file_foto')): ?>
		                                <span class="help-block">
		                                    <strong><?php echo e($errors->first('file_foto')); ?></strong>
		                                </span>
		                            <?php endif; ?>
								</div>
								<p></p>
							</div>
						</div>
					</div>
				</div>

				<p class="tombol-form"><a href="#" class="btn btn-warning prev-form">Kembali</a> <a href="#" class="btn btn-primary next-form">Selanjutnya</a></p>
			</div>

			<div>
				<div class="row">
					<div class="col-xs-12">
						<h2>3) Data Pribadi</h2>
						<p></p>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-md-6 col-lg-5">
						<div class="form-group<?php echo e($errors->has('nama_instansi') ? ' has-error' : ''); ?>">
							<label for="nama_instansi">Nama Instansi <span>(Jika ada)</span></label><br>
							<span class="wpcf7-form-control-wrap nama_instansi">
								<input type="text" name="nama_instansi" value="<?php echo e(old('nama_instansi')); ?>" size="40" class="wpcf7-form-control wpcf7-text form-control" id="nama_instansi" aria-invalid="false">
							</span>
							<?php if($errors->has('nama_instansi')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('nama_instansi')); ?></strong>
                                </span>
                            <?php endif; ?>
						</div>
						<p></p>
					</div>
					<div class="col-xs-12 col-md-6 col-lg-5">
						<div class="form-group<?php echo e($errors->has('jabatan') ? ' has-error' : ''); ?>">
						<div class="form-group">
							<label for="jabatan">Jabatan</label><br>
							<span class="wpcf7-form-control-wrap jabatan">
								<input type="text" name="jabatan" value="<?php echo e(old('jabatan')); ?>" size="40" class="wpcf7-form-control wpcf7-text form-control" id="jabatan" aria-invalid="false">
							</span>
							<?php if($errors->has('jabatan')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('jabatan')); ?></strong>
                                </span>
                            <?php endif; ?>
						</div>
						<p></p>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-md-6 col-lg-5">
						<div class="form-group<?php echo e($errors->has('alamat2') ? ' has-error' : ''); ?>">
							<label for="alamat_instansi_1">Alamat Tinggal</label><br>
							<span class="wpcf7-form-control-wrap alamat_instansi_1">
								<textarea class="form-control" name="alamat2" id="alamat" required=""><?php echo e(old('alamat2')); ?></textarea>
							</span>
							<?php if($errors->has('alamat2')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('alamat2')); ?></strong>
                                </span>
                            <?php endif; ?>
						</div>
						<p></p>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-md-6 col-lg-5">
						<div class="form-group<?php echo e($errors->has('kota_instansi') ? ' has-error' : ''); ?>">
							<label for="kota_instansi">Kota</label><br>
							<span class="wpcf7-form-control-wrap kota_instansi">
								<input type="text" name="kota_instansi" value="<?php echo e(old('kota_instansi')); ?>" size="40" class="wpcf7-form-control wpcf7-text form-control" id="kota_instansi" aria-invalid="false">
							</span>
							<?php if($errors->has('kota_instansi')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('kota_instansi')); ?></strong>
                                </span>
                            <?php endif; ?>
						</div>
						<p></p>
					</div>
					<div class="col-xs-12 col-md-4 col-lg-3">
						<div class="form-group<?php echo e($errors->has('kodepos_instansi') ? ' has-error' : ''); ?>">
							<label for="kodepos_instansi">Kode Pos</label><br>
							<span class="wpcf7-form-control-wrap kodepos_instansi">
								<input type="text" name="kodepos_instansi" value="<?php echo e(old('kodepos_instansi')); ?>" size="40" class="wpcf7-form-control wpcf7-text form-control" id="kodepos_instansi" aria-invalid="false">
							</span>
							<?php if($errors->has('kodepos_instansi')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('kodepos_instansi')); ?></strong>
                                </span>
                            <?php endif; ?>
						</div>
						<p></p>
					</div>
				</div>
				
				<h5>Data keluarga yang dihubungi saat darurat</h5>

				<div class="row">
					<div class="col-xs-12 col-md-6 col-lg-5">
						<div class="form-group<?php echo e($errors->has('nama_keluarga') ? ' has-error' : ''); ?>">
							<label for="nama_keluarga">Nama Lengkap</label><br>
							<span class="wpcf7-form-control-wrap nama_keluarga">
								<input type="text" name="nama_keluarga" value="<?php echo e(old('nama_keluarga')); ?>" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" id="nama_keluarga" aria-required="true" aria-invalid="false">
							</span>
							<?php if($errors->has('nama_keluarga')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('nama_keluarga')); ?></strong>
                                </span>
                            <?php endif; ?>
						</div>
						<p></p>
					</div>
					<div class="col-xs-12 col-md-6 col-lg-5">
						<div class="form-group<?php echo e($errors->has('hub_keluarga') ? ' has-error' : ''); ?>">
							<label for="hub_keluarag">Hubungan Keluarga</label><br>
							<span class="wpcf7-form-control-wrap hub_keluarga">
								<input type="text" name="hub_keluarga" value="<?php echo e(old('hub_keluarga')); ?>" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" id="hub_keluarga" aria-required="true" aria-invalid="false">
							</span>
							<?php if($errors->has('hub_keluarga')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('hub_keluarga')); ?></strong>
                                </span>
                            <?php endif; ?>
						</div>
						<p></p>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-md-6 col-lg-5">
						<div class="form-group<?php echo e($errors->has('telp_keluarga') ? ' has-error' : ''); ?>">
							<label for="telp_keluarga">No. Telp</label><br>
							<span class="wpcf7-form-control-wrap telp_keluarga">
								<input type="tel" name="telp_keluarga" value="<?php echo e(old('telp_keluarga')); ?>" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel form-control" id="telp_keluarga" aria-required="true" aria-invalid="false">
							</span>
							<?php if($errors->has('telp_keluarga')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('telp_keluarga')); ?></strong>
                                </span>
                            <?php endif; ?>
						</div>
						<p></p>
					</div>
					<div class="col-xs-12 col-md-6 col-lg-5">
						<div class="form-group<?php echo e($errors->has('handphone_keluarga') ? ' has-error' : ''); ?>">
							<label for="handphone_keluarga">No. Handphone</label><br>
							<span class="wpcf7-form-control-wrap handphone_keluarga">
								<input type="tel" name="handphone_keluarga" value="<?php echo e(old('handphone_keluarga')); ?>" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel form-control" id="handphone_keluarga" aria-required="true" aria-invalid="false">
							</span>
							<?php if($errors->has('handphone_keluarga')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('handphone_keluarga')); ?></strong>
                                </span>
                            <?php endif; ?>
						</div>
						<p></p>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-md-6 col-lg-5">
						<div class="form-group<?php echo e($errors->has('alamat3') ? ' has-error' : ''); ?>">
							<label for="alamat_keluarga_1">Alamat Tinggal</label><br>
							<span class="wpcf7-form-control-wrap alamat_keluarga_1">
								<textarea class="form-control" name="alamat3" id="alamat" required=""><?php echo e(old('alamat3')); ?></textarea>
							</span>
							<?php if($errors->has('alamat3')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('alamat3')); ?></strong>
                                </span>
                            <?php endif; ?>
						</div>
						<p></p>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-md-6 col-lg-5">
						<div class="form-group<?php echo e($errors->has('penyakit') ? ' has-error' : ''); ?>">
							<label for="penyakit">Penyakit Calon Jamaah yang diderita</label><br>
							<span class="wpcf7-form-control-wrap penyakit">
								<input type="text" name="penyakit" value="<?php echo e(old('penyakit')); ?>" size="40" class="wpcf7-form-control wpcf7-text form-control" id="penyakit" aria-invalid="false">
							</span>
							<?php if($errors->has('penyakit')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('penyakit')); ?></strong>
                                </span>
                            <?php endif; ?>
						</div>
						<p></p>
					</div>
				</div>

				<p class="tombol-form"><a href="#" class="btn btn-warning prev-form">Kembali</a> <input type="submit" value="Selesai" class="btn btn-primary save wpcf7-form-control wpcf7-submit"><span class="ajax-loader"></span>
			</div>
		</div>
	</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>