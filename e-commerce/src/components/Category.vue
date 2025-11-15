<template>
  <div class="catCard" :style="{ backgroundColor: category.color }">
    <img class="catImg" :src="imageUrl" :alt="category.name">
    <h3 class="catName">{{ category.name }}</h3>
    <p class="catQuant">{{ category.productCount }} items</p>
  </div>
</template>

<script>
export default {
  props: {
    category: {
      type: Object,
      required: true
    }
  },
  computed: {
    imageUrl() {
      if (this.category.image instanceof File || this.category.image instanceof Blob) {
        return URL.createObjectURL(this.category.image)
      }
      return this.category.image
    }
  }
}
</script>

<style scoped>
.catCard {
  width: 136px;
  height: 167px;
  border-radius: 10px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
}
.catImg {
  width: 50%;
  height: 50%;
  object-fit: contain;
}
.catName {
  font-size: 14px;
  font-weight: 600;
}
.catQuant {
  font-size: 12px;
  color: #777;
}
</style>