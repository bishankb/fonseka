@component('mail::message')
# Dear {{ $details['name'] }},

<h4>Please Enter Your Daily Routine</h4>

@component('mail::panel')
<a href="{{ route('routines.create') }}">Enter Daily Routine</a>
@endcomponent

@endcomponent

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
<a href="routines/create">Enter Daily Routine</a>
</body>
</html>

