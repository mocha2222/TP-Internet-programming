<script>
import Promotion from './components/Promotion.vue'
import Category from './components/Category.vue'
import Menu from './components/Menu.vue'
import Product from './components/Product.vue'

import { useProductStore } from '@/store/useProductStore'
import { mapState } from 'pinia'

export default {
  components: { Promotion, Category, Menu, Product },

  data() {
    return {
      currentGroupName: 'Group A'
    }
  },

  computed: {
    ...mapState(useProductStore, {
      promotions: 'promotions',

      categories(store) {
        return store.getCategoriesByGroup(this.currentGroupName)
      },

      productsByGroup(store) {
        return store.getProductsByGroup(this.currentGroupName)
      },

      popularProducts: 'getPopularProducts'
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
    <Menu title="Featured Categories"></Menu>

    <!-- CATEGORY LIST -->
    <h2>Categories</h2>
    <div class="category">
      <Category
        v-for="category in categories"
        :key="category.id"
        :category="category"
      />
    </div>

    <!-- PROMOTION LIST -->
    <h2>Promotions</h2>
    <div class="promotion">
      <Promotion
        v-for="promotion in promotions"
        :key="promotion.id"
        :promotion="promotion"
      />
    </div>
    <Menu title="Popular Products"></Menu>
    <!-- PRODUCTS LIST -->

    <div class="products">
      <Product
        v-for="product in popularProducts"
        :key="product.id"
        v-bind="product"
      />
    </div>
  </div>
</template>

<style scoped>
.category,
.promotion,
.products {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 12px;
  padding: 12px;
}
</style>
