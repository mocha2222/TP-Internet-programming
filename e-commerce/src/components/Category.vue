<template>
  <div class="catCard" :style="{ backgroundColor: category.color || '#f9f9f9' }">
    <img :src="imageUrl" :alt="category.name" class="catImg">
    <h3 class="catName">{{ category.name }}</h3>
    <p class="catCount">{{ category.productCount }} items</p>
  </div>
</template>

<script>
export default {
  props: { category: Object },
  computed: {
    imageUrl() {
      if (!this.category?.image) return 'https://via.placeholder.com/80'
      return `http://localhost:3000/${this.category.image.replace(/\\/g, '/')}`
    }
  }
}
</script>

<style scoped>
.catCard {
  width: 120px;
  height: 160px;
  background: white;
  border-radius: 14px;
  padding: 20px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  box-shadow: 0 8px 25px rgba(0,0,0,0.08);
  transition: all 0.3s ease;
  cursor: pointer;
  text-align: center;
}

.catCard:hover {
  transform: translateY(-10px);
  box-shadow: 0 20px 40px rgba(0,0,0,0.15);
}

.catImg {
  width: 80px;
  height: 80px;
  object-fit: contain;
}

.catName {
  font-size: 15px;
  font-weight: 700;
  color: #2d2d2d;
  margin: 0;
}

.catCount {
  font-size: 13px;
  color: #888;
  margin: 0;
}
</style>