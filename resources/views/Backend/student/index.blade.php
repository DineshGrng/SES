<x-app-layout>
    <section>
        <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div>
                <span>
                    <h1>Student Details</h1>
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
                        <th>Actions</th>
                    </tr>
                </table>
            </div>
        </div>
    </section>
</x-app-layout>
