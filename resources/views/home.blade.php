<head>
    @livewireStyles
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
<!-- <button onClick="hitMe()">outside of components - in blade file </button> -->

    <div>

        <livewire:counter /> 

    </div>

    <div>

        <livewire:table /> 

        

    </div>

    

    <script>

        function hitBack() {
            console.log('back?');

            
        }

        function hitFront() {
            console.log('front');
        }

        //listens to whole document (maybe reduce this later)
        // document.addEventListener('click', function(e) {
        //     //the event
        //     var event = window.event;
        //     //where is clicked
        //     var target = event.target;  

        //     target.style.visibility = "hidden";
        //     console.log(target);
        //     this messes up and will eventually remove all elements
        //     maybe add sometrhing for highlighting a card then a separate button to select to remove(make invisible) it
        //     create a separate 'used' card area
        //     add array of JUST ids from controller and loop through them with a condition to not render a card if an element with that ID exists? should stop duplicates
        //     then when a card is selected/removed, that element won't exist, loop will render new "faceup" card - in the middle?
        //     also try and figure out how to actually get the cards in a circle

        //     alternatively, separate controllers for facedown and faceup cards
        //     look into livewire more to see if/how this is possible
        // });

    </script>

    @livewireScripts
</body>
</html>