@include('./layouts/header');
<div class="container">

    <h1 id="test">List of Todos</h1>
    @foreach ($todos as $todo)
        <div class="container p-3 mt-3" style="border:2px double red;">
            <div class="row" style="border-bottom:3px double cyan">

                <h4>{{ $todo->name }}</h4>
            </div>
            <i>
                {{ $todo->created_at->diffForHumans() }}
            </i>
            {{-- <a href="/show/{{ $todo->id }}">Read more</a> --}}
            <form action="/delete/{{ $todo->id }}" method="post">
                @csrf
                <a class="btn btn-primary " href="/show/{{ $todo->id }}">Read more</a>
                <a class="btn btn-warning mx-2" href="/edit/{{ $todo->id }}">Edit</a>
                <input type="submit" value="Delete" class="btn btn-danger">
            </form>
        </div>
    @endforeach
    <div class="container mt-4 bg-secondary text-light" style="border:2px double green">
        {{-- {{ App\Http\Controllers\TodoController@update }} --}}
        Number Task Incomplete : {{ $count }}
    </div>
</div>

@include('./layouts/footer');
