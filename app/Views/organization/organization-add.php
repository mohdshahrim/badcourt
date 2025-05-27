<main>
    <div class="w3-container">
        <p><a href="/organization" class="w3-small w3-text-red"><i class="fa fa-arrow-left"></i> return to organization</a></p>

        <h3>Add Organization</h3>
    </div>

    <?php helper('form'); ?>
    <?= form_open_multipart('/organization/create', ['class'=>'w3-container']) ?>
        <div class="w3-margin-bottom">
            <label>Organization name</label>
            <input class="w3-input w3-border" type="text" name="name">
        </div>

        <br>

        <div class="w3-margin-bottom">
            <label>Short name</label>
            <input class="w3-input w3-border" type="text" name="short_name">
        </div>

        <br>

        <div class="w3-margin-bottom">
            <label>Logo</label>
            <input class="w3-input w3-border" type="file" name="logo">
        </div>

        <br>

        <button class="w3-button w3-round w3-red" type="submit">Submit</button>
    </form>
</main>