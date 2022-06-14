@include('./layouts/header');
<div class="container">
    <div class="container p-3" style="margin-top:5px;border:3px double cyan">
        <h1>Add new todo</h1>
        <form class="form-control p-4" action="/edit/{{ $todo->id }}" method="post">
            @csrf

            <div class="row">
                <strong class="col-3">

                    Title :
                </strong>
                <input class="col-9" type="text" name="title" placeholder="{{ $todo->name }}">
                @if ($errors->has('title'))
                    <span class="text-danger offset-3">* {{ $errors->first('title') }}</span>
                @endif

            </div>
            <div class="row mt-2">
                <strong class="col-3 align-middle">

                    Description
                </strong>
                <textarea class=" col-9" name="description" id="" cols="60" rows="5"
                    placeholder="{{ $todo->description }}"></textarea>
                @if ($errors->has('title'))
                    <span class="text-danger offset-3">* {{ $errors->first('title') }}</span>
                @endif

            </div>
            <input class="offset-6 col-3 btn btn-primary mt-2" type="submit" value="Add">
        </form>
    </div>
    @include('./layouts/footer')
