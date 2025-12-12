<script>
import Promotion from '../components/Promotion.vue'
import Category from '../components/Category.vue'
import Menu from '../components/Menu.vue'
import Product from '../components/Product.vue'
import { useProductStore } from '@/store/useProductStore'
import { mapState } from 'pinia'
import ShowCase from '../components/ShowCase.vue'
import Header from '../components/Header.vue'

export default {
  components: { Promotion, Category, Menu, Product, ShowCase, Header},

  data() {
    return {
      currentGroupName: 'Group A'
    }
  },

  computed: {
    ...mapState(useProductStore, {
      promotions: 'getPromotions',
      categories: 'getCategories',

      // categories(store) {
      //   return store.getCategoriesByGroup(this.currentGroupName)
      // },

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
    <Header></Header>
    <ShowCase></ShowCase>
    <Menu title="Featured Categories"></Menu>

    <!-- CATEGORY LIST -->
    <router-link to="/Products">
      <div class="category">
        <Category
          v-for="category in categories"
          :key="category.id"
          :category="category"
        />
      </div>
    </router-link>
    <!-- PROMOTION LIST -->
     <router-link to="/Products">
      <div class="promotion">
        <Promotion
          v-for="promotion in promotions"
          :key="promotion.id"
          :promotion="promotion"
        />
      </div>
    </router-link>
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
