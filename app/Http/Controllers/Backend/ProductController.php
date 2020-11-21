<?php

namespace App\Http\Controllers\
Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductPost;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['mess'] = $request->session()->get('mess');
        if (session('id')) {
            $data['product'] = DB::table('products')
                ->select('products.*', 'brands.name as nameBrand')
                ->join('brands', 'brands.id', '=', 'products.idBrand')
                ->orderByDesc('products.status')
                ->get();
            return view('backend.product.index', $data);
        } else {
            redirect(route('admin.login'));
        };
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $brand = Brand::where('status', 1)->get();
        $properties = DB::table('properties')
            ->where('name', '=', 'màu')
            ->get();
        $propertiesSize = DB::table('properties')
            ->where('name', '=', 'size')
            ->get();
        return view('backend.product.create', compact('brand', 'properties','propertiesSize'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductPost $request)
    {
        $dataImage = $request->file('images');;
        foreach ($dataImage as $keys =>$items)
        {
            $imageProduct[$keys] = $items->getClientOriginalName();
            $upload = $items->move('upload/image/product', $items->getClientOriginalName());
        }
        $sum = DB::table('products')->max('id');
        $idBrand = $request->brandProduct;
        $nameProduct = $request->nameProduct;
        $slugProduct = Str::slug($nameProduct, '-');
        $priceProduct = $request->priceProduct;
        $qtyProduct = $request->qtyProduct;
        $noteProduct = $request->noteProduct ?? null;
        $check = Product::Where('name', $nameProduct)->get();
        $properties = DB::table('properties')
            ->get();
        $data = [];
        foreach ($properties as $keys => $items) {
            if ($request->get($keys + 1) == $items->detail && $items->detail != null) {
                $data[$keys] = $items->id;
            }
        }
        if ($check->all() == null) {
            //co the tao the san pham
            $createProduct = DB::table('products')->insert([
                'idBrand' => $idBrand,
                'slug' => $slugProduct,
                'name' => $nameProduct,
                'price' => $priceProduct,
                'qty' => $qtyProduct,
                'note' => $noteProduct,
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => null
            ]);
            // them vao bang productproperty
            foreach ($data as $keys => $items) {
                $createProductProperties = DB::table('productproperties')->insert([
                    'idProduct' => $sum + 1,
                    'idProperty' => $items,
                    'status' => 1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => null
                ]);
            }
            foreach ($imageProduct as $keys =>$items){
                $createImageProducts = DB::table('image_products')->insert([
                   'idProduct' => $sum + 1,
                    'name' => $items,
                    'status' => 1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => null
                ]);
            }
            $request->session()->flash('mess', 'Thêm sản phẩm mới thành công');
            return redirect()->route('admin.product.index');
        } else {
            $request->session()->flash('mess', 'Thêm sản phẩm mới không thành công');
            return redirect(route('admin.product.create'));
        }
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
        $data = [];
        $data = DB::table('products')->select('products.*','image_products.name as imageProduct','properties.name as nameProperty','properties.detail as detailProperty')
            ->join('image_products','image_products.idProduct','=','products.id')
            ->join('productproperties','productproperties.idProduct','=','products.id')
            ->join('properties','properties.id','=','productproperties.idProperty')
            ->where('products.status', 1)
            ->where('products.id',$id)
            ->get();
        $nameProperty = [];
        $detailProperty = [];
        foreach ($data as $key => $items)
        {

            $data['id'] = $id;
            $data['name'] = $items->name;
            $data['image'] = $items->imageProduct;
            $data['nameProperty'] = $items->nameProperty;
            if ($items->nameProperty == 'Màu') {
                $nameProperty[$key] = $items->detailProperty;
            } else {
                $detailProperty[$key] = $items->detailProperty;
            }
            $data['status'] = $items->status;
        }
//        dd($detailProperty);
        return view('backend/product/edit',$data,compact('nameProperty','detailProperty'));
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
