<template>
  <section id="site-viewer" class="w-screen h-screen">
    <p class="disclaimer-message text-white p-2 px-4">
      <i class="far fa-info-circle"></i> Bienvenue sur le <b>Portfolio {{ site }}</b>, ce site web est archivé, il n’est
      plus à jour et ne représente plus mes offres ou compétences actuels
    </p>
    <iframe :src="'https://jkj-dev.com/' + site" height="100%" width="100%"></iframe>
    <div class="back-btn rounded-md absolute p-4 text-white">
      <p><i class="far fa-info-circle"></i>
        Bienvenue sur le <b>Portfolio {{ site }}</b></p>
      <NuxtLink to="/" class="px-5 py-2 rounded-md inline-block mt-3 font-bold cursor-pointer text-white block">
        <i class="far fa-arrow-square-left"></i> Retour
      </NuxtLink>
    </div>
  </section>
</template>

<script>
export default {
  head() {
    const siteYear = this.$route.params.site
    return {
      title: `[Archive] Portfolio ${siteYear} | JKJ-dev`,
    }
  },
  transition: 'fade',
  computed: {
    site() {
      return this.$route.params.site
    },
  }
}
</script>

<style>
.disclaimer-message, .back-btn {
  background-color: #0071BC;
  border-bottom: 3px solid #003b83;
}

.back-btn {
  bottom: 20px;
  left: 20px;
}

.back-btn a {
  background-color: #003b83;
}


#site-viewer {
  display: flex;
  flex-direction: column;
  margin: 0;
  padding: 0;
  overflow: hidden;
}

iframe {
  flex: 1;
  overflow: hidden;
  width: 100%;
}
</style>
