<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chrih-daba</title>

    {{-- font Lora --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Shrikhand&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@160..700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Shrikhand&display=swap"
        rel="stylesheet">

    {{-- Css Tailwind --}}

    @vite(['resources/css/app.css','resources/js/app.js'])

    {{-- Alpine JS --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.5/dist/cdn.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"
        integrity="sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eO63BaqHaJ3YZX9wuqjwgfcV/MrB2PhaVX9DkYVhbFpStnqpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body class="bg-slate-50 container">
        <section class="rounded-3xl h-fit shadow-2xl m-60  ">
        <div class="p-3 text-center sm:p-7">
            <p class="text-sm font-roboto uppercase tracking-widest text-green-600">
            Merci pour votre confience
            </p>

            <h2 class="mt-6 text-3xl font-semibold font-roboto">Paiement effectué avec succès !</h2>

            <a
            class="mt-8 inline-block w-64 rounded-full bg-green-500 py-4 text-sm font-roboto text-white shadow-xl"
            href="{{route('welcome')}}"
            >
            Home
            </a>
        </div>
        </section>
</body>

</html>