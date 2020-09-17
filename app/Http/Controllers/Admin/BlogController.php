<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    protected $model;

    public function __construct(Blog $blog)
    {
        $this->model = $blog;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = $this->model->get();
        return view('admin.blogs.index', ['blogs' => $blogs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only('title','content' ,'date' );
        $image = $this->checkImage($request);
        if ($image) {
            $data['image'] = 'img/'.$image;
        }
        $blog = $this->model->create($data);
        if ($blog) {
            flashMessage($request, __('messages.createSuccess'),'alert-success');
            return redirect()->route('admin.blogs.index');
        } else {
            flashMessage($request, __('messages.createFail'),'alert-danger');
            return back();
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = $this->model->where('id', $id)->first();
        return view('admin.blogs.edit', ['blog' => $blog]);
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
        $data = $request->only('title','content' ,'date' );
        $image = $this->checkImage($request);
        if ($image) {
            $data['image'] = 'img/'.$image;
        }
        $blog = $this->model->where('id', $id)->update($data);
        if ($blog) {
            flashMessage($request, __('messages.editSuccess'),'alert-success');
            return redirect()->route('admin.blogs.index');
        } else {
            flashMessage($request, __('messages.editFail'),'alert-danger');
            return back();
        }
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

    public function delete(Request $request)
    {
        $id = $request->id;
        $result = false;

        $deleted = $this->model->where('id', $id)->delete();
        if ($deleted) {
            $result = true;
        }

        return response()->json(['result' => $result]);
    }

    private function checkImage($request)
    {
        $image = [];
        if ($request->hasFile('image')) {
            $file = $request->file('image');

            $typeFile = $file->getClientOriginalExtension();
            if ($typeFile == 'png' || $typeFile == 'jpg' || $typeFile == 'jpeg' ) {

                $fileSize = $file->getSize();
                if ($fileSize <= 1024000) {
                    $fileName = $file->getClientOriginalName();
                    $file->move('img', $fileName);
                    return $fileName;
                } else {
                    return false;
                }
            } else {
                return false;
            }

        } else {
            return false;
        }
        return $image;
    }
}
