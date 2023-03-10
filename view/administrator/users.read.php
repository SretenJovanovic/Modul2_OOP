<h2>User List</h2>
<table class="table table-sm mb-5">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Type</th>
            <th colspan=2 class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($allUsers as $user) :
            if (($user->getType() !== 'administrator') || ($user->getId() != '1')) :
        ?>
                <tr class="table-secondary">
                    <td><?php echo $user->getId(); ?></td>
                    <td id="username<?php echo $user->getId(); ?>"><?php echo $user->getUsername(); ?></td>
                    <td id="firstName<?php echo $user->getId(); ?>"><?php echo $user->getFirstName(); ?></td>
                    <td id="lastName<?php echo $user->getId(); ?>"><?php echo $user->getLastName(); ?></td>
                    <td id="email<?php echo $user->getId(); ?>"><?php echo $user->getEmail(); ?></td>
                    <td id="password<?php echo $user->getId(); ?>"><?php echo $user->getPassword(); ?></td>
                    <td id="type<?php echo $user->getId(); ?>"><?php echo $user->getType(); ?></td>
                    <td class="text-right">
                    <input type="hidden" id="age<?php echo $user->getId(); ?>" value="<?php echo $user->getAge(); ?>">
                    <input type="hidden" id="phone<?php echo $user->getId(); ?>" value="<?php echo $user->getPhoneNumber(); ?>">
                        <button type="button" class="btn btn-primary btn-block editUser" data-toggle="modal" data-target="#editUserModal" value="<?php echo $user->getId(); ?>">
                            Edit
                        </button>
                        <?php include_once('users.edit.php'); ?>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-danger deleteUser" data-toggle="modal" data-target="#deleteUserModal" value="<?php echo $user->getId(); ?>">
                            Delete
                        </button>
                        <?php include_once('users.delete.php'); ?>
                    </td>
                </tr>

        <?php endif;
        endforeach; ?>

    </tbody>
</table>