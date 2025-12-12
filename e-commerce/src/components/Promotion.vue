<template>
  <div class="promotion-banner" :style="{ backgroundColor: promotion.color }">
    <div class="text-wrapper">
      <h2>{{ promotion.title }}</h2>
      <Button 
        :style="{ backgroundColor: promotion.buttonColor }" 
        @click="shopNow(promotion)"
      >
        Shop Now
      </Button>
    </div>

    <div class="image-wrapper">
      <img :src="fixedImageUrl" :alt="promotion.title">
    </div>
  </div>
</template>

<script>
import Button from './Button.vue'

export default {
  components: { Button },
  props: {
    promotion: {
      type: Object,
      required: true
    }
  },

  computed: {
    fixedImageUrl() {
      if (!this.promotion?.image) return ''
      return `http://localhost:3000/${this.promotion.image.replace(/\\/g, '/')}`
    }
  },

  methods: {
    shopNow(promotion) {
      alert("Let's shop: " + promotion.title)
    }
  }
}
</script>

<style scoped>
.promotion-banner {
  width: 30%;                   
  height: 240px;
  display: flex;
  align-items: center;
  padding: 0 40px;
  border-radius: 20px;
  position: relative;
  overflow: hidden;
  box-shadow: 0 12px 35px rgba(0, 0, 0, 0.12);
  transition: transform 0.3s ease;
  background: #fff;
}

.promotion-banner:hover {
  transform: translateY(-10px);
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.18);
}

.text-wrapper {
  max-width: 55%;
  z-index: 2;
}

.text-wrapper h2 {
  font-size: 20px;           
  font-weight: 800;
  line-height: 1.25;
  margin: 0 0 24px 0;
  color: #222;
}

.image-wrapper {
  position: absolute;
  right: 0;
  bottom: 0;
  height: 100%;
  width: 50%;
  display: flex;
  justify-content: flex-end;
  align-items: flex-end;
  padding: 20px 40px 20px 0;
  pointer-events: none;
}

.image-wrapper img {
  height: 70%;              
  width: auto;
  object-fit: contain;
}

.promotion-banner:not(:first-child) .text-wrapper h2 {
  font-size: 22px;         
}
</style>