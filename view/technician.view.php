<div class="container mt-2">
    <h2><?php echo ucfirst($loggedUserType); ?></h2>
    <!-- Nav tabs -->


    <ul class="nav nav-pills mb-3 mt-3" id="pills-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-failureReported-tab" data-toggle="pill" href="#pills-failureReported" role="tab" aria-controls="pills-failureReported" aria-selected="true">List of Reported Equipement</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-failureFixed-tab" data-toggle="pill" href="#pills-failureFixed" role="tab" aria-controls="pills-failureFixed" aria-selected="true">List of Repaired Equipement</a>
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
            <p class="bg-dark text-white p-5">Tehnicar ima mogucnost pregleda trenutno prijavjenih kvarova.<br>
        Klikom na dugme "Fix", prijava se prebacuje u status "Fixed" i prosledjuje u listu "List of Repaired Equipement".</p>
        </div>
        <div class="tab-pane fade" id="pills-failureReported" role="tabpanel" aria-labelledby="pills-failureReported-tab">
        <?php include_once('./view/technician/listOfReported.view.php'); ?>
        </div>
        <div class="tab-pane fade" id="pills-failureFixed" role="tabpanel" aria-labelledby="pills-failureList-tab">
        <?php include_once('./view/technician/listOfFixed.view.php'); ?>
        </div>
    </div>
</div>
    
