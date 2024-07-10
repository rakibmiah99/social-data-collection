<html>
    <head>
        <x-header/>
    </head>
    <body>
        <h1 class="text-center">Topics</h1>

        <div class="mt-3">
            @foreach(\App\Models\Topics::all() as $topic)
                <a href="{{route('frontend.topic.data', $topic->id)}}" class="btn m-2 btn-primary rounded-0">{{$topic->name}}</a>
            @endforeach
        </div>

    </body>
</html>
