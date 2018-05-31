<div class="sensors">
    <div class="new-sensor">
        <form>
            <select name="room" class="sensor-dropdown">
                <?php foreach ($this->homes[$this->id - 1][7] as $room){ ?>
                    <option value="<?php echo $room[1] ?>"><?php echo $room[1] ?></option>

                <?php } ?>
                <input type="text" name="new-sensor" class="sensor-input"
                       placeholder="<?php $this->s[$this->page]["new"] ?>">
        </form>
    </div>

    <div class="sensor-table">
        <?php foreach($this->homes[$this->id - 1][7] as $room) { ?>
            <div class="room-table">
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
            </div>
        <?php } ?>
    </div>
</div>