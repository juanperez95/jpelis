<template>
    <div>
        <input class="p-3 border border-gray-300 rounded-md shadow-sm w-full mt-3 text-white transition-ease-in-out duration-150 focus:ring-blue-500 focus:border-blue-500 focus:border-1 focus:outline-none" :type="tipo" :placeholder="place" v-model="valorInput">
    </div>
</template>

<script setup>
import {defineProps, defineEmits, computed} from 'vue';
// Propiedades de componente input
const props = defineProps({
    tipo:{
        type:String,
        default:'text'
    },
    // Define el placeholder del input
    place:String,
    // Define el modelo del input
    modelo:String | Number,
});
// Crear un evento para el valor del input.
const emit = defineEmits(['update:modelo']);

// Validar la actualizacion de los modelos al componente padre
const valorInput = computed({
    get: () => props.modelo,
    set: (val) => emit('update:modelo', val)
})


</script>

<style scoped>
    
</style>