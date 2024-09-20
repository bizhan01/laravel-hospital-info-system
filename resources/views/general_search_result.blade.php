@if(isset($hospitals))
    @if(count($hospitals) > 0)
        @foreach($hospitals as $key => $hospital)
            <a href="{{url('hospitalIndex').'/'.$hospital->id.'?id='.$hospital->id}}">
                <h5>{{ $hospital->full_name }}</h5>
                <code>{{ $hospital->address }}</code>
            </a>
            <br><br>
        @endforeach
    @else
        <div class="alert alert-warning">جستجو نتیجه یی نداشت</div>
    @endif  
@endif            

@if(isset($doctors))
    @if(count($doctors) > 0) 
        @foreach($doctors as $key => $doctor)
            <a href="{{url('hospitalIndex').'/'.$doctor->id.'?id='.$doctor->id}}">
                <h5>{{ $doctor->full_name }}</h5>
                <code>{{ $doctor->hName }}</code>
            </a>
            <br><br>
        @endforeach
    @else
        <div class="alert alert-warning">جستجو نتیجه یی نداشت</div>
    @endif
@endif

@if(isset($services))
    @if(count($services) > 0)
        @foreach($services as $service)
            <a href="{{url('hospitalIndex').'/'.$service->id.'?id='.$service->id}}">
                <h5>{{ $service->name }}</h5>
                <code>{{ $service->hName }}</code>
            </a>
            <br><br>
        @endforeach
    @else
        <div class="alert alert-warning">جستجو نتیجه یی نداشت</div>
    @endif
@endif
