@extends('layouts.app')

@section('content')
<section class="overflow-hidden text-gray-700" style="height: 50vh">
    <div class="container px-5 py-2 mx-auto lg:pt-24 lg:px-32">
        <p class="font-bold text-2xl text-center">SOCIAL</p>
        <div class="flex items-center flex-wrap -m-1 md:-m-2">
            <div class="flex flex-wrap w-1/2 text-center justify-center">
                <img style="height: 64px; width: 64px" src="{{ asset('images/fb.png') }}" alt="fb">
                <a href="https://www.facebook.com/merimaslike/">Design by Merima</a>
            </div>
            <div class="flex flex-wrap w-1/2 text-center justify-center">
                <img style="height: 64px; width: 64px" src="{{ asset('images/ig.png') }}" alt="ig">
                <a href="https://www.instagram.com/design.by.merima/">design.by.merima</a>
            </div>
            <div class="flex flex-wrap w-1/2 text-center justify-center mt-10">
                <img style="height: 64px; width: 64px" src="{{ asset('images/mail.png') }}" alt="ig">
                <a href="mailto:">test@mail.com</a>
            </div>
        </div>
    </div>
</section>
        


    

@endsection