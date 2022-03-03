<template>
    <section>
        <div class="container">
            <h2>Errore 404</h2>

            <router-link class="nav-link" :to="{ name: 'blog' }">Torna al blog</router-link>
        </div>
    </section>
</template>

<script>
export default {
    name: 'NotFound'
}
</script>