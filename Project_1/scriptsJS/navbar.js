document.querySelector(".navbar-toggler").addEventListener("click", toggleLogo);

      function toggleLogo () {
        var logoVisibility = document.querySelector(".navbar-brand").style.visibility;
        if (logoVisibility == 'visible' || logoVisibility == '') {
          document.querySelector(".navbar-brand").style.visibility = "hidden";
        } else {
          document.querySelector(".navbar-brand").style.visibility = "visible";
        }

        document.querySelector("#nav-button-switch").classList.toggle('fa-bars');
        document.querySelector("#nav-button-switch").classList.toggle('fa-times');
        document.querySelector("#nav-button-switch").classList.toggle('text-light');
        document.querySelector(".employ-button").classList.toggle('mr-5');
        document.querySelector(".employ-button").classList.toggle('ml-3');
        document.querySelector(".employ-button").classList.toggle('mt-3');
        document.querySelector(".navbar").classList.toggle('navbar-ovelap-config');
        document.querySelector(".navbar").classList.toggle('bg-dark');
        document.querySelector(".menu-txt1").classList.toggle('text-light');
        document.querySelector(".menu-txt1").classList.toggle('pb-3');
        document.querySelector(".menu-txt2").classList.toggle('text-light');
        document.querySelector(".menu-txt2").classList.toggle('py-3');
        document.querySelector(".menu-txt3").classList.toggle('text-light');
        document.querySelector(".menu-txt3").classList.toggle('py-3');
        document.querySelector(".menu-txt4").classList.toggle('text-light');
        document.querySelector(".menu-txt4").classList.toggle('py-3');
        document.querySelector("#nav-dropdown").classList.toggle('collapse');
        document.querySelector("#nav-dropdown").classList.toggle('show');
        document.querySelector("#content-list").classList.toggle('nav-expand-it');

      }