   <nav class="bg-gray-800">
       <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
           <div class="flex h-16 items-center justify-between">

               <div class="flex items-center">

                   <!-- Logo -->
                   <div class="shrink-0">
                       <img
                           class="size-8"
                           src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500"
                           alt="Your Company">
                   </div>

                   <!-- Desktop navigation -->
                   <div class="hidden md:block">
                       <div class="ml-10 flex items-baseline space-x-4">

                           <a href="/"
                               aria-current="page"
                               class="rounded-md px-3 py-2 text-sm font-medium <?php activeClass('/') ?>">
                               Home
                           </a>

                           <a href="/about"
                               aria-current="page"
                               class="rounded-md px-3 py-2 text-sm font-medium <?php activeClass('/about') ?>">
                               About
                           </a>

                           <a href="/contact"
                               aria-current="page"
                               class="rounded-md px-3 py-2 text-sm font-medium <?php activeClass('/contact') ?>">
                               Contact
                           </a>

                           <a href="/services"
                               aria-current="page"
                               class="rounded-md px-3 py-2 text-sm font-medium <?php activeClass('/services') ?>">
                               Services
                           </a>

                       </div>
                   </div>

               </div>

               <!-- Desktop right navigation -->
               <div class="hidden md:block">
                   <div class="ml-4 flex items-center md:ml-6">

                       <!-- Notifications -->
                       <button
                           type="button"
                           class="relative rounded-full p-1 text-gray-400 hover:text-white focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500"
                           aria-label="View notifications">
                           <svg
                               viewBox="0 0 24 24"
                               fill="none"
                               stroke="currentColor"
                               stroke-width="1.5"
                               aria-hidden="true"
                               class="size-6">
                               <path
                                   d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0"
                                   stroke-linecap="round"
                                   stroke-linejoin="round" />
                           </svg>
                       </button>

                       <!-- Profile dropdown -->
                       <div class="relative ml-3">

                           <button
                               type="button"
                               id="user-menu-button"
                               aria-expanded="false"
                               aria-controls="user-menu"
                               aria-haspopup="true"
                               class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
                               <span class="sr-only">Open user menu</span>

                               <img
                                   class="size-8 rounded-full outline -outline-offset-1 outline-white/10"
                                   src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=100&h=100&fit=crop"
                                   alt="User profile">
                           </button>

                           <!-- Dropdown menu -->
                           <div
                               id="user-menu"
                               role="menu"
                               aria-labelledby="user-menu-button"
                               class="absolute right-0 z-10 mt-2 hidden w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5 focus:outline-none">
                               <a
                                   href="#"
                                   role="menuitem"
                                   class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                   Your Profile
                               </a>

                               <a
                                   href="#"
                                   role="menuitem"
                                   class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                   Settings
                               </a>

                               <a
                                   href="#"
                                   role="menuitem"
                                   class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                   Sign out
                               </a>
                           </div>

                       </div>

                   </div>
               </div>

               <!-- Mobile menu button -->
               <div class="-mr-2 flex md:hidden">

                   <button
                       type="button"
                       id="mobile-menu-button"
                       aria-expanded="false"
                       aria-controls="mobile-menu"
                       class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-white/5 hover:text-white focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
                       <span class="sr-only">Open main menu</span>

                       <!-- Hamburger icon -->
                       <svg
                           id="menu-open-icon"
                           class="size-6"
                           fill="none"
                           viewBox="0 0 24 24"
                           stroke="currentColor"
                           stroke-width="1.5">
                           <path
                               stroke-linecap="round"
                               stroke-linejoin="round"
                               d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                       </svg>

                       <!-- Close icon -->
                       <svg
                           id="menu-close-icon"
                           class="hidden size-6"
                           fill="none"
                           viewBox="0 0 24 24"
                           stroke="currentColor"
                           stroke-width="1.5">
                           <path
                               stroke-linecap="round"
                               stroke-linejoin="round"
                               d="M6 18 18 6M6 6l12 12" />
                       </svg>

                   </button>
               </div>

           </div>
       </div>

       <!-- Mobile navigation -->
       <div id="mobile-menu" class="hidden md:hidden">

           <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">

               <a href="/"
                   aria-current="page"
                   class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium <?php activeClass('/') ?>">
                   Home
               </a>

               <a href="about"
                   class="block rounded-md px-3 py-2 text-base font-medium <?php activeClass('/about') ?>">
                   About
               </a>

               <a href="contact"
                   class="block rounded-md px-3 py-2 text-base font-medium <?php activeClass('/contact') ?>">
                   Contact
               </a>

               <a href="services"
                   class="block rounded-md px-3 py-2 text-base font-medium <?php activeClass('/services') ?>">
                   Services
               </a>

           </div>

           <!-- Mobile profile -->
           <div class="border-t border-white/10 pt-4 pb-3">

               <div class="flex items-center px-5">

                   <div class="shrink-0">
                       <img
                           class="size-10 rounded-full outline -outline-offset-1 outline-white/10"
                           src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=100&h=100&fit=crop"
                           alt="User profile">
                   </div>

                   <div class="ml-3">
                       <div class="text-base/5 font-medium text-white">
                           Tom Cook
                       </div>

                       <div class="text-sm font-medium text-gray-400">
                           tom@example.com
                       </div>
                   </div>

                   <!-- Mobile notifications -->
                   <button
                       type="button"
                       aria-label="View notifications"
                       class="relative ml-auto shrink-0 rounded-full p-1 text-gray-400 hover:text-white focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
                       <svg
                           viewBox="0 0 24 24"
                           fill="none"
                           stroke="currentColor"
                           stroke-width="1.5"
                           class="size-6">
                           <path
                               stroke-linecap="round"
                               stroke-linejoin="round"
                               d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                       </svg>
                   </button>

               </div>

               <!-- Mobile profile links -->
               <div class="mt-3 space-y-1 px-2">

                   <a href="#"
                       class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-white/5 hover:text-white">
                       Your Profile
                   </a>

                   <a href="#"
                       class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-white/5 hover:text-white">
                       Settings
                   </a>

                   <a href="#"
                       class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-white/5 hover:text-white">
                       Sign out
                   </a>

               </div>

           </div>
       </div>
   </nav>
