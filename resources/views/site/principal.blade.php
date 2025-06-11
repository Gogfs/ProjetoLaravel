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
    <main class="flex-grow mb-16">

        <div class="flex flex-col justify-center items-center w-3/4 p-4 mx-auto bg-white border-blue-800 border-solid border-2 w-2/5 mt-8 mb-8">
            <div class="text-3xl font-semibold mb-4">
                <h1>Conheça a ETEC Zona Leste</h1>
            </div>

            <div  class="relative overflow-hidden bg-cover bg-[50%] bg-no-repeat">
                <img src="{{ asset('img/panorama.jpg') }}" class="w-full" />
                <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-fixed"  style="background-color: hsla(0, 0%, 0%, 0.7)">

                    <div class="grid grid-cols-1 h-full items-center justify-center p-8">

                    <p class="text-white opacity-100 text-lg text-justify font-semibold">A ETEC (Escola Técnica Estadual) Zona Leste é uma instituição de ensino técnico
                        localizada na região da Zona Leste de São Paulo. Ela faz parte da rede de escolas estaduais voltadas para o
                        ensino de educação profissional e técnica, oferecendo aos seus alunos uma formação que integra conhecimentos
                        teóricos e práticos. O objetivo da ETEC Zona Leste é preparar os estudantes para o mercado de trabalho, ao
                        mesmo tempo em que proporciona uma base sólida para aqueles que desejam continuar seus estudos no ensino
                        superior.</p>

                    <p class="text-white opacity-100 text-lg text-justify font-semibold">Oferecemos uma variedade de cursos técnicos nas mais diversas áreas, como
                        Administração, Desenvolvimento de Sistemas, Logística, entre outros, com programas que visam atender às
                        necessidades e demandas do mercado. Além disso, a ETEC é conhecida por seu corpo docente altamente
                        qualificado, composto por professores especializados em suas áreas, o que garante uma educação de
                        qualidade aos alunos.</p>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-center items-center">
            <a class="bg-amber-400 cursor-pointer py-1 px-3 duration-200 ease-linear hover:tracking-[.05em]" href="{{ route('site.cursos') }}">Conheça os nossos cursos &rarr;</a>
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
