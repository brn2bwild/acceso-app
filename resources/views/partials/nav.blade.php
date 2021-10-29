<nav class="bg-gray-100">
   <div class="max-w-6xl mx-auto px-4">
      <div class="flex justify-between">
         <div class="flex space-x-4">
            {{-- logo --}}
            <div>
               <a href="#" class="flex items-center py-4 px-2 text-gray-600 hover:text-gray-900">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                   </svg>
                   <span class="font-bold">Acceso App</span>
               </a>
            </div>
            {{-- navegación primaria --}}
            <div class="hidden md:flex items-center space-x-1">
               <a href="{{route('atletas.index')}}" class="py-4 px-3 text-gray-600 hover:text-gray-900">Atletas</a>
               <a href="{{route('registros.index')}}" class="py-4 px-3 text-gray-600 hover:text-gray-900">Registros</a>
               <a href="{{route('dispositivos.index')}}" class="py-4 px-3 text-gray-600 hover:text-gray-900">Dispositivos</a>
            </div>
         </div>
         {{-- navegación secundaria --}}
         <div class="hidden md:flex items-center space-x-1">
            <div>
               <a href="{{route('login')}}" class="py-5 px-3 text-gray-700">Login</a>
               <a href="{{route('register')}}" class="py-2 px-3 bg-indigo-500 text-indigo-900 hover:bg-indigo-700 hover:text-white rounded transition duration-300">Signup</a>
            </div>
         </div>
         {{-- boton mobile --}}
         <div class="md:hidden flex items-center">
            <button class="mobile-menu-button">
               <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
               </svg>
            </button>
         </div>
      </div>
   </div>
   {{-- mobile menu --}}
   <div class="mobile-menu hidden">
      <a href="{{route('atletas.index')}}" class="block py-4 px-4 text-sm hover:bg-gray-200">Atletas</a>
      <a href="{{route('registros.index')}}" class="block py-4 px-4 text-sm hover:bg-gray-200">Registros</a>
      <a href="{{route('dispositivos.index')}}" class="block py-4 px-4 text-sm hover:bg-gray-200">Dispositivos</a>
   </div>
</nav>

<script>
   const btn = document.querySelector('button.mobile-menu-button')
   const menu = document.querySelector('.mobile-menu')

   btn.addEventListener('click', () => {
      menu.classList.toggle('hidden');
   })
</script>