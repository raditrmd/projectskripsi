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
	                <h3 class="page-title">Data Barang</h3>
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
        <a href="{{route ('dbarang.create')}}" class="btn btn-primary" data-toggle="modal" data-target="#CustomerModal">
				  Tambah Barang
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
              
              
              <form method="POST" action="{{route ('dbarang.store')}}">
              @csrf
				      <div class="modal-body">				      
			      		<div class="row">
    						<div class="col-sm-4 pt-2">
    							<label>Kode Barang</label>
    						</div>
    						<div class="col">
        						<input type="text" name="cSTKpk" class="form-control" placeholder="Kode Barang"  value="{{old('Kode Barang')}}" required>
                    @if ($errors->has('Kode Barang'))
                      <small class="form-text text-danger">{{$errors->first('Kode Barang')}} </small>
                    @endif
                </div>
    					</div>
    					<div class="row pt-2">
    						<div class="col-sm-4 pt-2">
    							<label>Nama Barang</label>
    						</div>
    						<div class="col">
                    <input type="text" name="cSTKdesc" class="form-control" placeholder="Nama Barang" value="{{old('Nama Barang')}}" required>
                    @if ($errors->has('Nama Barang'))
                      <small class="form-text text-danger">{{$errors->first('Nama Barang')}} </small>
                    @endif
    						</div>
    					</div>
    					<div class="row pt-2">
    						<div class="col-sm-4 pt-2">
    							<label>Harga</label>
    						</div>
    						<div class="col">
                    <input type="number" name="nSTKbuy" class="form-control" placeholder="Harga"   value="{{old('Harga')}}"required>
                    @if ($errors->has('Harga'))
                      <small class="form-text text-danger">{{$errors->first('Harga')}} </small>
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
				<!-- End Modal Tambah Data Merk -->


        <!-- Membuat Tabel -->
        <div class="card-body">
            <div class="table-responsive">
            <!-- Kondisi Hitung -->
            @if(@count($stock)>0)  
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                  </tr>
                </thead>


                <tbody>
                @foreach($stock as $stock)
                  <tr>
                    <td>{{$stock->cSTKpk}}</td>
                    <td>{{$stock->cSTKdesc}}</td>
                    <td>Rp.{{$stock->nSTKbuy}}</td>

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

