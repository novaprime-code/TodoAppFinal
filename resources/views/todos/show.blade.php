@include('./layouts/header');
<div class="container">



    <div class="container p-3 mt-3" style="border:2px double red;">
        <div class="row" style="border-bottom:3px double cyan">
            <h4 class="col-8">{{ $todo->name }}</h4>
            <i class="float-right col-4">
                {{ $todo->created_at->diffForHumans() }}
            </i>
        </div>
        <p class="pt-3 ">
            {{ $todo->description }}
        </p>
        {{-- <a href="/show/{{ $todo->id }}">Read more</a> --}}
        <form action="/delete/{{ $todo->id }}" method="post">
            @csrf
            <a class="btn btn-warning mx-2" href="/edit/{{ $todo->id }}">Edit</a>
            <input type="submit" value="Delete" class="btn btn-danger">
        </form>
    </div>

</div>

@include('./layouts/footer');
