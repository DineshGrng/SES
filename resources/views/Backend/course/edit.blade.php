<x-app-layout>
   <div class="card">
    <div class="card-header d-flex justify-content-between">
        <div>
           <h1>
            Edit Course
           </h1>
        </div>
        <div>
            <a href="{{ route('course.index') }}" class="btn btn-sm btn-primary">back</a>
        </div>
    </div>
    <div class="card-body">
        <form  method="post" action="{{ route('course.update',$course->id) }}">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="name">Course Name</label>
                <input id="name" class="form-control" type="text" name="name" value="{{ $course->name }}">
               </div>
               <button type="submit" class="btn btn-lg btn-success">Save Records</button>
            </div>
    </div>
   </div>
</x-app-layout>
