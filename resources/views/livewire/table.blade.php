<div>
   <!-- <h2>This is where the cards are</h2> -->


   <button wire:click="render">Deal cards</button> <!-- makes the api call and deals a deck -->

   <!-- <button onclick="hitMe()">ehkljdrelrwt</button> -->

   <livewire:board /> 

    <div class="flex flex-row flex-wrap">

        <div>
             {{ json_encode($row_1->code) }}
        </div>
        
        <div>
             @foreach ($row_2 as $card)
            {{ $card->code }}
            @endforeach 
        </div>

    </div>


 
</div>
