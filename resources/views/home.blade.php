<form method="POST" action="/submit">
    @csrf
    <input type="text" name="name" placeholder="Enter name">
    <button type="submit">Submit</button>
</form>

@if(isset($name))
    <h2>Hello {{ $name }}</h2>

    @if($name == "Ram")
        <p>Welcome Ram</p>
    @endif
@endif