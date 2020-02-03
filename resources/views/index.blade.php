@extends('layout')

@section('content')
    <main class="page landing-page">
        <section class="portfolio-block block-intro">
            <div class="container">
                <div class="avatar" style="background-image:url('img/avatars/foto.jpg');"></div>
                <div class="about-me">
                    <p>@auth
                            Hoi {{ auth()->user()->name }}!
                        @else
                            Hoi!
                        @endauth
                        Mijn naam is <strong>Tareq Sahebzadah</strong> en ik ben eerstejaars HBO-ICT student aan de HZ
                        in Middelburg. </p>
                </div>
            </div>
        </section>
    </main>
@endsection

