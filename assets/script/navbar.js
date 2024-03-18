(function() {
    document.addEventListener("DOMContentLoaded", function () {
        var navbarLinks = document.querySelectorAll(".nav-link");
        var sections = document.querySelectorAll("section");
        const HOME = "Home";

        navbarLinks.forEach(function (link, index) {
            var header = document.getElementById("header");

            link.addEventListener("click", function (event) {
                navbarLinks.forEach(function (navLink) {
                    navLink.classList.remove("active");
                });
                sections.forEach(function (section) {
                    section.classList.remove('section-show');
                });
                link.classList.add("active");

                if(link.firstChild.nodeValue !== HOME) {
                    header.classList.add('header-top');
                    sections[index - 1].classList.add('section-show');
                } else {
                    header.classList.remove('header-top');
                }
            });
        });

        var title = document.getElementById('title');
        var name = $('#header .container h1 a');
        title.append(name.text());

    });
})();