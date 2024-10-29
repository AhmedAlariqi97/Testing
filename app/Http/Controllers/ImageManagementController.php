<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ImageManagement;
use Illuminate\Http\Request;
use App\Http\Requests\ImageManagementRequest;
use Illuminate\Support\Facades\App;
use Exception;

class ImageManagementController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $this->authorize('viewAny', User::class);
        $query = ImageManagement::latest();

        $search = $request->search;

        if ($request->search) {
            $query->where("title" . "->" . App::getLocale() . "", 'LIKE', '%' . $request->search . '%');
        }

        $data = $query->paginate(10);

        return view('imageManagement.index', compact('data', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ImageManagementRequest $request)
    {
        // $this->authorize('viewAny', User::class);

        $validated = $request->validated();

        if ($request->has('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/uploaded_images'), $imageName);
            $validated['image'] = $imageName;
        }
        $image =  ImageManagement::create($validated);

        if ($image) {
            return back()->with(['success' => __('feedBackMessage.createSuccess')]);
        }

        return back()->with(['error' => __('feedBackMessage.createFailed')]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ImageManagement   $image
     * @return \Illuminate\Http\Response
     */
    public function show(ImageManagement  $image)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ImageManagement   $image
     * @return \Illuminate\Http\Response
     */
    public function edit(ImageManagement  $image)
    {
        // $this->authorize('viewAny', User::class);
        return  $image;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ImageManagement   $image
     * @return \Illuminate\Http\Response
     */
    public function update(ImageManagementRequest $request, ImageManagement $image)
    {
        // $this->authorize('viewAny', User::class);
        if ($request->key) {
            $image->key = $request->key;
        }


        $imageName = $request->prvImage;

        if ($request->has('image')) {
            $imageName = time() . '.' . $request->image->extension();
            if ($image->image != null) {
                $existingImage = $image->image;
                $path = public_path() . '/assets/uploaded_images/' . $existingImage;
                try {
                    $this->deleteImage($path);
                } catch (Exception $e) {
                    return back()->with(['error' => __('feedBackMessage.updateFailed')]);
                }
            }
            $image->image = $imageName;

            $request->image->move(public_path('assets/uploaded_images'), $imageName);
        }

        $isUpdated =  $image->update([
            'title' =>  $request->title,


        ]);

        if ($isUpdated) {

            return back()->with(['success' =>  __('feedBackMessage.updateSuccess')]);
        }

        return back()->with(['error' => __('feedBackMessage.updateFailed')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ImageManagement   $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(ImageManagement $image)
    {
        // $this->authorize('viewAny', User::class);
        if ($image->delete()) {
            return back()->with(['success' =>  __('feedBackMessage.deleteSuccess')]);
        }
        return back()->with(['error' => __('feedBackMessage.deleteFailed')]);
    }
    public function deleteImage($image)
    {
        if (file_exists($image)) {
            unlink($image);
        }
    }
}
