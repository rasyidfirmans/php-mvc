<?php if (isset($_SESSION["notification"])) : ?>
    <div class="px-5 py-3 bg-<?php echo $_SESSION["notification"]["type"] === "berhasil" ? "green" : "red" ?>-200 fixed left-0 bottom-0 rounded-md">
        <p class="text-center">
            <?= $_SESSION["notification"]["message"] ?>
            <span class="font-bold"><?= $_SESSION["notification"]["type"] ?></span>
            <?= $_SESSION["notification"]["action"] ?>
        </p>
    </div>
<?php endif; ?>