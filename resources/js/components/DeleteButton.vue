<template>
    <div>
        <button class="btn btn-primary ml-4" @click="deleteProduct" v-text="'Delete'"></button>
    </div>
</template>

<script>
    export default {
         props: ['productId'],
        mounted() {
            console.log('Component mounted.')
        },

        methods: {
            deleteProduct() {
                axios.post('/delete/' + this.productId)
                    .then(response => {

                        console.log(response.data);
                })
                .catch(errors => {
                    if(erros.response.data==401) {
                        window.location = '/login';
                    }
                });
            }
        },
    }
</script>
