@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <!--
        <div class="col-3 p-5">
            <img src="https://instagram.frec3-1.fna.fbcdn.net/v/t51.2885-19/s150x150/53577799_442141352992181_6086663970687549440_n.jpg?_nc_ht=instagram.frec3-1.fna.fbcdn.net&_nc_ohc=ZE5hAxvmvKAAX-_dfvf&oh=d2673190d370b6688f50003a916ac246&oe=5ED91FA6" style='border-radius: 50%;'/>
        </div>
        -->
        <a class="p-5">
            <div><h1>{{ $user->name }}</h1></div>

            <!--
            <div class="d-flex">
            <div class="pr-5"><strong>283</strong> posts</div>
            <div class="pr-5"><strong>976K</strong> followers</div>
            <div class="pr-5"><strong>232</strong> following</div>



            </div>

            <div class="pt-4"><strong>High School Student</strong></div>
            <div>I want to change the world with my projects.</div>

        </div>
-->
    <div class="row">
        <div class="col-4 p-4">
            <img src="" style="border-radius: 5px" class="w-100"/>

        </div>


    </div>
</div>
@endsection
