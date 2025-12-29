<?=  $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Contact</h1>
            <table class="table">
                <?php foreach ($alamat as $a) : 
                    echo "<tr>";
                    echo "<td>" . $a['type'] . "</td>";
                    echo "<td>" . $a['alamat'] . "</td>";
                    echo "<td>" . $a['hp'] . "</td>";
                    echo "</tr>";
                endforeach;
                ?>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>