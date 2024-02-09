<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tailwind CSS Simple Template</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <!-- @vite(['resources/css/app.css','resources/js/app.js']) -->
  </head>

  <body class="flex flex-col min-h-screen">
    <header>
        <nav class="bg-white border-gray-200 dark:bg-gray-900">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
              <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                  <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
                  <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
              </a>
              <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                  <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                  </svg>
              </button>
              <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                  <li>
                    <a href="{{ route('agendamento.index') }}" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500" aria-current="page">Agendamento</a>
                  </li>
                  <li>
                    <a href="{{route('recrutamento.index')}}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Recrutamento</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>

    <section class="flex-grow bg-white dark:bg-gray-900">
        <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-8 lg:px-12">
            <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Conheça o nosso catálogo das melhores massagistas  de Lisboa</h1>
            <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">Cadastre se que uma das nossas especialistas vai entrar em contato com você.
            </p>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg hover:transform hover:-translate-y-1 hover:scale-105 transition-transform duration-300">
                    <img src="{{ asset('assets/massagista1.jpeg') }}" class="w-full h-64 object-cover" alt="Massagista 1">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-white mb-2">Liz</h3>
                        <p class="text-gray-300 mb-2">Telemovel: 123456789</p>
                        <p class="text-gray-300 mb-2">Email: liz@teste.com</p>
                    </div>
                </div>

                <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg hover:transform hover:-translate-y-1 hover:scale-105 transition-transform duration-300">
                    <img src="{{ asset('assets/massagista2.jpeg') }}" class="w-full h-64 object-cover" alt="Massagista 2">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-white mb-2">Mariana</h3>
                        <p class="text-gray-300 mb-2">Telemovel: 123456789</p>
                        <p class="text-gray-300 mb-2">Email: mariana@teste.com</p>
                    </div>
                </div>

                <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg hover:transform hover:-translate-y-1 hover:scale-105 transition-transform duration-300">
                    <img src="{{ asset('assets/massagista3.jpeg') }}" class="w-full h-64 object-cover" alt="Massagista 3">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-white mb-2">Fernanda</h3>
                        <p class="text-gray-300 mb-2">Telemovel: 987654321</p>
                        <p class="text-gray-300 mb-2">Email: fernanda@teste.com</p>
                    </div>
                </div>

                <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg hover:transform hover:-translate-y-1 hover:scale-105 transition-transform duration-300">
                    <img src="{{ asset('assets/massagista4.jpeg') }}" class="w-full h-64 object-cover" alt="Massagista 4">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-white mb-2">Carol</h3>
                        <p class="text-gray-300 mb-2">Telemovel: 555444333</p>
                        <p class="text-gray-300 mb-2">Email: carol@teste.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="p-6 bg-red-400 dark:bg-gray-800">
        <div class="max-w-screen-xl mx-auto">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <a href="https://flowbite.com" class="flex items-center">
                        <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-3" alt="FlowBite Logo" />
                        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Duqueza</span>
                    </a>
                </div>

            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2022 <a href="https://flowbite.com" class="hover:underline">Duqueza™</a>. All Rights Reserved.
                </span>
                <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" /></svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>
  </body>
</html>
