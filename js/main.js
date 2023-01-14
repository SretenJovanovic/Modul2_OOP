
$(document).ready(function () {
  
  // funkcija za brisanje elementa sa ID alerts posle 3 sekunde.

  document.getElementById("alerts").addEventListener("load",setTimeout(function() {
    document.getElementById('alerts').style.display = 'none';
  }, 3000));

});

