<main>
    <div class="w3-container">
        <p><a href="/home" class="w3-small w3-text-red"><i class="fa fa-arrow-left"></i> return to home</a></p>

        <h3>Team Registration</h3>
    </div>
    
    <br>

    <div class="w3-container">
        <a href="/team/org" class="w3-button w3-teal w3-round">Add team</a>
    </div>

    <br>

    <div class="w3-container">
        <table class="w3-table w3-border w3-bordered">
            <tr>
                <th>No</th>
                <th>Organization</th>
                <th>Team name</th>
                <th>Player1</th>
                <th>Player2</th>
                <th>Reserve</th>
                <th>Category</th>
                <th>Last updated</th>
            </tr>
            <?php foreach ($team as $key=>$row):?>
                <tr>
                    <td><?= ($key+1) ?></td>
                    <td><img width="50" src="/<?= $row['logo_path'] ?>"/></td>
                    <td><?= $row['team_name'] ?></td>
                    <td><?= $row['p1'] ?></td>
                    <td><?= $row['p2'] ?></td>
                    <td><?= $row['r'] ?></td>
                    <td><?= $row['category'] ?></td>
                    <td><?= $row['updated_at'] ?></td>
                    <td>
                        <a href="/team/edit/<?= $row['id'] ?>">edit</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>

</main>