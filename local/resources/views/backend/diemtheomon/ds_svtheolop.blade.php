<!-- row2 -->
<div class="col-md-12">
@foreach($arr_sv as $k=>$v)
<div class="row">
<div class="col-sm-1">
<label>STT</label>
<input type="text" class="form-control" value="{{$k+1}}">
</div>
<div class="col-sm-2">
<label>Mã sinh viên</label>
<input type="text" name="masv[]" class="form-control" value="{{$v->ma}}">
<input type="hidden" value="{{$v->id}}" name="id_sv[]">
</div>
<div class="col-sm-3">
<label>Họ và tên</label>
<input type="text" class="form-control" value="{{$v->ho_tendem}} {{$v->ten}}">
</div>
<div class="col-sm-3">
<label>Điểm trung bình kiểm tra</label>
<input type="text" class="form-control" name="diemtrungbinhkiemtra[]" required="">
</div>
<div class="col-sm-3">
<label>Điều kiện thi</label>
<select name="dieukienthi[]" id="" required="" class="form-control" >
	<option value="Được thi">Được thi</option>
	<option value="KĐT">Không được thi</option>
</select>
</div>
</div>
<div class="clearfix"></div>
@endforeach
<!--  <div class="col-sm-3">
<label>Điểm kiểm tra</label>
<input type="text" class="form-control">
</div> -->
</div>
<!-- end row -->