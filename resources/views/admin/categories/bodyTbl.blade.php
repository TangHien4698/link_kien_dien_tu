<tr>
    <td class="text-center" id="tblId"> {{ $category->id }} </td>
    <td class="text_flow" id="tblName"> {{ $category->name }} </td>
    <td class="text_flow" id="tblName"> {{ $category->cat_rewrite }} </td>
    <td class="text_flow text-center">
        <a title="{{__('labels.btn-edit')}}">
            <button type="button" class="btn btn-primary">
                <i class="fas fa-edit"></i>
            </button>
        </a>

        <button type="button" class="btn btn-danger btn_delete" data-toggle="modal" data-target="#deleteCategory" data-id="{{$category->id}}" data-name="{{$category->name}}" title="{{__('labels.btn-delete')}}">
            <i class="fas fa-trash-alt"></i>
        </button>
    </td>
</tr>
