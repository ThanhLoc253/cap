@extends('back.template.master')

@section('title', 'Quản lí danh mục tin tức')
@section('heading','Chỉnh sửa danh mục tin tức')
@section('news','active')
@section('content')
<div class="col-md-12">
        <div class="card-header">
            <a class="btn btn-block btn-danger ad_add" href="{{url('admin/news_cat/list')}}" title="Them">Quay lại</a>
        </div>
            <!-- general form elements -->
            <div class="card card-primary">
              <!-- form start -->
              <form role="form" class="form" action="{{ url('admin/news_cat/edit/'.$NewsCategory->RowID) }}" method="POST">
                <div class="card-body">
                {{ csrf_field()}}
                <div class="form-group">
                  <select  class="form-control" name="Status">
                      <option value="1" @if($NewsCategory->Status==1) selected="" @endif>
                          Trạng thái: Bật
                      </option>
                      <option value="0" @if($NewsCategory->Status==0) selected="" @endif>
                          Trạng thái: Tắt
                      </option>
                  </select>
                </div>
                
               

                <div class="form-group">
                    <label for="exampleInputHvT1">Tên trang<span class="color_red">*</span></label>
                    <input type="text" class="form-control" name="Name" value="{{$NewsCategory->Name}}">
                  </div>
                  
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Sửa</button>
                </div>
              </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
@stop