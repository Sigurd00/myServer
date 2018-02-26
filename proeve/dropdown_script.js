    /*
    Script til dropdown menu
    Toggler mellem at gemme og vise dropdowm menuen 
    */
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }
    
    // Her lukker vi dropdown menuen hvis der bliver klikket udenfor den
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
    
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }