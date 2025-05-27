<main>
    <div class="w3-container">
        <p><a href="/home" class="w3-small w3-text-red"><i class="fa fa-arrow-left"></i> return to home</a></p>

        <h3>Organization</h3>
    </div>

    <br>

    <div class="w3-container">
        <a href="/organization/add" class="w3-button w3-teal w3-round">Add organization</a>
    </div>

    <br>

    <div class="w3-container">
        <table class="w3-table w3-border w3-bordered">
            <tr>
                <th>No</th>
                <th>Logo</th>
                <th>Name</th>
                <th>Short name</th>
                <th>Options</th>
            </tr>
            <?php foreach ($organization as $key=>$row):?>
                <tr>
                    <td><?= ($key+1) ?></td>
                    <td><img width="100" src="<?= $row['logo_path'] ?>"/></td>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['short_name'] ?></td>
                    <td>
                        <a href="/organization/edit/<?= $row['id'] ?>">edit</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
</main>