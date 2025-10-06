@extends("layout")

@section("main")
    <div class="flex flex-col items-center justify-center min-h-screen bg-gray-50 px-4">
        <div class="bg-white p-8 rounded-2xl shadow-md border border-gray-200 text-center">
            <h1 class="text-2xl font-bold text-gray-800 mb-4">Sign out</h1>
            <form action="{{ route('logoutPost') }}" method="POST" class="inline">
                @csrf
                <button type="submit" class="bg-[#FFA000] hover:bg-orange-500 text-white font-semibold py-2 px-6 rounded-lg transition duration-200">Logout</button>
            </form>
        </div>
    </div>
@endsection
