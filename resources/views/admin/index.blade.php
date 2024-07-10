<html>
    <head>
        <x-header/>
    </head>
    <body class="p-2">
        <h1 class="text-center p-2">Admin</h1>
        <a href="{{route('admin.topic')}}" class="btn btn-success">Topic</a>
        <a href="{{route('admin.topic.data')}}" class="btn btn-success">Topic-Data</a>

        <div class="mt-3">
            <form action="{{route('admin.topic.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label class="form-label">Topic Name</label>
                    <input class="form-control" name="name">
                </div>

                <input type="submit" value="Save" class="btn btn-success mt-2 w-100">
            </form>
        </div>

        <table class="table table-success table-bordered table-hover">
            <thead>
                <td>Sl</td>
                <td>Name</td>
                <td>Action</td>
            </thead>
            <tbody>
                @foreach(\App\Models\Topics::all() as $key=>$topic)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$topic->name}}</td>
                        <td></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>
