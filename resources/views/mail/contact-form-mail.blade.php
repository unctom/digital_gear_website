<x-mail::message>
    ## New Call Request from Form

    A new call request has been submitted through the form.

    Details:

    Form Name: Contact Form
    Name: {{ $contactData['name'] }}
    Email Address: {{ $contactData['email'] }}
    Message:
    {{ $contactData['message'] }}

    Please review the request and take necessary action.

    Thanks,
    {{ config('app.name') }}
</x-mail::message>
