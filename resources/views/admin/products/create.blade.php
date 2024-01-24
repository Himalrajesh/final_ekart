

@extends('layouts.adminl_layout')

@section('content')

<div class="wrapper">

@include('include.admin.sidenav')
    
        <!-- Main content -->
      


        <div class="card card-primary p-3  ">
            <div class="card-header">
              <h3 class="card-title">Add Product</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

            <form action="{{route('admin.products.save')}}" method="POST">
                @csrf

              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" name="name" placeholder="Product Name">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Price</label>
                  <input type="text" class="form-control" name="price" placeholder="Product Price">
                </div>

                <div class="form-group">
                    <label for="status">Category</label>
                    <select name="category_id" class="form-control">
                        <option value="">Select an Option</option>

                        @foreach ($categories as $category)

                        <option value="{{$category->id}}">{{$category->name}}</option>
                            
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                  <label for="exampleInputFile">Image</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="exampleInputFile">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text">Upload</span>
                    </div>
                  </div>
                </div>
              
                <div class="form-group">
                    <label for="">Status</label>
                     <input type="radio" value="1" name="status">Active
                     <input type="radio" value="0" name="status">Inactive
                    </select>
                </div>

                <div class="form-group">

                    <label for="">Is Favorites</label>
                     <input type="radio" value="1" name="is_favorites">Active
                     <input type="radio" value="0" name="is_favorites">Inactive
                    </select>
                </div>

              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Save Product</button>
              </div>
            </form>
          </div>













        


        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
    
      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    
      <!-- Main Footer -->
      <footer class="main-footer">
        <strong>Copyright &copy; 2024-2050 <a href="https://adminlte.io">Himal</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
          <b>Version</b> 3.2.0
        </div>
      </footer>
    </div>
@endsection