// Ginto rasliava
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);
  });


 

        function myFunction() {

            var inputValue = document.querySelector("input").value;


            var pavadinimas = inputValue;
            window.location.href = "https://www.google.com/maps/place/" + pavadinimas;
        }

   