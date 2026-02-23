<?php include  Constants::VIEW_PATH . "/header.php"; ?>

<body>
    <form method="post" action="/">
        <label>
            <div>出費</div>
            <input type="number" name="amount">円
        </label>

        <label>
            <div>使い道</div>
            <input type="text" name="detail">
        </label>

        <button type="submit">保存</button>
    </form>

    <div id="amount-list"></div>
</body>

<?php include  Constants::VIEW_PATH . "/footer.php"; ?>