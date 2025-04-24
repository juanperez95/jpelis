<template>
    <div>
        <section class="grid grid-cols-6 gap-4 m-3">
            <!-- Al dar click el usuario el componente le indica en verde los asientos seleccionados-->
            <p :class="'text-red-500 text-2xl transition duration-100 hover:text-blue-400 focus:text-green-500'" v-for="i in 30" :key="i">
                <span>
                    <p class="text-white font-bold text-center">{{ contadorValidacion }}</p>
                    <font-awesome-icon :icon="['fas', 'couch']" />
                </span>
            </p>
        </section>
    </div>
</template>

<script setup>
import {ref, computed, defineProps} from 'vue';

// Prporiedades del componente
const props = defineProps({
    
});

// Crear un contador debido a que los asientos van A1, B1 para tener control de el numero de asiento
const contadorAsiento = ref(1);

// Crear un metodo computarizado para evaluar al contador
const contadorValidacion = computed(()=>{
    return contadorAsiento.value == 6 ? contadorAsiento.value = (1) : contadorAsiento.value++;
});


</script>

<style scoped>

.click_asiento:focus{
    color:blueviolet;
}

</style>