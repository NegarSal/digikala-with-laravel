@extends('layouts.frontend')

@section('content')
    <div>
        <x-header/>
        <x-slider/>

    <main>
        <!--specialoffer-->
            <x-specialoffer/>
        <!--specialoffer-->

        <!--Part 3-->
            <x-banner1/>
        <!--End Part3-->

        <!--fresh-offers-->
        <x-fresh-offers/>
        <!--fresh-offers-->




    </main>



        <x-footer/>
    </div>
@endsection
