<main>
    <div class="w3-container">
        <p><a href="/team" class="w3-small w3-text-red"><i class="fa fa-close"></i> cancel</a></p>
        <p style="margin-bottom:0;">Team Creation</p>
        <h3 style="margin-top:0;">Select Organization</h3>
    </div>

    <br>

    <div class="w3-container">
        <?php foreach ($organization as $key=>$row):?>
            <a class="w3-button w3-border w3-round w3-margin-right" href="/team/org/<?= $row['id'] ?>/add">
                <img width="100" src="/<?= $row['logo_path'] ?>"/>
            </a>
        <?php endforeach ?>
    </div>
</main>