<html>
<head>
    <x-header/>
</head>
<body>
<h1 class="text-center">{{$topic->name}}</h1>

<div class="mt-3 row">


    {{--<div class="plyr__video-embed" id="player">
        <iframe
            src="https://www.youtube.com/embed/_cvZXVmEZ3M?si=mp-rao2M0nX5Etk-&amp"
            allowfullscreen
            allowtransparency
            allow="autoplay"
        ></iframe>
    </div>--}}

    @foreach(/*$topic->topic_data*/ [
    (object)['id' => 1, 'emb_id' => '_cvZXVmEZ3M'],
    (object)['id' => 2, 'emb_id' => '1hEjlr3Vs-o'],
    (object)['id' => 3, 'emb_id' => 'Lpu666ClDCk'],
] as $topic)
        <div class="col-12 col-lg-6 col-xl-3">
            <div class="p-2">
                <div class="card">
                    <div class="player" id="player-{{$topic->id}}" data-plyr-provider="youtube" data-plyr-embed-id="{{$topic->emb_id}}"></div>
                </div>
            </div>
        </div>
    @endforeach
</div>

<script>
    for(let i = 0; i < $('.player').length ; i++){
        let el = $('.player').eq(i);
        new Plyr('#'+el.attr('id'))
    }
</script>
</body>
</html>
