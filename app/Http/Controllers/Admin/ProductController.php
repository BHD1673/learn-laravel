<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Products::with('category')->get();
        
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'ten_san_pham' => 'required|string|max:255',
            'so_luong' => 'required|integer',
            'gia_san_pham' => 'required|numeric',
            'gia_khuyen_mai' => 'nullable|numeric',
            'ngay_nhap' => 'nullable|date',
            'mo_ta' => 'nullable|string',
            'danh_muc_id' => 'nullable|integer|exists:tb_danh_muc,id',
            'trang_thai' => 'required|boolean',
        ]);

        Products::create($request->all());

        return redirect()->route('products.index')->with('success', 'Tạo mới sản phẩm thành công !!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
