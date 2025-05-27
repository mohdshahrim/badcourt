<main>
    <div class="w3-container">
        <p><a href="/player" class="w3-small w3-text-red"><i class="fa fa-arrow-left"></i> return to player registration</a></p>

        <h3>Edit Player</h3>
    </div>

    <form class="w3-container" method="post" action="/player/update">
        <input type="hidden" name="id" value="<?= $player['id']?>"/>
        <div class="w3-margin-bottom">
            <label>Name</label>
            <input class="w3-input w3-border" type="text" name="name" value="<?= $player['name']?>">
        </div>

        <br>

        <div class="w3-margin-bottom">
            <label>Gender</label>
            <br>
            <input class="w3-radio" type="radio" name="gender" value="M" id="player-gender-male" <?= ($player['gender']=="M")?"checked":"" ?>>
            <label for="player-gender-male">Male</label>
            &nbsp;&nbsp;&nbsp;
            <input class="w3-radio" type="radio" name="gender" value="F" id="player-gender-female" <?= ($player['gender']=="F")?"checked":"" ?>>
            <label for="player-gender-female">Female</label>
        </div>

        <br>

        <div class="w3-margin-bottom">
            <label>Contact No</label>
            <input class="w3-input w3-border" type="text" name="contact_no" value="<?= $player['contact_no']?>">
        </div>

        <br>

        <div class="w3-margin-bottom">
            <label>Organization</label>
            <select class="w3-select w3-border" name="organization">
            <?php foreach ($organization as $key=>$row):?>
                <option value="<?= $row['id']?>"><?= $row['short_name']?></option>
            <?php endforeach ?>
            </select>
        </div>

        <br>

        <button class="w3-button w3-round w3-red" type="submit">Submit</button>
    </form>
</main>