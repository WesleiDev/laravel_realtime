<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Messages</div>

                    <div class="card-body">
                        Vou listar Mensagens Aqui!
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            Echo.channel('message-received')
                .listen('SendMessage', () =>{
                    console.log('A outra página foi carregada');
                })
        }
    }
</script>
