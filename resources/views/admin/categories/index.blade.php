@extends('admin.layout')
@section('main_content')

<link rel="stylesheet" href="{{asset('css/product.css')}}">

    <!-- btn create -->
    <div class="row justify-content-start m-1 mb-2 mt-2 container ml-3">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#createCategory">{{__('labels.btn-create')}}</button>
    </div>

    <!-- message -->
    @if(session()->has('message'))
        <div class="alert {{session('val_alert')}} container mt-3 mb-3 p-0" role="alert">
            {{session('message')}}
        </div>
    @endif

    <div id="notifi" class="alert notifi container mt-3 mb-3 p-0" role="alert" style="display: none;">
        <span></span>
    </div>

    <!-- alert delete -->
    <div class="alert alert-success container mt-3 mb-3 p-0" role="alert" style="display: none;">
        {{ __('messages.deleteSuccess')}}
    </div>

    <div class="alert alert-danger container mt-3 mb-3 p-0" role="alert"  style="display: none;">
        {{ __('messages.deleteFail')}}
    </div>



    <!-- list project -->
    <div class="row">
        <div class="container mt-3 mb-3 p-0">
            <div class="card">
                <div class="card-body">
                    <table id="myTable" class="table table-bordered table-striped row-border order-column" width="100%">
                        <thead>
                        <tr>
                            <th width="10" class="text-center">ID</th>
                            <th > {{ __('labels.L-categoryName') }} </th>
                            <th > Category rewrite </th>
                            <th name="action" width="150" class="text-center">{{__('labels.btn-action')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td class="text-center" id="tblId"> {{ $category->id }} </td>
                                <td class="text_flow" id="updateName"> {{ $category->name != null? $category->name:'' }} </td>
                                <td class="text_flow" id="updateName"> {{ $category->cat_rewrite != null ? $category->cat_rewrite: ''}} </td>
                                <td class="text_flow text-center">

                                    <button type="button" id="btn_edit" class="btn btn-primary" title="{{__('labels.btn-edit')}}"  data-toggle="modal" data-target="#editCategory" data-id="{{$category->id}}" data-name="{{$category->name}}" data-rewrite="{{$category->cat_rewrite}}">
                                        <i class="fas fa-edit"></i>
                                    </button>

                                    <button type="button" id="btn_delete" class="btn btn-danger" data-toggle="modal" data-target="#deleteCategory" data-id="{{$category->id}}" data-name="{{$category->name}}" title="{{__('labels.btn-delete')}}">
                                        <i class="fas fa-trash-alt" ></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                        <tfoot>
                        <tr>
                        <tr>
                            <th width="10" class="text-center">ID</th>
                            <th> {{ __('labels.L-categoryName') }} </th>
                            <th > Category rewrite </th>
                            <th name="action" width="100" class="text-center">{{__('labels.btn-action')}}</th>
                        </tr>
                        </tfoot>

                    </table>
                </div>
            </div>
        </div>
    </div>

<!-- modal create -->
    <div class="modal fade" id="createCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="id">{{__('labels.L-categoryName')}}</label>
                        <input type="text" id="cName" class="form-control" name="cName">
                    </div>

                    <div class="form-group">
                        <label for="id">Category rewrite</label>
                        <input type="text" id="cRewrite" class="form-control" name="cat_rewrite">
                    </div>

                    <div id="errorCreate" class="alert alert-danger form-group errorCreate" role="alert"  style="display: none;">
                        <span>This field is required!</span>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" id="click_create" >{{__('labels.btn-create')}}</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" >Exit</button>
                </div>
            </div>
        </div>
    </div>

{{--modal edit--}}
<div class="modal fade" id="editCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="id">ID</label>
                    <input type="text" id="eId" class="form-control" disabled="true">
                </div>

                <div class="form-group">
                    <label for="id">{{__('labels.L-categoryName')}}</label>
                    <input type="text" id="eName" class="form-control" name="cName">
                </div>

                <div class="form-group">
                    <label for="id">Category rewrite</label>
                    <input type="text" id="eRewrite" class="form-control" name="eRewrite">
                </div>

                <div id="errorCreate" class="alert alert-danger form-group errorCreate" role="alert"  style="display: none;">
                    <span>This field is required!</span>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" id="click_update" data-dismiss="modal">{{__('labels.btn-edit')}}</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal" >Exit</button>
            </div>
        </div>
    </div>
</div>

    <!-- modal delete -->
    <div class="modal fade" id="deleteCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="id">ID</label>
                        <input type="text" id="dId" class="form-control" disabled="true">
                    </div>

                    <div class="form-group">
                        <label for="id">{{__('labels.L-categoryName')}}</label>
                        <input type="text" id="dName" class="form-control" disabled="true">
                    </div>

                    <div id="messageUserInGroup" class="alert alert-danger form-group" role="alert"  style="display: none;">
                        <span id="messagesGroup"></span>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" id="click_delete" >{{__('labels.btn-delete')}}</button>
{{--                    <button type="button" class="btn btn-danger" data-dismiss="modal" id="click_update">{{__('labels.btn-update')}}</button>--}}
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" >Exit</button>
                </div>
            </div>
        </div>
    </div>


    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
        var urlDelete = "{{route('admin.categories.delete')}}";
        var urlCreate = "{{route('admin.categories.store')}}";
        var urlUpdate = "{{route('admin.categories.update')}}";

    </script>

    <script src="{{asset('js/category.js')}}" defer></script>
@endsection()
