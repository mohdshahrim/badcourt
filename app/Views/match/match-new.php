<main>
    <div class="w3-container">
        <p><a href="/home" class="w3-small w3-text-red"><i class="fa fa-close"></i> cancel</a></p>

        <h3>New Match</h3>
    </div>

    <br>

    <form class="w3-container" method="post" action="/match/create">
        <div class="w3-margin-bottom">
            <label>Match name</label>
            <input class="w3-input w3-border" type="text" name="match_name"/>
        </div>

        <br>

        <div class="w3-margin-bottom">
            <label>Category</label>
            <br>
            <input class="w3-radio" type="radio" name="match_category" value="Men Double" id="match-cat-men" checked>
            <label for="match-cat-men">Men Double</label>
            &nbsp;&nbsp;&nbsp;
            <input class="w3-radio" type="radio" name="match_category" value="Women Double" id="match-cat-women">
            <label for="match-cat-women">Women Double</label>
            &nbsp;&nbsp;&nbsp;
            <input class="w3-radio" type="radio" name="match_category" value="Mixed Double" id="match-cat-mixed">
            <label for="match-cat-mixed">Mixed Double</label>
        </div>

        <br>

        <div class="w3-margin-bottom">
            <div class="w3-grid" style="grid-template-columns:50% 50%;">
                <div>
                    <label>Team 1</label>
                    <select class="w3-select w3-border" name="team1_id">
                        <?php foreach ($team as $key=>$row):?>
                            <option value="<?= $row['id']?>"><?= $row['team_name']?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                
                <div>
                    <label>Team 2</label>
                    <select class="w3-select w3-border" name="team2_id">
                        <?php foreach ($team as $key=>$row):?>
                            <option value="<?= $row['id']?>"><?= $row['team_name']?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
        </div>

        <br>

        <div class="w3-margin-bottom">
            <label>Round</label>
            <input class="w3-input w3-border" type="text" name="round"/>
        </div>

        <br>

        <div class="w3-margin-bottom">
            <label>Start time <span class="w3-small w3-text-grey">(if empty it will be set Now)</span></label>
            <input class="w3-input w3-border" type="datetime-local" name="start_time"/>
        </div>

        <br>

        <div class="w3-margin-bottom">
            <label>Court Number</label>
            <input class="w3-input w3-border" type="text" name="court_number"/>
        </div>

        <br>

        <button class="w3-button w3-round w3-red" type="submit">Submit</button>
    </form>
</main>