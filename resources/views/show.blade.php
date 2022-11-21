@extends('admin')

@section('content')
    <div class="w-full h-full p-4 m-8 overflow-y-auto">
      <div class="flex items-center justify-start">
          <h1 class="font-serif text-3xl font-bold underline decoration-gray-400"> User Management</h1>
      </div>
      <div class="flex justify-end mb-10">
          <button type="button" class="focus:outline-none openModal text-white text-sm py-2.5 px-5 mt-5 mx-20 w-32  rounded-md bg-green-500 hover:bg-green-600 hover:shadow-lg">
              ADD
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
                  <td class="text-sm font-medium leading-5 whitespace-no-wrap border-b border-gray-200 ">
                      <button class="btn btn-success modalOpen" href="#get{{ $user->id }}">
                          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-indigo-600 hover:text-indigo-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                          </svg>Edit
                      </button>
                      @include('action')
                  </td>
                  <td class="text-sm font-medium leading-5 whitespace-no-wrap border-b border-gray-200 ">
                      <button class="btn btn-success modalOpenOpen" href="#delete">
                          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-600 hover:text-red-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                          </svg>Delete
                      </button>
                      @include('delete')
                  </td>
              </tr>
              @endforeach
          </tbody>
        </div>
    </div>
@endsection
