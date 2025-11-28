<!-- CategorySection.vue -->
<template>
  <div class="category-section">
    <div class="header-container">
      <h2 class="section-title">{{ title }}</h2>

      <div class="tabs">
        <button
          v-for="cat in categories"
          :key="cat.id"
          @click="active = cat.id"
          :class="{ active: active === cat.id }"
          class="tab"
        >
          {{ cat.name }}
        </button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    title: {
      type: String,
      required: true
    }
  },
  data() {
    return {
      active: 'all',
      categories: [
        { id: 'all',        name: 'All' },
        { id: 'milk',       name: 'Milks & Dairies' },
        { id: 'coffee',     name: 'Coffees & Teas' },
        { id: 'pet',        name: 'Pet Foods' },
        { id: 'meats',      name: 'Meats' },
        { id: 'vegetables', name: 'Vegetables' },
        { id: 'fruits',     name: 'Fruits' }
      ]
    }
  }
}
</script>

<style scoped>
.category-section {
  padding: 0;
  background: #fff;
}

.header-container {
  border-radius: 8px;
  padding: 1.5rem 2rem;
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
  gap: 1rem;
}

.section-title {
  font-size: 1.5rem;
  font-weight: 600;
  color:  #515151;
  margin: 0;
  letter-spacing: -0.3px;
}

/* Tabs container */
.tabs {
  display: flex;
  gap: 0.5rem;
  flex-wrap: wrap;
}

/* Each tab button */
.tab {
  padding: 0.5rem 1rem;
  font-size: 0.95rem;
  font-weight: 500;
  color: #7E7E7E;
  background-color: transparent;
  border: none;
  cursor: pointer;
  transition: color 0.2s ease;
}

.tab:hover {
  color:  #6d6c6c;
}

.tab.active {
  color: #515151;
  font-weight: 600;
}

/* Responsive */
@media (max-width: 768px) {
  .header-container {
    flex-direction: column;
    align-items: flex-start;
    padding: 1.2rem 1.5rem;
  }
  
  .tabs {
    width: 100%;
    justify-content: flex-start;
  }
  
  .tab {
    padding: 0.4rem 0.8rem;
    font-size: 0.9rem;
  }
  
  .section-title {
    font-size: 1.3rem;
  }
}
</style>