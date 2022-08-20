@extends('master')

@section('title', 'User Card')

@section('content')

<div id="wrapper">
    <section id="main">
        <header>
            <span class="avatar"><img src="images/users/{{$user->id}}.jpg" alt="" /></span>
            <h1>{{$user->name}}</h1>
            <p>{{$user->comments}}</p>
        </header>
    </section>
    <footer id="footer">
        <ul class="copyright">
            <li>&copy; Pictureworks</li>
        </ul>
    </footer>
</div>

@endsection('content')