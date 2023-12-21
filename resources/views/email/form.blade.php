<!-- resources/views/email/form.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Form</title>
    <!-- Include the Tailwind CSS CDN or link to your local CSS file -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="bg-gray-800 text-white p-8">
    <div class="max-w-md mx-auto bg-gray-900 rounded p-6 shadow-md hover:shadow-lg transition duration-300">
        <h1 class="text-2xl font-semibold mb-6">Email Form</h1>

        <form action="{{ route('send.email') }}" method="post">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-gray-300 text-sm font-bold mb-2">Recipient Name:</label>
                <input type="text" name="name" class="w-full px-4 py-2 border rounded focus:outline-none focus:border-blue-500 bg-gray-800 text-white" required>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-300 text-sm font-bold mb-2">Recipient Email:</label>
                <input type="email" name="email" class="w-full px-4 py-2 border rounded focus:outline-none focus:border-blue-500 bg-gray-800 text-white" required>
            </div>

            <div class="mb-4">
                <label for="subject" class="block text-gray-300 text-sm font-bold mb-2">Subject:</label>
                <input type="text" name="subject" class="w-full px-4 py-2 border rounded focus:outline-none focus:border-blue-500 bg-gray-800 text-white" required>
            </div>

            <div class="mb-4">
                <label for="message" class="block text-gray-300 text-sm font-bold mb-2">Message:</label>
                <textarea name="message" class="w-full px-4 py-2 border rounded focus:outline-none focus:border-blue-500 bg-gray-800 text-white" required></textarea>
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue active:bg-blue-800 transition duration-300">
                Send Email
            </button>
        </form>
    </div>
</body>
</html>
