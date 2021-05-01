@extends('layouts.frontend')

@section('content')
    <div>
        <x-header/>
        <x-slider/>

    <main>
        <!--specialoffer-->
          <article class="specialoffer">
            <x-specialoffer/>
          </article>
        <!--specialoffer-->

        <!--Part 3-->
          <article class="banner1">
            <x-banner1/>
          </article>
        <!--End Part3-->

    </main>



        <x-footer/>
    </div>
@endsection
