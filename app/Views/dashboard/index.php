<style>
    .spacer{height:80px;}
    .match-box{
        display:block;
        text-decoration:none;
        width:200px;
    }
</style>

<main>
    <div class="w3-container">
        <p>Ongoing Matches</p>
        <br>

        <table class="w3-table">
            <?php foreach ($match_ongoing as $key=>$row):?>
                <tr>
                    <td>
                        <a href="/match/spectate/<?= $row['id'] ?>" class="w3-button w3-block w3-red w3-round-large">
                            <p><?= $row['t1'] ?></p>
                            <p>vs</p>
                            <p><?= $row['t2'] ?></p>
                            <p class="w3-blue w3-padding w3-round-large">Court Number <?= $row['court_number'] ?></p>
                        </a>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
</main>