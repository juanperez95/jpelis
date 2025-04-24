<template>
    <div>
        <section class="bg-gradient-to-t from-black to-purple-950 w-full h-3/4 shadow-2xl m-3 ">
            <h3 class="text-2xl text-white text-center p-2">HORARIOS</h3>
            <article>
                <img :src="props.imagen ? props.imagen : '/Images/default_image.webp'" alt="Horarios de la pelicula" class="size-96 w-full p-5"/>
            </article>
            <article class="text-white text-center mb-4 text-overflow">
                <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit iste fugit vero animi, praesentium expedita quos esse nostrum dolorem cupiditate quibusdam tenetur eum vitae dicta consequuntur sequi doloremque quae incidunt!</p>
            </article>
            <!-- Crear los horarios del componente-->
            <section class="grid lg:grid-cols-5 p-2 gap-1 md:grid-cols-3">
                <!-- Iterar los horarios disponibles en la base de datos -->
                <article v-for="horario in horarios" :key="horario.dia_mes" class="text-white text-center transition-ease-in-out duration-200 hover:text-purple-400 seleccion" @click="MostrarHoras(horario.horario)">
                    <p class="text-center">{{ horario.dia_mes }} <p>{{ horario.mes }}</p></p>
                    <p class="text-center">{{ horario.dia }}</p>
                </article>
            </section>
            <!-- Crear los botones de horarios -->
            <section class="grid lg:grid-cols-3 md:grid-cols-2 justify-center items-center sm:grid-cols-1">
                <!-- Asignar a cada boton la funcion asignar hora -->
                <Boton v-for="horario in horariosBotonDia" :key="horario" :texto="horario" class="mt-2" @click="asignarHoraReserva(horario)" focus/>
            </section>
        </section>
    </div>
</template>


<script setup>
import {defineProps, ref, onMounted} from 'vue';
import Boton from './Boton.vue';

// Objeto que va a tener los horarios de cada dia
let horariosBotonDia = ref([]);

// Al rendereizar el componente se ejecuta esta funcion
onMounted(() => {
    horariosBotonDia.value = horarios.value[0].horario;
});

// Al hacer click en algun dia de funcion mostrar los botones correspondientes
const MostrarHoras = (dia) => {
    horariosBotonDia.value = dia;
}

// Prueba horarios
const horarios = ref([
    {
        horario:["10:00","11:00"],
        dia:"Lunes",
        mes:"Enero",
        dia_mes:"2"
    },
    {
        horario:["20:00","21:45"],
        dia:"Martes",
        mes:"Enero",
        dia_mes:"3"
    },
    {
        horario:["13:30","18:15",'20:20',"21:45","23:00"],
        dia:"Jueves",
        mes:"Enero",
        dia_mes:"4"
    },

    
]);


// Propiedades de componente
const props = defineProps({
    imagen:String
});

// Funcion para asignar la hora de reserva de usuario
const asignarHoraReserva = (hora) =>{
    console.log(hora);
}



</script>

<style scoped>
.seleccion:focus{
    color:blueviolet;
}

.ancho_texto{
    width:42rem;
    overflow:hidden;
    text-overflow:ellipsis;
    white-space:wrap;
}
    
</style>