@extends("layout")

@section("main")
    <div class="flex flex-col items-center justify-center min-h-screen bg-gray-50 px-4">
        <div class="w-full max-w-md bg-white shadow-lg rounded-2xl p-8 border border-gray-200">
            <h1 class="text-2xl font-bold text-center mb-6 text-gray-800">Sign in</h1>

            <form action="{{ route('loginPost') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
                <!-- Cross-site request forgeries - предотвращение сторонних запросов -->
                @csrf

                <div>
                    <input type="text" name="login" placeholder="Email or Username" value="{{ old('login') }}" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#FFA000]">
                    @error('login')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <input type="password" name="password" placeholder="Password" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#FFA000]">
                    @error('password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="w-full bg-[#FFA000] hover:bg-orange-500 text-white font-semibold py-2 rounded-lg transition duration-200 cursor-pointer">Login</button>
                
                <a href="{{ route('register') }}">
                    <p class="text-center text-md text-[#FFA000] hover:text-orange-500 font-medium transition duration-200">Don't have an account? Register now.</p>
                </a>
            </form>
        </div>
    </div>
@endsection
