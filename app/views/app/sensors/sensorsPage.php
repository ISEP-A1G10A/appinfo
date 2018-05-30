<div class="sensors">
    <div class="new-sensor">

        <input name="new-sensor" placeholder="<?php $this->s[$this->page]["new"] ?>">

    </div>
    <div class="sensor-table">
        <?php foreach($this->homes[$this->id - 1][7] as $room) { ?>
            <div class="table-title"><?php echo $room[1] ?></div>
            <table>
                <tr>
                    <th>id</th>
                    <th>label</th>
                    <th>type</th>
                    <th>état</th>
                </tr>
                <?php foreach ($room[2] as $sensor){ ?>
                <tr>
                    <td><?php echo $sensor[0] ?></td>
                    <td><?php echo $sensor[1] ?></td>
                    <td><?php echo $sensor[2] ?></td>
                </tr>
                <?php } ?>
            </table>
        <?php } ?>
    </div>
</div>