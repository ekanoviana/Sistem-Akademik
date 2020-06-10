<div id="mahasiswa">
<h2>Data Mahasiswa</h2>
<?php
    if (!empty($mahasiswa)):?>
        <ul>
            <?php foreach($mahasiswa as $data): ?>
                <li><?=$data ?></li>
            <?php endforeach ?>
        </ul>
    <?php
        else:
    ?>
    <p>Data Mahasiswa Kosong.</p>
    <?php endif ?>
</div>