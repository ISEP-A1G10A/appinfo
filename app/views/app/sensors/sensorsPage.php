<div class="sensors">
    <div class="sensors-elements">
        <?php $this->displayErrors("sensors") ?>
        <div class="new-sensor">
            <form action="<?php echo new URL("houses/" . $this->id . "/sensors/") ?>" method="post"
                  class="new-sensor-form">
                <input name="form" value="sensors" type="hidden">

                <input type="text" name="new-sensor" class="sensor-input"
                       placeholder="<?php echo ucfirst($this->s[$this->page]["new"]) ?>">
                <input type="number" name="new-sensor-type" class="sensor-input"
                       placeholder="<?php echo ucfirst($this->s[$this->page]["sensor-type"]) ?>">
                <label>
                    <select class="dropdown" name="new-sensor-room">
                        <?php foreach ($this->homes[$this->id - 1][7] as $room){ ?>
                            <option value="<?php echo $room[1] ?>"><?php echo $room[1] ?></option>
                        <?php } ?>
                    </select>
                </label>
                <input type="submit" class="design-btn-raised new-sensor-submit-btn"
                       value="<?php echo strtoupper($this->s[$this->page]["add"]) ?>">
            </form>
        </div>

        <div class="sensor-table">
            <?php foreach($this->homes[$this->id - 1][7] as $room) { ?>
                <div class="room-table">
                    <table border="1">
                        <div class="table-title"><?php echo $room[1] ?></div>
                        <?php if(sizeof($room[2]) === 0){ ?>
                            <div class="table-text"><?php echo ucfirst($this->s[$this->page]["no-sensor"]) ?></div>
                        <?php }else{ ?>
                            <tr>
                                <th><?php echo ucfirst($this->s[$this->page]["id"]) ?></th>
                                <th><?php echo ucfirst($this->s[$this->page]["label"]) ?></th>
                                <th><?php echo ucfirst($this->s[$this->page]["type"]) ?></th>
                                <th><?php echo ucfirst($this->s[$this->page]["state"]) ?></th>
                                <th><?php echo ucfirst($this->s[$this->page]["actions"]) ?></th>
                            </tr>

                            <?php foreach ($room[2] as $sensor){ ?>
                                <tr class="<?php echo $sensor[0] ?>">
                                    <td><?php echo $sensor[0] ?></td>
                                    <td><input onkeypress="return editSensor(event, <?php echo $sensor[0] ?>, <?php echo $this->id ?>);"
                                               class="table-input" id="label-<?php echo $sensor[0] ?>" type="text" value="<?php echo $sensor[1] ?>"></td>
                                    <td><?php echo $sensor[2] ?></td>

                                    <?php if($sensor[3]){ ?>
                                        <td><input type="checkbox" id="<?php echo $sensor[0] ?>" name="set-name" class="switch-input" checked>
                                            <label for="<?php echo $sensor[0] ?>" class="switch-label" onclick="toggleState(<?php echo $sensor[0] ?>, <?php echo $this->id ?>)"></label></td>
                                    <?php }else{ ?>
                                        <td><input type="checkbox" id="<?php echo $sensor[0] ?>" name="set-name" class="switch-input">
                                            <label for="<?php echo $sensor[0] ?>" class="switch-label" onclick="toggleState(<?php echo $sensor[0] ?>, <?php echo $this->id ?>)"></label></td>
                                    <?php } ?>
                                    <td>null</td>

                                    <td><img src="<?php echo new URL("img/icons/delete.png") ?>" class="delete-button"
                                             onclick="deleteSensor(<?php echo $sensor[0] ?>, <?php echo $this->id ?>, <?php echo sizeof($room[2]) ?>)"></td>
                                </tr>
                                <?php
                            }
                        } ?>
                    </table>
                </div>
            <?php } ?>
        </div>
    </div>
</div>