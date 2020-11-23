@extends('front.template.master')
@section('title', 'Bản Đồ')
@section('$maps->Alias','active')
@section('content')
    <link rel="stylesheet" href="{{url('public/assets/css/news.css')}}">
    <link rel="stylesheet" href="{{url('public/assets/css/style.css')}}">
<style>
    .marker {
        background-image: url('/public/homepage/img/warning.png');
        background-repeat: no-repeat;
        background-size: 100%;
        width: 3rem;
        height: 5rem;
        cursor: pointer;
    }
    
    #map {
        margin-left: 24%;
        width: 75%;
        top: 100px;
        border: 2px solid red;
        border-radius: 25px;
    }
    
    .ad-search {
        width: 45px;
        height: 45px;
        margin-top: 3rem;
        border: 2px solid #E54646;
        border-radius: 15px;
    }
    
    .form-option {
        margin-left: -4rem;
        height: 45px;
        margin-right: 10px;
        font-size: 1.6rem;
        margin-top: 3rem;
        border: 2px solid #E54646;
        border-radius: 15px;
    }
    ::-webkit-scrollbar {
     width: 2px;
     background: white;
    }
    ::-webkit-scrollbar-thumb {
     background-color: #E54646;
    }
    
    .panel {
        width: 150%;
        font-size: 16px;
        height: 42.5rem;
        margin-top: 5rem;
        border: 1px solid transparent;
        border-radius: 4px;
        box-shadow: 1px 1px 1px 2px red;
        overflow-y: scroll;
    }
    
    .panel-title {
        font-size: 40px;
    }
    
    .no-padding {
        padding: 0px;
    }
    
    .container,
    .container-fluid {
        padding-left: 0px;
        padding-right: 0px;
    }
    
    .filter-gmaps {
        position: absolute;

        margin: 69px;
        /*width: 100px;*/
    }
    
    .summary-gmaps {
        position: absolute;
 
        margin-top: 121px;
        margin-left: 10px;
        width: 199px;
    }
    
    .form-inline {
        display: flex;
    }
</style>
<div class="filter-gmaps">
    <form action="" method="GET" role="form" class="form-inline">
        <div class="form-group" placeholder="Bệnh Nhân">
            <select class="form-control form-option" name="patient_id">
                <option>Chọn Mã Bệnh Nhân</option>
                @if(isset($Patient) && count($Patient) > 0)
                @foreach($Patient as $k => $v)
                <option value="{{$v->RowID}}" >{{$v->fullname}} </option>
                @endforeach
                @endif
            </select>
        </div>
        <button type="submit" class="btn btn-default ad-search"><i class="fa fa-search"></i></button>
    </form>
</div>
<div class="summary-gmaps">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Thông Tin</h3>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Mã</th>
                    <th class="text_align_center">Số Lần Di Chuyển</th>
                </tr>
            </thead>
            <tbody>
                <?php $jml=0; ?> @foreach($patientCount as $cc)

                <tr>
                    <td>{{$cc->fullname}}</td>
                    <td class="text_align_center">{{$cc->jml}}</td>
                </tr>
                <?php $jml+=$cc->jml; ?> @endforeach
            </tbody>
        </table>
    </div>
</div>
<div id="map"></div>
@section('script')
<script>
    mapboxgl.accessToken = 'pk.eyJ1Ijoic2tpcHBlcmhvYSIsImEiOiJjazE2MjNqMjkxMTljM2luejl0aGRyOTAxIn0.Wyvywisw6bsheh7wJZcq3Q';
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [108.202242, 16.053270], //lng,lat 10.818746, 106.629179
        zoom: 11
    });
   // @foreach($dataMap as $d)

    var el = document.createElement('div');
    el.className = 'marker';

    //gắn marker đó tại vị trí tọa độ
    new mapboxgl.Marker(el)
        .setLngLat(['{{$d->lng}}', '{{$d->lat}}'])

    .setPopup(new mapboxgl.Popup({
                offset: 25
            })
            .setHTML('<h5>Tên: ' + '{{$d->title}}' + '</h5><p> Địa Chỉ: ' + '{{$d->DiaChi}}' + '</p>'+ 
            '<p> Thời gian: '+ '{{$d->ThoiGian}}'+ '</p>'+'<p>Lộ Trình di chuyển: '+'{{$d->description}}'+'</p>'))
        .addTo(map);
    //@endforeach
</script>
@endsection 
@stop