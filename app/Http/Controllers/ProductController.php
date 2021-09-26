<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $product = Product::all();
        return view('admin.product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'name' => 'required|unique:products',
            'count' => 'required|numeric',
            'price' => 'required',
        ], [
            'name.required' => 'Tên Sản Phẩm Không Được Để Trống',
            'name.unique' => 'Tên Sản Phẩm Đã Tồn Tại',
            'count.required' => 'Số Lượng Không Được Để Trống',
            'count.numeric' => 'Số Lượng Phải Là Số',
            'price.required' => 'Giá Không Được Để Trống',
        ]);
        DB::table('products')->insert(
            [
                'name' => $request->get('name'), 'count' => $request->get('count'), 'price' => $request->get('price')
            ]
        );
        return redirect()->route('product.index')->with('thongbao', 'Thêm Thành Công Sản Phẩm ');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
