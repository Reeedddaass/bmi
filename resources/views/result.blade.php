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

        @if(isset($bmi))
            <div class="m-4 p-4 text-center">
                <h3 class="text-lg">Your BMI: <span class="font-semibold">{{ $bmi }}</span></h3>
                @if($bmi < 18.5)
                    <p class="text-yellow-500">You are underweight</p>
                @elseif($bmi >= 18.5 && $bmi <= 24.9)
                    <p class="text-green-500">You are normal weight</p>
                @elseif($bmi >= 25 && $bmi <= 29.9)
                    <p class="text-orange-500">You are overweight</p>
                @else
                    <p class="text-red-700">You are obese</p>
                @endif
            </div>
        @endif

        <a href="{{ route('index') }}" class="w-full my-4 px-4 py-2 rounded-md bg-gray-300 hover:bg-gray-50 font-semibold"> Return </a>

    </div>
</body>
