document.querySelector("#marketing-filter").addEventListener("change", showMarketing);
      document.querySelector("#programing-filter").addEventListener("click", showPrograming);
      document.querySelector("#design-filter").addEventListener("click", showDesign);

      function showMarketing() {
        hideCards();


        document.querySelector("#programing-selector").checked = false;
        document.querySelector("#design-selector").checked = false;

        

        if (document.querySelector("#marketing-selector").checked) {

          document.querySelector("#marketing-filter").classList.add('bg-danger');
          document.querySelector("#programing-filter").classList.remove('bg-danger');
          document.querySelector("#design-filter").classList.remove('bg-danger');

          var marketingCards = document.querySelectorAll(".marketing");
          for (var i = 0; i < marketingCards.length; i++) {
            marketingCards[i].style.display = "inline-block";
          }
        } else {
          showCards();
          document.querySelector("#marketing-selector").checked = false;
          document.querySelector("#marketing-filter").classList.remove('bg-danger');
        }
      }

      function showPrograming() {
        hideCards();


        document.querySelector("#marketing-selector").checked = false;
        document.querySelector("#design-selector").checked = false;

        if (document.querySelector("#programing-selector").checked) {

          document.querySelector("#programing-filter").classList.add('bg-danger');
          document.querySelector("#marketing-filter").classList.remove('bg-danger');
          document.querySelector("#design-filter").classList.remove('bg-danger');

          var programingCards = document.querySelectorAll(".programing");
          for (var i = 0; i < programingCards.length; i++) {
            programingCards[i].style.display = "inline-block";
          }
        } else {
          showCards();
          document.querySelector("#programing-filter").classList.remove('bg-danger');
        }
      }

      function showDesign() {
        hideCards();


        document.querySelector("#marketing-selector").checked = false;
        document.querySelector("#programing-selector").checked = false;

        if (document.querySelector("#design-selector").checked) {

          document.querySelector("#design-filter").classList.add('bg-danger');
          document.querySelector("#marketing-filter").classList.remove('bg-danger');
          document.querySelector("#programing-filter").classList.remove('bg-danger');

          var designCards = document.querySelectorAll(".design");
          for (var i = 0; i < designCards.length; i++) {
            designCards[i].style.display = "inline-block";
          }
        } else {
          showCards();
          document.querySelector("#design-filter").classList.remove('bg-danger');
        }
      }

      function hideCards() {
        var cards = document.querySelectorAll(".cards");
        for (var i = 0; i < cards.length; i++) {
          cards[i].style.display = "none";
        }
      }

      function showCards() {
        var cards = document.querySelectorAll(".cards");
        for (var i = 0; i < cards.length; i++) {
          cards[i].style.display = "inline-block";
        }
      }