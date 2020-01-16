<?php
    $dsn = 'mysql:host=localhost;dbname=aeroport_4_lab';
    $user = 'root';
    $pass = '';
    
    $connect = new PDO($dsn, $user, $pass);
    $list = $connect->query('select * from `maishiy_xizmat` order by `id`')->fetchAll();

?>
<table border="1">
    <thead>
        <th>Id</th>
        <th>Mexmonxona</th>
        <th>Oshxona</th>
        <th>Qushimcha</th>
    </thead>
    <tbody>
        <?php foreach($list as $item): ?>
            <tr>
                <td><?php echo $item['Id'] ?></td>
                <td><?php echo $item['Mehmonxona'] ?></td>
                <td><?php echo $item['Oshxona'] ?></td>
                <td><?php echo $item['Qushimcha'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
