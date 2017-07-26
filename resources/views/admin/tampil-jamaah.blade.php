@extends('admin.template')
@section('content')
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
			@php($no=1)
				@foreach($jamaah as $jamaahs)
					<tr>
						<td>{{ $no++ }}</td>
						<td>{{ $jamaahs->nama_lengkap }}</td>
						<td>{{ $jamaahs->jenis_kelamin }}</td>
						<td>{{ $jamaahs->tempat_lahir }}</td>
						<td>{{ $jamaahs->tgl_lahir }}</td>
						<td>{{ $jamaahs->nama_ayah }}</td>
						<td>{{ $jamaahs->no_ktp }}</td>
						<td class="over">{{ $jamaahs->alamat }}</td>
						<td>{{ $jamaahs->gol_darah }}</td>
						<td>{{ $jamaahs->telp }}</td>
						<td>{{ $jamaahs->handphone }}</td>
						<td>{{ $jamaahs->email }}</td>
						<td>{{ $jamaahs->pendidikan }}</td>
						<td>{{ $jamaahs->pekerjaan }}</td>
						<td>{{ $jamaahs->status_perkawinan }}</td>
						<td>{{ $jamaahs->no_passport }}</td>
						<td>{{ $jamaahs->tempat_passport }}</td>
						<td>{{ $jamaahs->masa_berlaku_passport }}</td>
						<td>{{ $jamaahs->tanggal_passport }}</td>
						<td>{{ $jamaahs->jumlah_umrah }}</td>
						<td>{{ $jamaahs->terakhir_umrah }}</td>
						<td>{{ $jamaahs->jumlah_haji }}</td>
						<td>{{ $jamaahs->terakhir_haji }}</td>
						<td><a href="{{ asset('storage/'.$jamaahs->file_ktp) }}">Download</a></td>
						<td><a href="{{ asset('storage/'.$jamaahs->file_akta_lahir) }}">Download</a></td>
						<td><a href="{{ asset('storage/'.$jamaahs->file_passport) }}">Download</a></td>
						<td><a href="{{ asset('storage/'.$jamaahs->file_kartu_keluarga) }}">Download</a></td>
						<td><a href="{{ asset('storage/'.$jamaahs->file_buku_nikah) }}">Download</a></td>
						<td><img src="{{ asset('storage/'.$jamaahs->file_foto) }}" width="100px"></td>
						<td>{{ $jamaahs->nama_instansi }}</td>
						<td>{{ $jamaahs->jabatan }}</td>
						<td class="over">{{ $jamaahs->alamat_instansi }}</td>
						<td>{{ $jamaahs->kota_instansi }}</td>
						<td>{{ $jamaahs->kodepos_instansi }}</td>
						<td>{{ $jamaahs->nama_keluarga }}</td>
						<td>{{ $jamaahs->hub_keluarga }}</td>
						<td>{{ $jamaahs->telp_keluarga }}</td>
						<td>{{ $jamaahs->handphone_keluarga }}</td>
						<td class="over">{{ $jamaahs->alamat_keluarga }}</td>
						<td>{{ $jamaahs->penyakit }}</td>
					</tr>
				@endforeach
		</tbody>
	</table>
</div>

@endsection()
@push('scripts')
	{{-- <script src="https://cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css"></script>
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script> --}}
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
@endpush