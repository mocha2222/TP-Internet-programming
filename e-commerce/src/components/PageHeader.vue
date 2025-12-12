<template>
  <div class="page-header">
    <h1 class="page-title">{{ title }}</h1>
    <div class="breadcrumb">
      <a href="#" class="breadcrumb-item">Home</a>
      <span class="separator">›</span>
      <a href="#" class="breadcrumb-item">Categories</a>
      <span class="separator">›</span>
      <span class="current">{{ title }}</span>
    </div>
  </div>
</template>

<script>
export default {
  name: 'PageHeader',
  props: {
    title: {
      type: String,
      required: true,
      default: 'Coke & Milk'
    }
  }
}
</script>

<style scoped>
.page-header {
  background: #e8f5ed;
  padding: 50px 80px;
  margin: 30px 30px;
  border-radius: 10px;
}

.page-title {
  font-size: 42px;
  font-weight: 700;
  color: #2d3748;
  margin: 0 0 15px 0;
}

.breadcrumb {
  display: flex;
  align-items: center;
  gap: 8px;
  font-size: 15px;
}

.breadcrumb-item {
  text-decoration: none;
  color: #999;
  transition: color 0.2s;
}

.breadcrumb-item:hover {
  color: #4ade80;
}

.separator {
  color: #ccc;
  font-size: 16px;
}

.current {
  color: #666;
}
</style>