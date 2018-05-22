<div>
    <div class="room-title">
    <?php
    echo $room[1];
    ?>
    </div>

    <div class="sensors-list">
        <?php
        foreach ($room[2] as $sensor){
            require "sensorsList.php";
        }
        ?>
    </div>

</div>