<table  class="table table-sm">
  <thead class="thead-dark">
        <tr>
            <th>Report ID</th>
            <th>Operator ID</th>
            <th>Operator Name</th>
            <th>Equipement ID</th>
            <th>Equipement Name</th>
            <th>Equipement Model</th>
            <th>Process</th>
            <th>Failure Description</th>
            <th>Report Date</th>
            <th>Fixed Date</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($_SESSION['addedReport'] as $failureReport) :
            if ($failureReport->getStatus()) {
        ?>
                <tr class="table-secondary">
                    <td><?php echo $failureReport->getId(); ?></td>
                    <td><?php echo $failureReport->getUser()->getId(); ?></td>
                    <td><?php echo $failureReport->getUser()->getFirstName() . " " . $failureReport->getUser()->getLastName(); ?></td>
                    <td><?php echo $failureReport->getEquipement()->getId(); ?></td>
                    <td><?php echo $failureReport->getEquipement()->getName(); ?></td>
                    <td><?php echo $failureReport->getEquipement()->getModel(); ?></td>
                    <td><?php echo $failureReport->getEquipement()->getProcess(); ?></td>
                    <td><?php echo $failureReport->getDescription(); ?></td>
                    <td><?php echo Controller::getDateFormat($failureReport->getReportDate()); ?></td>
                    <td><?php echo Controller::getDateFormat($failureReport->getFixedDate()); ?></td>
                </tr>
        <?php

            }
        endforeach; ?>

    </tbody>
</table>
