<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ContentManagement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Requests\ContentManagementRequest;


class ContentManagementController extends Controller
{

    private $backRoute = 'content.index';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $this->authorize('viewAny', User::class);
        $query = ContentManagement::latest();
        $search = $request->search;

        if ($request->search) {
            $query->where("value" . "->" . App::getLocale() . "", 'LIKE', '%' . $request->search . '%');
        }

        $data = $query->paginate(10);
        // return $data;
        return view('content.index', compact('data', 'search'));
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
    public function store(ContentManagementRequest $request)
    {
        // $this->authorize('viewAny', User::class);

        $Content = ContentManagement::create([
            'key' => $request->key,
            'title' => $request->title,
            'value' => $request->value,

        ]);

        if ($Content) {
            return back()->with(['success' => __('feedBackMessage.createSuccess')]);
        }

        return back()->with(['error' => __('feedBackMessage.createFailed')]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContentManagement  $contentManagement
     * @return \Illuminate\Http\Response
     */
    public function show(ContentManagement $content)
    {
        // $this->authorize('viewAny', User::class);
        return $content;
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContentManagement  $contentManagement
     * @return \Illuminate\Http\Response
     */
    public function edit(ContentManagement $content)
    {
        // $this->authorize('viewAny', User::class);
        return $content;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContentManagement  $contentManagement
     * @return \Illuminate\Http\Response
     */
    public function update(ContentManagementRequest $request, ContentManagement $content)
    {
        // $this->authorize('viewAny', User::class);
        if ($request->key) {
            $content->key = $request->key;
        }

        $isUpdated = $content->update([
            'title' => $request->title,
            'value' => $request->value,


        ]);

        if ($isUpdated) {

            return back()->with(['success' =>  __('feedBackMessage.updateSuccess')]);
        }


        return back()->with(['error' => __('feedBackMessage.updateFailed')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContentManagement  $contentManagement
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContentManagement $content)
    {
        // $this->authorize('viewAny', User::class);
        if ($content->delete()) {
            return back()->with(['success' =>  __('feedBackMessage.deleteSuccess')]);
        }
        return back()->with(['error' => __('feedBackMessage.deleteFailed')]);
    }



    public function activate(ContentManagement $contentManagement)
    {
        // $this->authorize('viewAny', User::class);
        $is_active = $contentManagement->is_active ? 0 : 1;
        $isUpdated = $contentManagement->update([
            'is_active' =>  $is_active
        ]);
        if ($isUpdated) {
            return back()->with(['success' =>  __('feedBackMessage.updateSuccess')]);
        }
        return back()->with(['error' => __('feedBackMessage.updateFailed')]);
    }
}
