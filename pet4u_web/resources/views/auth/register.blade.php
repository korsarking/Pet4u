@extends("layout")

@section("main")
    <div class="flex flex-col items-center justify-center min-h-screen bg-gray-50 px-4">
        <div class="w-full max-w-md bg-white shadow-lg rounded-2xl p-8 border border-gray-200">
            <h1 class="text-2xl font-bold text-center mb-6 text-gray-800">Register</h1>

            <form action="{{ route('registerPost') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
                <!-- Cross-site request forgeries - предотвращение сторонних запросов -->
                @csrf

                <input type="text" name="username" placeholder="Full Name" value="{{ old('username') }}" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#FFA000]">
                @error('username')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror

                <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#FFA000]">
                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror

                <input type="password" name="password" placeholder="Password"class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#FFA000]">
                @error('password')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
                
                <input type="password" name="password_confirmation" placeholder="Confirm Password"class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#FFA000]">
                @error('password_confirmation')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
                
                <input type="text" name="organization_name" placeholder="Organization Name"class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#FFA000]">
                @error('organization_name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror

                <div class="flex flex-col items-start gap-2">
                    <label for="avatar_url" class="inline-block bg-[#FFA000] hover:bg-orange-500 text-white font-medium px-4 py-2 rounded-lg cursor-pointer transition duration-200">Choose File</label>
                    <input type="file" name="avatar_url" id="avatar_url" accept="image/*" class="hidden" onchange="document.getElementById('file-name').textContent = this.files[0]?.name || ''">
                    <p id="file-name" class="text-gray-600 text-sm"></p>
                </div>

                <textarea name="bio" placeholder="Biography" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#FFA000]"></textarea>

                <button type="submit" class="w-full bg-[#FFA000] hover:bg-orange-500 text-white font-semibold py-2 rounded-lg transition duration-200 cursor-pointer">Register</button>
            </form>
        </div>
    </div>
@endsection
