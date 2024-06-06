

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    @vite('resources/css/app.css')
    <style>
        .label-text {
            color: black;
        }
    </style>
</head>
<body>
    <div class="container mx-auto my-10">
        <form action="{{ route('contact.submit') }}" method="POST" class="max-w-lg mx-auto p-8 bg-white rounded-lg shadow-md">
            @csrf
            <div class="form-control mb-4">
                <label class="label">
                    <span class="label-text">Name:</span>
                </label>
                <input type="text" name="name" class="input input-bordered" required>
            </div>
            <div class="form-control mb-4">
                <label class="label">
                    <span class="label-text">Email</span>
                </label>
                <input type="email" name="email" class="input input-bordered" required>
            </div>
            <div class="form-control mb-4">
                <label class="label">
                    <span class="label-text">Sõnum</span>
                </label>
                <textarea name="message" class="textarea textarea-bordered" required></textarea>
            </div>
            <div class="form-control mt-6">
                <button type="submit" class="btn btn-primary">ESITA</button>

        

            </div>
        </form>
    </div>
    @vite('resources/js/app.js')
</body>
</html>
