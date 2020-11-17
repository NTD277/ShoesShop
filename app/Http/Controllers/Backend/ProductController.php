<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
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
                ->select('products.*','brands.name as nameBrand')
                ->join('brands','brands.id','=','products.idBrand')
                ->orderByDesc('products.status')
                ->get();
            return view('backend.product.index', $data);
        }
        else {
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
        return view('backend.product.create',compact('brand'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nameProduct = $request->nameProduct;
        $slugProduct = Str::slug($nameProduct, '-');
        $qtyProduct = $request->qtyProduct;
        $noteProduct = $request->noteProduct;
        $check = Product::Where('name',$nameProduct)->get();
        if ($check->all() == null){
            //co the create
            $dataInsert = [
                'name' => $nameProduct,
                'slug' => $slugProduct,
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => null
            ];
            $upload = $file->move('upload/image/brand',$img);
            if ($upload) {
                move_uploaded_file($img, 'upload/image/brand');
                $insert = $brand->insertDataBrand($dataInsert);
                $request->session()->flash('mess', 'Add successful');
                return redirect(route('admin.brand.index'));
            }
        }else{
            $request->session()->flash('mess', 'Add fail');
            return redirect(route('admin.brand.create'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
