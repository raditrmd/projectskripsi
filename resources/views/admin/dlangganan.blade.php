@extends ('layout.master')


@section('content')  
<!-- Content Header (Page header) -->
<section class="container-header">
<div class="container-fluid">
		<div class="row">
			<!-- Main Sidebar -->

	        <!-- / .main-navbar -->
	          <div class="main-content-container container-fluid px-4">
	            <!-- Page Header -->
	            <div class="page-header row no-gutters py-4">
	              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
	                <!-- <span class="text-uppercase page-subtitle">Dashboard</span> -->
	                <h3 class="page-title">Data Pelanggan</h3>
	              </div>
	            </div>
    </section>

       <!-- Main content -->
    <section class="content">
       
    <div class="card mb-3">
          <div class="card-header">
          <div class="card-body">
            <div class="table-responsive">

 <!-- Modal Tambah data Customer -->
	            <!-- Button trigger -->
        <a href="{{route ('dlangganan.create')}}" class="btn btn-primary" data-toggle="modal" data-target="#CustomerModal">
				  Tambah Pelanggan
        </a>

				<!-- Modal -->
				<div class="modal fade" id="CustomerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Data Barang</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
              </div>
              
              
              <form method="POST" action="{{route ('dlangganan.store')}}">
              @csrf
				      <div class="modal-body">				      
			      		<div class="row">
    						<div class="col-sm-4 pt-2">
    							<label>Kode Langganan</label>
    						</div>
    						<div class="col">
        						<input type="number" name="Kode_langganan" class="form-control" placeholder="Kode Langganan"  value="{{old('Kode Langganan')}}" required>
                    @if ($errors->has('Kode Langganan'))
                      <small class="form-text text-danger">{{$errors->first('Kode Langganan')}} </small>
                    @endif
                </div>
    					</div>
    					<div class="row pt-2">
    						<div class="col-sm-4 pt-2">
    							<label>Nama Langganan </label>
    						</div>
    						<div class="col">
                    <input type="text" name="Nama_langganan" class="form-control" placeholder="Nama Langganan " value="{{old('Nama Langganan')}}" required>
                    @if ($errors->has('Nama Langganan'))
                      <small class="form-text text-danger">{{$errors->first('Nama Langganan')}} </small>
                    @endif
    						</div>
    					</div>
    					<div class="row pt-2">
    						<div class="col-sm-4 pt-2">
    							<label>Alamat</label>
    						</div>
    						<div class="col">
                    <input type="text" name="Alamat" class="form-control" placeholder="Alamat"   value="{{old('Alamat')}}"required>
                    @if ($errors->has('Alamat'))
                      <small class="form-text text-danger">{{$errors->first('Alamat')}} </small>
                    @endif
    						</div>
    					</div>
    					
              <div class="row pt-2">
    						<div class="col-sm-4 pt-2">
    							<label>No Telepon</label>
    						</div>
    						<div class="col">
                    <input type="number" name="No_Tlp" class="form-control" placeholder="No Telepon"   value="{{old('No Telepon')}}"required>
                    @if ($errors->has('No Telepon'))
                      <small class="form-text text-danger">{{$errors->first('No Telepon')}} </small>
                    @endif
    						</div>
    					</div>

                        <div class="row pt-2">
    						<div class="col-sm-4 pt-2">
    							<label>Wilayah</label>
    						</div>
    						<div class="col">
                    <input type="text" name="Wilayah" class="form-control" placeholder="Wilayah"   value="{{old('Wilayah')}}"required>
                    @if ($errors->has('Wilayah'))
                      <small class="form-text text-danger">{{$errors->first('Wilayah')}} </small>
                    @endif
    						</div>
    					</div>

					    <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
					        <button type="submit" class="btn btn-primary" name="btnMsimpan" id="btnMsimpan">Simpan</button>
					    </div>
				      </form>
				    </div>
				  </div>
				</div>
        </div>
        </div>
				<!-- End Modal Tambah Data Pelanggan -->


        <!-- Membuat Tabel -->
        <div class="card-body">
            <div class="table-responsive">
            <!-- Kondisi Hitung -->
            @if(@count($data_langganan)>0)  
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Kode Langganan</th>
                    <th>Nama Langganan</th>
                    <th>Alamat</th>
                    <th>No Telepon</th>
                    <th>Wilayah</th>
                  </tr>
                </thead>


                <tbody>
                @foreach($data_langganan as $data_langganan)
                  <tr>
                    <td>{{$data_langganan->Kode_langganan}}</td>
                    <td>{{$data_langganan->Nama_langganan}}</td>
                    <td>{{$data_langganan->Alamat}}</td>
                    <td>{{$data_langganan->No_Tlp}}</td>
                    <td>{{$data_langganan->Wilayah}}</td>

                  </tr>
                  @endforeach
                 </tbody>
          
                </table>
                @endif
             </div>  
           </div>
</i>
</div>
</div>
    </section>
    <!-- /.content -->
@endsection

