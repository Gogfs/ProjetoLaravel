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
        
        <div class="flex items-center justify-center">
            <div class="grid grid-flow-row grid-cols-3 content-center gap-x-4 gap-y-8">

                <div class="max-w-sm h-full bg-gray-800 border border-gray-700 rounded-lg shadow-sm">
                    <div class="p-5">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">Secretaria Acadêmica</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">A Secretaria Acadêmica é um setor responsável por gerenciar e organizar questões
                            administrativas relacionadas aos alunos e aos cursos. Suas funções incluem o controle de matrículas,
                            emissão de documentos como históricos escolares, diplomas, declarações, além de fornecer informações
                            sobre grades curriculares, prazos acadêmicos, e processos seletivos.
                        </p>
                    </div>
                </div>
 
                <div class="max-w-sm h-full bg-gray-800 border border-gray-700 rounded-lg shadow-sm">
                    <div class="p-5">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">Coordenação de Cursos</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">As Coordenações de Curso são responsáveis pelo
                            conjunto de ações destinadas ao planejamento do ensino, à supervisão de sua execução, ao controle das
                            atividades docentes em relação às diretrizes didáticas pedagógicas e administrativas, bem como pela
                            otimização dos recursos físicos e didáticos disponíveis para os cursos mantidos pelas Etecs.
                        </p>
                    </div>
                </div>

                <div class="max-w-sm h-full bg-gray-800 border border-gray-700 rounded-lg shadow-sm">
                    <div class="p-5">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">Direção</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">A Direção Escolar é o departamento executivo
                            encarregado da organizar as atividades administrativas e pedagógicas da Etec. Suas atribuições,
                            indicação e designação, são realizadas de acordo com o Capítulo IV, Seção I do Regimento Comum das
                            Etecs (Deliberação CEETEPS nº 87, de 08 de dezembro de 2022).
                        </p>
                    </div>
                </div>

                <div class="max-w-sm h-full bg-gray-800 border border-gray-700 rounded-lg shadow-sm">
                    <div class="p-5">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">Coordenação Pedagógica</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">A Coordenação Pedagógica é um setor responsável
                            por planejar, orientar e supervisionar as práticas pedagógicas e o processo de ensino-aprendizagem.
                            A coordenação pedagógica atua na formação contínua dos professores, acompanha o desenvolvimento das aulas, analisa o
                            desempenho dos alunos e auxilia na implementação do currículo e das metodologias de ensino. Seu papel é garantir que o
                            processo educativo aconteça de forma eficiente, alinhado aos objetivos da escola, promovendo a melhoria contínua
                            da qualidade de ensino.
                        </p>
                    </div>
                </div>

                <div class="max-w-sm h-full bg-gray-800 border border-gray-700 rounded-lg shadow-sm">
                    <div class="p-5">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">APM</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">A APM é uma instituição auxiliar da escola,
                            que tem por finalidade colaborar no cumprimento do progresso educacional, na assistência escolar e na
                            integração família-escola-comunidade.
                        </p>
                    </div>
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
