<option>Lựa chọn phòng ban -tổ</option>
@foreach($data as $v)
<option value="{{$v->maphongban}}">{{$v->name}}</option>
@endforeach