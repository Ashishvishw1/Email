<!-- resources/views/emails/sendmail.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Email Submission</title>
</head>
<body>
    <p>Someone just sent you an email using FormSubmit Email Link. Here's what they had to state:</p>

    <ul>
        <li><strong>Full name:</strong> {{ $data['name'] }}</li>
        <li><strong>Email address:</strong> {{ $data['email'] }}</li>
        <li><strong>Subject:</strong> {{ $data['subject'] }}</li>
        <li><strong>Message:</strong> {{ $data['message'] }}</li>
        <li><strong>Submitted on:</strong> {{ now()->format('Y-m-d H:i:s (e)') }}</li>
    </ul>
</body>
</html>
