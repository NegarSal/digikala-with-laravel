@extends('layouts.master')

@section('content')
    <div>


    <main>
        <!--specialoffer-->
        @include('sections.specialoffer')


        <!--Part 3-->
        @include('sections.banner1')


        <!--fresh-offers-->
        @include('sections.fresh-offers')

        <!--Part-banner1-w50--->
        @include('sections.banner1-w50')

        <!--Part-book-->
        @include('sections.book')

            <!--Part7/Icon-->
            @include('sections.blueicon')

            <!--Part-mobile-->
            @include('sections.mobile')

            <!--Part-banner1-2--->
            @include('sections.banner1-2')

            <!--Part-laundry detergent--->
            @include('sections.laundry-detergent')

            <!--Part-coffee -->
            @include('sections.coffee')

            <!--Part-banner1-2-w50-->
            @include('sections.banner1-2-w50')

            <!--Part-moisturizing-->
            @include('sections.moisturizing')

           <!--Part-watch-->
           @include('sections.watch')

           <!--Part-recent-pro-->
           @include('sections.recent-pro')

           <!--Part-lastPart-->
           @include('sections.banner2')

            <!--Part-lastPart-->
            @include('sections.brand')

    </main>


    </div>
@endsection
