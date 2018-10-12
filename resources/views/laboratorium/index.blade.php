@extends('layouts.app')
@section('content')

<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class = "panel panel-primary">
				<div class = "panel-heading">Data Laboratorium
					<div class ="panel-title pull-right">
						<a href="#">Tambah Data</a>						
					</div>
				</div>
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th>No</th>
									<th>PILIH</th>
									<th>NO REGISTRASI</th>
									<th>NO ORDER</th>
									<th>TGL ORDER</th>
									<th>TGL SAMPLING</th>
									<th>PERUJUK</th>
									<th>PARAMETER</th>
									<th colspan="3">Action</th>
								</tr>							
							</thead>
							<tbody>
								@php $no=1; @endphp
								@foreach ($laboratoriums as $data)
							<tr>
								<td>{{$no++}}</td>
								<td>{{$data->pilih}}</td>
								<td>{{$data->no_registrasi}}</td>
								<td>{{$data->no_order}}</td>
								<td>{{$data->tgl_order}}</td>
								<td>{{$data->tgl_sampling}}</td>
								<td>{{$data->perujuk}}</td>
								<td>{{$data->parameter}}</td>
								<td><a class= "btn btn-warning" href="{{route('laboratorium.edit',$data->id)}}">Edit</a></td>
								<td><a class= "btn btn-info" href="{{route('
								laboratoriums.show',$data->id)}}">Show</a></td>

						<td>
							<form method="post" action="{{ route('laboratorium.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-danger">Delete</button>
							</form>
						</td>
							</tr>
							@endforeach
							</tbody>
						</table>
					</div>	
				</div>
			</div>
		</div>
	</div>
</div>
@endsection