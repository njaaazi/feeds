@component('mail::message')
# Your account is approved
Hello, <strong> {{ $name }} </strong> 

Your account with email: <strong> {{ $email  }} </strong>   is approved.

Click on this button to login into your account

@component('mail::button', ['url' => $url, 'color' => 'success'])
Log In
@endcomponent

Thank you,<br>
Feeds.social
@endcomponent
