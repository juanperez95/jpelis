<template>
    <div>
        <section class="grid grid-cols-6 gap-4 m-5">
            <!-- Mostrar asientos -->
            <div v-for="letra in letras" :key="letra" class="flex flex-col items-center">
                <div v-for="numero in numeros" :key="numero" 
                     class="text-2xl transition duration-100 hover:text-blue-400 cursor-pointer"
                     :class="{'text-green-500': asientosSeleccionados.includes(`${letra}${numero}`)}"
                     @click="seleccionarAsiento(letra, numero)">
                    <font-awesome-icon :icon="['fas', 'couch']" class="text-2xl"/>
                    <p class="text-white font-bold text-center text-sm mt-1">{{ letra }}{{ numero }}</p>
                </div>
            </div>
        </section>
        <!-- Mostrar la ubicacion de la pantalla -->
        <section class="bg-white h-6">
            <p class="text-black text-center">PANTALLA</p>
        </section>
        <!-- indicar el orden de las columnas -->
        <section class="grid grid-cols-6 gap-4 m-5">
            <p class="text-white text-center col-span-6">Columnas</p>
            <!-- Columnas en letras -->
            <article v-for="letra in letras" :key="letra">
                <p class="text-white text-4xl text-center">{{ letra }}</p>
            </article>
        </section>

        
        <div v-if="asientosSeleccionados.length > 0" class="mt-4 p-4 bg-gray-800 rounded">
            <h3 class="text-white font-bold mb-2">Asientos seleccionados:</h3>
            <p class="text-white text-ellipsis overflow-hidden text-sm">{{ asientosSeleccionados.join(', ') }}</p>
            <!-- Boton de reserva -->
            <section>
                <Boton texto="Reservar Asientos" @funcion_btn="validarAsientos" class="mt-3"/>
                <Boton texto="Limpiar" @funcion_btn="asientosSeleccionados = []" class="mt-3"/>
            </section>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue';
import Boton from './Boton.vue';

const letras = ['A', 'B', 'C', 'D', 'E', 'F'];
const numeros = [1, 2, 3, 4, 5, 6];
const asientosSeleccionados = ref([]);

const seleccionarAsiento = (letra, numero) => {
    const asiento = `${letra}${numero}`;
    const index = asientosSeleccionados.value.indexOf(asiento);
  
    index === -1 ? asientosSeleccionados.value.push(asiento) : asientosSeleccionados.value.splice(index, 1);

};

const validarAsientos = () => {
    console.log(asientosSeleccionados.value);
}

</script>

<style scoped>
.cursor-pointer {
    cursor: pointer;
}
</style>