window.addEventListener('scroll', () => {

        const navbar = document.querySelector('.navbar-glass');

        window.addEventListener('scroll', () => {
            if(window.scrollY > 50){
                navbar.classList.add('navbar-scrolled');
            } else {
                navbar.classList.remove('navbar-scrolled');
            }
        });


});