<div>
    <h1 class="text-center text-3xl my-12">Daftar Mahasiswa</h1>

    <ul class="mx-auto max-w-lg flex flex-col gap-y-5">
        <?php foreach ($data["mahasiswa"] as $mahasiswa) : ?>
            <li class="border rounded-xl py-5 px-5 flex justify-between items-center">
                <?= $mahasiswa["nama"]?>
                <a
                    href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mahasiswa["id"] ?>"
                    class="bg-blue-600 rounded-md text-white py-1 px-3 hover:bg-blue-500 active:bg-blue-400"
                >
                    Detail
                </a>
            </li>
        <?php endforeach; ?>
        <li class="border border-black rounded-xl py-5 px-5 text-center text-slate-500 cursor-pointer">
            <a href="<?= BASEURL; ?>/mahasiswa/insert">
                Tambah Data
            </a>
        </li>
    </ul>
</div>