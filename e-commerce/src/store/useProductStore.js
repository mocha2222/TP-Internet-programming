import { defineStore } from "pinia"
import axios from "axios"

export const useProductStore = defineStore('product', {
  state: () => ({
    groups: [],
    promotions: [],
    categories: [],
    products: []
  }),

  getters: {
    getCategoriesByGroup: (state) => {
      return (groupName) => state.categories.filter(c => c.group === groupName)
    },
    getProductsByGroup: (state) => {
      return (groupName) => state.products.filter(p => p.group === groupName)
    },
    getProductsByCategory: (state) => {
      return (categoryId) => state.products.filter(p => p.categoryId === categoryId)
    },
    getPopularProducts: (state) => {
      return state.products.filter(p => p.countSold > 10)
    }
  },
  actions: {
    fetchCategories() {
      axios
        .get("http://localhost:3000/api/categories")
        .then((res) => { this.categories = res.data })
        .catch((err) => { console.log("Error loading categories:", err) })
    },

    fetchPromotions() {
      axios
        .get("http://localhost:3000/api/promotions")
        .then((res) => { this.promotions = res.data })
        .catch((err) => { console.log("Error loading promotions:", err) })
    },

    fetchGroups() {
      axios
        .get("http://localhost:3000/api/groups")
        .then((res) => { this.groups = res.data })
        .catch((err) => { console.log("Error loading groups:", err) })
    },

    fetchProducts() {
      axios
        .get("http://localhost:3000/api/products")
        .then((res) => { this.products = res.data })
        .catch((err) => { console.log("Error loading products:", err) })
    },

    loadAll() {
      this.fetchCategories()
      this.fetchPromotions()
      this.fetchGroups()
      this.fetchProducts()
    }
  }
})
