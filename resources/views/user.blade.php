<h1>user page {{count($data)}}</h1>

@if ($nama == "yeru")
    <h3>Halo ru</h3>
@else
    <h3>Hai teh</h3>
@endif

@foreach ($data as $item)
    <h2>{{$item}}</h2>
@endforeach

@include('innerview')

<script> 
    var data=@JSON($data);
    console.log(data);
</script>
