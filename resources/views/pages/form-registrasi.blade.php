@extends('layouts.template')

@section('content')
<div class="content-form container">	
	{{-- <form role="form" action="" method="post" enctype="multipart/form-data"> --}}
	{{Form::open(['url'=>'jamaah/registrasi', 'class'=>'control','files' => 'true'])}}
	
	{{ csrf_field() }}

		<div id="reg-form">
			
			<div class="form-pt1">

				<div class="row box-shadow">
					<div class="col-xs-12 col-md-4">
						<div class="form-group">
							<label for="paket"><h4>Pilih paket umrah/haji Anda</h4></label>
							<select class="form-control" id="paket" name="paket">
								<option>--Silahkan pilih--</option>
								<option value="U1">Paket Umrah Reguler</option>
								<option value="U2">Paket Umrah Ramadhan</option>
								<option value="U3">Paket Umrah Istimewa</option>
								<option value="U4">Paket Umrah VIP</option>
								<option value="H1">Paket Haji Reguler</option>
								<option value="H2">Paket Haji Khusus</option>
							</select>
						</div>
					</div>
					<div class="col-xs-12 col-md-4" id="prog-ramadhan">
						<div class="form-group">
							<label for="program-ramadhan"><h4>Pilih program umrah Ramadhan</h4></label>
							<select class="form-control" id="program-ramadhan" name="program">
								<option>--Silahkan pilih--</option>
								<option value="192">Awal(9 Hari)</option>
								<option value="1152">Awal(15 Hari)</option>
								<option value="392">Lailatul Qadr(9 Hari)</option>
								<option value="3152">Lailatul Qadr(9 Hari)</option>
							</select>
						</div>
					</div>
					<div class="col-xs-12 col-md-4" id="prog-reguler">
						<div class="form-group">
							<label for="program-reguler"><h4>Pilih program umrah Reguler</h4></label>
							<select class="form-control" id="program-reguler" name="program">
								<option>--Silahkan pilih--</option>
								<option value="1">Standar</option>
								<option value="2">Ekonomi</option>
							</select>
						</div>
					</div>
					<!-- <div class="col-xs-12 col-md-4" id="prog-haji">
						<div class="form-group">
							<label for="program-haji"><h4>Pilih program haji</h4></label>
							<select class="form-control" id="program-haji" name="program-haji">
								<option>Silahkan pilih</option>
								<option value="1">Reguler</option>
								<option value="2">Khusus</option>
							</select>
						</div>
					</div> -->
					<div class="col-xs-12 col-md-4" style="display: none;">
						<div class="form-group">
							<label for="kamar"><h4>Pilih tipe kamar</h4></label>
							<select class="form-control" id="kamar" name="kamar">
								<option>--Silahkan pilih--</option>
								<option value="2">Double</option>
								<option value="3">Triple</option>
								<option value="4">Quadraple</option>
							</select>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12">
						<h2>1) Data Pribadi</h2>
						<p></p>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-md-6 col-lg-5">
						<div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
							<label for="nama">Nama Lengkap</label><br>
							<span class="nama"><input type="text" name="nama" value="{{ old('nama') }}" size="40" class="form-control" id="nama-lengkap" autofocus></span>
							@if ($errors->has('nama'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nama') }}</strong>
                                </span>
                            @endif
						</div>
					<p></p>
					</div>
					
					<div class="col-xs-12 col-md-6 col-lg-3">
						<div class="form-group{{ $errors->has('kelamin') ? ' has-error' : '' }}">
							<label for="jenis_kelamin">Jenis Kelamin</label><br>
							<span class="jenis_kelamin">
								<span>
									<span class="first">
										<label><input type="radio" name="jenis_kelamin" value="Pria" class="form" checked="checked">
											<span>Pria</span>
										</label>
									</span>
								<span>
							<label><input type="radio" name="jenis_kelamin" value="Wanita">
								<span>Wanita</span>
							</label>
							@if ($errors->has('kelamin'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('kelamin') }}</strong>
                                </span>
                            @endif
						</div>
					<p></p>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-md-6 col-lg-5">
						<div class="form-group{{ $errors->has('tempat_lahir') ? ' has-error' : '' }}">
							<label for="tempat_lahir">Tempat Kelahiran</label><br>
							<span class="tempat_lahir">
								<input type="text" name="tempat_lahir" value="{{ old('tempat_lahir') }}" size="40" class="form-control" id="tempat_lahir" autofocus>
							</span>
							@if ($errors->has('tempat_lahir'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('tempat_lahir') }}</strong>
                                </span>
                            @endif
						</div>
						<p></p>
					</div>
					<div class="col-xs-12 col-md-6 col-lg-4">
						<div class="form-group{{ $errors->has('tanggal_lahir') ? ' has-error' : '' }}">
							<label for="tanggal_lahir">Tanggal Lahir (MM/DD/YYYY) (Sesuai KTP)</label><br>
							<span class="tanggal_lahir">
								<input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" class="form-control" id="tanggal_lahir" aria-invalid="false">
							</span>
							@if ($errors->has('tanggal_lahir'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('tanggal_lahir') }}</strong>
                                </span>
                            @endif
						</div>
						<p></p>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-md-6 col-lg-5">
						<div class="form-group{{ $errors->has('nama_ayah') ? ' has-error' : '' }}">
							<label for="nama_ayah">Nama Ayah Kandung</label><br>
							<span class="nama_ayah">
								<input type="text" name="nama_ayah" value="{{ old('nama_ayah') }}" size="40" class="form-control" id="nama_ayah" aria-invalid="false">
							</span>
							@if ($errors->has('nama_ayah'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nama_ayah') }}</strong>
                                </span>
                            @endif
						</div>
						<p></p>
					</div>
					<div class="col-xs-12 col-md-6 col-lg-4">
						<div class="form-group{{ $errors->has('no_ktp') ? ' has-error' : '' }}">
							<label for="no_ktp">No. KTP</label><br>
							<span class="no_ktp">
								<input type="text" name="no_ktp" value="{{ old('no_ktp') }}" size="40" class="form-control" id="no_ktp" aria-invalid="false">
							</span>
							@if ($errors->has('no_ktp'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('no_ktp') }}</strong>
                                </span>
                            @endif
						</div>
						<p></p>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-md-6 col-lg-5">
						<div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
							<label for="alamat_1">Alamat Tinggal</label><br>
							<span class="alamat_1">
								<textarea class="form-control" name="alamat" id="alamat">{{ old('alamat') }}</textarea>
							</span>
							@if ($errors->has('alamat'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('alamat') }}</strong>
                                </span>
                            @endif
						</div>
						<p></p>
					</div>
					<div class="col-xs-12 col-md-6 col-lg-2">
						<div class="form-group{{ $errors->has('gol_darah') ? ' has-error' : '' }}">
							<label for="gol_darah">Golongan Darah</label><br>
							<span class="gol_darah">
								<input type="text" name="gol_darah" value="{{ old('gol_darah') }}" size="40" class="form-control" id="gol_darah" aria-invalid="false">
							</span>
							@if ($errors->has('gol_darah'))
                            <span class="help-block">
                                <strong>{{ $errors->first('gol_darah') }}</strong>
                            </span>
                            @endif
						</div>
						<p></p>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-md-6 col-lg-5">
						<div class="form-group{{ $errors->has('telp') ? ' has-error' : '' }}">
							<label for="telp">No. Telp</label><br>
							<span class="telp">
								<input type="tel" name="telp" value="{{ old('telp') }}" size="40" class="form-control" id="telp" aria-invalid="false">
							</span>
							@if ($errors->has('telp'))
	                            <span class="help-block">
	                                <strong>{{ $errors->first('telp') }}</strong>
	                            </span>
                            @endif
						</div>
						<p></p>
					</div>
					<div class="col-xs-12 col-md-6 col-lg-5">
						<div class="form-group{{ $errors->has('handphone') ? ' has-error' : '' }}">
							<label for="handphone">No. Handphone</label><br>
							<span class="handphone">
								<input type="tel" name="handphone" value="{{ old('handphone') }}" size="40" class="form-control" id="handphone" aria-invalid="false">
							</span>
							@if ($errors->has('handphone'))
	                            <span class="help-block">
	                                <strong>{{ $errors->first('handphone') }}</strong>
	                            </span>
                            @endif
						</div>
						<p></p>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-md-6 col-lg-5">
						<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
							<label for="email">Email</label><br>
							<span class="email">
								<input type="email" name="email" value="{{ old('email') }}" size="40" class="form-control" id="email" aria-invalid="false">
							</span>
							@if ($errors->has('email'))
	                            <span class="help-block">
	                                <strong>{{ $errors->first('email') }}</strong>
	                            </span>
                            @endif
						</div>
						<p></p>
					</div>
					<div class="col-xs-12 col-md-6 col-lg-5">
						<div class="form-group{{ $errors->has('pendidikan') ? ' has-error' : '' }}">
							<label>Pendidikan Terakhir</label><br>
							<span class="pendidikan">
								<span id="pendidikan">
									<span class="first">
										<label>
											<input type="radio" name="pendidikan" value="SD" checked="checked">
												<span>SD</span>
										</label>
									</span>
									<span>
										<label>
											<input type="radio" name="pendidikan" value="SMP">
												<span>SMP</span>
										</label>
									</span>
									<span>
										<label>
											<input type="radio" name="pendidikan" value="SMA">
												<span>SMA</span>
										</label>
									</span>
									<span>
										<label>
											<input type="radio" name="pendidikan" value="Diploma">
												<span>Diploma</span>
										</label>
									</span>
									<span>
										<label>
											<input type="radio" name="pendidikan" value="S1">
											<span>S1</span>
										</label>
									</span>
									<span>
										<label>
											<input type="radio" name="pendidikan" value="S2">
												<span>S2</span>
										</label>
									</span>
								</span>
								@if ($errors->has('pendidikan'))
		                            <span class="help-block">
		                                <strong>{{ $errors->first('pendidikan') }}</strong>
		                            </span>
	                            @endif
							</span>
						</div>
						<p></p>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12">
						<div class="form-group">
							<label>Pekerjaan</label><br>
							<span class="pekerjaan">
								<span id="pekerjaan">
									<span class="first">
										<label>
											<input type="radio" name="pekerjaan" value="PNS" checked="checked">
												<span>PNS</span>
										</label>
									</span>
									<span>
										<label>
											<input type="radio" name="pekerjaan" value="TNI">
												<span>TNI</span>
										</label>
									</span>
									<span>
										<label>
											<input type="radio" name="pekerjaan" value="Dagang">
												<span>Dagang</span>
										</label>
									</span>
									<span>
										<label>
											<input type="radio" name="pekerjaan" value="Tani">
												<span>Tani</span>
										</label>
									</span>
									<span>
										<label>
											<input type="radio" name="pekerjaan" value="BUMN">
												<span>BUMN</span>
										</label>
									</span>
									<span>
										<label>
											<input type="radio" name="pekerjaan" value="Swasta">
												<span>Swasta</span>
										</label>
									</span>
									<span>
										<label>
											<input type="radio" name="pekerjaan" value="Ibu Rumah Tangga">
												<span>Ibu Rumah Tangga</span>
											</label>
									</span>
									<span>
										<label>
											<input type="radio" name="pekerjaan" value="Pelajar">
												<span>Pelajar</span>
										</label>
									</span>
									<span>
										<label>
											<input type="radio" name="pekerjaan" value="Wiraswasta">
												<span>Wiraswasta</span>
										</label>
									</span>
								</span>
								@if ($errors->has('pekerjaan'))
		                            <span class="help-block">
		                                <strong>{{ $errors->first('pekerjaan') }}</strong>
		                            </span>
	                            @endif
							</span>
						</div>
						<p></p>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12">
						<div class="form-group{{ $errors->has('status_perkawinan') ? ' has-error' : '' }}">
							<label>Status Perkawinan</label><br>
							<span class="status_perkawinan">
								<span id="status_perkawinan">
									<span class="first">
										<label>
											<input type="radio" name="status_perkawinan" value="Menikah" checked="checked">
											<span>Menikah</span>
										</label>
									</span>
									<span>
										<label>
											<input type="radio" name="status_perkawinan" value="Belum Menikah">
											<span>Belum Menikah</span>
										</label>
									</span>
									<span>
										<label>
											<input type="radio" name="status_perkawinan" value="Janda">
											<span>Janda</span>
										</label>
									</span>
									<span>
										<label>
											<input type="radio" name="status_perkawinan" value="Duda">
											<span>Duda</span>
										</label>
									</span>
								</span>
							</span>
						</div>
						<p></p>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="form-group{{ $errors->has('merokok') ? ' has-error' : '' }}">
							<label>Merokok/Tidak</label><br>
							<span class="merokok">
								<span id="merokok">
									<span class="first">
										<label>
											<input type="radio" name="merokok" value="Tidak Merokok" checked="checked">
											<span>Tidak Merokok</span>
										</label>
									</span>
									<span>
										<label>
											<input type="radio" name="merokok" value="Merokok">
											<span>Merokok</span>
										</label>
									</span>
								</span>
							</span>
						</div>
						<p></p>
					</div>
				</div>

				<p class="tombol-form"><button type="button" id="next1" href="#" class="btn btn-primary next-form">Lanjutkan</button></p>
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
						<div class="form-group{{ $errors->has('no_passport') ? ' has-error' : '' }}">
							<label for="no_passport">No. Passport</label><br>
							<span class="no_passport">
								<input type="text" name="no_passport" value="{{ old('no_passport')}}" size="40" class="form-control" id="no_passport" aria-invalid="false">
							</span>
							@if ($errors->has('no_passport'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('no_passport') }}</strong>
                                </span>
                            @endif
						</div>
						<p></p>
					</div>
					<div class="col-xs-12 col-md-6 col-lg-5">
						<div class="form-group{{ $errors->has('tempat_passport') ? ' has-error' : '' }}">
							<label for="tempat_passport">Tempat Dikeluarkan</label><br>
							<span class="tempat_passport">
								<input type="text" name="tempat_passport" value="{{ old('tempat_passport')}}" size="40" class="form-control" id="tempat_passport" aria-invalid="false">
							</span>
							@if ($errors->has('tempat_passport'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('tempat_passport') }}</strong>
                                </span>
                            @endif
						</div>
						<p></p>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-md-6 col-lg-5">
						<div class="form-group{{ $errors->has('masa_berlaku_passport') ? ' has-error' : '' }}">
							<label for="masa_berlaku_passport">Masa Berlaku</label><br>
							<span class="masa_berlaku_passport">
								<input type="date" name="masa_berlaku_passport" value="{{ old('masa_berlaku_passport')}}" class=" form-control" id="masa_berlaku_passport" aria-invalid="false">
							</span>
							@if ($errors->has('masa_berlaku_passport'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('masa_berlaku_passport') }}</strong>
                                </span>
                            @endif
						</div>
						<p></p>
					</div>
					<div class="col-xs-12 col-md-6 col-lg-5">
						<div class="form-group{{ $errors->has('tanggal_passport') ? ' has-error' : '' }}">
							<label for="tanggal_passport">Tanggal Dikeluarkan</label><br>
							<span class="tanggal_passport">
								<input type="date" name="tanggal_passport" value="{{ old('tanggal_passport')}}" class=" form-control" id="tanggal_passport" aria-invalid="false">
							</span>
							@if ($errors->has('tanggal_passport'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('tanggal_passport') }}</strong>
                                </span>
                            @endif
						</div>
						<p></p>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-md-6 col-lg-5">
						<div class="form-group{{ $errors->has('jumlah_umroh') ? ' has-error' : '' }}">
							<label for="jumlah_umroh">Jumlah Pengalaman Umroh <span>(Tahun)</span></label>
							<p></p>
							<div class="col-xs-12 col-md-3">
								<span class="jumlah_umroh">
									<input type="text" name="jumlah_umroh" value="{{ old('jumlah_umroh')}}" size="40" class="form-control" id="jumlah_umroh" aria-invalid="false">
								</span>
								@if ($errors->has('jumlah_umroh'))
	                                <span class="help-block">
	                                    <strong>{{ $errors->first('jumlah_umroh') }}</strong>
	                                </span>
	                            @endif
							</div>
							<p></p>
						</div>
					</div>
					<div class="col-xs-12 col-md-6 col-lg-5">
						<div class="form-group{{ $errors->has('terakhir_umroh') ? ' has-error' : '' }}">
							<label for="terakhir_umroh">Tahun Terakhir Umroh</label>
							<p></p>
							<div class="col-xs-12 col-md-3">
								<span class="terakhir_umroh">
									<input type="text" name="terakhir_umroh" value="{{ old('terakhir_umroh')}}" size="40" class="form-control" id="terakhir_umroh" aria-invalid="false">
								</span>
								@if ($errors->has('terakhir_umroh'))
	                                <span class="help-block">
	                                    <strong>{{ $errors->first('terakhir_umroh') }}</strong>
	                                </span>
	                            @endif
							</div>
							<p></p>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-md-6 col-lg-5">
						<div class="form-group{{ $errors->has('jumlah_haji') ? ' has-error' : '' }}">
							<label for="jumlah_haji">Jumlah Pengalaman Haji <span>(Tahun)</span></label>
							<p></p>
							<div class="col-xs-12 col-md-3">
								<span class="jumlah_haji">
									<input type="text" name="jumlah_haji" value="{{ old('jumlah_haji')}}" size="40" class="form-control" id="jumlah_haji" aria-invalid="false">
								</span>
								@if ($errors->has('jumlah_haji'))
	                                <span class="help-block">
	                                    <strong>{{ $errors->first('jumlah_haji') }}</strong>
	                                </span>
	                            @endif
							</div>
							<p></p>
						</div>
					</div>
					<div class="col-xs-12 col-md-6 col-lg-5">
						<div class="form-group{{ $errors->has('terakhir_haji') ? ' has-error' : '' }}">
							<label for="terakhir_haji">Tahun Terakhir Haji</label><p></p>
							<div class="col-xs-12 col-md-3">
								<span class="terakhir_haji">
									<input type="text" name="terakhir_haji" value="{{ old('terakhir_haji')}}" size="40" class="form-control" id="terakhir_haji" aria-invalid="false">
								</span>
								@if ($errors->has('terakhir_haji'))
	                                <span class="help-block">
	                                    <strong>{{ $errors->first('terakhir_haji') }}</strong>
	                                </span>
	                            @endif
							</div>
							<p></p>
						</div>
					</div>
				</div>

				<h3>Dokumen Keberangkatan</h3>

				<div class="row">
					<div class="col-xs-12">
						<label>Upload Files</label><p></p>
						<div class="row">
							<div class="col-xs-6 col-sm-4 col-md-3">
								<div class="form-group{{ $errors->has('file_ktp') ? ' has-error' : '' }}">
									<label>KTP</label><br>
									<span class="file_ktp">
										{{-- <input type="file" name="file_ktp" size="40" class="wpcf7-form-control wpcf7-file wpcf7-validates-as-form-control" id="file_ktp" aria-invalid="false"> --}}
										{{Form::file('file_ktp', ['class'=>'form-control'])}}
									</span>
									@if ($errors->has('file_ktp'))
		                                <span class="help-block">
		                                    <strong>{{ $errors->first('file_ktp') }}</strong>
		                                </span>
		                            @endif
								</div>
								<p></p>
							</div>
							<div class="col-xs-6 col-sm-4 col-md-3">
								<div class="form-group{{ $errors->has('file_akta_lahir') ? ' has-error' : '' }}">
									<label>Akta Lahir</label><br>
									<span class="file_akta_lahir">
										{{-- <input type="file" name="file_akta_lahir" size="40" class="wpcf7-form-control wpcf7-file wpcf7-validates-as-form-control" id="file_akta_lahir" aria-invalid="false"> --}}
										{{Form::file('file_akta_lahir', ['class'=>'form-control'])}}
									</span>
									@if ($errors->has('file_akta_lahir'))
		                                <span class="help-block">
		                                    <strong>{{ $errors->first('file_akta_lahir') }}</strong>
		                                </span>
		                            @endif
								</div>
								<p></p>
							</div>
							<div class="col-xs-6 col-sm-4 col-md-3">
								<div class="form-group{{ $errors->has('file_passport') ? ' has-error' : '' }}">
									<label>Passport</label><br>
									<span class="file_passport">
										{{-- <input type="file" name="file_passport" size="40" class="wpcf7-form-control wpcf7-file wpcf7-validates-as-form-control" id="file_passport" aria-invalid="false"> --}}
										{{Form::file('file_passport', ['class'=>'form-control'])}}
									</span>
									@if ($errors->has('file_passport'))
		                                <span class="help-block">
		                                    <strong>{{ $errors->first('file_passport') }}</strong>
		                                </span>
		                            @endif
								</div>
								<p></p>
							</div>
							<div class="col-xs-6 col-sm-4 col-md-3">
								<div class="form-group{{ $errors->has('file_kartu_keluarga') ? ' has-error' : '' }}">
									<label>Kartu Keluarga</label><br>
									<span class="file_kartu_keluarga">
										{{-- <input type="file" name="file_kartu_keluarga" size="40" class="wpcf7-form-control wpcf7-file wpcf7-validates-as-form-control" id="file_kartu_keluarga" aria-invalid="false"> --}}
										{{Form::file('file_kartu_keluarga', ['class'=>'form-control'])}}
									</span>
									@if ($errors->has('file_kartu_keluarga'))
		                                <span class="help-block">
		                                    <strong>{{ $errors->first('file_kartu_keluarga') }}</strong>
		                                </span>
		                            @endif
								</div>
								<p></p>
							</div>
							<div class="col-xs-6 col-sm-4 col-md-3">
								<div class="form-group{{ $errors->has('file_buku_nikah') ? ' has-error' : '' }}">
									<label>Buku Nikah <span>(Jika Ada)</span></label><br>
									<span class="file_buku_nikah">
										{{-- <input type="file" name="file_buku_nikah" size="40" class="wpcf7-form-control wpcf7-file form-control" id="file_buku_nikah" aria-invalid="false"> --}}
										{{Form::file('file_buku_nikah', ['class'=>'form-control'])}}
									</span>
									@if ($errors->has('file_buku_nikah'))
		                                <span class="help-block">
		                                    <strong>{{ $errors->first('file_buku_nikah') }}</strong>
		                                </span>
		                            @endif
								</div>
								<p></p>
							</div>
							<div class="col-xs-6 col-sm-4 col-md-3">
								<div class="form-group{{ $errors->has('file_foto') ? ' has-error' : '' }}">
									<label>Pas Foto</label><br>
									<span class="file_foto">
										{{-- <input type="file" name="file_foto" size="40" class="wpcf7-form-control wpcf7-file wpcf7-validates-as-form-control" id="file_foto" aria-invalid="false"> --}}
										{{Form::file('file_foto', ['class'=>'form-control'])}}
									</span>
									@if ($errors->has('file_foto'))
		                                <span class="help-block">
		                                    <strong>{{ $errors->first('file_foto') }}</strong>
		                                </span>
		                            @endif
								</div>
								<p></p>
							</div>
						</div>
					</div>
				</div>

				<p class="tombol-form"><button type="button" id="back1" href="#" class="btn btn-warning prev-form">Kembali</button> <button type="button" id="next2" href="#" class="btn btn-primary next-form">Selanjutnya</button></p>
			</div>

			<div class="form-pt3">
				<div class="row">
					<div class="col-xs-12">
						<h2>3) Data Pekerjaan</h2>
						<p></p>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-md-6 col-lg-5">
						<div class="form-group{{ $errors->has('nama_instansi') ? ' has-error' : '' }}">
							<label for="nama_instansi">Nama Instansi <span>(Jika ada)</span></label><br>
							<span class="nama_instansi">
								<input type="text" name="nama_instansi" value="{{ old('nama_instansi') }}" size="40" class="form-control" id="nama_instansi" aria-invalid="false">
							</span>
							@if ($errors->has('nama_instansi'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nama_instansi') }}</strong>
                                </span>
                            @endif
						</div>
						<p></p>
					</div>
					<div class="col-xs-12 col-md-6 col-lg-5">
						<div class="form-group{{ $errors->has('jabatan') ? ' has-error' : '' }}">
							<label for="jabatan">Jabatan</label><br>
							<span class="jabatan">
								<input type="text" name="jabatan" value="{{ old('jabatan') }}" size="40" class="form-control" id="jabatan" aria-invalid="false">
							</span>
							@if ($errors->has('jabatan'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('jabatan') }}</strong>
                                </span>
                            @endif
						</div>
						<p></p>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-md-6 col-lg-5">
						<div class="form-group{{ $errors->has('alamat_instansi') ? ' has-error' : '' }}">
							<label for="alamat_instansi_1">Alamat Tinggal</label><br>
							<span class="alamat_instansi_1">
								<textarea class="form-control" name="alamat_instansi" id="alamat_instansi">{{ old('alamat_instansi') }}</textarea>
							</span>
							@if ($errors->has('alamat_instansi'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('alamat_instansi') }}</strong>
                                </span>
                            @endif
						</div>
						<p></p>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-md-6 col-lg-5">
						<div class="form-group{{ $errors->has('kota_instansi') ? ' has-error' : '' }}">
							<label for="kota_instansi">Kota</label><br>
							<span class="kota_instansi">
								<input type="text" name="kota_instansi" value="{{ old('kota_instansi') }}" size="40" class="form-control" id="kota_instansi" aria-invalid="false">
							</span>
							@if ($errors->has('kota_instansi'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('kota_instansi') }}</strong>
                                </span>
                            @endif
						</div>
						<p></p>
					</div>
					<div class="col-xs-12 col-md-4 col-lg-3">
						<div class="form-group{{ $errors->has('kodepos_instansi') ? ' has-error' : '' }}">
							<label for="kodepos_instansi">Kode Pos</label><br>
							<span class="kodepos_instansi">
								<input type="text" name="kodepos_instansi" value="{{ old('kodepos_instansi') }}" size="40" class="form-control" id="kodepos_instansi" aria-invalid="false">
							</span>
							@if ($errors->has('kodepos_instansi'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('kodepos_instansi') }}</strong>
                                </span>
                            @endif
						</div>
						<p></p>
					</div>
				</div>
				
				<h3>Data keluarga yang dihubungi saat darurat</h3>

				<div class="row">
					<div class="col-xs-12 col-md-6 col-lg-5">
						<div class="form-group{{ $errors->has('nama_keluarga') ? ' has-error' : '' }}">
							<label for="nama_keluarga">Nama Lengkap</label><br>
							<span class="nama_keluarga">
								<input type="text" name="nama_keluarga" value="{{ old('nama_keluarga') }}" size="40" class="form-control" id="nama_keluarga" aria-invalid="false">
							</span>
							@if ($errors->has('nama_keluarga'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nama_keluarga') }}</strong>
                                </span>
                            @endif
						</div>
						<p></p>
					</div>
					<div class="col-xs-12 col-md-6 col-lg-5">
						<div class="form-group{{ $errors->has('hub_keluarga') ? ' has-error' : '' }}">
							<label for="hub_keluarag">Hubungan Keluarga</label><br>
							<span class="hub_keluarga">
								<input type="text" name="hub_keluarga" value="{{ old('hub_keluarga') }}" size="40" class="form-control" id="hub_keluarga" aria-invalid="false">
							</span>
							@if ($errors->has('hub_keluarga'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('hub_keluarga') }}</strong>
                                </span>
                            @endif
						</div>
						<p></p>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-md-6 col-lg-5">
						<div class="form-group{{ $errors->has('telp_keluarga') ? ' has-error' : '' }}">
							<label for="telp_keluarga">No. Telp</label><br>
							<span class="telp_keluarga">
								<input type="tel" name="telp_keluarga" value="{{ old('telp_keluarga') }}" size="40" class="form-control" id="telp_keluarga" aria-invalid="false">
							</span>
							@if ($errors->has('telp_keluarga'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('telp_keluarga') }}</strong>
                                </span>
                            @endif
						</div>
						<p></p>
					</div>
					<div class="col-xs-12 col-md-6 col-lg-5">
						<div class="form-group{{ $errors->has('handphone_keluarga') ? ' has-error' : '' }}">
							<label for="handphone_keluarga">No. Handphone</label><br>
							<span class="handphone_keluarga">
								<input type="tel" name="handphone_keluarga" value="{{ old('handphone_keluarga') }}" size="40" class="form-control" id="handphone_keluarga" aria-invalid="false">
							</span>
							@if ($errors->has('handphone_keluarga'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('handphone_keluarga') }}</strong>
                                </span>
                            @endif
						</div>
						<p></p>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-md-6 col-lg-5">
						<div class="form-group{{ $errors->has('alamat_keluarga') ? ' has-error' : '' }}">
							<label for="alamat_keluarga_1">Alamat Tinggal</label><br>
							<span class="alamat_keluarga_1">
								<textarea class="form-control" name="alamat_keluarga" id="alamat">{{ old('alamat_keluarga') }}</textarea>
							</span>
							@if ($errors->has('alamat_keluarga'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('alamat_keluarga') }}</strong>
                                </span>
                            @endif
						</div>
						<p></p>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-md-6 col-lg-5">
						<div class="form-group{{ $errors->has('penyakit') ? ' has-error' : '' }}">
							<label for="penyakit">Penyakit Calon Jamaah yang diderita</label><br>
							<span class="penyakit">
								<input type="text" name="penyakit" value="{{ old('penyakit') }}" size="40" class="form-control" id="penyakit" aria-invalid="false">
							</span>
							@if ($errors->has('penyakit'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('penyakit') }}</strong>
                                </span>
                            @endif
						</div>
						<p></p>
					</div>
				</div>

				<p class="tombol-form"><button type="button" id="back2" href="#" class="btn btn-warning prev-form">Kembali</button> {{-- <input id="selesai" type="submit" value="Selesai" class="btn btn-primary save wpcf7-form-control wpcf7-submit"> --}}{{Form::submit('Selesai', ['class'=>'btn btn-primary save'])}}<span class="ajax-loader"></span>
			</div>
		</div>
	
	{{Form::close()}}

</div>
@endsection()
@push('scripts')
	<script>
		$(document).ready(function(){
			$("#next1").click(function(){
				$(".form-pt1").css({"display":"none"});
				$(".form-pt2").css({"display":"block"});
			});
			$("#back1").click(function(){
				$(".form-pt1").css({"display":"block"});
				$(".form-pt2").css({"display":"none"});
			});
			$("#next2").click(function(){
				$(".form-pt2").css({"display":"none"});
				$(".form-pt3").css({"display":"block"});
			});
			$("#back2").click(function(){
				$(".form-pt3").css({"display":"none"});
				$(".form-pt2").css({"display":"block"});
			});
			
			$("select").change(function(){
				var chosen = $("select option:selected").val();
				if(chosen == "U1"){
					$("#prog-reguler").css("display","block");
					$("#prog-ramadhan").css("display","none");
				} else if (chosen == "U2"){
					$("#prog-ramadhan").css("display","block");
					$("#prog-reguler").css("display","none");
				} else {
					$("#prog-ramadhan, #prog-reguler").css("display","none");
				}
			});
		});
	</script>
@endpush