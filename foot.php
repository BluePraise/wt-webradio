</div> <!-- .end of wrapper -->

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<?php
    // conditional statement to check if this is the index php so we can output the p5 js
    $current_file_name = basename($_SERVER['PHP_SELF']);

    if ($current_file_name === "index.php") { ?>
        <script src="js/p5/index.js"></script>
        <script src="script.js"></script>

    <?php } else { ?>


    <?php } ?>

</body>

</html>