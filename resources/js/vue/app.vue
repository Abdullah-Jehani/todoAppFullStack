<template>
    <div class="todoListContainer">
        <div class="heading">
            <h1 id="title">My To-Do List</h1>
            <addItemForm v-on:reloadList="getList()"></addItemForm>
        </div>
        <listView :items="items" v-on:reloadList="getList()"></listView>
    </div>
    
</template>

<script>
import axios from 'axios';
import addItemForm from './components/addItemForm.vue';
import listView from './components/listView.vue';

export default {
  components: {
    addItemForm , 
    listView
  } , 
  data() {
    return {
        items: []
    }
  } , 
  methods: {
    getList() {
        axios.get('api/items').then( response => {
            this.items = response.data
        }).catch( error => {
            console.log(error)
        })
        
    }
  } , 
  created() {
        this.getList();
  }
} 


</script>


<style scoped>
.todoListContainer {
    width: 350px;
    margin: auto;
}
.heading {
    background: #e6e6e6;
    padding: 10px;
}
#title {
    text-align: center;
    font-size: 30px;
    color: #333;
}
</style>