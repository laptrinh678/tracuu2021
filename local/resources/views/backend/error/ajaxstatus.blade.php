 <button data="{{$data->status}}" class="btn activebt @if($data->status==1){{'btn-success'}}@else{{'btn-danger'}}@endif" dataid="{{$data->id}}" >@if($data->status==1){{'ON'}}@else{{'OFF'}}@endif</button>