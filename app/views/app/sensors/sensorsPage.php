<div class="sensors">
    <div>
        <div class="main-title">
            <?php
            echo strtoupper($this->s[$this->page]["rooms"]);
            ?>
        </div>

        <div class="rooms-list">
            <?php
            foreach ($_SESSION["user"]["houses"][$this->id - 1][2] as $room){
                require "roomList.php";
            }
            ?>
        </div>
    </div>

</div>