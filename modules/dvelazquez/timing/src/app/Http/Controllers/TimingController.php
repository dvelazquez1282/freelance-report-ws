<?php

namespace DVelazquez\Timing\Http\Controllers;

use App\Http\Controllers\Controller;
use DVelazquez\Timing\Http\Requests\StoreTimingFormRequest;
use DVelazquez\Timing\Http\Requests\UpdateTimingFormRequest;
use DVelazquez\Timing\Http\Resources\TimingCollection;
use DVelazquez\Timing\Http\Resources\TimingResource;
use DVelazquez\Timing\Models\Timing;
use Illuminate\Http\Request;

class TimingController extends Controller
{
    public function get($id) {
        $timing = Timing::findOrFail($id);
        $resource = new TimingResource($timing);
        return response()->json($resource);
    }
    public function list() {
        $timings = Timing::all();    
        $resource = new TimingCollection($timings);
        return response()->json($resource);
    }
    public function store(StoreTimingFormRequest $request) {
        $timing = new Timing();
        $timing->fill($request->all());
        $timing->save();
        $resource = new TimingResource($timing);
        return response()->json($resource);
    }
    public function update($id, UpdateTimingFormRequest $request) {
        $timing = Timing::findOrFail($id);
        $timing->fill($request->all());        
        $timing->save();        
        $resource = new TimingResource($timing);
        return response()->json($resource);
    }
    public function delete($id) {
        $timing = Timing::findOrFail($id);
        $timing->delete();
        $resource = new TimingResource($timing);
        return response()->json($resource);
    }
}
