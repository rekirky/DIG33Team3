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
        //Gets all product groups from the database
        $productGroups = ProductGroup::all();

        //Returns all the product groups in the database
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
        //Attempts to find the product group requested by id
        $productGroup = ProductGroup::findOrFail($id);

        //returns the product group that was requested
        return new ProductGroupResource($productGroup);
    }
}
