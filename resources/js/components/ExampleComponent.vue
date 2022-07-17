<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>
<!--
                  <Button v-on:click="count++">+</Button>
                  Result:{{  count}}
                   <Button @click="count--">+</Button>
                   <h1>Result:{{ count }}</h1> -->
                    </div>
                </div>
            </div>
        </div>


</template>



<script>
export default {
    name:'example-component',
    data() {
        return {
            count: '0',
        };
    },
}
</script>
