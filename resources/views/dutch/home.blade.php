@extends('welcome')

@section('title')
    Home
@endsection

@section('homeactive')
    active
@endsection

@section('link')
    \engelseHome
@endsection

@section('content')
<p style="width: 23rem;
font-size: 1.5vw;">
    Ik ben Annelieke van der Kwast en ben 19 jaar oud.
    <br><br>
    Ik ben geboren op 18 september 2002 in Deventer. Ik doe nu eerste jaar software development en heb als droom later games te gaan ontwikkelen.
    <br><br>
    Voor de rest vindt ik het leuk om dingen met planten te doen.
</p>



@endsection

@section('footer')

<div style="width: 100vw;
height: 20vh;
background: #358F80;
margin: 0;
left: 0;
position: absolute;
bottom: -15vh;">
    <div>
    <img src="pictures/twitch.png" class="socials">
    <img src="pictures/youtube.png"  class="socials">
    <img src="pictures/insta.png"  class="socials">
    <img src="pictures/discord.png"  class="socials">
    </div>
</div>
<div style="width: 10vw;
height: 50vh;
background: #358f80;
position: absolute;
right: 8vw;
bottom: 5rem;">
</div>
<img src="pictures/ikHome.png" style="position: absolute;
right: 0;
width: 30vw;
bottom: -10vh;
margin-right: 4vw;
border-radius: 20px;z-index: 5;">
@endsection
