<template>
  <div class="search-box">
    <select class="category-select">
      <option>All Categories</option>
      <option>Food</option>
      <option>Vegetables</option>
    </select>
    <input 
      type="text" 
      class="search-input" 
      placeholder="Search for items"
      v-model="searchText"
    />
    <button class="search-btn">
      <i class="bi bi-search"></i>
    </button>
  </div>
</template>

<script>
export default {
  name: 'SearchBox',
  data() {
    return {
      searchText: ''
    }
  }
}
</script>

<style scoped>
@import url('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css');

.search-box {
  display: flex;
  align-items: center;
  border: 2px solid #ddd;
  border-radius: 5px;
  overflow: hidden;
  width: 100%;
  max-width: 600px;
}

.category-select {
  padding: 10px 15px;
  border: none;
  border-right: 2px solid #ddd;
  background: white;
  font-size: 14px;
  cursor: pointer;
  outline: none;
}

.search-input {
  flex: 1;
  padding: 10px 15px;
  border: none;
  outline: none;
  font-size: 14px;
}

.search-btn {
  padding: 10px 20px;
  border: none;
  background: white;
  cursor: pointer;
  font-size: 18px;
  color: #666;
}
</style>