@extends('role')

@section('content')
<div class="container">
  <div class="w-full h-full p-4 m-8 overflow-y-auto">
    <div class="flex items-center justify-start">
        <h1 class="font-serif text-3xl font-bold underline decoration-gray-400"> Role Management</h1>
    </div>
    <div class="flex justify-end mb-10">
        <button type="button" class="focus:outline-none text-white text-sm py-2.5 px-5 mt-5 mx-20 w-32  rounded-md bg-green-500 hover:bg-green-600 hover:shadow-lg">
            Create Permission
        </button>
        <button type="button" class="focus:outline-none text-white text-sm py-2.5 px-5 mt-5 mx-20 w-32  rounded-md bg-green-500 hover:bg-green-600 hover:shadow-lg">
            Permission
        </button>
    </div>
    <div class="mr-10">
    <table class="min-w-full">
        <thead>
            <tr>
                <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                    ID</th>
                <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                    NAME</th>
                <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                    EMAIL</th>
                <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                    STATUS</th>
                <th class="px-6 py-3 text-sm text-left text-gray-500 border-b border-gray-200 bg-gray-50" colspan="3">
                    Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>

                <td>
                  @if ($user->status == '0')
                      <label class="badge btn btn-primary">USER</label>
                    @elseif ($user->status == '1')
                      <label class="badge btn btn-primary">ADMIN</label>
                      @else
                        <label class="badge btn btn-primary">NONE</label>

                  @endif
                </td>

                <td class="text-sm font-medium leading-5 whitespace-no-wrap border-b border-gray-200 ">
                    <button class="btn btn-success modalOpenOpen" href="#role{{ $user->status }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-600 hover:text-blue-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>Role
                    </button>
                    @include('editRole')
                </td>
            </tr>
            @endforeach
        </tbody>
      </div>
  </div>
</div>
@endsection
