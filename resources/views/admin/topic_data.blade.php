<html>
<head>
    <x-header/>
</head>
<body class="p-2">
<h1 class="text-center p-2">Admin</h1>
<a href="{{route('admin.topic')}}" class="btn btn-success">Topic</a>
<a href="{{route('admin.topic.data')}}" class="btn btn-success">Topic-Data</a>

<div class="mt-3">
    <form action="{{route('admin.topic.data.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label class="form-label">Topic</label>
            <select required name="topic_id" class="form-control">
                <option class="">Select One</option>
                @foreach(\App\Models\Topics::all() as $topic)
                    <option value="{{$topic->id}}">{{$topic->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mt-2">
            <label class="form-label">Title</label>
            <input required class="form-control" name="title">
        </div>
        <div class="form-group mt-2">
            <label class="form-label">link</label>
            <textarea required class="form-control" name="link"></textarea>
        </div>
        <input type="submit" value="Save" class="btn btn-success mt-2 w-100">
    </form>


    <table class="table table-success table-bordered table-hover">
        <thead>
        <td>Sl</td>
        <td>Name</td>
        <td>Action</td>
        </thead>
        <tbody>
        @foreach(\App\Models\TopicData::orderBy('id', 'desc')->get() as $key=>$topic_data)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$topic_data->title}}</td>
                <td></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
