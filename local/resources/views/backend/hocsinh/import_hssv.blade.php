@extends('backend.master.index')
@section('content')
        <aside class="right-side">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <!--section starts-->
                <h1>IMPORT HỌC SINH - SINH VIÊN</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">
                            <i class="livicon" data-name="home" data-size="14" data-loop="true"></i> Trang chủ
                        </a>
                    </li>
                    <li>
                        <a href="#">Nhật ký</a>
                    </li>
                    <li class="active">Import Học sinh- sinh viên</li>
                </ol>
            </section>
            <!--section ends-->
            <section class="content">
                <div class="row">
                    <div class="col-lg-12">
                          <form action="" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="email">Import file</label>
                    <input type="file" class="form-control" id="email" placeholder="Enter email" name="file">
                  </div>
                 
                  <button type="submit" class="btn btn-primary">Import</button>
                  {{csrf_field()}}
               </form>
                    </div>
                </div>
               
                <!-- Third Basic Table Ends Here-->
                <!--delete modal starts here-->
               
            </section>
            <!-- content -->
        </aside>
            
   

@endsection('content')

  