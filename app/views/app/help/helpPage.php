<div class="help">
    <div class="help-tel-part">

        <div class="help-tel-part-info">
            <div class="help-tel-part-name"><?php echo ucfirst($this->s[$this->page]["phone_contact"]) ?></div>
            <div class="help-tel-part-info-2">
                <div class="help-tel">
                    <p><span class="help-tel-part-name"><?php echo ucfirst($this->s[$this->page]["phone_text_1"]) ?></span></p> <span
                            class="help-telnumber"><?php echo $this->s[$this->page]["phone_1"] ?></span>
                </div>

                <div class="help-client">
                    <p><span class="help-tel-part-name"><?php echo ucfirst($this->s[$this->page]["phone_text_2"]) ?></span></p> <span
                            class="help-client-number"><?php echo $this->s[$this->page]["phone_2"] ?></span>
                </div>
            </div>
        </div>
        <div class="help-description">
            <div class="help-des-title"><?php echo ucfirst($this->s[$this->page]["phone_explain"]) ?></div>

            <div class="help-des-text"><?php echo ucfirst($this->s[$this->page]["phone_explain_1"]) ?><br>
                <?php echo ucfirst($this->s[$this->page]["phone_explain_2"]) ?><br>
                <?php echo ucfirst($this->s[$this->page]["phone_explain_3"]) ?><br>
                <?php echo ucfirst($this->s[$this->page]["phone_explain_4"]) ?><br>
            </div>
        </div>

    </div>


    <hr>
    <br>
    <div class="help-tel-part-name"><?php echo ucfirst($this->s[$this->page]["mail_contact"]) ?></div>
    <br>
    <div class="help-message-part">
        <div class="help-message-ask"><?php echo ucfirst($this->s[$this->page]["mail_question_1"]) ?></div>
        <div class="help-message-choice">
            <div class="help-message-btn" id="1" onclick="setSelected(1)">
                <span class="design-btn-raised design-help-btn"><span class=""><?php echo ucfirst($this->s[$this->page]["mail_object_1"]) ?></span></span>
            </div>
            <div class="help-message-btn" id="2" onclick="setSelected(2)">
                <span class="design-btn-raised design-help-btn"><span class=""><?php echo ucfirst($this->s[$this->page]["mail_object_2"]) ?></span></span>
            </div>
            <div class="help-message-btn" id="3" onclick="setSelected(3)">
                <span class="design-btn-raised design-help-btn"><span class=""><?php echo ucfirst($this->s[$this->page]["mail_object_3"]) ?></span></span>
            </div>
            <div class="help-message-btn" id="4" onclick="setSelected(4)">
                <span class="design-btn-raised design-help-btn"><span class=""><?php echo ucfirst($this->s[$this->page]["mail_object_4"]) ?></span></span>
            </div>
            <div class="help-message-btn" id="5" onclick="setSelected(5)">
                <span class="design-btn-raised design-help-btn"><span class=""><?php echo ucfirst($this->s[$this->page]["mail_object_5"]) ?></span></span>
            </div>
        </div>
        <div class="help-message-box">
            <?php echo ucfirst($this->s[$this->page]["mail_question_2"]) ?>
        </div>
        <?php $this->displayErrors() ?>
        <textarea class="help-message-text">

        </textarea>

        <div class="help-send">
            <a href="" class="design-btn-raised help-btn">
                <span class="help-send-text" onclick="sendMessage(event, <?php echo $_SESSION["user"]["id"] ?>)"><?php echo strtoupper($this->s[$this->page]["button_label"]) ?></span>
            </a>
        </div>

    </div>
</div>
