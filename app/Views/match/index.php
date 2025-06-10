<main>
    <div class="w3-container">
        <p><a href="/home" class="w3-small w3-text-red"><i class="fa fa-arrow-left"></i> return to home</a></p>

        <h3>Registered Matches</h3>
    </div>
    
    <br>

    <div class="w3-container">
        <a href="/match/new" class="w3-button w3-teal w3-round">New Match</a>
    </div>

    <br>

    <div class="w3-container">
        <p>
            filter by:
            <a href="/match">all</a>
            &nbsp;
            <a href="/match?status=ongoing">ongoing</a>
            &nbsp;
            <a href="/match?status=upcoming">upcoming</a>
            &nbsp;
            <a href="/match?status=completed">completed</a>
        </p>

        <table class="w3-table w3-border w3-bordered w3-small w3-hoverable">
            <colgroup>
                <col style="width:10px;" class="w3-light-gray">
                <col style="width:auto;">
                <col style="width:auto;">
                <col style="width:auto;">
                <col style="width:auto;">
                <col style="width:50px;" class="w3-light-gray">
            </colgroup>
            <tr>
                <th>No</th>
                <th style="text-align:center;">Team 1</th>
                <th></th>
                <th style="text-align:center;">Team 2</th>
                <th>Status</th>
                <th>Options</th>
            </tr>
            <?php foreach ($match as $key=>$row):?>
                <tr>
                    <td><?= ($key+1) ?></td>
                    <td style="text-align:center;">
                        <img width="30" src="<?= $row['logo1'] ?>"/>
                        <p><?= $row['t1'] ?></p>
                    </td>
                    <td>vs</td>
                    <td style="text-align:center;">
                        <img width="30" src="<?= $row['logo2'] ?>"/>
                        <p><?= $row['t2'] ?></p>
                    </td>
                    <td><?= $row['match_status'] ?></td>
                    <td>
                        <a href="/match/edit/<?= $row['id'] ?>">edit</a>
                        &nbsp;
                        <a href="/match/spectate/<?= $row['id'] ?>">spectate</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
</main>