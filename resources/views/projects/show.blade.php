<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>42 Projects Guide</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex min-h-screen flex-col items-center bg-slate-100 py-6">

    {{-- Navbar Section --}}
    <nav class="flex w-full max-w-6xl items-center justify-between rounded-lg bg-white p-4 shadow-md">
        <div class="flex items-center space-x-4">
            <a href="{{ route('EnLanding') }}">
                <img src="imgfile/logo2.png" alt="Logo" class="h-10">
            </a>
            <h1 class="text-xl font-bold text-gray-900">Peer<span style="color:#0084D1;">2</span><span
                    style="font-size:">Peer</span></h1>
        </div>
        <div class="flex items-center space-x-6">
            <a href="{{ route('EnLanding') }}" class="text-gray-700 transition hover:text-blue-600">Home</a>
            <a href="{{route('projects.show')}}" class="text-gray-700 transition hover:text-blue-600">Projects</a>
            <a href="http://localhost:8000/index#aboutus" class="text-gray-700 transition hover:text-blue-600">About</a>
            <a href="http://localhost:8000/index#contactus" class="text-gray-700 transition hover:text-blue-600">Contact</a>
            <a href="{{route('showLogin')}}" class="rounded-lg bg-sky-600 px-4 py-2 text-white transition hover:bg-blue-500">Logout</a>
        </div>
    </nav>

    {{-- Search Zone Section --}}
    <form action="{{ route('projects.show') }}" method="GET" class="mt-6 flex w-full max-w-md items-center space-x-2">
        <input id="search" name="search" value="{{ request('search') }}" placeholder="Search project name..."
            class="w-full rounded-lg border px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        <button type="submit"
            class="rounded-lg bg-sky-600 px-4 py-2 text-white transition hover:bg-sky-500">Search</button>
    </form>

    {{-- Main Content --}}
    <main class="mt-8 w-full max-w-6xl">
        <div class="mt-6 grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            @forelse ($paginatedProjects as $project)
                <div
                    class="flex transform flex-col rounded-xl border border-gray-200 bg-white p-6 shadow-lg transition hover:-translate-y-1 hover:shadow-2xl">
                    <h2 class="mt-2 text-xl font-bold leading-tight text-gray-900">{{ $project['name'] }}</h2>
                    <p class="mt-2 min-h-[50px] flex-grow text-gray-600">{{ $project['description'] }}</p>
                    <div>
                        <a href="{{ route('project.guides', ['projectId' => $project->id]) }}"
                            class="font-semibold text-sky-600 hover:underline">Learn More →</a>
                    </div>
                </div>
            @empty
                <p class="text-gray-500">No projects found.</p>
            @endforelse
        </div>
    </main>
    <!-- Pagination -->
    <div class="mt-10 flex justify-center">
        {{ $paginatedProjects->appends(['search' => request('search')])->links() }}
    </div>
</body>

</html>
