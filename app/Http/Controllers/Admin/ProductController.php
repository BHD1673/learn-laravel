<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ProductImage;
use App\Models\Products;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $products = Products::with('category')->get();

        $search = $request->input('search');
        $searchTrangThai = $request->input('searchTrangThai');

        if ($search) {
            $products = Products::where('ten_san_pham', 'like', '%' . $search . '%')->get();
        }
        
        
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
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validate images
        ]);
    
        // Save the product data
        $product = Products::create($request->all());
    
        // Handle the uploaded images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                // Generate a unique name for each image
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('images/products'), $imageName); // Save the image
    
                // Save image information in the images table
                $imageRecord = new ProductImage();
                $imageRecord->san_pham_id = $product->id; // Link the image to the product
                $imageRecord->link_anh = $imageName;
                $imageRecord->save();
            }
        }
    
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

    public function softDelete(string $id) {
        $product = Products::find($id);
        
        if (!$product) {
            return response()->json(['message' => "Sản phẩm này không tồn tại"], 404);
        }
        
        // return redirect()->
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::beginTransaction();
    
        try {
            $product = Products::findOrFail($id);
    
            // If there are related records, you might want to delete them first
            // For example, if a product has images, delete them before deleting the product
            $product->images()->delete();
    
            $product->delete();
            
            DB::commit();
    
            return redirect()->route('products.index')->with('success', 'Xoá sản phẩm thành công');
        } catch (QueryException $e) {
            DB::rollBack();
    
            // Log the error or handle it as necessary
            // Log::error($e->getMessage());
    
            return redirect()->route('products.index')->with('error', 'Xoá sản phẩm thất bại: ' . $e->getMessage());
        } catch (\Exception $e) {
            DB::rollBack();
    
            // Log the error or handle it as necessary
            // Log::error($e->getMessage());
    
            return redirect()->route('products.index')->with('error', 'Xoá sản phẩm thất bại: ' . $e->getMessage());
        }
    }
}
