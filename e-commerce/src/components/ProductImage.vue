<template>
  <div class="product-image">
    <!-- Main Image -->
    <div class="main-img">
      <div class="zoom">
        <i class="bi bi-search"></i>
      </div>
      <img :src="images[selected]" alt="">
    </div>

    <!-- Thumbnails -->
    <div class="thumbs">
      <button class="arrow" @click="prev">
        <i class="bi bi-chevron-left"></i>
      </button>

      <div 
        v-for="(img, i) in images" 
        :key="i"
        class="thumb"
        :class="{ active: i === selected }"
        @click="selected = i"
      >
        <img :src="img" alt="">
      </div>

      <button class="arrow" @click="next">
        <i class="bi bi-chevron-right"></i>
      </button>
    </div>
  </div>
</template>

<script>
export default {
  name: 'ProductImage',
  props: {
    images: Array
  },
  data() {
    return {
      selected: 0
    }
  },
  methods: {
    prev() {
      if (this.selected > 0) this.selected--
    },
    next() {
      if (this.selected < this.images.length - 1) this.selected++
    }
  }
}
</script>

<style scoped>
@import url('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css');

.product-image {
  width: 50%;
}

.main-img {
  position: relative;
  background: white;
  border: 1px solid #eee;
  border-radius: 8px;
  padding: 30px;
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 400px;
  margin-bottom: 15px;
}

.zoom {
  position: absolute;
  top: 15px;
  right: 15px;
  width: 40px;
  height: 40px;
  background: white;
  border: 1px solid #ddd;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
}

.zoom i {
  font-size: 16px;
  color: #888;
}

.main-img img {
  max-width: 100%;
  max-height: 450px;
  object-fit: contain;
}

.thumbs {
  display: flex;
  align-items: center;
  gap: 10px;
}

.arrow {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background: #3bb77e;
  border: none;
  color: white;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
}

.thumb {
  width: 85px;
  height: 85px;
  border: 2px solid #eee;
  border-radius: 8px;
  padding: 8px;
  cursor: pointer;
  background: white;
  display: flex;
  align-items: center;
  justify-content: center;
}

.thumb:hover {
  border-color: #3bb77e;
}

.thumb.active {
  border-color: #3bb77e;
  border-width: 3px;
}

.thumb img {
  max-width: 100%;
  max-height: 100%;
  object-fit: contain;
}
</style>