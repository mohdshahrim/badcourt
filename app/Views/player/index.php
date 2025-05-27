<main>
    <div class="w3-container">
        <p><a href="/home" class="w3-small w3-text-red"><i class="fa fa-arrow-left"></i> return to home</a></p>

        <h3>Player Registration</h3>
    </div>
    
    <br>

    <div class="w3-container">
        <a href="/player/add" class="w3-button w3-teal w3-round">Add player</a>
    </div>

    <br>

    <div class="w3-container">
        <table class="w3-table w3-border w3-bordered">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Organization</th>
                <th>Gender</th>
                <th>Tel No.</th>
                <th>Options</th>
            </tr>
            <?php foreach ($player as $key=>$row):?>
                <tr>
                    <td><?= ($key+1) ?></td>
                    <td><?= $row['pn'] ?></td>
                    <td><img width="50" src="/<?= $row['logo_path'] ?>"/></td>
                    <td><?= $row['gender'] ?></td>
                    <td><?= $row['contact_no'] ?></td>
                    <td>
                        <a href="/player/edit/<?= $row['id'] ?>">edit</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>

</main>