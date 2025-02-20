<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Guide</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="max-w-lg w-full bg-white p-6 rounded-lg shadow-lg">
        <!-- Back Arrow Link -->
        <a href="{{ route('project.guides',$projectId) }}" class="flex items-center text-gray-600 hover:text-sky-600 mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-5 w-5 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            Back to Guides
        </a>

        <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">Upload New Guide</h2>

        <!-- Form Start -->
        <form action="{{ route('guide.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Hidden Field for Project ID -->
            <input type="hidden" name="project_id" value="{{ $projectId }}">

            <!-- Optional Hidden Field for Guide ID (if editing an existing guide) -->
            <input type="hidden" name="guide_id" value="{{ old('guide_id') ?? '' }}">

            <!-- Guide Title -->
            <div class="mb-4">
                <label class="block text-sm font-semibold text-gray-700 mb-1">Guide Title</label>
                <input type="text" name="title" placeholder="Enter the guide title" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-sky-400 focus:outline-none" value="{{ old('title') }}" required>
            </div>
            <input type="text" name="user_id" hidden placeholder="Enter the guide title" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-sky-400 focus:outline-none" value="1" required>

            <!-- Guide Description -->
            <div class="mb-4">
                <label class="block text-sm font-semibold text-gray-700 mb-1">Description</label>
                <input type="text" name="description" placeholder="Enter a short description" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-sky-400 focus:outline-none" value="{{ old('description') }}" required>
            </div>

            <!-- Guide PDF Upload -->
            <div class="mb-4">
                <label class="block text-sm font-semibold text-gray-700 mb-1">Upload Guide PDF</label>
                <input type="file" name="guide_pdf" class="w-full px-3 py-2 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:ring-2 focus:ring-sky-400 focus:outline-none" required>
            </div>

            <!-- Submit Button -->
            <div class="mt-6">
                <button type="submit" class="w-full bg-gradient-to-r bg-sky-600 text-white font-semibold py-2 rounded-lg hover:bg-gradient-to-l focus:outline-none focus:ring-2 focus:ring-sky-400 transition duration-300">
                    Upload Guide
                </button>
            </div>
        </form>
    </div>
</body>
</html>
