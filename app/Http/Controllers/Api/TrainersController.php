<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TrainerResource;
use App\Models\Trainer;
use Illuminate\Http\Request;

class TrainersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return TrainerResource::collection(Trainer::paginate(15));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Trainer::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (!$trainer = Trainer::find($id)) {
            return response()->json('Trainer not found.', 404); 
        }
        
        return TrainerResource::collection($trainer->get());
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
        if (!$trainer = Trainer::find($id)) {
            return response()->json('Trainer not found.', 404); 
        }

        return $trainer->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trainer $trainer)
    {
        $trainer->delete();

        return response()->json('Trainer deleted successfully');
    }
}
