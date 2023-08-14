<?php

namespace App\Http\Controllers;
use App\Models\item;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return item::orderBy('created_at' , 'DESC')->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newItem = new item;
        $newItem->name = $request->item['name'] ; 
        $newItem->save();
        return $newItem;
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
    public function update(Request $request, $id)
    {
        $existingItem = item::find( $id ) ; 
        if ($existingItem) {
            $existingItem->completed = $request->item['completed'] ? true : false; // if completed is true then true else false 
            $existingItem->completed_at = $request->item['completed_at'] ? Carbon::now() : null ; // if completed_at is true then now else null
            $existingItem->save();
            return $existingItem;
        }   
        return 'Item not found' ;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $existingItem = item::find( $id ) ; 
        if ($existingItem) {
            $existingItem->delete();
            return "deleted";
        }   
        return 'Item not found' ;
    }
}
