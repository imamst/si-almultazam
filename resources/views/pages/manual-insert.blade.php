@extends('layouts.template')

@section('content')
<div class="content-form container">	
	{{-- <form role="form" action="" method="post" enctype="multipart/form-data"> --}}
	{{Form::open(['url'=>'input', 'class'=>'control','files' => 'true'])}}
	
	{{ csrf_field() }}

		<div id="reg-form">
			
			<div class="form-pt1">

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
							<span class="nama"><input type="text" name="nama" value="{{ old('nama') }}" size="40" class="form-control" id="nama-lengkap" required autofocus></span>
							@if ($errors->has('nama'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nama') }}</strong>
                                </span>
                            @endif
						</div>
					<p></p>
					</div>
					
					<div class="col-xs-12 col-md-2 col-lg-2">
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

					<div class="col-xs-12 col-md-2 col-lg-2">
						<div class="form-group{{ $errors->has('usia') ? ' has-error' : '' }}">
							<label for="usia">Usia</label><br>
							<span class="usia"><input type="number" name="usia" value="{{ old('usia') }}" size="40" class="form-control" id="usia-lengkap" autofocus></span>
							@if ($errors->has('usia'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('usia') }}</strong>
                                </span>
                            @endif
						</div>
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
						<div class="form-group{{ $errors->has('no_identitas') ? ' has-error' : '' }}">
							<label for="no_identitas">No. Identitas(KTP/NIK)</label><br>
							<span class="no_identitas">
								<input type="text" name="no_identitas" value="{{ old('no_identitas') }}" size="40" class="form-control" id="no_identitas" aria-invalid="false">
							</span>
							@if ($errors->has('no_identitas'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('no_identitas') }}</strong>
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
					<div class="col-xs-12 col-md-3 col-lg-2">
						<div class="form-group{{ $errors->has('kode_pos') ? ' has-error' : '' }}">
							<label for="kode_pos">Kode Pos</label><br>
							<span class="kode_pos">
								<input type="text" name="kode_pos" value="{{ old('kode_pos') }}" size="40" class="form-control" id="kode_pos" aria-invalid="false">
							</span>
							@if ($errors->has('kode_pos'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kode_pos') }}</strong>
                            </span>
                            @endif
						</div>
						<p></p>
					</div>
					<div class="col-xs-12 col-md-3 col-lg-2">
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
					<div class="col-xs-12 col-md-6 col-lg-5">
						<div class="form-group{{ $errors->has('pekerjaan') ? ' has-error' : '' }}">
							<label for="pekerjaan">Pekerjaan</label><br>
							<span class="pekerjaan">
								<input type="text" name="pekerjaan" value="{{ old('pekerjaan') }}" size="40" class="form-control" id="pekerjaan" aria-invalid="false">
							</span>
							@if ($errors->has('pekerjaan'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('pekerjaan') }}</strong>
                                </span>
                            @endif
						</div>
						<p></p>
					</div>
					<div class="col-xs-12 col-md-6 col-lg-5">
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

				<div class="row">
					<div class="col-xs-12">
						<h2>3) Pilihan Paket</h2>
						<p></p>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-md-6 col-lg-5">
						<div class="form-group{{ $errors->has('nama_paket') ? ' has-error' : '' }}">
							<label for="nama_paket">Nama Paket</label><br>
							<span class="nama_paket">
								<input type="text" name="nama_paket" value="{{ old('nama_paket') }}" size="40" class="form-control" id="nama_paket" required aria-invalid="false">
							</span>
							@if ($errors->has('nama_paket'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nama_paket') }}</strong>
                                </span>
                            @endif
						</div>
						<p></p>
					</div>
					<div class="col-xs-12 col-md-6 col-lg-5">
						<div class="form-group{{ $errors->has('program') ? ' has-error' : '' }}">
							<label for="program">Program (ex. Standar, Ekonomi)</label><br>
							<span class="program">
								<input type="text" name="program" value="{{ old('program') }}" size="40" class="form-control" id="program" aria-invalid="false">
							</span>
							@if ($errors->has('program'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('penyakit') }}</strong>
                                </span>
                            @endif
						</div>
						<p></p>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-md-6 col-lg-5">
						<div class="form-group{{ $errors->has('tipe_kamar') ? ' has-error' : '' }}">
							<label for="tipe_kamar">Tipe Kamar</label><br>
							<span class="tipe_kamar">
								<span id="tipe_kamar">
									<span class="first">
										<label>
											<input type="radio" name="tipe_kamar" value="Quad" checked="checked">
											<span>Quad</span>
										</label>
									</span>
									<span>
										<label>
											<input type="radio" name="tipe_kamar" value="Triple">
											<span>Triple</span>
										</label>
									</span>
									<span>
										<label>
											<input type="radio" name="tipe_kamar" value="Double">
											<span>Double</span>
										</label>
									</span>
								</span>
							</span>
							@if ($errors->has('tipe_kamar'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('tipe_kamar') }}</strong>
                                </span>
                            @endif
						</div>
						<p></p>
					</div>
					<div class="col-xs-12 col-md-6 col-lg-5">
						<div class="form-group{{ $errors->has('harga') ? ' has-error' : '' }}">
							<label for="harga">Harga</label><br>
							<span class="harga">
								<input type="text" name="harga" value="{{ old('harga') }}" size="40" class="form-control" id="harga" required aria-invalid="false">
							</span>
							@if ($errors->has('harga'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('penyakit') }}</strong>
                                </span>
                            @endif
						</div>
						<p></p>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-md-6 col-lg-5">
						<div class="form-group{{ $errors->has('tgl_berangkat') ? ' has-error' : '' }}">
							<label for="tgl_berangkat">Tanggal Keberangkatan</label><br>
							<span class="tgl_berangkat">
								<input type="date" name="tgl_berangkat" value="{{ old('tgl_berangkat') }}" size="40" class="form-control" id="tgl_berangkat" aria-invalid="false">
							</span>
							@if ($errors->has('tgl_berangkat'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('tgl_berangkat') }}</strong>
                                </span>
                            @endif
						</div>
						<p></p>
					</div>
					<div class="col-xs-12 col-md-6 col-lg-5">
						<div class="form-group{{ $errors->has('pembayaran') ? ' has-error' : '' }}">
							<label for="pembayaran">Pembayaran</label><br>
							<span class="pembayaran">
								<span id="pembayaran">
									<span class="first">
										<label>
											<input type="radio" name="pembayaran" value="DP" checked="checked">
											<span>DP</span>
										</label>
									</span>
									<span>
										<label>
											<input type="radio" name="pembayaran" value="Lunas">
											<span>Lunas</span>
										</label>
									</span>
								</span>
							</span>
							@if ($errors->has('pembayaran'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('pembayaran') }}</strong>
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