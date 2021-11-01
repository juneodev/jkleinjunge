<!-- Please remove this file from your project -->
<template>
  <div>
    <div :style="{ backgroundImage: `url(${backgroundUrl})` }"
         class="w-screen h-screen absolute bg-cover bg-center filter blur-sm"></div>
    <div class="relative flex items-top justify-center min-h-screen sm:items-center sm:pt-0">
      <div class="w-2/4 mx-auto sm:px-6 lg:px-8">
        <div class="mt-8 bg-white overflow-hidden shadow sm:rounded-lg p-6">
          <h1 class="inline-block text-3xl font-bold text-gray-900 tracking-tight">
            Oups, je n'opère plus à Tahiti
          </h1>
          <p class="mt-1 text-gray-600">
            Retrouvez-moi en Europe sur <a href="https://juneo.dev" target="_blank" class="font-bold hover:underline">juneo.dev</a>,
          </p>
          <div class="w-100 rounded-md p-5 mt-3 relative" style="background: radial-gradient(circle,#072140 0,#11131e 95%)">
            <img class="juneo-shape" src="/juneo-shape.png" alt="">
            <img class="w-24" src="/logo.svg" alt="">
            <a class="juneo-btn px-5 py-2 rounded-md inline-block mt-3 font-bold cursor-pointer" target="_blank" href="https://juneo.dev">
              accéder à juneo.dev <i class="fad fa-external-link-alt ml-2"></i>
            </a>
          </div>
          <hr class="border-dashed mt-2">

        </div>
        <div class="flex justify-center pt-4 space-x-2">
          <a href="https://www.linkedin.com/feed/" target="_blank">
            <i class="fab fa-linkedin text-white text-2xl"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      backgroundUrl: 'screenshot-jkj.png'
    }
  }
}
</script>

<style>
.juneo-shape {
  height: 150%;
  position: absolute;
  bottom: 0;
  right: 0;
}

.juneo-btn {
  background-color: #00ff91;
}
</style>
