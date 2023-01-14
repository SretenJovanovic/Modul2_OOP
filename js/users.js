$(document).ready(function () {
  //Dodavanje vrednosti u edit user modal
  $(document).on("click", ".editUser", function () {
    var id = $(this).val();
    var username = $("#username" + id).text();
    var firstName = $("#firstName" + id).text();
    var lastName = $("#lastName" + id).text();
    var age = $("#age" + id).val();
    var phone = $("#phone" + id).val();
    var email = $("#email" + id).text();
    var password = $("#password" + id).text();
    var type = $("#type" + id).text();

    $("#euserId").val(id);
    $("#eusername").val(username);
    $("#efirstName").val(firstName);
    $("#elastName").val(lastName);
    $("#eage").val(age);
    $("#ephone").val(phone);
    $("#eemail").val(email);
    $("#epassword").val(password);
    $("#etype").val(type);
  });

  //Dodavanje vrednosti u delete user modal
  $(document).on("click", ".deleteUser", function () {
    var id = $(this).val();
    var username = $("#username" + id).text();

    $("#deleteUserId").val(id);
    $("#deleteUsername").text(username);
  });

});
