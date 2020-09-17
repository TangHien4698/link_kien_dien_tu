@extends('admin.layout')
@section('main_content')
    <link rel="stylesheet" href="{{asset('/css/order.css')}}">
    @if(session()->has('message'))
        <div class="alert {{session('val_alert')}} " role="alert">
            {{session('message')}}
        </div>
    @endif

    <!-- alert delete -->
    <div id="alertDelete" class="alert alert-success container-fluid mt-3 mb-3 p-0" role="alert" style="display: none;">
        <span></span>
    </div>

    <div id="alertConfirm" class="alert container-fluid mt-3 mb-3 p-0" role="alert" style="display: none;">
        <span></span>
    </div>

    <!-- list order -->
    @if(isset($orders))
        <div class=" m-3 p-0">
            <table class="myTable table table-wrapper table-bordered table-striped row-border order-column" style="width:100%">
                <thead>
                <tr>
                    <th>ID</th>

                    <th>{{__('labels.L-verification')}}</th>

                    <th>{{__('labels.L-receiverName')}}</th>

                    <th>{{__('labels.L-receiverPhone')}}</th>

                    <th>{{__('labels.L-receiverAddress')}}</th>

                    <th>{{__('labels.L-totalMoney')}}</th>

                    <th>{{__('labels.L-state')}}</th>

                    <th>{{__('labels.btn-action')}}</th>
                </tr>
                </thead>
                <tbody class="text-center">
                @foreach($orders as $data)
                    <tr>
                        <td class="text-center">{{$data->id}}</td>
                        <td class="text_flow">{{$data->Verification != null ? $data->Verification : ''}}</td>
                        <td class="text_flow">{{$data->receiver_name != null ? $data->receiver_name : ''}}</td>
                        <td class="text_flow">{{$data->receiver_phone_number != null ? $data->receiver_phone_number : ''}}</td>
                        <td class="text_flow">{{$data->receiver_address != null ? $data->receiver_address : ''}}</td>

                        <td class="text_flow">{{$data->total_money != null ? $data->total_money : ''}}</td>
                        <td>
                            <label class="switch">
                                <input id="state" type="checkbox" {{$data->state == 0 ? "" : 'checked'}} value="{{$data->id}}">
                                <span class="slider round"></span>
                            </label>
                        </td>
                        <td>
                            <a href="{{ route('admin.orders.show', $data->id )}}" class="btn btn-info"
                               title="{{__('labels.btn-info')}}">
                                <i class="fas fa-info-circle"></i>
                            </a>

                            <button type="button"
                                    class="btn btn-danger btn_delete" data-toggle="modal" data-target="#deleteProject"
                                    data-id="{{ $data->id }}"
                                    data-verification="{{$data->Verification != null ? $data->Verification : ''}}"
                                    data-receivername="{{$data->receiver_name != null ? $data->receiver_name : ''}}"
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

                    <th>{{__('labels.L-verification')}}</th>

                    <th>{{__('labels.L-receiverName')}}</th>

                    <th>{{__('labels.L-receiverPhone')}}</th>

                    <th>{{__('labels.L-receiverAddress')}}</th>

                    <th>{{__('labels.L-totalMoney')}}</th>

                    <th>{{__('labels.L-state')}}</th>

                    <th>{{__('labels.btn-action')}}</th>
                </tr>
                </tfoot>
            </table>

        </div>
    @endif
{{--modal confirm change state--}}
    <div class="modal fade" id="confirmChangeState" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">
                        Confirm!
                    </h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="form-control btn btn-warning">
                        <h5> Do you want change the current state?</h5>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" id="changeState">yes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Exit</button>
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
                        <label for="id">{{__('labels.L-verification')}}</label>
                        <input type="text" id="verification" class="form-control" disabled="true">
                    </div>

                    <div class="form-group">
                        <label for="id">{{__('labels.L-receiverName')}}</label>
                        <input type="text" id="receivername" class="form-control" disabled="true">
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
        var urlDelete = "{{ route('admin.orders.delete')}}";
        var urlChangeState = "{{ route('admin.orders.changeState') }}";
    </script>

    <script src="{{asset('js/order.js')}}" defer></script>

@endsection
