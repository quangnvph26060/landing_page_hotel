<script>
    document.addEventListener("DOMContentLoaded", function() {
        const goTopBtn = document.querySelector(".go_top");

        goTopBtn.style.display = "none";

        window.addEventListener("scroll", function() {
            if (window.scrollY > 200) {
                goTopBtn.style.display = "flex";
            } else {
                goTopBtn.style.display = "none";
            }
        });

        goTopBtn.addEventListener("click", function() {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
    });
    document.addEventListener("DOMContentLoaded", function() {
        const menuButton = document.querySelector(".navbar-toggler");
        const menu = document.querySelector(".navbar-header");
        const closeButton = document.querySelector(".nav-close");
        const overlay = document.querySelector(".bg-overflow");

        function openMenu() {
            menu.classList.add("show");
            overlay.classList.add("active");
            document.body.style.overflow = "hidden";
        }

        function closeMenu() {
            menu.classList.remove("show");
            overlay.classList.remove("active");
            document.body.style.overflow = "";
        }

        menuButton.addEventListener("click", openMenu);
        closeButton.addEventListener("click", closeMenu);
        overlay.addEventListener("click", closeMenu);
    });

    document.addEventListener('DOMContentLoaded', function() {
        const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                navLinks.forEach(l => l.classList.remove('nav-link-active'));
                this.classList.add('nav-link-active');
            });
        });
    });
</script>
