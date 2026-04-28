<form method="POST" action="{{ route('students.store') }}">
    @csrf
    <input type="text" name="name" placeholder="Name">
    <input type="email" name="email" placeholder="Email">
    <button type="submit">Save</button>
</form>