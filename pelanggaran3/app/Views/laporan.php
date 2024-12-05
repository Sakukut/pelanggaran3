<center>
    <h3>Laporan Data</h3>
    <table border="1">
        <tr>
            <th>Nama Siswa</th>
            <th>Poin Pelanggaran A</th>
            <th>Poin Pelanggaran B</th>
            <th>Total Poin</th>
            <th>Sanksi</th>
        </tr>
        <?php
        foreach($data as $d):
            ?>
            <tr>
                <td><?=$d['namasiswa']?></td>
                <td><?=$d['pelanggaranA']?></td>
                <td><?=$d['pelanggaranB']?></td>
                <td><?=$d['totalpoin']?></td>
                <td><?=$d['sanksi']?></td>
            </tr>
            <?php
            endforeach;
            ?>

    </table>
</center>