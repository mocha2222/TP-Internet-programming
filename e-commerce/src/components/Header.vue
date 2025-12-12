<template>
  <header class="header">
    <div class="top-section">
      <!-- Logo -->
      <router-link to="/">
        <div class="logo">
          <img src="/img/logo.jpg" alt="Melon">
          <div>
            <h1>Melon</h1>
            <p>MART & GROCERY</p>
          </div>
        </div>
      </router-link>

      <!-- Search -->
      <SearchBox />

      <!-- Top Menu -->
      <div class="top-menu">
        <MenuItem label="Account" icon="bi bi-person" />
        <MenuItem label="Compare" icon="bi bi-arrow-left-right" />
        <MenuItem label="Wishlist" icon="bi bi-heart" />
        <MenuItem label="Cart" icon="bi bi-cart" />
      </div>
    </div>

    <div class="bottom-section">
      <!-- Browse Button -->
      <button class="browse-btn">
        <i class="bi bi-grid-3x3-gap-fill"></i>
        Browse All Categories
        <i class="bi bi-chevron-down"></i>
      </button>

      <!-- Main Nav -->
      <nav class="main-nav">
        <router-link to="/categories">
          <MenuItem 
            label="Hot Deals" 
            icon="bi bi-fire" 
          />
        </router-link>
        <MenuItem label="Home" />
        <MenuItem 
          label="Food" 
          :dropdownItems="['Fresh', 'Canned', 'Frozen']" 
        />
        <MenuItem 
          label="Vegetables" 
          :dropdownItems="['Fresh', 'Organic']" 
        />
        <MenuItem label="Drink" />
        <MenuItem label="Cookies" />
        <MenuItem 
          label="Meat & Seafood" 
          :dropdownItems="['Chicken', 'Beef', 'Fish']" 
        />
        <MenuItem label="Bakery" />
      </nav>

      <!-- Support -->
      <div class="support">
        <i class="bi bi-headset"></i>
        <div>
          <div class="phone">1900 - 8888</div>
          <div class="label">24/7 Support Center</div>
        </div>
      </div>
    </div>
  </header>
</template>

<script>
import SearchBox from './SearchBox.vue'
import MenuItem from './MenuItem.vue'

export default {
  name: 'Header',
  components: {
    SearchBox,
    MenuItem
  }
}
</script>

<style scoped>
@import url('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css');

.header {
  background: white;
  font-family: Arial, sans-serif;
  box-shadow: 0 2px 5px rgba(0,0,0,0.08);
}
router-link {
  text-decoration: none !important;
}
/* Top Section */
.top-section {
  display: flex;
  align-items: center;
  padding: 20px 50px;
  gap: 30px;
  border-bottom: 1px solid #eee;
}

.logo {
  display: flex;
  align-items: center;
  gap: 10px;
}

.logo img {
  width: 50px;
  height: 50px;
}

.logo h1 {
  font-size: 30px;
  color: #4ade80;
  margin: 0;
  font-weight: bold;
}

.logo p {
  font-size: 10px;
  color: #999;
  margin: 0;
  letter-spacing: 1px;
}

.top-menu {
  display: flex;
  gap: 25px;
  margin-left: auto;
}

/* Bottom Section */
.bottom-section {
  display: flex;
  align-items: center;
  padding: 20px 50px;
  gap: 30px;
}

.browse-btn {
  display: flex;
  align-items: center;
  gap: 8px;
  padding: 14px 22px;
  background: #4ade80;
  color: white;
  border: none;
  border-radius: 5px;
  font-size: 14px;
  cursor: pointer;
}

.browse-btn i:first-child {
  font-size: 16px;
}

.browse-btn i:last-child {
  font-size: 12px;
}

.main-nav {
  display: flex;
  gap: 25px;
  flex: 1;
}

.support {
  display: flex;
  align-items: center;
  gap: 10px;
  margin-left: auto;
}

.support i {
  font-size: 30px;
  color: #4ade80;
}

.phone {
  font-size: 18px;
  font-weight: bold;
  color: #4ade80;
}

.label {
  font-size: 11px;
  color: #999;
}
</style>