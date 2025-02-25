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
    <body class="bg-gray-700 flex flex-col justify-center items-center h-screen">

        <div class="bg-gray-500 border border-gray-400 p-12 rounded-lg mb-6 overflow-auto w-96 h-90">
            <table class="w-full border-collapse border border-gray-400 text-white">
                <tbody>
                <tr class="bg-gray-600">
                    <th class="p-3 border border-gray-400 text-left">Category</th>
                    <th class="p-3 border border-gray-400 text-left">BMI Range</th>
                </tr>
                <tr>
                    <td class="p-3 border border-gray-400 text-yellow-500">Underweight</td>
                    <td class="p-3 border border-gray-400 bg-yellow-500"> < 18.5</td>
                </tr>
                <tr>
                    <td class="p-3 border border-gray-400 text-green-500">Normal</td>
                    <td class="p-3 border border-gray-400 bg-green-500"> 18.5 - 25 </td>
                </tr>
                <tr>
                    <td class="p-3 border border-gray-400 text-orange-500">Overweight</td>
                    <td class="p-3 border border-gray-400 bg-orange-500"> 25 - 30 </td>
                </tr>
                <tr>
                    <td class="p-3 border border-gray-400 text-red-500">Obese</td>
                    <td class="p-3 border border-gray-400 bg-red-500"> 30 < </td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="bg-gray-500 border border-gray-400 p-12 rounded-lg mb-6 text-center overflow-auto w-96 h-90">
            @if(isset($bmi))
                <div class="m-4 p-4 text-white">
                    <h3 class="text-lg">Your BMI: <span class="font-semibold">{{ $bmi }}</span></h3>
                    @if($bmi < 18.5)
                        <p class="text-yellow-500">You are underweight</p>
                    @elseif($bmi >= 18.5 && $bmi <= 24.9)
                        <p class="text-green-500">You are normal weight</p>
                    @elseif($bmi >= 25 && $bmi <= 29.9)
                        <p class="text-orange-500">You are overweight</p>
                    @else
                        <p class="text-red-500">You are obese</p>
                    @endif
                </div>
            @endif
            <a href="{{ route('index') }}" class="block mt-4 px-4 py-2 rounded-md bg-gray-300 hover:bg-gray-50 font-semibold"> Return </a>
        </div>

    </body>
</html>
