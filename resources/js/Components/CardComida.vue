<template>
    <div>
        <section class="bg-gradient-to-t from-purple-950 to-black m-5 grid grid-cols-1 justify-center items-center">
            <article class="flex flex-col items-center justify-center">
                <img :src="validarImagen" alt="" class="w-70 size-70 rounded-full p-8">
            </article>
            <!-- Mostrar el titulo del card -->
            <article class="text-white text-center mt-2 p-3 font-bold">
                <h6>{{ props.tituloComida }}</h6>
            </article>
            <!-- Descripcion de la comida -->
            <article class="text-white font-size-sm text-center mt-2 p-3">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex nisi, perferendis optio quod animi quisquam itaque commodi amet corrupti. Eligendi, neque nemo quis placeat fuga perspiciatis inventore quae quidem corrupti.</p>
            </article>
            <!-- Boton de pagina principal si quiere saber mas de la confiteria -->
            <article v-if="props.principal" class="mt-2 p-3 flex flex-col justify-center items-center">
                <Boton texto="Ver mas" @funcion_btn="console.log('Envia al apartdado de ver mas')"/>
            </article>
            <!-- Botones de compra y cantidades si ya esta en la confiteria -->
            <article class="mt-2 p-3 flex flex-col justify-center items-center gap-5 lg:flex-row" v-if="props.menu">
                <Boton texto="Comprar" @funcion_btn="console.log('Envia al apartdado de comprar')" class="mt-3"/>
                <Boton texto="Cantidades" @funcion_btn="console.log('Envia al apartdado de cantidades')" class="mt-3"/>
            </article>
        </section>
    </div>
</template>

<script setup>
import {defineProps, computed} from 'vue';
import Boton from './Boton.vue';


// Definir las propiedades del componente
const props = defineProps({
    imagenComida:String,
    tituloComida:{
        type:String,
        required:true
    },
    // Validar si el componente esta en la pagina principal para colocar boton de saber mas.
    principal:Boolean,
    // Mostrar otros botones si ta esta en el apartado de toda la confiteria
    menu:Boolean 
});

// Validar si hay alguna imagen en el componente
const validarImagen = computed(()=>{
    return props.imagenComida ? props.imagenComida : '/Images/default_image.webp';
});

</script>

<style scoped>
    
</style>