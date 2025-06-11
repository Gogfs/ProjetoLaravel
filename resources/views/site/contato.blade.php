<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
  </head>

  <body class="flex flex-col min-h-screen bg-gray-300">

    <!-- HEADER -->
    <header>
        <nav>
            <ul class="flex py-2 bg-blue-500 h-12 justify-evenly">
                <li class="mr-6">
                    <a href="{{ route('site.index') }}" class="text-black-500 text-xl font-semibold hover:text-red-500">Home</a>
                </li>
                <li class="mr-6 ">
                    <a href="{{ route('site.cursos') }}" class="text-black-500 text-xl font-semibold hover:text-red-500">Cursos</a>
                </li>
                <li class="mr-6 ">
                    <a href="{{ route('site.departamentos') }}" class="text-black-500 text-xl font-semibold hover:text-red-500">Departamentos</a>
                </li>
                <li class="mr-6 ">
                    <a href="{{ route('site.contato') }}" class="text-black-500 text-xl font-semibold hover:text-red-500">Contato</a>
                </li>
            </ul>
        </nav>

         @if (Route::has('login'))
    <nav class="bg-blue-500 px-6 py-2 flex justify-end">
        <div class="flex gap-8">
            @auth
                <a
                    href="{{ url('/dashboard') }}"
                    class="text-white text-base font-semibold hover:text-yellow-300 transition duration-200"
                >
                    Dashboard
                </a>
            @else
                <a
                    href="{{ route('login') }}"
                    class="text-white text-base font-semibold hover:text-yellow-300 transition duration-200"
                >
                    Log in &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </a>

                @if (Route::has('register'))
                    <a
                        href="{{ route('register') }}"
                        class="text-white text-base font-semibold hover:text-yellow-300 transition duration-200"
                    >
                        Registrar
                    </a>
                @endif
            @endauth
        </div>
    </nav>
@endif

    </header>


    <!-- Conteudo Principal -->
    <main class="flex-grow mt-20 mb-16">
        
        <div class="flex justify-center items-center">
            <div class="max-w-sm h-full bg-gray-800 border border-gray-700 rounded-lg shadow-sm">
                <div class="p-5">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">Etec Zona Leste</h5>
                    <p class="mb-2 text-2xl tracking-tight text-white">Endereço: Avenida Águia de Haia, 2.633 - Cidade AE Carvalho - São Paulo/SP - CEP: 03694-000</p>
                    <p class="mb-2 text-2xl tracking-tight text-white">Telefone: (11) 2045-4000 / 2045-4016</p>
                    <p class="mb-2 text-2xl tracking-tight text-white">Horário de funcionamento: Seg. a Sex. das 09h às 21h</p>
                </div>
            </div>
        </div>
    </main>

    <!-- FOOTER -->
    <footer class="w-full bg-gray-900 shadow-sm">
    <div class="w-full max-w-screen-xl mx-auto p-4">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="{{ route('site.index') }}" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('img/logo.jpg') }}" class="w-24">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Etec Zona Leste</span>
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                <li>
                    <a href="{{ route('site.index') }}" class="hover:underline me-4 md:me-6">Home</a>
                </li>
                <li>
                    <a href="{{ route('site.cursos') }}" class="hover:underline me-4 md:me-6">Cursos</a>
                </li>
                <li>
                    <a href="{{ route('site.departamentos') }}" class="hover:underline me-4 md:me-6">Departamentos</a>
                </li>
                <li>
                    <a href="{{ route('site.contato') }}" class="hover:underline">Contato</a>
                </li>
            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">Desenvolvido por Gabriel Oliveira</span>
    </div>
    <footer>

  </body>
</html>
