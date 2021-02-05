<template>
    <p>esto es visible</p>
</template>

<script>
export default {
    props: ['hola'],

    mounted(){
        console.log("Se recibio el prop de ", this.hola);
    },

    computed: {
        formatearFecha(){

        }
    }
}
</script>