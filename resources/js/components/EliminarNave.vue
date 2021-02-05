<template>
     <input 
            type="submit" 
            class="btn btn-danger btn-block mb-2" 
            value="Eliminar ×"
            @click="eliminarNave"
            > 
</template>

<script>
export default {
    props: ['naveId'],
    methods: {
        eliminarNave(){
            this.$swal({
                    title: '¿Estas seguro de eliminar la nave?',
                    text: 'Una vez eliminada, no se pude recuperar',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sí',
                    cancelButtonText: 'No'
                }).then((result) => {
                    if (result.isConfirmed) {
                            const params = {
                                id: this.naveId
                            }

                        //enviar la peticion al servidor
                            axios.post(`/naves/${this.naveId}`,{params, _method: 'delete'} )
                                .then (respuesta =>{
                                    this.$swal({
                                            title: 'Nave Eliminada',
                                            text: 'Se elimino la nave',
                                            icon: 'success'
                                         });
                                    //eliminar receta del DOM
                                    this.$el.parentNode.parentNode.parentNode.removeChild(this.$el.parentNode.parentNode);

                                })
                                .catch(error =>{
                                    console.log(error);
                                })

                            /*  this.$swal({
                                title: 'Nave Eliminada',
                                text: 'Se elimino la nave',
                                icon: 'success'
                            })*/
                    }
                    })
        }
    }
}
</script>