<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="bg-sky-100 flex justify-center items-center h-screen">
        <!-- Left: Image -->
        <div class="w-1/2 h-screen hidden lg:block">
            <img src="{{ asset('img/admin_login.avif') }}" alt="Login Image" class="object-cover w-full h-full">
        </div>
        
        <!-- Right: Login Form -->
        <div class="lg:p-36 md:p-52 sm:p-20 p-8 w-full lg:w-1/2">
            <h1 class="text-2xl font-semibold mb-4">Admin Login</h1>
            <form method="POST" action="{{ route('admin.login.submit') }}">
                @csrf
                <!-- Email Input -->
                <!-- <div class="mb-4">
                    <label for="email" class="block text-gray-600">Email</label>
                    <input type="email" id="email" name="email" placeholder='Enter Email' required class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" autocomplete="off">
                </div> -->
                <div class="mb-4">
                    <label for="email" class="block text-gray-600">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter Email"
                      value="{{ old('email') }}"
                      class="w-full border border-gray-300 rounded-md py-2 px-3 @error('email') border-red-500 @enderror"
                      autocomplete="off" required>
                      @error('email')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                 @enderror
               </div>

                
                <!-- Password Input -->
                <div class="mb-4">
                       <label for="password" class="block text-gray-800">Password</label>
                       <input type="password" id="password" name="password" placeholder="Enter Password"
                          class="w-full border border-gray-300 rounded-md py-2 px-3 @error('password') border-red-500 @enderror"
                           autocomplete="off" required>
                            @error('password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                           @enderror
                </div>

                <!-- Remember Me -->
                <div class="mb-4 flex items-center">
                    <input type="checkbox" id="remember" name="remember" class="text-red-500">
                    <label for="remember" class="text-green-900 ml-2">Remember Me</label>
                </div>
                
                <!-- Forgot Password -->
                <!-- <div class="mb-6 text-blue-500">
                    <a href="#" class="hover:underline">Forgot Password?</a>
                </div> -->
                
                <!-- Submit Button -->
                <button type="submit" class="bg-red-500 hover:bg-blue-600 text-white font-semibold rounded-md py-2 px-4 w-full">Login</button>
            </form>
            
            <!-- Sign Up Link -->
            <!-- <div class="mt-6 text-green-500 text-center">
                <a href="#" class="hover:underline">Sign up Here</a>
            </div> -->
        </div>
    </div>
</body>
</html>
