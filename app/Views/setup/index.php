<main>
    <div class="w3-container">
        <a class="w3-small w3-text-red" href="/home">cancel</a>
        <h3>Setup for first time</h3>
    </div>

    <br>

    <form class="w3-container" method="post" action="/setup/update">
        <div class="w3-margin-bottom">
            <label>Event name</label>
            <input class="w3-input w3-border" type="text" name="eventname">
        </div>

        <div class="w3-margin-bottom">
            <label>Subtext for event name (if any)</label>
            <input class="w3-input w3-border" type="text" name="subtext">
        </div>

        <div class="w3-margin-bottom">
            <label>Venue (if any)</label>
            <input class="w3-input w3-border" type="text" name="eventvenue">
        </div>

        <div class="w3-margin-bottom">
            <button class="w3-button w3-teal w3-round" type="submit">Setup</button>
        </div>
    </form>
</main>