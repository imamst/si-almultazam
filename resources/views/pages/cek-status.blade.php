@extends('layouts.template')
@section('content')
<div class="container">
	<div class="jumbotron box-shadow">
		<div class="row">
			<div id="cekForm" class="col-md-10 col-md-offset-1">
				<p><b>Cek Status &amp; Informasi Keberangkatan Umrah dan Haji</b></p>
				{{Form::open(['url'=>'jamaah/cek','class'=>'form-inline','role'=>'form'])}}

				{{ csrf_field() }}

					<div class="form-group {{ isset($error_msg) ? ' has-error' : '' }}" style="width: 80%;margin-bottom: 10px;">
						<label class="control-label" for="kode_cek">Masukkan No. Identitas (KTP/NIK) Anda</label>
						<input id="kode_cek" type="text" name="kode_cek" class="form-control" style="width: 60%;">
						@if(isset($error_msg))
							<span class="help-block">
	                            <strong>{{ $error_msg }}</strong>
	                        </span>
	                    @endif()
					</div>
					<button id="tbl-cek" type="submit" class="btn btn-primary">Cek Status</button>
				{{Form::close()}}
			</div>
		</div>
		<div class="row status-section">
			<p id="tampil"></p>
		</div>
	</div>
</div>
@endsection()
{{-- @push('scripts')
	<script>
		$(document).ready(function(){
			$("#tbl-cek").click(function(e){
				e.preventDefault();

				var get_code = $("#kode_cek").val();
				// $("#tampil").text(get_code);

				$.ajax({
					type: "POST",
					url: "jamaah/cek",
					data:  {
						"_token" : $('input[name=_token]').val(),
						"kode" : get_code,
					},
					dataType: "json",
					success: function(data){
						$('#tampil').text(data.kode);
					},
				});
			});
		});
	</script>
@endpush() --}}