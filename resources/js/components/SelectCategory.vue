<script>
import axios from 'axios';

export default {
    data() {
        return {
            category: 0,
            categories: [],
            subcategory: 0,
            subcategories: []
        };
    },
    mounted() {
        this.getCategory();
    },
    methods: {
        getCategory() {
            axios.get('/api/category').then((response) => {
                this.categories = response.data;
            });
        },
        getSubcategory(){
            axios.get('/api/subcategory',{params:{category_id:this.category}}).then((response) => {
                this.subcategories = response.data;
            });    
        }
    }
}
</script>

<template>
    <div class="row">
        <div class="col-md-6">
            <select class="form-control input-white" name="category_id" v-model="category" @change="getSubcategory">
                <option value="" selected disabled hidden>Select a category</option>
                <option v-for="cat in categories" :value="cat.id" :key="cat.id">{{ cat.name }}</option>
            </select>
        </div>
        <div class="col-md-6">
            <select class="form-control input-white" name="subcategory_id" v-model="subcategory">
                <option value="" selected disabled hidden>Select a subcategory</option>
                <option v-for="subcat in subcategories" :value="subcat.id" :key="subcat.id">{{ subcat.name }}</option>
            </select>
        </div>
    </div>
</template>