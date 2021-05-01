@extends('layouts.frontend')

@section('content')
    <div>
        <x-header/>
        <x-slider/>

    <main>
        <!--specialoffer-->
            <x-specialoffer/>

        <!--Part 3-->
            <x-banner1/>

        <!--fresh-offers-->
            <x-fresh-offers/>

        <!--Part-banner1-w50--->
           <x-banner1-w50/>

        <!--Part-book-->
           <x-book/>

        <article class="box container">
            <!--Part7/Icon-->
               <x-blueicon/>

            <!--Part-mobile-->
              <x-mobile/>

            <!--Part-banner1-2--->
               <x-banner1-2/>
            <!--Part-laundry detergent--->
               <x-laundry-detergent/>

            <!--Part-coffee -->
               <x-coffee/>

            <!--Part-banner1-2-w50-->
               <x-banner1-2-w50/>

            <!--Part-moisturizing-->
                <x-moisturizing/>

           <!--Part-watch-->
                <x-watch/>

           <!--Part-recent-pro-->
                <x-recent-pro/>


        </article>


    </main>



        <x-footer/>
    </div>
@endsection
