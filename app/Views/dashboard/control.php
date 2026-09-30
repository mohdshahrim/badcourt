<main>
    <div class="w3-container">
        <p><a href="/home" class="w3-small w3-text-red"><i class="fa fa-arrow-left"></i> return to home</a></p>

        <h3>Dashboard/Livescore Control</h3>
        <p>See <a href="/d1">dashboard</a></p>
    </div>

    <div class="w3-container">
        <form action="/livescore/update" method="post">
            <table style="width:40%;">
                <tr>
                    <td>
                        <label>Court 1</label>
                    </td>
                    <td>
                        <input class="w3-input w3-border" type="text" name="court_1" value="<?= $dashboard['court_1'] ?>"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Court 2</label>
                    </td>
                    <td>
                        <input class="w3-input w3-border" type="text" name="court_2" value="<?= $dashboard['court_2'] ?>"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Court 3</label>
                    </td>
                    <td>
                        <input class="w3-input w3-border" type="text" name="court_3" value="<?= $dashboard['court_3'] ?>"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Court 4</label>
                    </td>
                    <td>
                        <input class="w3-input w3-border" type="text" name="court_4" value="<?= $dashboard['court_4'] ?>"/>
                    </td>
                </tr>
            </table>

            <button type="submit" class="w3-button w3-red">Update</button>
        </form>
    </div>
</main>