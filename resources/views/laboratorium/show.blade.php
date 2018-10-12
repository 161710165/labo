@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">LIHAT HASIL 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">PILIH</label>	
			  			<input type="text" name="pilih" class="form-control" value="{{ $laboratoriums->pilih }}"  readonly>
			  		</div>

        			<div class="form-group">
			  			<label class="control-label">NO REGISTRASI</label>	
			  			<input type="date" name="no_registrasi" class="form-control" value="{{ $laboratoriums->no_registrasi }}"  readonly>
			  		</div>

        			<div class="form-group">
			  			<label class="control-label">NO ORDER</label>	
			  			<input type="date" name="no_order" class="form-control" value="{{ $laboratoriums->no_order }}"  readonly>
			  		</div>

        			<div class="form-group">
			  			<label class="control-label">TGL ORDER</label>	
			  			<input type="text" name="tgl_order" class="form-control" value="{{ $laboratoriums->tgl_order }}"  readonly>
			  		</div>

        			<div class="form-group">
			  			<label class="control-label">TGL SAMPLING</label>	
			  			<input type="text" name="tgl_sampling" class="form-control" value="{{ $laboratoriums->tgl_sampling }}"  readonly>
			  		</div>
<div class="form-group">
			  			<label class="control-label">PERUJUK</label>	
			  			<input type="text" name="perujuk" class="form-control" value="{{ $laboratoriums->perujuk}}"  readonly>
			  		</div>


                       <div class="form-group">
			  			<label class="control-label">PARAMETER</label>	
			  			<input type="text" name="parameter" class="form-control" value="{{ $laboratoriums->parameter }}"  readonly>
			  		</div>



			  		
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection