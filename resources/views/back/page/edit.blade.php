@extends('back.template.master')
@section('title', 'Quản Lý Trang')
@section('heading','Chỉnh Sửa Trang')
@section('page', 'active')
@section('content')
<div class="col-md-12">
        <div class="card-header">
        <a class="btn btn-block btn-danger ad_add" href="{{url('admin/page/list')}}" title="Them">Quay Lại</a>
        </div>
            <div class="card card-primary">
              <!-- form start -->
              <form role="form" class="form" action="{{ url('admin/page/edit/' .$Page->RowID) }}" method="POST">
                <div class="card-body">
                {{ csrf_field()}}
                <div class="form-group">
                   <select  class="form-control" name='Status'>
                        <option value="1" @if($Page->Status == 1) selected="" @endif>
                            Trạng Thái: Bật
                        </option>
                        <option value="2" @if($Page->Status == 2) selected="" @endif>
                            Trạng Thái: Có
                        </option> 
                   </select>
                  </div>
                <div class="form-group">
                    <label for="exampleInputHvT1">Tên Trang<span class="color_red">*</span></label>
                    <input type="text" class="form-control" name="Name" value="{{$Page->Name}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Font <span class="color_red">*</span></label>
                    <input type="text" class="form-control" name="Font" value="{{$Page->Font}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputSdt1">Sắp Xếp<span class="color_red">*</span></label>
                    <input type="number" class="form-control" name="Sort" value="{{$Page->Sort}}">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Chỉnh Sửa</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
@stop