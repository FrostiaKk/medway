@component('mail::message')

Hello {{$userData->firstname}}. Thank you for choosing us!<br>

First Name: {{$userData->firstname}}<br>
Last Name: {{$userData->lastname}}<br>
Email: {{$userData->email}}<br>
Street Address: {{$userData->street}}<br>
City: {{$userData->city}}<br>
Zip-Code: {{$userData->zipcode}}<br>
Phone Number: {{$userData->phone}}<br>
NIP: {{$userData->nip}}<br>

<br>
Thanks,<br>
{{ config('app.name') }}
@endcomponent
