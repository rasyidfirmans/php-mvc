<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/app.css">
    <title><?= $data["title"] ?></title>
</head>
<body>
<nav class="bg-gray-800" x-data="{ isOpen: false}">
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div x-data="{ isDown: false }" class="relative flex h-16 items-center justify-between">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <!-- Mobile menu button-->
        <button type="button" @click="isDown = !isDown" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:ring-2 focus:ring-white focus:outline-hidden focus:ring-inset" aria-controls="mobile-menu" aria-expanded="false">
          <span class="absolute -inset-0.5"></span>
          <span class="sr-only">Open main menu</span>
          <svg class="block size-6" :class="{'hidden': isDown, 'block': !isDown}" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
          <svg class="hidden size-6" :class="{'block': isDown, 'hidden': !isDown}" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
        <div class="flex shrink-0 items-center">
          <img class="h-8 w-auto" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=blue&shade=500" alt="Your Company">
        </div>
        <div class="hidden sm:ml-6 sm:block">
            <div x-data="{ current: null }" class="flex space-x-4">
                <a href="<?= BASEURL; ?>/" 
                    @click="current = 'home'" 
                    :class="{ 'bg-gray-900 text-white': current === 'home', 'text-gray-300 hover:bg-gray-700 hover:text-white': current !== 'home' }" 
                    class="rounded-md px-3 py-2 text-sm font-medium" 
                    aria-current="page">Home</a>
                <a href="<?= BASEURL; ?>/about" 
                    @click="current = 'about'" 
                    :class="{ 'bg-gray-900 text-white': current === 'about', 'text-gray-300 hover:bg-gray-700 hover:text-white': current !== 'about' }" 
                    class="rounded-md px-3 py-2 text-sm font-medium">About</a>
                <a href="<?= BASEURL; ?>/mahasiswa" 
                    @click="current = 'mahasiswa'" 
                    :class="{ 'bg-gray-900 text-white': current === 'mahasiswa', 'text-gray-300 hover:bg-gray-700 hover:text-white': current !== 'mahasiswa' }" 
                    class="rounded-md px-3 py-2 text-sm font-medium">Mahasiswa</a>
            </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Mobile menu, show/hide based on menu state. -->
  <div class="sm:hidden" id="mobile-menu">
    <div x-data="{ current: null }" class="space-y-1 px-2 pt-2 pb-3">
      <a href="<?= BASEURL; ?>/"  @click="current = 'home'" :class="{ 'bg-gray-900 text-white': current === 'home', 'text-gray-300 hover:bg-gray-700 hover:text-white': current !== 'home' }" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white" aria-current="page">Home</a>
      <a href="<?= BASEURL; ?>/about"  @click="current = 'about'" :class="{ 'bg-gray-900 text-white': current === 'about', 'text-gray-300 hover:bg-gray-700 hover:text-white': current !== 'about' }" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">About</a>
      <a href="<?= BASEURL; ?>/mahasiswa"  @click="current = 'mahasiswa'" :class="{ 'bg-gray-900 text-white': current === 'mahasiswa', 'text-gray-300 hover:bg-gray-700 hover:text-white': current !== 'mahasiswa' }" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Mahasiswa</a>
    </div>
  </div>
</nav>
