<h4>Browse by Type : <?= $tipe ?></h4>
<hr>

<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>Date</th>
            <th>Title</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $start = 0;
        foreach ($data->result() as $repository) {
        ?>
            <tr>
                <?php
                $date_new = date('d-m-Y', strtotime($repository->date . "+0 days"));
                ?>
                <td><?php echo $date_new ?></td>
                <td><a href="<?= base_url() ?>home/single/<?= $repository->id ?>"><?php echo $repository->title ?></a></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>