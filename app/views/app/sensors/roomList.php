<div>
    <div class="room-title">
    <?php
    echo $room[0];
    ?>
    </div>

    <div class="sensors-list">
        <?php
        foreach ($room[1] as $sensor){
            require "sensorsList.php";
        }
        ?>
    </div>

</div>