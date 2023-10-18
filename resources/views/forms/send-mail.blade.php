@extends('layouts.app')
@section('title', __('messages.service'))
@section('content')
    <div class="outer">
        <div class="inner">
            <div class="breadcrumb">
                {{ Breadcrumbs::render('career') }}
            </div>
            <div class="d-flex justify-content-center my-4">
                <img src="{{asset('img/mail.svg')}}" alt="" style="width: 73px;background: linear-gradient(180deg, #FFFFFF -2.72%, #82CAE0 96%);
    border-radius: 50%;">
            </div>
            <div class="flex flex-col items-center">
                <img src="{{asset('img/main/6.svg')}}" alt="">
                <div class="text-dark font-30">
                    {{__('Send E-mail')}}
                </div>
                <div class="separator my-30"></div>
            </div>
            <p>
                {{__('messages.mail-form-text')}}
            </p>
            <div class="separator mx-auto"></div>
            <form action="{{route('post-mail')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mail-form">
                    <div class="my-30 info-input">
                        <div>
                            <input class="border-blue @error('email') is-invalid @enderror" type="text" name="email" value="{{old('email')}}" placeholder="{{__('E-mail')}}">
                            @error('email')
                            <p class="invalid-feedback">{{$message}}</p>
                            @enderror
                        </div>
                        <div>
                            <input class="border-blue @error('name') is-invalid @enderror" type="text" name="name" value="{{old('name')}}" placeholder="{{__('Ad / Soyad')}}">
                            @error('name')
                            <p class="invalid-feedback">{{$message}}</p>
                            @enderror
                        </div>
                        <div>
                            <select class="border-blue m" name="type" id="type-selector">
                                @foreach($mailTypes as $m)
                                    <option value="{{$m->name}}">{{$m->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <input class="border-blue  @error('phone') is-invalid @enderror" type="text" name="phone" value="{{old('phone')}}" placeholder="{{__('Mobile number')}}">
                            @error('phone')
                            <p class="invalid-feedback">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="mail-type">
                        @foreach($mailTypes as $m)
                            <div class="item">
                            <a href="" class="">
                                <span class="img" style="--bg:url({{'/storage/'.str_replace('\\','/',json_decode($m->icon)[0]->download_link)}});"></span>
                                <span class="img-active" style="--bg-active:url({{'/storage/'.str_replace('\\','/',json_decode($m->active_icon)[0]->download_link)}});"></span>
                                <span class="type-name text-center text-blue">{{$m->name}}</span>
                            </a>
                        </div>
                        @endforeach
                    </div>
                    <div class="separator mx-auto my-30"></div>
                    <div>
                        <textarea name="text" id="" rows="10">{{old('text')}}</textarea>
                    </div>
                    <div class="form-buttons my-30">
                        <button class="send-button" type="submit">{{__('Send E-mail')}}</button>
                        <div class="file-upload">
                            <input type="file" name="file">
                            <button type="button">{{__('Upload File')}}</button>
                        </div>
                    </div>
                    @if(session()->has('success'))
                        <div class="alert alert-success text-center" role="alert">
                            {{session()->get('success')}}
                        </div>
                    @endif
                </div>
            </form>
            <div class="form-footer">
                <div>
                    <img src="{{asset('img/warning.svg')}}" alt="">
                </div>
                <div class="">
                    <p>{{__("Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.")}}</p>
                    <div class="flex bottom-block">
                        <select name="mail" id="select-mail">
                            <option value="Choose branch">{{__('Choose branch')}}</option>
                        </select>
                        <button id="copy-mail-button" type="button">{{__('Copy E-mail')}}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script>
    document.addEventListener('DOMContentLoaded', () =>{
        document.querySelectorAll('.mail-type .item a').forEach((value, key) => {
            value.addEventListener('click', (e) => {
                document.querySelectorAll('.mail-type .item.active').forEach((value,key) => {
                    value.classList.remove('active');
                })
                e.preventDefault();
                value.parentElement.classList.add('active');
                document.querySelector('#type-selector').value = value.querySelector('.type-name').innerHTML
            })
        })
        const button = document.querySelector('#copy-mail-button');
        button.addEventListener('click', () => {
            const storage = document.createElement('textarea');
            const select = document.querySelector('#select-mail')
            console.log(select.value)
            storage.value = select.value;
            select.appendChild(storage);
            storage.select();
            storage.setSelectionRange(0, 99999);
            document.execCommand("copy");
            button.innerHTML = 'Copied'
            select.removeChild(storage);
        })
    })
</script>
