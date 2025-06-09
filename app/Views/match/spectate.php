<script defer src="/minAjax.js"></script>

<style>
    .w3-table tr td {
        text-align: center;
    }
    .border-right {
        border-right:1px solid #ccc;
    }
    .spacer{height:80px;}
</style>

<main>
    <div class="w3-container w3-margin-bottom">
        <p><a href="/" class="w3-small w3-text-red"><i class="fa fa-arrow-left"></i> cancel</a> <span>Spectate Match</span></p>

        <h3 class="w3-hide-small">Spectate Match</h3>
        <p>Court Number [<span id="data_courtnumber"><?= $match['court_number']?></span>], Game/Set [<span id="data_currentgame"><?= $match['current_game']?></span>]</p>

        <button onclick="swapColumns()" class="w3-button w3-blue w3-small w3-round"><i class="fa fa-exchange"></i> Switch Side</button>
    </div>

    <div style="height:40px;"></div>

    <div class="w3-container">
        <input type="hidden" id="match_id" value="<?= $match['id'] ?>"/>
        <table id="spectate_table" class="w3-table">
            <colgroup>
                <col style="width: 50%">
                <col style="width: 50%;">
            </colgroup>
            <tr>
                <td>
                    <img width="40" src="/<?= $match['logo1'] ?>"/>
                </td>
                <td>
                    <img width="40" src="/<?= $match['logo2'] ?>"/>
                </td>
            </tr>
            <tr>
                <td class="w3-small">
                    <?= $match['t1'] ?>
                </td>
                <td class="w3-small">
                    <?= $match['t2'] ?>
                </td>
            </tr>

            <tr>
                <td class="w3-xxxlarge" id="data_score1">
                    <?php
                        if ($match['current_game']==1) {
                            echo $match['game1_score1'];
                        } elseif ($match['current_game']==2) {
                            echo $match['game2_score1'];
                        } elseif ($match['current_game']==3) {
                            echo $match['game3_score1'];
                        }
                    ?>
                </td>
                <td class="w3-xxxlarge" id="data_score2">
                <?php
                        if ($match['current_game']==1) {
                            echo $match['game1_score2'];
                        } elseif ($match['current_game']==2) {
                            echo $match['game2_score2'];
                        } elseif ($match['current_game']==3) {
                            echo $match['game3_score2'];
                        }
                    ?>
                </td>
            </tr>

            <tr>
                <td>
                    <button onclick="spectateUpdate('TEAM1_PLUS')" class="w3-button w3-red w3-xxxlarge w3-round-large w3-block">+1</button>
                </td>
                <td>
                    <button onclick="spectateUpdate('TEAM2_PLUS')" class="w3-button w3-red w3-xxxlarge w3-round-large w3-block">+1</button>
                </td>
            </tr>
            <tr>
                <td>
                    <button onclick="spectateUpdate('TEAM1_MINUS')" class="w3-button w3-text-red w3-border w3-border-red w3-round-large">-1</button>
                </td>
                <td>
                    <button onclick="spectateUpdate('TEAM2_MINUS')" class="w3-button w3-text-red w3-border w3-border-red w3-round-large">-1</button>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <div class="spacer"></div>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <button onclick="spectateUpdate('FINISH_GAME')" class="w3-button w3-teal w3-block w3-round w3-xlarge">Finish Game/Set</button>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <table class="w3-table w3-border w3-bordered w3-small">
                        <tr>
                            <td class="border-right"><?= $match['t1'] ?></td>
                            <td id="data_game1score1" class="border-right"><?= $match['game1_score1'] ?></td>
                            <td id="data_game2score1" class="border-right"><?= $match['game2_score1'] ?></td>
                            <td id="data_game3score1"><?= $match['game3_score1'] ?></td>
                        </tr>
                        <tr>
                            <td class="border-right"><?= $match['t2'] ?></td>
                            <td id="data_game1score2" class="border-right"><?= $match['game1_score2'] ?></td>
                            <td id="data_game2score2" class="border-right"><?= $match['game2_score2'] ?></td>
                            <td id="data_game3score2"><?= $match['game3_score2'] ?></td>
                        </tr>
                    </table>
                </td>
            </tr>


            <tr>
                <td colspan="2">
                    <button onclick="spectateUpdate('COMPLETE_MATCH')" class="w3-button w3-border w3-text-red w3-border-red w3-block w3-round">Complete Match</button>
                </td>
            </tr>
        </table>
    </div>

</main>

<script>
function spectateUpdate(signal) {
    minAjax({
        url: "/match/spectate/update",
        type: "POST",
        data: {
            match_id: document.getElementById('match_id').value,
            signal: signal,
        },
        success: function(response) {
            var data = JSON.parse(response);

            // refresh 10 informations
            document.getElementById('data_courtnumber').innerText = data['matchdata']['court_number'];
            document.getElementById('data_currentgame').innerText = data['matchdata']['current_game'];

            document.getElementById('data_score1').innerText = data['score1'];
            document.getElementById('data_score2').innerText = data['score2'];
            
            document.getElementById('data_game1score1').innerText = data['matchdata']['game1_score1'];
            document.getElementById('data_game2score1').innerText = data['matchdata']['game2_score1'];
            document.getElementById('data_game3score1').innerText = data['matchdata']['game3_score1'];

            document.getElementById('data_game1score2').innerText = data['matchdata']['game1_score2'];
            document.getElementById('data_game2score2').innerText = data['matchdata']['game2_score2'];
            document.getElementById('data_game3score2').innerText = data['matchdata']['game3_score2'];

            if (data['matchdata']['match_status']=="completed") {
                window.location.replace("/match/spectate_message");
            }
        }
    });
}

function swapColumns() {
    const rows = document.querySelectorAll("#spectate_table tr");

    rows.forEach(row => {
        const tds = Array.from(row.querySelectorAll("td"));

        // Only process rows with exactly 2 tds and no colspan
        if (tds.length === 2 &&
            !tds[0].hasAttribute("colspan") &&
            !tds[1].hasAttribute("colspan")) {

            // Swap content
            const tempHTML = tds[0].innerHTML;
            tds[0].innerHTML = tds[1].innerHTML;
            tds[1].innerHTML = tempHTML;

            // Swap IDs
            const tempID = tds[0].id;
            tds[0].id = tds[1].id;
            tds[1].id = tempID;
        }
    });
}
</script>