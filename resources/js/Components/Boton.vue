<template>
    <div>
        <button @click="emit('funcion_btn')" :tipo="tipo" :class="props.focus ? 'bg-blue-700 p-2 text-white rounded-md transition-ease-in-out duration-200 hover:bg-blue-900 w-80 focus:bg-blue-950 focus:ring-3 ring-blue-800 ' : 'bg-blue-700 p-2 text-white rounded-md transition-ease-in-out duration-200 hover:bg-blue-900 w-80'"><span v-show="icono">Icono</span>{{ texto }}</button>
    </div>
</template>

<script setup>
import { defineEmits, defineProps, computed } from 'vue'
// Declarar las propiedades del boton como el mensaje y las funcionalidades
const props = defineProps({
    texto:String,
    icono:String | undefined,
    tipo:{
        type:String,
        default:'button'
    },
    // Prop para saber si el boton va tener el estilo de click y quedar activado de otro color.
    focus:Boolean
})

// Detectar si el icono el prop icono trae algun valor
const icono = computed(() => {
    return props.icono ? props.icono : false;
});

// Funcion que le sera asignada al boton
const emit = defineEmits(['funcion_btn']);


</script>
<style scoped>
</style>
    
