@extends('layouts.app')

@section('content')
 <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add Flower</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Add FLower</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->





    <section class="content">
      <div class="row">

        <div class="col-12">
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Flower</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{ route('flower.add') }}" method="post" enctype="multipart/form-data">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="flowerName">Flower Name </label>
                    <input type="text" class="form-control" id="flowerName" placeholder="Enter Flower Name" name="flower_name">
                  </div>
                  <div class="form-group">
                    <label for="flowerType">Type</label>
                    <input class="form-control" type="text" id="flowerType" placeholder="Enter Flower Type " name="flower_type"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="flowerColor">Colour </label>
                    <input type="text" class="form-control" id="flowerColor" placeholder="Enter Flower Colour" name="flower_color">
                  </div>
                  
                  <div class="form-group">
                    <label for="FlowerImage">Upload Images</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="flower_image" placeholder="Upload an image" >
                            <label class="custom-file-label" for="customFile"></label>
                        </div>
                     
                    </div>
                  </div>
                  
     
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
@endsection

