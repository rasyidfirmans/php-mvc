<div class="container w-screen h-screen flex justify-center items-center -mt-16 pt-16">
    <div class="card w-[20%] bg-slate-100 flex flex-col items-center py-10 rounded-3xl shadow-xl">
        <div class="w-32 h-32 rounded-full bg-slate-400 mb-8"></div>
        <p class="font-bold"><?= $data["mahasiswa"]["nama"] ?></p>
        <p class="text-slate-500"><?= $data["mahasiswa"]["nim"] ?></p>
        <span class="text-green-700 py-1 px-3 rounded-full bg-green-200 my-2"><?= $data["mahasiswa"]["prodi"] ?></span>
        <p class="text-slate-500"><?= $data["mahasiswa"]["email"] ?></p>
    </div>
</div>