<form action="controller/addReport.php" method="POST">
    <h3>Add report</h3>
    <div class="form-row">
    <div class="form-group col-md-1">
            <label for="operatorID">Operator</label>
            <input type="text" id="operatorID" 
            value="<?php echo $loggedUser->getId(); ?>" 
            class="form-control" name="operatorID" readonly>
        </div>
        <div class="form-group col-md-3">
            <label for="operator">Operator</label>
            <input type="text" id="operator" 
            value="<?php echo $loggedUser->getFirstName() . ' ' . $loggedUser->getLastName(); ?>" 
            class="form-control" name="operator" readonly>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="equipement">Equipement</label>
            <select class="form-control" name="equipement" id="equipement">
                <?php
                foreach ($allEquipement as $equipement) :
                    $eqInfo = $equipement->getId() . ' '
                        . $equipement->getName() . ' '
                        . $equipement->getModel() . ' '
                        . $equipement->getProcess();
                ?>
                    <option value="<?php echo $equipement->getId(); ?>">
                        <?php echo $eqInfo; ?>
                    </option>
                <?php
                endforeach;
                ?>
            </select>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="failureDesc">Example textarea</label>
            <textarea name="failureDesc" class="form-control" id="failureDesc" rows="3"></textarea>
        </div>
    </div>
    <button type="submit" class="btn btn-primary col-md-4" name="submitReport">Add report</button>
</form>