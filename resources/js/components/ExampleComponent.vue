<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>
                    <button @click="showToast">Show Toast</button>
                    <div class="card-body">
                        I'm an example component.
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.');
            this.showToast();
        },
        methods: {
            showToast() {
            this.$toasted.show('Hello, Toasted!', {
                theme: 'bubble',
                position: 'top-right',
                duration: 3000,
            });
            },
        },
    }
</script>
