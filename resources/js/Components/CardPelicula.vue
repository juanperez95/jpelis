<template>
    <div>
        <section class="bg-gradient-to-b from-black to-purple-950 w-86 h-3/4 m-2 shadow-2xl">
            <article class="w-86 h-3/4">
                <!-- Colocar la imagen cargada si no coloca imagen de default -->
                <img :src="props.imagen ? props.imagen : '/Images/default_image.webp'" :alt="props.titulo" class="p-2 size-60 w-full"/>
            </article>
            <article class="flex flex-col justify-center items-center">
                <article class="text-overflow">
                    <h3 class="text-white text-center text-ellipsis p-2">{{ props.titulo.toUpperCase() }} <font-awesome-icon v-show="props.recomendada" :icon="['fas', 'fire']" shake class="text-orange-500" /></h3>
                </article>
                <!-- Mostrar boton si el usuario no ha iniciado sesion -->
                <Boton texto="Horarios" class="mt-3"/>
            </article>
            <article class="flex flex-col justify-center items-center">
                <p class="text-white text-center mt-4">Calificacion</p>
                <article class="flex gap-1">
                    <!-- Componente de estrellas , se itera la cantidad de estrella sobre la calificacion de la pelicula-->
                    <Estrella v-for="estrella in calificacion" :key="estrella"/>
                </article>
                <p class="text-white text-center p-2">{{ calificacion }}/5</p>
            </article>
        </section>
    </div>
</template>

<script setup>
import Boton from './Boton.vue';
import Estrella from './Estrella.vue';
import {defineProps} from 'vue';


// Propiedades de componente
const props = defineProps({
    titulo:{
        type:String,
        required:true,  
    },
    calificacion:{
        type:Number,
        required:true
    },
    // Ruta de la imagen de la pelicula
    imagen:String,
    // Si la pelicula es recomendada
    recomendada:Boolean
});


</script>

<style scoped>
    
</style>