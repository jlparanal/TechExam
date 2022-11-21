<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  {{-- @vite('resources/css/app.css') --}}
</head>
<body>
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="px-8 py-6 mx-4 mt-4 text-left bg-white shadow-lg md:w-1/3 lg:w-1/3 sm:w-1/3">
        <h3 class="text-2xl font-bold text-center">Create Your Account & Join us!</h3>
        <form method="POST" action="{{ route('postsignup') }}">
          @csrf
            <div class="mt-4">
                <div>
                    <label class="block" for="Name">Name<label>
                            <input type="text" name="name" placeholder="Name"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                            @if ($errors->has('name'))
                            <span class="text-red-600">{{ $errors->first('name') }}</span>
                            @endif
                </div>
                <div class="mt-4">
                    <label class="block" for="email">Email<label>
                            <input type="text" name="email" placeholder="Email"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                            @if ($errors->has('email'))
                              <span class="text-red-600">{{ $errors->first('email') }}</span>
                            @endif
                </div>
                <div class="mt-4">
                    <label class="block">Password<label>
                            <input type="password" name="password" placeholder="Password"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                            @if ($errors->has('password'))
                              <span class="text-red-600">{{ $errors->first('password') }}</span>
                            @endif
                </div>
                <div class="flex">
                    <button class="w-full px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900"
                    type="submit"
                    data-mdb-ripple="true"
                    data-mdb-ripple-color="light"
                    style="
                      background: linear-gradient(
                        to right,
                        #ee7724,
                        #d8363a,
                        #dd3675,
                        #b44593
                      );
                    ">Create Account
                    </button>
                </div>
                <div class="mt-6 text-grey-dark">
                    Already have an account?
                    <a class="text-blue-600 hover:underline" href="{{ route('log-in') }}">
                        Log in
                    </a>
                </div>
            </div>
        </form>
    </div>
  </body>
</html>
