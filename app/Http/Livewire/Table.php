<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Table extends Component
{
    public $public_deck = [1,2,3];

    public function render()
    {   
        //inital request
        $response = Http::get('https://deckofcardsapi.com/api/deck/new/shuffle/?deck_count=1');

        $deck = json_decode($response->body());
        //making sure this sticks with the same deck, creates a deck ID that can be used to draw cards
        $unique_deck = $deck->deck_id;

        //base uri for next request
        $base = 'https://deckofcardsapi.com/api/deck/';

        $draw = '/draw/?count=52';

        //built new uri with unique deck
        $all_cards = $base . $unique_deck . $draw;

        
        //rebuilding the query
        $response = Http::get($all_cards);

        //cards finally accessible in get request, does appear to randomise on refresh
        $deck = json_decode($response->body());

        //getting the cards actually out of the deck because the api is weird/removes uneccessary stuff
        $deck = $deck->cards;
        
        //API creates 10s as 0 e.g. 0H instead of 10h, loop through each card to replace 0s with 10s
        foreach ($deck as $card) {
            
            //get the code
            $code = $card->code;

            //remove last character, the suit 
            $suit = substr($code, -1);
            
            //check if the code contains a 0 (no others do)
            if (str_contains( $code, '0')) {

                //new card code using suit 
                $card->code = '10' . $suit;        
            } 
        }
        // var_dump($deck[51], $deck[50], $deck[49]);

        //array_slice to get positions ; array_slice($deck, offset(negative number starts at the end), amount of cards to return)
        $row_1 = $deck[0];

        $row_2 = array_slice($deck, 1, 2);

        $row_3 = array_slice($deck, 2, 3);

        $row_3 = array_slice($deck, 3, 4);

        $row_4 = array_slice($deck, 4, 5);

        $row_5 = array_slice($deck, 5, 6);

        $row_6 = array_slice($deck, 6, 7);

        $row_7 = array_slice($deck, 7, 8);

        $row_8 = array_slice($deck, -17, 6);

        $row_9 = array_slice($deck, -12, 5);

        $row_10 = array_slice($deck, -8, 4);

        $row_11 = array_slice($deck, -5, 3);

        $row_12 = array_slice($deck, -3, 2);

        $row_13 = array_slice($deck, -1, 1);

        return view('livewire.table')->with(['row_1' => $row_1,
                                             'row_2' => $row_2,
                                             'row3' => $row_3,
                                             'row4' => $row_4,
                                             'row5' => $row_5,
                                             'row6' => $row_6,
                                             'row7' => $row_7,
                                             'row8' => $row_8,
                                             'row9' => $row_9,
                                             'row10' => $row_10,
                                             'row11' => $row_11,
                                             'row12' => $row_12,
                                             'row13' => $row_13,
         ]);
    }

    public function draw()
    {
        dd($this->public_deck);
    }

    public function show()
    {
        dd('test');
    }
}
