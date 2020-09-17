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

    <div class=" m-3 p-0">
                <table class="myTable table table-wrapper table-bordered table-striped row-border order-column" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>

                            <th name="name">{{__('labels.L-name')}}</th>

                            <th name="user_name">{{__('labels.L-username')}}</th>

                            <th name="email">{{__('labels.L-email')}}</th>

                            <th name="phone_number">{{__('labels.L-phone')}}</th>

                            <th name="address">{{__('labels.L-address')}}</th>

                            <th name="action">{{__('labels.btn-delete')}}</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach($users as $user)
                        <tr>
                            <td class="text_flow">{{$user->id}}</td>
                            <td class="text_flow">{{$user->name}}</td>
                            <td class="text_flow">{{$user->username}}</td>
                            <td class="text_flow">{{$user->email}}</td>

                            <td class="text_flow">{{$user->phone_number}}</td>
                            <td style="text-align: start;">{{$user->address}}</td>
                            <td>
                                <button type="button" class="btn btn-danger btn_delete" data-toggle="modal" data-target="#deleteProject" data-id="{{ $user->id }}" data-name="{{$user->name}}" title="{{__('labels.btn-delete')}}">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>

                            <th name="name">{{__('labels.L-name')}}</th>

                            <th name="user_name">{{__('labels.L-username')}}</th>

                            <th name="email">{{__('labels.L-email')}}</th>

                            <th name="phone_number">{{__('labels.L-phone')}}</th>

                            <th name="address">{{__('labels.L-address')}}</th>

                            <th name="action">{{__('labels.btn-delete')}}</th>
                        </tr>
                    </tfoot>
                </table>

</div>

<!-- modal delete -->
<div class="modal fade" id="deleteProject" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
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
                    <input type="text" id="name" class="form-control" disabled="true">
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
    var urlDelete = "{{ route('admin.users.delete')}}";
</script>

<script src="{{asset('js/deleteUser.js')}}" defer></script>

@endsection
