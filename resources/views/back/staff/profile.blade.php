@extends('back.template.master')

@section('title', 'Thông Tin Tài Khoản')
@section('heading','Thông Tin Tài Khoản')
@section('content')
<div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <!-- form start -->
              <form role="form" class="form" action="{{ url('admin/staff/profile') }}" method="POST">
                <div class="card-body">
                {{ csrf_field()}}
                <input type="hidden" name="id" value="{{Auth::user()->id}}">
                <div class="form-group">
                    <label for="exampleInputHvT1">Họ và Tên <span class="color_red">*</span></label>
                    <input type="text" class="form-control" name="fullname" value="{{Auth::user()->fullname}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email <span class="color_red">*</span></label>
                    <input type="email" class="form-control" name="email" value="{{Auth::user()->email}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputSdt1">Số Điện Thoại <span class="color_red">*</span></label>
                    <input type="text" class="form-control" name="phone" value="{{Auth::user()->phone}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputDC1">Địa Chỉ <span class="color_red">*</span></label>
                    <input type="text" class="form-control" name="address" value="{{Auth::user()->address}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tài Khoản <span class="color_red">*</span></label>
                    <input type="text" class="form-control" name="username" value="{{Auth::user()->username}}" disabled="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Mật Khẩu <span class="color_red">*</span></label>
                    <input type="password" class="form-control" name="password">
                    <p class="ad_note_password">Để trống trường này nếu không muốn thay đổi mật khẩu...</p>
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