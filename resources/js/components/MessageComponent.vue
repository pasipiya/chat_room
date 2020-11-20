<template>
  <li class="list-group-item" :class="className"><slot></slot></li>
  
</template>

<script>
export default {

    props:[
        'color'
    ],
    computed:{
        className(){
            return 'list-group-item-'+this.color
        },
        style () {
        return 'background-color: red';
      }
    },
    mounted() {
        console.log("Component mounted.");
    }
}
</script>
