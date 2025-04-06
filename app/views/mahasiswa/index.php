<div class="my-12">
    <h1 class="text-center text-3xl mb-12">Daftar Mahasiswa</h1>

    <div class="mx-auto max-w-xl flex justify-center mb-16">
        <form action="" method="POST">
            <input type="text" name="keyword" id="keyword" class="flex-2/3 px-3 py-1 border rounded-md focus:outline-2 focus:outline-blue-600 focus:border-0">
            <button type="submit" class="flex-1/3 bg-blue-600 border border-blue-600 rounded-md text-white py-1 px-3 hover:bg-blue-500 active:bg-blue-400 ml-1">Search</button>
        </form>
    </div>

    <ul class="mx-auto max-w-2xl flex flex-col gap-y-5">
        <?php foreach ($data["mahasiswa"] as $mahasiswa) : ?>
            <li class="border rounded-xl py-5 px-5 flex justify-between items-center">
                <?= $mahasiswa["nama"]?>
                <div class="flex">
                    <a
                        href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mahasiswa["id"] ?>"
                        class="bg-blue-600 rounded-md text-white py-2 px-3 hover:bg-blue-500 active:bg-blue-400 mr-3"
                    >
                        Detail
                    </a>
                    <a
                        href="<?= BASEURL; ?>/mahasiswa/update/<?= $mahasiswa["id"] ?>"
                        class="bg-yellow-500 rounded-md text-white py-2 px-3 hover:bg-yellow-600 active:bg-yellow-500 mr-3"
                    >
                        Update
                    </a>
                    <form action="<?= BASEURL; ?>/mahasiswa/delete/<?= $mahasiswa["id"] ?>" method="POST">
                        <button type="submit" name="submt" class="bg-red-600 rounded-md text-white py-2 px-3 hover:bg-red-500 active:bg-red-400">Delete</button>
                    </form>
                </div>
            </li>
        <?php endforeach; ?>
        <li class="border border-black rounded-xl py-5 px-5 text-center text-slate-500 cursor-pointer">
            <a href="<?= BASEURL; ?>/mahasiswa/insert">
                Tambah Data
            </a>
        </li>
    </ul>
</div>