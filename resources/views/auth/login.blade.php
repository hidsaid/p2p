<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | 1337 Student Guide</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<style>
    body {
        background: url("{{ asset('imgfile/bg42.jpg') }}") no-repeat center center fixed;
        background-size: cover;
    }

    .btn-sign
    {
        background-color: #00BABC!important;
    }

</style>

<body class="flex min-h-screen items-center justify-center bg-gray-900">
    <div class="flex w-full max-w-[300px] flex-col items-center justify-between rounded-lg p-6">
        <img src="{{ asset('imgfile/42_logo.svg') }}" alt="" class="w-[100px]">
        <div>
        </div>
        <p class="text-center text-gray-200 pt-5">Sign in using your 42 account</p>
        <div class="mt-6 flex justify-center items-center w-full">
            <a href="{{route("auth.42")}}"
                class="btn-sign flex items-center justify-center text-center text-xl rounded-lg font-bold  px-6 py-3 text-white shadow-md transition w-full">
                SIGN IN
            </a>
        </div>
    </div>
</body>

</html>
