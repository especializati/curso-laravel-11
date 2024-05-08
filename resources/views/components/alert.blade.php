@if (session()->has('success'))
<div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
    {{ session('success') }}
    </div>
@endif

@if (session()->has('message'))
<div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
    {{ session('message') }}
    </div>
@endif

@if (session()->has('error'))
<div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
    {{ session('error') }}
    </div>
@endif

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li class="p-4 mb-4 text-sm text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300" role="alert">{{ $error }}</li>
        @endforeach
    </ul>
@endif
