<x-app-layout>
    <section>
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div>
                    <span>
                        <h1>Add New Students</h1>
                    </span>
                </div>
                <div>
                    <a href="{{ route('student.index') }}" class="btn btn-primary btn-sm">Back</a>
                </div>
            </div>
            <div class="card-body">
               <form method="post" action="{{ route('student.store') }}">
                @csrf
                    <div class="form-group">
                        <label for="name">Student Name</label>
                        <input id="name" class="form-control" type="text" name="name">
                    </div>
                    <div class="form-group">
                        <label for="phone"> Phone Number</label>
                        <input id="phone" class="form-control" type="text" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="course"> Course</label>
                        <input id="course" class="form-control" type="text" name="course">
                    </div>
                    <div class="form-group">
                        <label for="school"> School</label>
                        <input id="school" class="form-control" type="text" name="school">
                    </div>
                    <div class="form-group">
                        <label for="email"> Email <span class="text-danger">(eg.123helloworld@gmail.com)</span></label>
                        <input id="email" class="form-control" type="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="remarks">Remarks</label>
                        <textarea id="remarks" class="form-control" name="remarks" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success btn-lg">Save Records</button>
               </form>
            </div>
        </div>
    </section>
</x-app-layout>
