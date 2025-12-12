<template>
  <div 
    class="menu-item"
    :class="{ active: isActive }"
    @mouseenter="show = true"
    @mouseleave="show = false"
  >
    <a href="#" class="menu-link">
      <i v-if="icon" :class="icon"></i>
      {{ label }}
      <i v-if="hasDropdown" class="bi bi-chevron-down arrow"></i>
    </a>

    <div v-if="hasDropdown && show" class="dropdown">
      <a 
        v-for="(item, i) in dropdownItems" 
        :key="i"
        href="#" 
        class="dropdown-item"
      >
        {{ item }}
      </a>
    </div>
  </div>
</template>

<script>
export default {
  name: 'MenuItem',
  props: {
    label: String,
    icon: String,
    dropdownItems: Array,
    isActive: Boolean
  },
  data() {
    return {
      show: false
    }
  },
  computed: {
    hasDropdown() {
      return this.dropdownItems && this.dropdownItems.length > 0
    }
  }
}
</script>

<style scoped>
@import url('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css');

.menu-item {
  position: relative;
}

.menu-link {
  display: flex;
  align-items: center;
  gap: 5px;
  padding: 18px 0;
  text-decoration: none;
  color: #555;
  font-size: 15px;
}

.menu-link:hover {
  color: #4ade80;
}

.menu-link i {
  font-size: 16px;
}

.arrow {
  font-size: 11px;
  margin-left: 3px;
}

.menu-item.active .menu-link {
  color: #4ade80;
}

.dropdown {
  position: absolute;
  top: 100%;
  left: 0;
  background: white;
  border: 1px solid #ddd;
  border-radius: 5px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
  min-width: 150px;
  padding: 5px 0;
  z-index: 100;
}

.dropdown-item {
  display: block;
  padding: 8px 15px;
  text-decoration: none;
  color: #555;
  font-size: 14px;
}

.dropdown-item:hover {
  background: #f5f5f5;
  color: #4ade80;
}
</style>