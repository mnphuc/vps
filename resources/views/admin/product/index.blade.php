@extends('admin.app')
<!-- Main content -->
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Sản Phẩm</h3>
                            <button type="button" class="btn btn-primary btn-icon-split float-right" data-toggle="modal"
                                    data-target="#add-product">
                                <span class="icon text-white-50">
                                    <i class="fas fa-plus"></i>
                                </span>
                                <span class="text">Thêm</span>
                            </button>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Tên</th>
                                    <th>Số Lượng</th>
                                    <th>Giá</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($product as $pro)
                                    <tr>
                                        <td>{{$pro->name}}</td>
                                        <td>{{$pro->count}}</td>
                                        <td>{{$pro->price}}</td>
                                        <td>xóa</td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Tên</th>
                                    <th>Số Lượng</th>
                                    <th>Giá</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- modal add categories -->
        <div class="modal fade" id="add-product" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Thêm Danh Mục Sản Phẩm</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('product.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="product_name">Tên</label>
                                <input type="text" name="name"
                                       class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}"
                                       id="product_name"
                                       placeholder="vps 1:1" value="{{ old('name') }}">
                                @if($errors->has('name'))
                                    <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="product_count">Số Lượng</label>
                                <input type="text" name="count"
                                       class="form-control {{$errors->has('count') ? 'is-invalid' : ''}}"
                                       id="product_count"
                                       placeholder="count" value="{{ old('count') }}">
                                @if($errors->has('count'))
                                    <div class="invalid-feedback">{{ $errors->first('count') }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="product_price">Giá</label>
                                <input type="text" name="price"
                                       class="form-control {{$errors->has('price') ? 'is-invalid' : ''}}"
                                       id="product_price"
                                       placeholder="count" value="{{ old('price') }}">
                                @if($errors->has('price'))
                                    <div class="invalid-feedback">{{ $errors->first('price') }}</div>
                                @endif
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                <button type="submit" class="btn btn-primary">Thêm</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- modal edit categories -->
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
