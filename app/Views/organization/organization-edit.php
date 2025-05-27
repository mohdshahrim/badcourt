<main>
    <div class="w3-container">
        <p><a href="/organization" class="w3-small w3-text-red"><i class="fa fa-arrow-left"></i> return to organization</a></p>

        <h3>Update Organization</h3>
    </div>

    <?php helper('form'); ?>
    <?= form_open_multipart('/organization/update', ['class'=>'w3-container']) ?>
        <input type="hidden" name="id" value="<?= $organization['id']?>"/>

        <div class="w3-margin-bottom">
            <label>Organization name</label>
            <input class="w3-input w3-border" type="text" name="name" value="<?= $organization['name']?>">
        </div>

        <br>

        <div class="w3-margin-bottom">
            <label>Short name</label>
            <input class="w3-input w3-border" type="text" name="short_name" value="<?= $organization['short_name']?>">
        </div>

        <br>

        <div class="w3-margin-bottom">
            <label>Logo</label>
            <input class="w3-input w3-border" type="file" name="logo">
            <br>
            <p class="w3-small">current logo</p>
            <img width="100" src="/<?= $organization['logo_path']?>"/>
        </div>

        <br>

        <button class="w3-button w3-round w3-red" type="submit">Submit</button>
    </form>

    <br>

    <form class="w3-container" method="post" action="/organization/delete">
        <input type="hidden" name="id" value="<?= $organization['id'] ?>"/>
        <button class="w3-button w3-red w3-round" type="submit">Delete</button>
    </form>
</main>