@extends('admin.layout.main')
@section('content')
<div id="content-wrapper">
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Tables</li>
        </ol>
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-user"></i>
                <span>List User</span>
                <div class="card-body">
                    <div>
                        <div class="row">
                            <div class="col-xs-12 col-md-12 col-lg-12">
                                <div class="panel panel-primary">
                                    <div class="panel-body">
                                        <div class="row justify-content-center" style="margin-bottom:40px">
                                            <div class="col-md-8 col-lg-8 col-lg-offset-2">
                                                <form action="" method="post">
                                                    @csrf
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="email" name="email" class="form-control">
                                                    @if (count($errors)>0)
                                                        <div class="alert alert-danger">
                                                          @foreach ($errors->all() as $err)
                                                              {{ $err }}
                                                          @endforeach
                                                        </div>
                                                    @endif
                                                    @if (session('success'))
                                                        <div class="alert alert-success">
                                                          {{ session('success') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="form-group">
                                                    <label>password</label>
                                                    <input type="password" name="password" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input type="full" name="name" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Phone</label>
                                                    <input type="phone" name="phone" class="form-control">
                                                </div>
                                                <button class="btn btn-success" type="submit">Thêm thành viên</button>
                                                <button class="btn btn-danger" type="reset">Huỷ bỏ</button>
                                                  </form>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright © Your Website 2019</span>
                </div>
            </div>
        </footer>

    </div>
    <!-- end content -->
    <!-- /.content-wrapper -->

</div>
@endsection
