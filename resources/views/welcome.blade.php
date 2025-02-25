<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>BMI Calculator</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-gray-700 justify-center items-center flex h-screen">
        <div class="bg-gray-500 border border-gray-400 p-12 rounded-lg">
            <h1 class="text-2xl mb-4 text-center font-bold"> BMI Calculator </h1>

            <form method="post" action="{{ route('calculate') }}">
                {{ csrf_field() }}

                <div class="my-2">
                    <label for="weight" class="block text-lg"> Weight(kg): </label>
                    <input type="number" id="weight" name="weight" required class="p-2 border rounded-md">
                </div>
                <div class="my-2">
                    <label for="height" class="block text-lg"> Height(cm): </label>
                    <input type="number" id="height" name="height" required class="p-2 border rounded-md">
                </div>

                <button type="submit" class="w-full my-4 px-4 py-2 rounded-md bg-gray-300 hover:bg-gray-50 font-semibold"> Calculate </button>
            </form>

        </div>
    </body>
</html>
