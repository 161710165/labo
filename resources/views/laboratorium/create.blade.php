@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Tambah Data Laboratorium
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('perpus.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('pilih') ? ' has-error' : '' }}">
			  			<label class="control-label">PILIH</label>	
			  			<input type="text" name="buku" class="form-control"  required>
			  			@if ($errors->has('pilih'))
                            <span class="help-block">
                                <strong>{{ $errors->first('pilih') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('no_registrasi') ? ' has-error' : '' }}">
			  			<label class="control-label">NO REGISTRASI</label>	
			  			<input type="date" name="no_registrasi" class="form-control"  required>
			  			@if ($errors->has('no_registrasi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('no_registrasi') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('no_order') ? ' has-error' : '' }}">
			  			<label class="control-label">NO ORDER</label>	
			  			<input type="date" name="no_order" class="form-control"  required>
			  			@if ($errors->has('no_order'))
                            <span class="help-block">
                                <strong>{{ $errors->first('no_order') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tgl_order') ? ' has-error' : '' }}">
			  			<label class="control-label">TGL ORDER</label>	
			  			<input type="text" name="tgl_order" class="form-control"  required>
			  			@if ($errors->has('tgl_order'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tgl_order') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tgl_sampling') ? ' has-error' : '' }}">
			  			<label class="control-label">TGL SAMPLING</label>	
			  			<input type="text" name="tgl_sampling" class="form-control"  required>
			  			@if ($errors->has('tgl_sampling'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tgl_sampling') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('perujuk') ? ' has-error' : '' }}">
			  			<label class="control-label">PERUJUK</label>	
			  			<input type="text" name="perujuk" class="form-control"  required>
			  			@if ($errors->has('perujuk'))
                            <span class="help-block">
                                <strong>{{ $errors->first('perujuk') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('parameter') ? ' has-error' : '' }}">
			  			<label class="control-label">PARAMETER</label>	
			  			<input type="text" name="parameter" class="form-control"  required>
			  			@if ($errors->has('parameter'))
                            <span class="help-block">
                                <strong>{{ $errors->first('parameter') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Tambah</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection
			  		