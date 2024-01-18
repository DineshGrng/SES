<x-app-layout>
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div>
                <h1>
                    Course Detail's
                </h1>
            </div>
            <div>
                <a href="{{ route('course.create') }}" class="btn btn-sm btn-primary">Add course</a>
            </div>
        </div>
        <div class="card-body">
           <table class="table">
            <tr>
                <th>Sn</th>
                <th>Course Name</th>
                <th>Action</th>
            </tr>
            @foreach ($courses as $course)
            <tr>
                <td>{{ $course->id }}</td>
                <td>{{ $course->name }}</td>
                <td>
                    <a href="{{ route('course.edit',$course->id) }}" class="btn btn-sm btn-primary">edit</a>
                </td>
            </tr>


            @endforeach
           </table>
        </div>
    </div>
</x-app-layout>
