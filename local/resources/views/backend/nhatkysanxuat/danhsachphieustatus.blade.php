@if($data->status==0)
<didata class="controls bootstrap-timepicker">
    <button class="btn btn-danger changestatus" data="{{$data->status}}" dataid="{{$data->id}}"> Chờ duyệt</button>
</didata>
@elseif($data->status==1)
<didata class="controls bootstrap-timepicker">
    <button class="btn btn-success changestatus" data="{{$data->status}}" dataid="{{$data->id}}">Đã duyệt</button>
</didata> 
@endif