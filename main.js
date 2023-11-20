document.querySelectorAll('.nav-a').forEach(function(link) {
    link.addEventListener('click', function(e) {
        var id = this.getAttribute('href');
        var target;

        if (id.startsWith("#")) {
            e.preventDefault();
            // Es un enlace interno con un ID válido
            target = document.querySelector(id);

            if (target) {
                var offset = 74; // Altura barra de navegación
                var targetOffset = target.offsetTop - offset;

                window.scrollTo({
                    top: targetOffset,
                    behavior: "smooth"
                });
            }
        } else {
            // Deja que los enlaces externos se comporten de manera predeterminada
        }
    });
});
