<form method="POST" action="{{ route('students.update', $student->id) }}">
    @csrf
    <input type="text" name="name" value="{{ $student->name }}">
    <input type="email" name="email" value="{{ $student->email }}">
    <button type="submit">Update</button>
</form>