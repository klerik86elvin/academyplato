<p>Ad: {{$data['name']}}</p>
<p>E-Poçt: {{$data['email']}}</p>
<p>Telefon:{{$data['phone']}}</p>
<p>Mətn: {{$data['text']}}</p>
@if(array_key_exists('file', $data))
    <p>Fail:<a href="{{$data['file']}}">Yükləmək</a></p>
@endif
