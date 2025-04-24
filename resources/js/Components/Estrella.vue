<template>
    <div>
        <section class="estrella bg-yellow-500 w-8 size-10 m-2 transition duration-150 hover:bg-yellow-200">
            <div class="w-full"></div>
        </section>
    </div>
</template>

<script setup>

</script>

<style scoped>
.estrella{
    clip-path: polygon(50% 0%, 61% 35%, 98% 35%, 68% 57%, 79% 91%, 50% 70%, 21% 91%, 32% 57%, 2% 35%, 39% 35%);
    transform:scale(1);
}

.estrella:hover{
    transform:scale(1.3);
}
</style>