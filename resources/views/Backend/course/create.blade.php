<x-app-layout>
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div>
                <h1>Create new Course</h1>
            </div>
            <div>
                <a href="{{ route('course.index') }} " class="btn btn-sm btn-primary ">back</a>
            </div>
        </div>
        <div class="card-body">
           <form action="{{ route('course.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Course Name</label>
                <input id="name" class="form-control" type="text" name="name">
               </div>
               <button type="submit" class="btn btn-lg btn-success">Save Records</button>
            </div>
           </form>
    </div>
</x-app-layout>
