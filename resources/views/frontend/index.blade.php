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
        <!--Part3-->

        <!--fresh-offers-->
            <x-fresh-offers/>
        <!--fresh-offers-->

        <!--Part 5-->
           <x-banner1-w50/>
        <!--Part 5-->




    </main>



        <x-footer/>
    </div>
@endsection
