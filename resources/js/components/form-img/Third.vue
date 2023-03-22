<script>
export default {
    data(){
        return{
            url:'',
        }
    },
    methods:{
        showImage(e){
            const file = e.target.files[0];
            this.url = URL.createObjectURL(file);
        }
    }
}
</script>



<template>
    <div>
        <input type="file" class="form-control input-white" name="image3" accept="image/*" @change="showImage">
        <div>
            <img v-show="url" :src="url" style="width: 100px;">
        </div>
    </div>
</template>