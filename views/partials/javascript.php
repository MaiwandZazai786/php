 <script>
     // Desktop profile dropdown
     const profileButton = document.getElementById('user-menu-button');
     const profileMenu = document.getElementById('user-menu');

     profileButton.addEventListener('click', function(event) {
         event.stopPropagation();

         const isOpen = !profileMenu.classList.contains('hidden');

         profileMenu.classList.toggle('hidden');
         profileButton.setAttribute('aria-expanded', String(!isOpen));
     });

     // Close dropdown when clicking outside
     document.addEventListener('click', function(event) {
         if (
             !profileMenu.contains(event.target) &&
             !profileButton.contains(event.target)
         ) {
             profileMenu.classList.add('hidden');
             profileButton.setAttribute('aria-expanded', 'false');
         }
     });

     // Mobile navigation
     const mobileButton = document.getElementById('mobile-menu-button');
     const mobileMenu = document.getElementById('mobile-menu');
     const openIcon = document.getElementById('menu-open-icon');
     const closeIcon = document.getElementById('menu-close-icon');

     mobileButton.addEventListener('click', function() {
         const isOpen = !mobileMenu.classList.contains('hidden');

         mobileMenu.classList.toggle('hidden');
         openIcon.classList.toggle('hidden');
         closeIcon.classList.toggle('hidden');

         mobileButton.setAttribute('aria-expanded', String(!isOpen));
     });

     // Close dropdown with Escape
     document.addEventListener('keydown', function(event) {
         if (event.key === 'Escape') {
             profileMenu.classList.add('hidden');
             profileButton.setAttribute('aria-expanded', 'false');
         }
     });
 </script>