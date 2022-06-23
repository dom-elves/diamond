<div>
   <!-- <h2>This is where the cards are</h2> -->


   <button wire:click="render">Deal cards</button> <!-- makes the api call and deals a deck -->

   <!-- <button onclick="hitMe()">ehkljdrelrwt</button> -->

    <div class="flex flex-row flex-wrap">
        
        @foreach ($deck as $card)
            
            @if ( $card->suit == "SPADES" )

                <div class="m-2 h-40 w-32 border-2">

                    <span class=" h-40 w-32 z-10 absolute bg-cyan-400 flex items-center justify-center text-3xl" id="back{{ $card->code}}">?</span>

                    <span onclick="hitFront()" class="border-black border-2 h-40 w-32 z-0 absolute" id="front{{ $card->code}}">{{ $card->code }}</span>

                </div>

            @endif

            @if ( $card->suit == "CLUBS" )

                <div class="m-2 h-40 w-32 border-2">

                    <span class=" h-40 w-32 z-10 absolute bg-cyan-400 flex items-center justify-center text-3xl" id="back{{ $card->code}}">?</span>

                    <span onclick="hitFront()" class="border-black border-2 h-40 w-32 z-0 absolute" id="front{{ $card->code}}">{{ $card->code }}</span>

                </div>

            @endif

            @if ( $card->suit == "HEARTS" )

                <div class="m-2 h-40 w-32 border-2">

                    <span class=" h-40 w-32 z-10 absolute bg-cyan-400 flex items-center justify-center text-3xl" id="back{{ $card->code}}">?</span>

                    <span onclick="hitFront()" class="border-black border-2 h-40 w-32 z-0 absolute" id="front{{ $card->code}}">{{ $card->code }}</span>

                </div>

            @endif

            @if ( $card->suit == "DIAMONDS" )

                <div class="m-2 h-40 w-32 border-2">

                    <span class=" h-40 w-32 z-10 absolute bg-cyan-400 flex items-center justify-center text-3xl" id="back{{ $card->code}}">?</span>

                    <span onclick="hitFront()" class="border-black border-2 h-40 w-32 z-0 absolute" id="front{{ $card->code}}">{{ $card->code }}</span>

                </div>

            @endif

            <!--
            @if ( $card->suit == "HEARTS" )

            <div class="m-2 border-red-500 border-2 h-40 w-32">

                <p>{{ $card->code }}</p>

            </div>

            @endif

            @if ( $card->suit == "DIAMONDS" )

            <div class="m-2 border-red-500 border-2 h-40 w-32">

                <p>{{ $card->code }}</p>

            </div>

            @endif -->


             <!-- @if ( $card->suit == "CLUBS" )

                <div class="m-2 border-black border-2 h-full w-full" style="background-image:url(' {{ $card->image }} '); background-size:contain;">

                    
                    
                </div>

            @endif -->

        @endforeach

    </div>

    <!-- @if ($burn == [])
        <p>No cards have been used</p>
    @endif -->
 
</div>
