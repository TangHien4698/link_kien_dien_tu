
@extends('admin.layout')
@section('main_content')

    @if(session()->has('message'))
        <div class="alert {{session('val_alert')}} " role="alert">
            {{session('message')}}
        </div>
    @endif

    <!-- alert delete -->
    <div class="alert alert-success container mt-3 mb-3 p-0" role="alert" style="display: none;">
        {{ __('messages.deleteSuccess')}}
    </div>

    <div class="alert alert-danger container mt-3 mb-3 p-0" role="alert" style="display: none;">
        {{ __('messages.deleteFail')}}
    </div>

    <!-- list project -->
    @if(isset($feedbacks))
    <div class=" m-3 p-0">
        <table class="myTable table table-wrapper table-bordered table-striped row-border order-column" style="width:100%">
            <thead>
            <tr>
                <th>ID</th>

                <th>{{__('labels.L-username')}}</th>

                <th>{{__('labels.L-email')}}</th>

                <th>{{__('labels.L-productName')}}</th>

                <th>{{__('labels.L-feedback')}}</th>

                <th>{{__('labels.L-rating')}}</th>

                <th>{{__('labels.L-datefeedback')}}</th>

                <th>{{__('labels.btn-delete')}}</th>
            </tr>
            </thead>
            <tbody class="text-center">
            @foreach($feedbacks as $data)
                <tr>
                    <td class="text-center">{{$data->id}}</td>
                    <td class="text_flow">{{$data->userFeedback != null ? $data->userFeedback->username : ''}}</td>
                    <td class="text_flow">{{$data->userFeedback != null ? $data->userFeedback->email : ''}}</td>
                    <td class="text_flow" >{{$data->productFeedback != null ? $data->productFeedback->name : ''}}</td>

                    <td style="text-align: start;">{{$data->content}}</td>

                    <td class="text_flow">{{$data->number_star}}</td>
                    <td class="text_flow">{{$data->datetime}}</td>
                    <td>
                        <button type="button"
                                class="btn btn-danger btn_delete" data-toggle="modal" data-target="#deleteProject"
                                data-id="{{ $data->id }}"
                                data-username="{{$data->userFeedback != null ? $data->userFeedback->username : ''}}"
                                data-productname="{{$data->productFeedback != null ? $data->productFeedback->name : ''}}"
                                title="{{__('labels.btn-delete')}}">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <th>ID</th>

                <th>{{__('labels.L-username')}}</th>

                <th>{{__('labels.L-email')}}</th>

                <th>{{__('labels.L-productName')}}</th>

                <th>{{__('labels.L-feedback')}}</th>

                <th>{{__('labels.L-rating')}}</th>

                <th>{{__('labels.L-datefeedback')}}</th>

                <th>{{__('labels.btn-delete')}}</th>
            </tr>
            </tfoot>
        </table>

    </div>
    @endif


    <div class="modal" tabindex="-1" role="dialog" id="modalcontent">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <p id="contentShow"></p>
                </div>
            </div>
        </div>
    </div>

    <!-- modal delete -->
    <div class="modal fade" id="deleteProject" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Feedback</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="id">ID</label>
                        <input type="text" id="id" class="form-control" disabled="true">
                    </div>

                    <div class="form-group">
                        <label for="id">{{__('labels.L-username')}}</label>
                        <input type="text" id="username" class="form-control" disabled="true">
                    </div>

                    <div class="form-group">
                        <label for="id">{{__('labels.L-productName')}}</label>
                        <input type="text" id="productName" class="form-control" disabled="true">
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" id="click_delete">Delete</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Exit</button>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('js/form-datatable.js')}}"></script>
    <script>
        var urlDelete = "{{ route('admin.feedbacks.delete')}}";
    </script>

    <script src="{{asset('js/feedback.js')}}" defer></script>

@endsection
