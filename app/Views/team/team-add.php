<main>
    <div class="w3-container">
        <p><a href="/team" class="w3-small w3-text-red"><i class="fa fa-close"></i> cancel</a></p>

        <h3>Add Team <?= $organization['short_name'] ?></h3>
    </div>

    <br>

    <form class="w3-container" method="post" action="/team/create">
        <div class="w3-margin-bottom">
            <img width="50" src="/<?= $organization['logo_path'] ?>"/>
            <input type="hidden" name="organization_id" value="<?= $organization['id'] ?>" />
        </div>

        <br>

        <div class="w3-margin-bottom">
            <label>Team name</label>
            <input class="w3-input w3-border" type="text" name="team_name">
        </div>

        <br>

        <div class="w3-margin-bottom">
            <label>Player 1</label>
            <select class="w3-select w3-border" name="player1">
                <option value="0"></option>
                <?php foreach ($player as $key=>$row):?>
                    <option value="<?= $row['id']?>"><?= $row['name']?></option>
                <?php endforeach ?>
            </select>
        </div>

        <br>

        <div class="w3-margin-bottom">
            <label>Player 2</label>
            <select class="w3-select w3-border" name="player2">
                <option value="0"></option>
                <?php foreach ($player as $key=>$row):?>
                    <option value="<?= $row['id']?>"><?= $row['name']?></option>
                <?php endforeach ?>
            </select>
        </div>

        <br>

        <div class="w3-margin-bottom">
            <label>Reserve</label>
            <select class="w3-select w3-border" name="reserve">
                <option value="0"></option>
                <?php foreach ($player as $key=>$row):?>
                    <option value="<?= $row['id']?>"><?= $row['name']?></option>
                <?php endforeach ?>
            </select>
        </div>

        <br>

        <div class="w3-margin-bottom">
            <label>Category</label>
            <br>
            <input class="w3-radio" type="radio" name="category" value="Men" id="team-cat-men" checked>
            <label for="team-cat-men">Men Double</label>
            &nbsp;&nbsp;&nbsp;
            <input class="w3-radio" type="radio" name="category" value="Women" id="team-cat-women">
            <label for="team-cat-women">Women Double</label>
            &nbsp;&nbsp;&nbsp;
            <input class="w3-radio" type="radio" name="category" value="Mixed" id="team-cat-mixed">
            <label for="team-cat-mixed">Mixed Double</label>
        </div>

        <br>

        <button class="w3-button w3-round w3-red" type="submit">Submit</button>
    </form>

</main>