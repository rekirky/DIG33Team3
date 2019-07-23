<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\ProductGroup;
use App\Http\Resources\ProductGroup as ProductGroupResource;

class ProductGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productGroups = ProductGroup::all();

        return ProductGroupResource::collection($productGroups);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $productGroup = ProductGroup::findOrFail($id);

        return new ProductGroupResource($productGroup);
    }
}
