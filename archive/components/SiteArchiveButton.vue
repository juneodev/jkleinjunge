<template>
  <div>
    <div :style="{backgroundColor: site.pColor, borderColor: site.bColor, color: site.btnColor}" class="rounded-t-lg border p-2 font-bold py-4">Portfolio {{site.year}}</div>
    <NuxtLink :to="'/archive/' + site.year" :style="{backgroundColor: site.btnColor}"
              class="block rounded-b-lg p-2 text-white font-bold text-center cursor-pointer">
      Visiter <i class="far fa-arrow-circle-right"></i>
    </NuxtLink>
  </div>
</template>

<script>
export default {
  props: ['site']
}
</script>
