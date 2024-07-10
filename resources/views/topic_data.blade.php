<html>
<head>
    <x-header/>
</head>
<body>
<h1 class="text-center">{{$topic->name}}</h1>

<div class="mt-3 row">




    @foreach($topic->topic_data as $topic)
        <div class="col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="p-2">
                <div class="card">
                    <div class="player" id="player-{{$topic->id}}" data-plyr-provider="youtube" data-plyr-embed-id="bTqVqk7FSmY"></div>
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
