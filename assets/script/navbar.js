(function() {

    // const select = (el, all = false) => {
    //     el = el.trim()
    //     if (all) {
    //       return [...document.querySelectorAll(el)]
    //     } else {
    //       return document.querySelector(el)
    //     }
    // }
    // console.log(12341);

    document.addEventListener("DOMContentLoaded", function () {
        var navbarLinks = document.querySelectorAll(".nav-link");
        var sections = document.getElementsByTagName('section');
        const HOME = "Home";

        navbarLinks.forEach(function (link) {
            var header = document.getElementById("header");
            // var section = document.getElementById("about");
            link.addEventListener("click", function (event) {
                navbarLinks.forEach(function (navLink) {
                    navLink.classList.remove("active");
                });

                link.classList.add("active");

                if(link.firstChild.nodeValue !== HOME) {
                    console.log(sections);
                    header.classList.add('header-top');
                    for(var i = 0; i < sections.length; i++) {
                        // sections.item(i).classList.remove('section-show');
                        sections.item(i).addEventListener('click', (function(index) {
                            for(var j = 0; j < sections.length; j++) {
                                sections.item(j).classList.remove('section-show');
                            }
                            sections.item(index).classList.add('section-show');
                        })(i));
                    }
                    // link.classList.add('section-show');
                    // console.log(link.textContent);
                    // console.log(section.id);
                    // header.classList.remove('header');
                } else {
                    console.log(sections);
                    for(var i = 0; i < sections.length; i++) {
                        sections.item(i).classList.remove('section-show');
                        // sections.item(i).classList.remove('section-show');
                    }
                    header.classList.remove('header-top');
                    // header.classList.add('section-show');
                }
            });
        });

    });

})();