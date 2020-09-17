<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    protected $model;

    public function __construct(Feedback $feedback)
    {
        $this->model = $feedback;
    }

    public function index(Request $request)
    {
        $data = $this->model->with(['userFeedBack', 'productFeedBack'])->get();
        if (!$data) {
            flashMessage($request, 'page not found', 'alert-danger');
        }
        return view('admin.feedbacks.index', ['feedbacks' => $data]);
    }

    public function delete(Request $request)
    {
        $result = false;
        $id = $request->id;

        $deleted = $this->model->where('id', $id)->delete();
        if ($deleted) {
            $result = true;
        }

        return response()->json([
            'result'=>$result
        ]);
    }
}
