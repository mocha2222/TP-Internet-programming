<script setup>
    import Button from './Button.vue';

    const props = defineProps({
        promoText:{
            type: String,
            required: true
        },
        promoImg:{
            type: String,
            required: true
        },
        promoColor:{
            type: String,
            default: 'gray'
        },
        btnColor:{
            type: String,
            default: 'green'
        }

    })
</script>

<template>
    
    <div class="promotion-banner" :style="{ backgroundColor: promoColor }">
        <div class="text-wrapper">
            <h2>{{ promoText }}</h2>
            <Button :style="{backgroundColor: btnColor}"></Button>
        </div>
        <div class="image-wrapper">
            <img :src="promoImg" alt="Img">
        </div>
    </div>
  
</template>

<style scoped>
    .promotion-banner {
        width: 400px;
        height: 300px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 30px;
        border-radius: 10px;
        height: 180px;
        overflow: hidden;
        position: relative;
    }

    .text-wrapper {
        max-width: 50%;
        z-index: 10;
    }

    h2 {
        font-size: 24px;
        font-weight: bold;
        line-height: 1.2;
        margin-bottom: 15px;
        color: #333;
    }

    .image-wrapper {
        position: absolute;
        right: 0;
        top: 0;
        height: 80%;
        padding: 20px;
    }

    img {
        height: 100%;
        width: auto;
        border-radius: 0 10px 10px 0;


    }
</style>
