<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\SEOManagementRequest;
use App\Models\SEOManagement;
use Illuminate\Support\Facades\App;


class SEOManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = SEOManagement::get();

        return view('seoManagement.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SEOManagementRequest $request)
    {
        $validated = $request->validated();
        // if ($request->has('keywords')) {
        //     $keywordsString = implode(', ', array_column(json_decode($request->keywords), 'value'));
            // print_r(array_column(json_decode($request->keywords), 'value'));
            // print_r(explode(', ',   $keywordsString));
        //     $validated['keywords'] = $keywordsString;
        // }
        $SEOManagement = SEOManagement::create($validated);
        if ($SEOManagement) {

            return back()->with(['success' => __('feedBackMessage.createSuccess')]);
        }

        return  back()->with(['error' => __('feedBackMessage.createFailed')]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SEOManagement  $SEOManagement
     * @return \Illuminate\Http\Response
     */
    public function show(SEOManagement $SEOManagement)
    {
        return $SEOManagement;
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SEOManagement  $SEOManagement
     * @return \Illuminate\Http\Response
     */
    public function edit(SEOManagement  $SEOManagement)
    {
        return $SEOManagement;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SEOManagement  $SEOManagement
     * @return \Illuminate\Http\Response
     */
    public function update(SEOManagementRequest $request, SEOManagement $SEOManagement)
    {

        $isUpdated = $SEOManagement->update($request->validated());

        if ($isUpdated) {
            return back()->with(['success' =>  __('feedBackMessage.updateSuccess')]);
        }

        return back()->with(['error' => __('feedBackMessage.updateFailed')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SEOManagement  $SEOManagement
     * @return \Illuminate\Http\Response
     */
    public function destroy(SEOManagement $SEOManagement)
    {
        if ($SEOManagement->delete()) {
            return back()->with(['success' =>  __('feedBackMessage.deleteSuccess')]);
        }
        return back()->with(['error' => __('feedBackMessage.deleteFailed')]);
    }
}
