
$(document).ready(function () {
  
    //Dodavanje vrednosti u edit equipement modal
    $(document).on("click", ".editEq", function () {
      var id = $(this).val();
      var name = $("#name" + id).text();
      var model = $("#model" + id).text();
      var date = $("#date" + id).text();
      var serial = $("#serial" + id).text();
      var process = $("#process" + id).text();
  
      $("#eequipementId").val(id);
      $("#ename").val(name);
      $("#emodel").val(model);
      $("#emanufactureDate").val(date);
      $("#eserialNumber").val(serial);
      $("#eprocess").val(process);
    });
  
    //Dodavanje vrednosti u delete equipement modal
    $(document).on("click", ".deleteEq", function () {
      var id = $(this).val();
      var name = $("#name" + id).text();
  
      $("#deleteEqId").val(id);
      $("#deleteEqName").text(name);
    });
  

  });
  
  