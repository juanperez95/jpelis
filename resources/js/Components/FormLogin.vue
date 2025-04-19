<template >
    <div>
        <form @submit.prevent class="border border-gray-300 rounded-md shadow-sm p-4 bg-gradient-to-t from-purple-950 to-black w-96">
            <section class="grid grid-cols-1 p-5 w-full justify-items-center" v-show="!clickRegistro">
                <article>
                    <h6 class="text-white text-center">¡INICIA SESIÓN O CREA UNA CUENTA!</h6>
                    <article class="justify-items-center">
                        <Boton texto="Registrate ahora" @funcion_btn="() => {clickRegistro = true}" class="mt-3"/>
                        <Boton texto="Iniciar sesión" @funcion_btn="console.log('sesión')" class="mt-3"/>
                    </article>
                </article>
                <article class="mt-12">
                    <h6 class="text-white text-center">¡INICIA SESIÓN CON OTRAS CUENTAS!</h6>
                    <article class="justify-items-center">
                        <Boton texto="Google" @funcion_btn="console.log('Google')" class="mt-3"/>
                    </article>
                </article>
            </section>
            <section class="grid grid-cols-1 p-5 w-full justify-items-center" v-show="clickRegistro">
                <form @submit.prevent>
                    <h6 class="text-white text-center">¡REGISTRATE AHORA!</h6>
                    <article>
                        <Inputs tipo="number" place="Documento" :modelo="registroForm.documento" @update:modelo="registroForm.documento = $event"/>
                        <Inputs tipo="text" place="Nombre" :modelo="registroForm.nombre" @update:modelo="registroForm.nombre = $event"/>
                        <Inputs tipo="text" place="Apellido" :modelo="registroForm.apellido" @update:modelo="registroForm.apellido = $event"/>
                        <Inputs tipo="tel" place="Telefono" :modelo="registroForm.telefono" @update:modelo="registroForm.telefono = $event"/>
                        <Inputs tipo="email" place="Correo" :modelo="registroForm.correo" @update:modelo="registroForm.correo = $event"/>
                        <Inputs tipo="date" place="Fecha de nacimiento" :modelo="registroForm.fecha_n" @update:modelo="registroForm.fecha_n = $event"/>
                        <article>
                            <legend>
                                <h6 class="text-center text-white mt-6">CREA UNA CLAVE SEGURA</h6>
                                <Inputs tipo="password" place="Clave" class="mt-3" :modelo="registroForm.clave" @update:modelo="registroForm.clave = $event"/>
                            </legend>
                        </article>
                    </article>
                    <article class="justify-items-center mt-5">
                        <Boton texto="Registrarse" @funcion_btn="enviarDatos" class="mt-3"/>
                        <Boton texto="Volver" @funcion_btn="()=>{clickRegistro = false}" class="mt-3"/>
                    </article>  
                </form>
            </section>
        </form>
    </div>
</template>


<script setup>
import Boton from './Boton.vue';
import Inputs from './Inputs.vue';
import {reactive,ref,computed} from 'vue';

// Crear un metodo para cuando el usuario quiera realizar el registro
let clickRegistro = ref(false);

const registroForm = reactive({
    documento:undefined,
    nombre:null,
    apellido:null,
    telefono:null,
    correo:null,
    fecha_n:null,
    clave:null,
});

// Crear un metodo computado para valdiar el formulario
const validarDatos = computed(() => {
    return false;
})

// Metodo para enviar los datos del formulario al backend
const enviarDatos = () => {
    if(validarDatos){
        console.log(registroForm);
    }else{
        console.log('Datos no validados');
    }
}
</script>


<style scoped>
    
</style>