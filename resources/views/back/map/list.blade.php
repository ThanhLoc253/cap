@extends('back.template.master')
@section('title', 'List Information')
@section('heading','List Information')
@section('content')
<div class="col-md-12">
    <!-- general form elements -->
    <div class="card">
        <div class="card-header">
        <a class="btn btn-block btn-primary ad_add" href="{{url('admin/map/add')}}" title="Them">Thêm</a>
        </div>
        <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="text_align_center">STT</th>
                        <th>Patient_ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Lng</th>
                        <th>Lat</th>
                        <th class="text_align_center"><i class="fas fa-user-cog"></i></th>
                    </tr>
                </thead>
                <tbody>
                    @if(isset($Boxmap) && count($Boxmap) > 0)
                    @foreach($Boxmap as $k => $v)
                    <tr>
                        <td class="text_align_center">{{$k+1}}</td>
                        <td>{{$v->fullname}}</td>
                        <td>{{$v->title}}</td> 
                        <td>{{$v->description}}</td>
                        <td>{{$v->lng}}</td>
                        <td>{{$v->lat}}</td>
                        <td class="text_align_center">
                            <a href="{{url('admin/map/edit/'.$v->id)}}" title="Chỉnh Sửa" class="ad_button">
                            <i class="fas fa-user-edit"></i>
                            </a>
                            <a href="{{url('admin/map/delete/'.$v->id)}}" title="Xóa" class="ad_button ad_button_delete">
                            <i class="fas fa-user-minus"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop