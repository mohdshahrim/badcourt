<style>
    .spacer{height:80px;}
    .match-box{
        display:inline-block;
        text-decoration:none;
        width:200px;
    }
</style>
<main>
    <div class="w3-container">
        <h2><?= $event['eventname'] ?></h2>
        <p><?= $event['subtext'] ?></p>
        <?= $event['eventvenue'] ?>
    </div>

    <br>

    <div class="w3-container">
        <a href="/match/new" class="w3-button w3-large w3-round w3-teal w3-margin-right">New Match</a>
        &nbsp;
        &nbsp;
        &nbsp;
        <a href="/match" class="w3-button w3-small w3-round w3-border w3-border-teal w3-margin-right">Matches</a>
        <a href="/player" class="w3-button w3-small w3-round w3-border w3-border-teal w3-margin-right">Player</a>
        <a href="/team" class="w3-button w3-small w3-round w3-border w3-border-teal w3-margin-right">Team</a>
        <a href="/organization" class="w3-button w3-small w3-round w3-border w3-border-teal w3-margin-right">Organization</a>
        <a href="/setup" class="w3-button w3-round w3-small w3-border w3-border-teal w3-margin-right">Setup</a>
        <a href="/" class="w3-button w3-small w3-round w3-border w3-border-teal w3-margin-right">Spectator</a>
        <a href="/livescore" class="w3-button w3-small w3-round w3-border w3-border-teal w3-margin-right">Livescore</a>
    </div>

    <br>

    <div class="w3-container">
        <h3>Ongoing Matches</h3>

        <?php foreach ($match_ongoing as $key=>$row):?>
            <a href="/match/edit/<?= $row['id'] ?>" class="match-box w3-red w3-padding w3-round-large w3-margin-right">
                <p><?= $row['team1_id'] ?> vs <?= $row['team2_id'] ?></p>
                <p><?= $row['match_category'] ?></p>
                <p>G1: 17-15</p>
            </a> 
        <?php endforeach ?>
    </div>

    <div class="spacer"></div>

    <div class="w3-container">
        <h3>Upcoming Matches</h3>

        <?php foreach ($match_upcoming as $key=>$row):?>
            <a href="/match/edit/<?= $row['id'] ?>" class="match-box w3-yellow w3-padding w3-round-large w3-margin-right">
                <p><?= $row['team1_id'] ?> vs <?= $row['team2_id'] ?></p>
                <p><?= $row['match_category'] ?></p>
                <p>G1: 17-15</p>
            </a> 
        <?php endforeach ?>
    </div>

    <div class="spacer"></div>

    <div class="w3-container">
        <h3>Completed Matches</h3>

        <?php foreach ($match_completed as $key=>$row):?>
            <a href="/match/edit/<?= $row['id'] ?>" class="match-box w3-grey w3-padding w3-round-large w3-margin-right">
                <p><?= $row['team1_id'] ?> vs <?= $row['team2_id'] ?></p>
                <p><?= $row['match_category'] ?></p>
                <p>G1: 17-15</p>
            </a> 
        <?php endforeach ?>
    </div>
</main>