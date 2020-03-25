<?php
    class Calculator {
        public $text;
        const METHOD = "GET";
        const PAYLOAD = "/";

        public function __construct($text) {
            $this->text = $text;
        }

        public function output() {
        ?>
            <html>
                <head>
                    <style>
                        .calculator-body {
                            background-color: #E1E1E1;
                            border-radius: 5px;
                            width: max-content;
                            padding: 10px;
                        }

                        .calculator-text {
                            text-align: right;
                        }

                        .calculator-button {
                            width: 25px;
                            height: 25px;
                            border-radius: 1px;
                        }
                        
                        .calculator-digits {
                            display: inline-block;
                            width: 80px;
                        }

                        .calculator-operators {
                            display: inline-block;
                            width: 80px;
                        }
                    </style>
                    <script>
                        function insertCharacter(character) {
                            document.getElementById("equation").value += character;
                        }

                        function removeCharacter() {
                            document.getElementById("equation").value = document.getElementById("equation").value.slice(0, -1);
                        }

                        function clearCharacters() {
                            document.getElementById("equation").value = "";
                        }

                        function calculate() {
                            document.getElementById("equation").disabled = false;
                            document.getElementById("calculator-screen").submit();
                        }
                    </script>
                </head>

                <body>
                    <div class="calculator-body">
                        <form class="calculator-screen" id="calculator-screen" method="<?= $this::METHOD ?>" payload="<?= $this::PAYLOAD ?>">
                            <input type="text" value="<?= $this->text ?>" disabled id="equation" name="equation" class="calculator-text"/>
                        </form>
                        <br />
                        <div class="calculator-buttons">
                            <div class="calculator-digits">
                                <?php
                                    for($i = 0; $i <= 9; $i++) {
                                    ?>
                                        <button
                                            type='button'
                                            class="calculator-button"
                                            onClick='insertCharacter(<?= $i ?>)'
                                        ><?= $i ?></button>
                                    <?php
                                    }
                                ?>
                            </div>
                            <div class="calculator-operators">
                                <button type="button" onClick="clearCharacters()" class="calculator-button">c</button>
                                <?php
                                    foreach(['.', '+', '-', '*', '/', '(', ')'] as $operator) {
                                    ?>
                                        <button
                                            type='button'
                                            class="calculator-button"
                                            onClick='insertCharacter("<?= $operator ?>")'
                                        ><?= $operator ?></button>
                                    <?php
                                    }
                                ?>
                                <button type="button" onClick="removeCharacter()" class="calculator-button">←</button>
                                <button type="button" onClick="calculate()" class="calculator-button" id="calculator-equals">=</button>
                            </div>
                        </div>
                    </div>
                </body>
            </html>
        <?php
        }
    }
?>