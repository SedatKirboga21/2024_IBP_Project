<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        
        </h2>
    </x-slot>

    <div class="py-15 bg-lightblue">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-lightgreen ">
            <div class=" overflow-hidden shadow-sm sm:rounded-lg ">
                <div class="p-6 text-gray-600 bg-lightgreen">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h1>User List</h1>
                        <!-- Geri Dön Butonu -->
                        <a href="{{ url()->previous() }}" class="btn btn-secondary rounded-full p-4 ">Go Back</a>

                    </div>
                    <hr />

                    
                    <form action="{{ route('admin.users.search') }}" method="GET" class="mb-3">
                        <div class="row bg-lightgreen">
                            <div class="col-md-9 bg-lightgreen">
                                <input type="text" name="query" class="form-control" placeholder="Search all fields">
                            </div>
                            <div class="col-md-1 bg-lightgreen">
                                <button type="submit" class="btn btn-primary bg-lightgreen rounded-full w-20 h-10 flex items-center justify-center">Search</button>
                            </div>
                            
                        </div>
                    </form>

                  
                    <table class="table mt-3 bg-lightgreen">
                       
                        <thead>
                            
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->password }}</td>
                                    <td>
                                        <a href="{{ route('admin.users.edit', ['id' => $user->id]) }}" class="btn btn-primary btn-sm">Edit</a>
                                        <form action="{{ route('admin.users.delete', ['id' => $user->id]) }}" method="POST" style="display: inline-block; ">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">No users found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
