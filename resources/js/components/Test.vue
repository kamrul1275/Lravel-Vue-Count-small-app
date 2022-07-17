<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Test Component</div>

                    <div class="card-body">

                         <button @click="increments()">Add + </button>

                         Result: {{counter  }}
                          <button @click="decrements()">Sub - </button>
                    <h1>Result: {{counter  }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
      name:'Testvue',

      data() {
        return {
           counter: '0',

        };
      },

      methods: {
       increments(){
        this.counter ++;
       },

        decrements(){
        this.counter --;
       }

      },

    }


</script>
