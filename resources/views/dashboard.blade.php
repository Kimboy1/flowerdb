@extends('layouts.app')

@section('content')
 <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="row" style="margin:20px">
    
          <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $flowerCount }}</h3>

                    <p>TOTAL Flowers</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
               
            </div>
          </div>
          <!-- ./col -->
         
        </div>
    <!-- /.content -->





    <section class="content">
      <div class="row">

        <div class="col-12">
          <div class="card">
            <div class="card-header " style="display:flex">
              <h3 class="card-title">Flower Database</h3>
              <a href="{{ route('flower.add')}}" role="button" class="btn btn-block btn-primary float-right" style="margin-left:20px" >Add Flower</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                @if (!empty($flowers))
                    @foreach($flowers as $flower)
                        <div class="col-sm-3 col-md-3">
                          <div class="card">
                            <img class="card-img-top" src="{{ $flower->flower_image }}" alt="{{ $flower->flower_name }} ">

                            <div class="card-body">
                              <h5 class="card-title">Name : {{ $flower->flower_name }}</h5>
                              <p class="card-text">Type : {{ $flower->flower_type }}</p>
                              <p class="card-text">Colour : {{ $flower->color }}</p>
                             
                              <a href="{{ route('flower.delete',$flower->id) }}"><i class="fa fa-times" aria-hidden="true"></i></a>
                          </div>
                        </div>
                        @endforeach
                @else
                  <div class="col-md-3 justify-center" style="margin:10px">
                        <h5 class="card-title">No Flowers available</h5>
                        
                  </div>
                @endif
                </div>
                <div class="row">
                 
                </div>
                
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
@endsection