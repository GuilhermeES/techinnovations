document.addEventListener('DOMContentLoaded', function() {
   //Fixed header on scroll
   const header = document.querySelector('.header');

   function toggleFixedHeader() {
       if (window.innerWidth < 993 || window.scrollY > 0) {
           header.classList.add('fixed');
       } else {
           header.classList.remove('fixed');
       }
   }

   window.addEventListener('scroll', toggleFixedHeader);
   window.addEventListener('resize', toggleFixedHeader);

   toggleFixedHeader();
});
