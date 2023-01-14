<?php
trait alerts
{
    public function noUserInDBMsg()
    {

        echo "<div class='alert alert-danger' role='alert'>
        There is no user in database.
                </div>";
    }
    public function emptyInputMsg()
    {
        echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
        Please fill all input fields.
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button></div>";
    }
    public function equipementEmptyFields()
    {
        echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
        Please fill all input fields.
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button></div>";
    }
    
    public function wrongUser()
    {
        echo "<div class='ml-3 alert alert-danger alert-dismissible fade show' role='alert'>
        Your email and/or password do not match.
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button></div>";
    }
    public function passwordMatchMsg()
    {
        echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
        Passwords doesnt match. Please re-enter your password.
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button></div>";
    }
    public function userAddedSuccessfully()
    {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        User added successfully.
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button></div>";
    }
    public function loggedOut()
    {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        Logged out successfully.
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button></div>";
    }
    public function reportAdded()
    {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        Report added successfully.
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button></div>";
    }
    public function reportCompleted()
    {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        Report completed.
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button></div>";
    }
    public function equipementAddedSuccessfully()
    {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        Equipement added successfully.
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button></div>";
    }
    public function userDeleted()
    {
        echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
        User deleted succesfully.
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button></div>";
    }
    public function equipementDeleted()
    {
        echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
        Equipement deleted succesfully.
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button></div>";
    }
    public function userUpdated()
    {
        echo "<div class='alert alert-info alert-dismissible fade show' role='alert'>
        User updated succesfully.
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button></div>";
    }
    public function equipementUpdated()
    {
        echo "<div class='alert alert-info alert-dismissible fade show' role='alert'>
        Equipement updated succesfully.
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button></div>";
    }
}
