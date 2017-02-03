A new topic has been requested from the website.
<br />
Name: {{ $topic->get('fname') }} {{ $topic->get('lname') }}

<br />
Email: {{ $topic->get('email') }}
<br />
Phone: {{ $topic->get('phone') }}
<br />
Request:
<br />
{{ $topic->get('request') }}