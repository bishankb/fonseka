@component('mail::message')
# Dear {{ $details['name'] }},

<h4>Please Enter Your Daily Routine</h4>

@component('mail::panel')
<a href="{{ route('routines.create') }}">Enter Daily Routine</a>
@endcomponent

@endcomponent

