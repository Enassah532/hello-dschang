<footer class="text-gray-400">
<p>
    <a href="mailto:hmoustaphousmane@gmail.com" class="text-indigo-500 hover:text-indigo-700">Click here to send us an email</a><br>
    &copy; Copyrigth {{ date('Y') }} 
    @if(! Route::is('app_about'))&middot;
    <a href="{{ route('app_about') }}" class="text-indigo-500 hover:text-indigo-700 underline">About Us</a>
    @endif
</p>
</footer>