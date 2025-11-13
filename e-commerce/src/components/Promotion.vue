<script>
import Button from './Button.vue'

export default {
    
  components: {
    Button
  },
  props: {
    promotion: {
      type: Object,
      required: true
    }
  },

  methods: {
    shopNow(promotion) {
      alert("Let's shop: " + promotion.title)
    }
  }
}
</script>


<template>
    
    <div class="promotion-banner" :style="{ backgroundColor: promotion.color }">
        <div class="text-wrapper">
            <h2>{{ promotion.title}}</h2>
            <Button :style="{backgroundColor: promotion.buttonColor}" @click="shopNow(promotion)"></Button>
        </div>
        <div class="image-wrapper">
            <img :src="promotion.image" alt="Img">
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
