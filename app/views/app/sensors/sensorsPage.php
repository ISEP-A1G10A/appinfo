<div class="sensors">
    <div>
        <div class="main-title">
            <?php
            echo strtoupper($this->s[$this->page]["rooms"]);
            ?>
        </div>

        <div class="rooms-list">
            <?php
            $e = 0;
            $t = 0;
            foreach ($_SESSION["user"]["houses"][$this->id - 1][2] as $room){
                if(!sizeof($room[2]) == 0){
                    require "roomList.php";
                }else{
                    $e++;
                }
                $t++;
            }
            if($e == $t){
                echo "Aucun capteur, ajoutez en dans l'onglet paramètres";
            }
            ?>
        </div>
    </div>

</div>