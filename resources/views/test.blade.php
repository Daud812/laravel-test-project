<html>
   
<body>
    <form action="{{ route('changeLanguage') }}" method="POST">
        @csrf
        <select name="language" onchange="this.form.submit()">
            <option value="en" {{ app()->getLocale() === 'en' ? 'selected' : '' }}>English</option>
            <option value="es" {{ app()->getLocale() === 'es' ? 'selected' : '' }}>Spanish</option>
        </select>
    </form>
    <h1>{{ __('lang.welcome') }}</h1>
    <p>{{ trans('lang.greeting', ['name' => 'John']) }}</p>
</body>
</html>
