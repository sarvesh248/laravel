<h1>Students</h1>

<a href="/students/create">Add Student</a>

@foreach($students as $student)
    <p>
        {{ $student->name }} - {{ $student->email }}

        <a href="{{ route('students.edit', $student->id) }}">Edit</a>
    </p>
@endforeach
<a href="{{ route('students.delete', $student->id) }}">Delete</a>