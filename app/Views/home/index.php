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
    </div>

    <br>

    <div class="w3-container">
        <h3>Ongoing Matches</h3>

        <a href="/match" class="match-box w3-red w3-padding w3-round-large w3-margin-right">
            <p>HTSB vs SFC</p>
            <p>Men Double</p>
            <p>G1: 17-15</p>
        </a>

        <a href="/match" class="match-box w3-red w3-padding w3-round-large w3-margin-right">
            <p>STA vs STIDC</p>
            <p>Men Double</p>
            <p>G2: 0-3</p>
        </a>
    </div>

    <div class="spacer"></div>

    <div class="w3-container">
        <h3>Upcoming Matches</h3>

        <a href="/match" class="match-box w3-yellow w3-padding w3-round-large w3-margin-right">
            <p>HTSB vs STIDC</p>
            <p>Women Double</p>
            <p>G1: 0-0</p>
        </a>
    </div>

    <div class="spacer"></div>

    <div class="w3-container">
        <h3>Completed Matches</h3>

        <a href="/match" class="match-box w3-grey w3-padding w3-round-large w3-margin-right">
            <p>FDS vs HTSB</p>
            <p>Men Double</p>
            <p>G3: 0-0</p>
        </a>

        <a href="/match" class="match-box w3-grey w3-padding w3-round-large w3-margin-right">
            <p>STIDC vs HTSB</p>
            <p>Men Double</p>
            <p>G3: 0-0</p>
        </a>
    </div>
</main>