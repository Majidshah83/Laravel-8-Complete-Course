<h1>Php in Js</h1>
@foreach($data as $data)
<h3>{{$data}}</h3>
@endforeach

<Script>
var data=@json($data);
console.log("data",data);
</script>