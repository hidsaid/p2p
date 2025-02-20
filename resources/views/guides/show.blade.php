<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>42 Projects Guide</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    {{-- =========Nav for mobile screens======== --}}
    <div class="bg-slate-100 py-6">
        {{-- Navbar Large scren --}}
        <nav
            class="mx-auto flex w-full max-w-6xl items-center justify-center rounded-lg p-4 shadow-md xl:justify-between xl:bg-white">
            <div class="flex items-center space-x-4">
                <a href="{{ route('EnLanding') }}">
                    <img src="{{ asset('imgfile/logo2.png') }}" alt="Logo" class="h-14">
                </a>
                <h1 class="text-xl font-bold text-gray-900">Peer<span style="color:#0084D1;">2</span><span
                        style="font-size:">Peer</span></h1>
            </div>
            <div class="hidden items-center space-x-6 xl:flex">
                <a href="{{ route('EnLanding') }}" class="text-gray-700 transition hover:text-blue-600">Home</a>
                <a href="{{route('projects.show')}}" class="text-gray-700 transition hover:text-blue-600">Projects</a>
                <a href="http://localhost:8000/index#aboutus" class="text-gray-700 transition hover:text-blue-600">About</a>
                <a href="http://localhost:8000/index#contactus" class="text-gray-700 transition hover:text-blue-600">Contact</a>
                <a href="{{route('showLogin')}}" class="rounded-lg bg-sky-600 px-4 py-2 text-white transition hover:bg-blue-500">Logout</a>
            </div>
        </nav>
    </div>
    <div class="bg-gray-100">
        <div class="mx-auto max-w-[1200px] px-5">
            <h1 class="pt-5 text-left text-3xl font-semibold text-sky-900">
                @if ($guides->isNotEmpty())
                    {{$guides->first()->project->name}} Guides
                @else
                    {{'No available guides'}}
                @endif
            </h1>
            <!-- Add New Guide Button -->
            <div class="mt-6 flex justify-center">
                    <a href="{{ route('guide.create', $projectId) }}"
                        class="bg-size-200 flex transform items-center gap-2 rounded-lg bg-gradient-to-r from-orange-500 to-blue-500 px-6 py-3 text-lg font-semibold text-white shadow-md transition-transform hover:-translate-y-1 hover:bg-right hover:shadow-lg">
                        <span class="text-2xl text-white">➕</span> Add New Guide
                    </a>
            </div>
            <div class="flex items-center justify-center bg-gray-100 py-5">
                <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
                    @foreach ($guides as $guide)
                        <div class="max-w-lg space-y-4 rounded-xl bg-white p-6 shadow-md">
                            <div class="flex items-center space-x-2 text-sm text-slate-900">
                                <img src="{{ asset($guide->user->image) }}" alt="Profile"
                                    class="h-10 w-10 rounded-full">
                                <span>The project is posted by <span
                                        class="font-semibold">{{ $guide->user->login }}</span></span>
                            </div>
                            <h2 class="text-xl font-bold leading-tight text-slate-900">
                                {{ $guide->Title }}
                            </h2>
                            <p class="text-gray-600">{{ $guide->description }}</p>
                            <!-- View Guide Button -->
                            <a href="{{ asset('storage/guide_pdfs/' . $guide->guide_pdf) }}" target="_blank"
                                class="mt-4 inline-block rounded-full bg-blue-400 px-4 py-2 text-sm font-medium text-white transition duration-300 hover:bg-blue-500">
                                View Guide
                            </a>
                            <!-- Download Guide Button -->
                            <a href="{{ asset('storage/guide_pdfs/' . $guide->guide_pdf) }}" download
                                class="mt-4 inline-block rounded-full bg-orange-400 px-4 py-2 text-sm font-medium text-white transition duration-300 hover:bg-orange-500">
                                Download Guide
                            </a>
                            <div class="flex items-center justify-between text-sm text-slate-900">
                                <div class="flex items-center space-x-1">
                                    <span>&#9733;</span>
                                    <span>{{ \Carbon\Carbon::parse($guide->date)->format('M d, Y') }}</span>
                                </div>
                                <div class="flex items-center space-x-4">
                                    <div class="flex items-center space-x-1">
                                        <span>&#128075;</span>
                                        <span>38K</span>
                                    </div>
                                    <div class="flex items-center space-x-1">
                                        <span>&#128172;</span>
                                        <span>786</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- Pagination -->
            <div class="flex justify-center pb-10">
                {{ $guides->links('pagination::tailwind') }}
            </div>
        </div>
    </div>
</body>

</html>
