<div class="h-screen w-screen -mt-16 pt-16 flex justify-center items-center">
    <div class="container w-[25%] px-8 py-5 rounded-xl shadow-2xl">
        <h1 class="font-bold text-3xl">Tambah Data Mahasiswa</h1>
        <p class="text-slate-600 mb-3">Mohon isi formulir di bawah ini</p>
        <form action="" method="POST">
            <label for="nama" class="block mb-3">
                <span class="block mb-1">Nama</span>
                <input
                    type="text"
                    name="nama"
                    id="nama"
                    class="w-full px-3 py-1 border rounded-md focus:outline-2 focus:outline-blue-600 focus:border-0"
                >
            </label>
            <label for="nim" class="block mb-3">
                <span class="block mb-1">Nim</span>
                <input
                    type="text"
                    name="nim"
                    id="nim"
                    class="w-full px-3 py-1 border rounded-md focus:outline-2 focus:outline-blue-600 focus:border-0"
                >
            </label>
            <label for="prodi" class="block mb-3">
                <span class="block mb-1">Program Studi</span>
                <select name="prodi" id="prodi" class="w-full px-3 py-2 border rounded-md focus:outline-2 focus:outline-blue-600 focus:border-0">
                    <option value="Informatika">Informatika</option>
                    <option value="Sains Data">Sains Data</option>
                    <option value="Kedokteran">Kedokteran</option>
                    <option value="Psikologi">Psikologi</option>
                </select>
            </label>
            <label for="email" class="block mb-3">
                <span class="block mb-1">Email</span>
                <input
                    type="email"
                    name="email"
                    id="email"
                    class="w-full px-3 py-1 border rounded-md focus:outline-2 focus:outline-blue-600 focus:border-0"
                >
            </label>
            <button type="submit" name="submit" class="w-full py-2 text-white text-center cursor-pointer bg-blue-600 rounded-md mt-3">Tambah Data</button>
        </form>
    </div>
</div>