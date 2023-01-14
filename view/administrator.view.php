<div class="container mt-2">
    <h2><?php echo ucfirst($loggedUserType); ?></h2>
    <!-- Nav tabs -->


    <ul class="nav nav-pills mb-3 mt-3" id="pills-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-addUser-tab" data-toggle="pill" href="#pills-addUser" role="tab" aria-controls="pills-addUser" aria-selected="true">Add User</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-users-tab" data-toggle="pill" href="#pills-users" role="tab" aria-controls="pills-users" aria-selected="true">Users</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-addEquipement-tab" data-toggle="pill" href="#pills-addEquipement" role="tab" aria-controls="pills-addEquipement" aria-selected="true">Add Equipement</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-equipement-tab" data-toggle="pill" href="#pills-equipement" role="tab" aria-controls="pills-Equipement" aria-selected="true">Equipement List</a>
        </li>
        <li class="nav-item ml-5">
            <form action="./includes/logout.inc.php" method="post">
                <button type="submit" name="logoutSubmit" class="btn btn-danger">Logout</button>
            </form>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <p class="bg-dark text-white p-5">
                Dodati 2 korisnika klikom na "Add user",popuniti formu i postaviti za jednog korisnika tip "Operater",
                a za drugog tip "Tehnicar".
                <br>
                Proizvoljno dodati opremu klikom na "Add equipement". <br>
                Nakon toga preko naloga "Operater" bice moguce otvaranje prijave, i resavanje iste preko naloga "Tehnicar".
            </p>
            <p class="bg-dark text-white p-5">
                Administrator ima mogucnost dodavanja novih korisnika, izmenu njihovih podataka i brisanje.<br>
                Ima mogucnost dodavanja novih masina, izmenu njihovih podataka i brisanje.<br>
                Logout dugme je funkcionalno.
            </p>
        </div>
        <div class="tab-pane fade" id="pills-addUser" role="tabpanel" aria-labelledby="pills-addUser-tab">
            <?php include_once('./view/administrator/users.add.php'); ?>
        </div>
        <div class="tab-pane fade pb-5" id="pills-users" role="tabpanel" aria-labelledby="pills-users-tab">
            <?php include_once('./view/administrator/users.read.php'); ?>
        </div>
        <div class="tab-pane fade" id="pills-addEquipement" role="tabpanel" aria-labelledby="pills-addEquipement-tab">
            <?php include_once('./view/administrator/equipement.add.php'); ?>
        </div>
        <div class="tab-pane fade" id="pills-equipement" role="tabpanel" aria-labelledby="pills-equipement-tab">
            <?php include_once('./view/administrator/equipement.read.php'); ?>
        </div>
    </div>
</div>
