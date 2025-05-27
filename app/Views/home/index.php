<main>
    <div class="w3-container">
        <h2><?= $event['eventname'] ?></h2>
        <p><?= $event['subtext'] ?></p>
        <?= $event['eventvenue'] ?>
    </div>

    <br>

    <div class="w3-container">
        <a class="w3-button w3-large w3-round w3-teal w3-margin-right">Matches</a>
        &nbsp;
        &nbsp;
        &nbsp;
        <a href="/player" class="w3-button w3-small w3-round w3-border w3-border-teal w3-margin-right">Player</a>
        <a href="/team" class="w3-button w3-small w3-round w3-border w3-border-teal w3-margin-right">Team</a>
        <a href="/organization" class="w3-button w3-small w3-round w3-border w3-border-teal w3-margin-right">Organization</a>
        <a href="/setup" class="w3-button w3-round w3-small w3-border w3-border-teal w3-margin-right">Setup</a>
    </div>
</main>