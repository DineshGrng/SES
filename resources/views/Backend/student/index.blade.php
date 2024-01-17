<x-app-layout>
    <section>
        <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div>
                <span>
                    <h1>Student Details</h1>
                    {{-- {{ $students }} --}}
                </span>
               </div>
               <div>
                <a href="{{ route('student.create') }}" class="btn btn-primary btn-sm">Add New+</a>
               </div>
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>SN</th>
                        <th>name</th>
                        <th>phone</th>
                        <th>status</th>
                        <th>remarks</th>
                        <th>Created_at</th>
                        <th>update_at</th>
                        <th>Actions</th>
                    </tr>
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->id }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->phone }}</td>
                            <td></td>
                            <td>{{ $student->remarks }}</td>
                            <td>{{ $student->created_at }}</td>
                            <td>{{ $student->updated_at }}</td>
                            <td>
                                <a href="{{ route('student.edit',$student->id) }}" class="btn btn-primary btn-sm">edit</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </section>
</x-app-layout>
