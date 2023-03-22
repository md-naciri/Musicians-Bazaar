<script>
import axios from 'axios';

export default {
    data() {
        return {
            country: 0,
            countries: [],
            state: 0,
            states: [],
            city: 0,
            cities: []
        };
    },
    mounted() {
        this.getCountry();
    },
    methods: {
        getCountry() {
            axios.get('/api/country').then((response) => {
                this.countries = response.data;
            });
        },
        getState(){
            axios.get('/api/state',{params:{country_id:this.country}}).then((response) => {
                this.states = response.data;
            });    
        },
        getCity(){
            axios.get('/api/city',{params:{state_id:this.state}}).then((response) => {
                this.cities = response.data;
            });    
        }
    }
}
</script>

<template>
    <div class="row mt-2">
        <div class="col-md-4">
            <select class="form-control input-white" name="country_id" v-model="country" @change="getState">
                <option value="">Select country</option>
                <option v-for="count in countries" :value="count.id" :key="count.id">{{ count.name }}</option>
            </select>
        </div>
        <div class="col-md-4">
            <select class="form-control input-white" name="state_id" v-model="state" @change="getCity">
                <option value="">Select state</option>
                <option v-for="state in states" :value="state.id" :key="state.id">{{ state.name }}</option>
            </select>
        </div>
        <div class="col-md-4">
            <select class="form-control input-white" name="city_id" v-model="city">
                <option value="">Select city</option>
                <option v-for="city in cities" :value="city.id" :key="city.id">{{ city.name }}</option>
            </select>
        </div>
    </div>
</template>