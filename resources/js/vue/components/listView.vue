<template>
    <div>
        <div v-for="(item , index) in items" :key="index">
        <listItem
        :item="item" 
        class="item"
        v-on:itemChanged="$emit(reloadList)"
        />
        
        </div>
    </div>
</template>

<script>
import listItem from './listItem.vue';
export default {
props: ['items'] , // it will be coming from app.vue
components: {
    listItem
}
}
</script>
<style scoped>
.item {
    background: #e6e6ee ;
    padding: 5px;
    margin-top: 5px;
}
</style>