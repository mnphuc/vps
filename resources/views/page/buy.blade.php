@extends('app')
@section('content')
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <form action="{{route('payment')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Số Lượng</label>
                    <input type="number" name="count" value="1" min="1" max="{{$product->count}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label  class="form-label" for="disabledSelect">Phương thức thanh toán</label>
                    <select id="disabledSelect" name="method" class="form-control">
                        <option value="mono">Momo</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Mua</button>
            </form>
        </div>
    </section>
@endsection
