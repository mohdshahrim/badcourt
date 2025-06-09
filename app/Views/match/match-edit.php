<style>
    .spacer{height:80px;}
</style>
<main>
    <div class="w3-container">
        <p><a href="/match" class="w3-small w3-text-red"><i class="fa fa-close"></i> cancel</a></p>

        <h3>Edit Match</h3>
    </div>

    <br>

    <form class="w3-container" method="post" action="/match/update">
        <input type="hidden" name="id" value="<?= $match['id'] ?>"/>

        <div class="w3-margin-bottom">
            <label>Match name</label>
            <input class="w3-input w3-border" type="text" name="match_name" value="<?= $match['match_name'] ?>"/>
        </div>


        <div class="w3-margin-bottom">
            <h4>Scoreboard</h4>

            <table style="width: 40%;" class="w3-table w3-border w3-bordered">
                <colgroup>
                    <col style="width: auto">
                    <col style="width: 10%;">
                    <col style="width: 10%;">
                    <col style="width: 10%;">
                </colgroup>
                <tr>
                    <td style="vertical-align:middle;">Team 1 - <b><?= $match['team1_name'] ?></b></td>
                    <td>
                        <input class="w3-input w3-border" type="text" name="game1_score1" value="<?= $match['game1_score1'] ?>"/>
                    </td>
                    <td>
                        <input class="w3-input w3-border" type="text" name="game2_score1" value="<?= $match['game2_score1'] ?>"/>
                    </td>
                    <td>
                        <input class="w3-input w3-border" type="text" name="game3_score1" value="<?= $match['game3_score1'] ?>"/>
                    </td>
                </tr>
                <tr>
                    <td style="vertical-align:middle;">Team 2 - <b><?= $match['team2_name'] ?></b></td>
                    <td>
                        <input class="w3-input w3-border" type="text" name="game1_score2" value="<?= $match['game1_score2'] ?>"/>
                    </td>
                    <td>
                        <input class="w3-input w3-border" type="text" name="game2_score2" value="<?= $match['game2_score2'] ?>"/>
                    </td>
                    <td>
                        <input class="w3-input w3-border" type="text" name="game3_score2" value="<?= $match['game3_score2'] ?>"/>
                    </td>
                </tr>
            </table>
        </div>

        <div class="w3-margin-bottom">
            <table style="width: 40%;">
                <tr>
                    <td>
                        <label>Current Game/Set</label>
                    </td>
                    <td>
                        <input class="w3-input w3-border" type="text" name="current_game" value="<?= $match['current_game']?>"/>            
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>Round</label>
                    </td>
                    <td>
                        <input class="w3-input w3-border" type="text" name="round" value="<?= $match['round'] ?>"/>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>Match Status</label>
                    </td>
                    <td>
                        <input class="w3-input w3-border" type="text" name="match_status" placeholder="upcoming / ongoing / completed" value="<?= $match['match_status'] ?>"/>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>Court Number</label>
                    </td>
                    <td>
                        <input class="w3-input w3-border" type="text" name="court_number" value="<?= $match['court_number'] ?>"/>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>Start time</label>
                    </td>
                    <td>
                        <input class="w3-input w3-border" type="datetime-local" name="start_time" value="<?= $match['start_time'] ?>"/>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>End time</label>
                    </td>
                    <td>
                        <input class="w3-input w3-border" type="datetime-local" name="end_time" value="<?= $match['end_time'] ?>"/>
                    </td>
                </tr>
            </table>
        </div>


        <div class="spacer"></div>

        <div class="w3-margin-bottom">
            <h4>Match details</h4>

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
                            <option value="<?= $row['id']?>" <?= ($match['team1_id']==$row['id'])?"selected":"" ?>><?= $row['team_name']?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                
                <div>
                    <label>Team 2</label>
                    <select class="w3-select w3-border" name="team2_id">
                        <?php foreach ($team as $key=>$row):?>
                            <option value="<?= $row['id']?>" <?= ($match['team2_id']==$row['id'])?"selected":"" ?>><?= $row['team_name']?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
        </div>

        <div class="spacer"></div>

        <button class="w3-button w3-round w3-red w3-xlarge" type="submit">Submit</button>
    </form>

    <div class="spacer"></div>

    <div class="w3-container w3-margin-top">
        <form method="post" action="/match/delete">
            <input type="hidden" name="id" value="<?= $match['id'] ?>" />
            <button type="submit" class="w3-button w3-small w3-border w3-border-red w3-text-red">delete</button>
            <p class="w3-text-red">CAREFUL! This cannot be undone!</p>
        </form>
    </div>
</main>