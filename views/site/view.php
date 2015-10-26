
    <table class="table border">
        <thead>
            <tr>
                <td>ID</td>
                <td>STATUS</td>
                <td>CREATED</td>
            </tr>
        </thead>
        <tbody>
        <?php foreach($rows as $item):?>
            <tr>
                <td><?=$item->id;?></td>
                <td><?=$item->status;?></td>
                <td><?= Yii::$app->formatter->format($item->created_at, 'datetime');?></td>
                <td><?= Yii::$app->formatter->format($item->updated_at, 'datetime');?></td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>