<div class="container mt-2">
    <h2><?php echo ucfirst($loggedUserType); ?></h2>
    <!-- Nav tabs -->


    <ul class="nav nav-pills mb-3 mt-3" id="pills-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-failure-tab" data-toggle="pill" href="#pills-failure" role="tab" aria-controls="pills-failure" aria-selected="true">Failure report</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-failureList-tab" data-toggle="pill" href="#pills-failureList" role="tab" aria-controls="pills-failureList" aria-selected="true">Failure List</a>
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
            <p class="bg-dark text-white p-5">Operater ima mogucnost prijave kvara masine odabirom masine iz padajuceg menija i opisivanjem samog kvara.
                <br> Klikom na "Add report" prijava se salje i ispisuje se na tabu 'Failure list'. <br>
                Kada Tehnicar resi kvar, ta prijava prelazi iz statusa "In progress" u status "Fixed" na tabu "Failure list".
            </p>
        </div>
        <div class="tab-pane fade" id="pills-failure" role="tabpanel" aria-labelledby="pills-failure-tab">
        <?php include_once('./view/operator/failureReport.view.php'); ?>
        </div>
        <div class="tab-pane fade" id="pills-failureList" role="tabpanel" aria-labelledby="pills-failureList-tab">
        <?php include_once('./view/operator/listOfFailures.view.php'); ?>
        </div>
    </div>
</div>
    
