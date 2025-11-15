<script>
import Promotion from './components/Promotion.vue'
import Category from './components/Category.vue'
import { useProductStore } from '@/stores/product'
import { mapState } from 'pinia'

export default {
  components: { Promotion, Category },

  data() {
    return {
      currentGroupName: 'Group A'
    }
  },

  computed: {
    ...mapState(useProductStore, {
      popularProducts: 'getPopularProducts',
      categories(store) {
        return store.getCategoriesByGroup(this.currentGroupName)
      },
      promotions(store) {
        return store.promotions
      }
      productsByCategory(store) {
        return store.getProductsByCategory(this.currentCategoryId)
      }
      productsByGroup(store) {
        return store.getProductsByGroup(this.currentGroupName)
      }
    })
  },
  mounted() {
    const store = useProductStore()
    store.loadAll()
  }
}
</script>

<template>
  <div>
    <h2>Categories</h2>
    <div class="category">
      <Category
        v-for="category in categories"
        :key="category.id"
        :category="category"
      />
    </div>

    <h2>Promotions</h2>
    <div class="promotion">
      <Promotion
        v-for="promotion in promotions"
        :key="promotion.id"
        :promotion="promotion"
      />
    </div>

    <h2>Popular Products</h2>
    <div class="promotion">
      <Promotion
        v-for="product in popularProducts"
        :key="product.id"
        :promotion="product"
      />
    </div>
  </div>
</template>

<style scoped>
.category, .promotion { 
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 10px;
  padding: 10px;
}
</style>
