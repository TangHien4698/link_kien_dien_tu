@extends('admin.layout')
@section('main_content')

    <link rel="stylesheet" href="{{asset('css/product.css')}}">

    <!-- btn create -->
    <div class="row justify-content-start m-1 mb-2 mt-2 container ml-1 msgCreate">
        <a href="{{ route('admin.blogs.create' )}}">
            <button type="button" class="btn btn-success">{{__('labels.btn-create')}}</button>
        </a>
    </div>

    <!-- message -->
    @if(session()->has('message'))
        <div class="alert {{session('val_alert')}} " role="alert">
            {{session('message')}}
        </div>
    @endif

    <!-- alert delete -->
    <div class="alert alert-success" role="alert" style="display: none;">
       Delete Success
    </div>

    <div class="alert alert-danger" role="alert" style="display: none;">
        Delete fail
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
                            <th width="50px"> Title </th>
                            <th width="200px"> Content </th>
                            <th width="50px"> Post at </th>
                            <th> {{ __('labels.L-image') }} </th>
                            <th name="action" width="100" class="text-center">{{__('labels.btn-action')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($blogs as $blog)
                            <tr>
                                <td class="text-center"> {{ $blog->id }} </td>
                                <td class="text_flow"> {{ $blog->title ? $blog->title : ''  }} </td>
                                <td class=""> {{ $blog->content ? $blog->content : ""  }} </td>
                                <td class="text_flow"> {{ $blog->date ? $blog->date : ""  }} </td>

                                <td class="text_flow"><img style="width: 300px;" src="/{{$blog->image}}"
                                                           alt="avatar"></td>
                                <td class="text_flow text-center">
                                    <a href="{{ route('admin.blogs.edit', $blog->id )}}"
                                       title="{{__('labels.btn-edit')}}">
                                        <button type="button" class="btn btn-primary">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                    </a>

                                    <button type="button" class="btn btn-danger btn_delete"
                                            data-toggle="modal"
                                            data-target="#deleteProject"
                                            data-id="{{$blog->id}}"
                                            data-title="{{$blog->title}}"
                                            title="{{__('labels.btn-delete')}}">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                        <tfoot>
                        <tr>
                            <th width="10" class="text-center">ID</th>
                            <th> Title </th>
                            <th> Content </th>
                            <th> Post at </th>
                            <th> {{ __('labels.L-image') }} </th>
                            <th name="action" width="150" class="text-center">{{__('labels.btn-action')}}</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <!-- modal delete -->
    <div class="modal fade" id="deleteProject" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Blog</h5>
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
                        <label for="id">Title</label>
                        <input type="text" id="title" class="form-control" disabled="true">
                    </div>

                    <div id="messageUserInGroup" class="alert alert-danger form-group" role="alert"
                         style="display: none;">
                        <span id="messagesGroup"></span>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" id="click_delete">Delete</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Exit</button>
                </div>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });

        setTimeout(function () {
            $(".msgCreate").remove();
        }, 3000);

        var urlDelete = "{{route('admin.blogs.delete')}}"
    </script>

    <script src="{{asset('js/blog.js')}}" defer></script>
@endsection()
