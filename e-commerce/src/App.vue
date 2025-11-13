<script>

import Promotion from './components/Promotion.vue';
import Category from './components/Category.vue'
import axios from 'axios'
export default{
  components:{
    Promotion,
    Category
  },
  data() {
    return { 
      categories:[],
      promotions:[]
    }
  },
  methods: {
    fetchCategories() {
      axios
        .get("http://localhost:3000/api/categories")
        .then((response) => {
          this.categories = response.data
          console.log('fetch category successfull')
          console.log(this.categories)
        })
        .catch((err) => {
          console.log("Error loading categories:", err)
        })
    },

    fetchPromotions() {
      axios
        .get("http://localhost:3000/api/promotions")
        .then((response) => {
          this.promotions = response.data
          console.log("fetch promotion successfull")
          console.log(this.promotions)
        })
        .catch((err) => {
          console.log("Error loading promotions:", err)
        })
    }
  },
  mounted () {
    this.fetchCategories()
    this.fetchPromotions()
  }

}

</script>

<template>
  <div>
    <div class="category">
      <Category
        v-for="category in categories"
        :key="category.name"
        :category="category"
      />
    </div>

    <div class="promotion">
      <Promotion
        v-for="promotion in promotions"
        :key="promotion.title"
        :promotion="promotion"
      />
    </div>


  </div>
 
</template>

<style scoped> 
  .category, .promotion { 
    display: flex; 
    flex-wrap: wrap; 
    justify-content: center; 
    gap: 10px; padding: 10px; 
    } 
</style>
