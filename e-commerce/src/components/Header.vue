<!-- src/components/Header.vue -->
<template>
  <header class="header">
    <!-- Top Bar -->
    <div class="top-bar">
      <!-- Logo -->
      <div class="logo">
        <img src="../public/img/logo/jpg" alt="Melon Mart" class="logo-img" />
        <div class="logo-text">
          <h1 class="title">Melon</h1>
          <p class="subtitle">Mart & Grocery</p>
        </div>
      </div>

      <!-- Search Bar -->
      <div class="search-container">
        <div class="search-wrapper">
          <select class="category-select">
            <option>All Categories</option>
          </select>
          <input
            type="text"
            placeholder="Search for items..."
            class="search-input"
          />
          <button class="search-btn">
            Search
          </button>
        </div>
      </div>

      <!-- Right Icons -->
      <div class="actions">
        <div class="action">
          User
          <span>Account</span>
        </div>
        <div class="action">
          Compare
          <span>Compare</span>
        </div>
        <div class="action">
          Heart
          <span>Wishlist</span>
        </div>
        <div class="action cart">
          Shopping Cart
          <span>Cart</span>
        </div>
      </div>
    </div>

    <!-- Bottom Navigation -->
    <nav class="bottom-nav">
      <button class="browse-btn">
        Grid View Browse All Categories
      </button>

      <ul class="nav-menu">
        <li><a href="#" class="hot-deals">Hot Deals</a></li>
        <li><a href="#">Home</a></li>
        <li><a href="#">Food Down Arrow</a></li>
        <li><a href="#">Vegetables Down Arrow</a></li>
        <li><a href="#">Drink</a></li>
        <li><a href="#">Cookies</a></li>
        <li><a href="#">Meat & Seafood Down Arrow</a></li>
        <li><a href="#">Bakery</a></li>
      </ul>

      <div class="support">
        Phone
        <div class="phone-info">
          <strong>099 777 888</strong>
          <p>24/7 Support Center</p>
        </div>
      </div>
    </nav>
  </header>
</template>

<script>
export default {
  name: 'Header'
}
</script>

<style scoped>
.header {
  background: #fff;
  padding: 0 3%;
  font-family: 'Quicksand', sans-serif;
  box-shadow: 0 2px 10px rgba(0,0,0,0.05);
}

/* TOP BAR */
.top-bar {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 20px 0;
  flex-wrap: wrap;
  gap: 20px;
}

/* Logo */
.logo {
  display: flex;
  align-items: center;
  gap: 12px;
}
.logo-img {
  width: 56px;
}
.title {
  font-size: 32px;
  font-weight: 700;
  color: #3bb77e;
  margin: 0;
  line-height: 1;
}
.subtitle {
  font-size: 12px;
  color: #7e7e7e;
  margin: 4px 0 0 0;
  letter-spacing: 1.2px;
  ;
}

/* Search */
.search-container {
  flex: 1;
  max-width: 600px;
}
.search-wrapper {
  display: flex;
  height: 52px;
  border: 2px solid #3bb77e;
  border-radius: 50px;
  overflow: hidden;
  background: white;
}
.category-select {
  width: 170px;
  padding: 0 16px;
  border: none;
  background: #f8fffb;
  color: #3bb77e;
  font-weight: 600;
  font-size: 15px;
  cursor: pointer;
}
.search-input {
  flex: 1;
  border: none;
  padding: 0 20px;
  font-size: 15px;
  outline: none;
  color: #555;
}
.search-btn {
  width: 120px;
  background: #3bb77e;
  color: white;
  border: none;
  font-weight: 600;
  font-size: 15px;
  cursor: pointer;
  transition: 0.3s;
}
.search-btn:hover {
  background: #329c67;
}

/* Actions */
.actions {
  display: flex;
  align-items: center;
  gap: 30px;
}
.action {
  display: flex;
  align-items: center;
  gap: 8px;
  color: #253d4e;
  font-size: 15px;
  cursor: pointer;
  font-weight: 500;
}
.action span {
  font-weight: 600;
}
.cart::after {
  content: '0';
  position: absolute;
  top: -8px;
  right: -12px;
  background: #f74b81;
  color: white;
  font-size: 11px;
  width: 18px;
  height: 18px;
  border-radius: 50%;
  display: grid;
  place-items: center;
}

/* BOTTOM NAV */
.bottom-nav {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 16px 0;
  border-top: 1px solid #eee;
  flex-wrap: wrap;
  gap: 20px;
}

.browse-btn {
  display: flex;
  align-items: center;
  gap: 10px;
  background: #3bb77e;
  color: white;
  border: none;
  padding: 12px 24px;
  border-radius: 50px;
  font-weight: 600;
  font-size: 15px;
  cursor: pointer;
  transition: 0.3s;
}
.browse-btn:hover {
  background: #2e9b6a;
  transform: translateY(-2px);
}

.nav-menu {
  display: flex;
  align-items: center;
  gap: 32px;
  list-style: none;
  margin: 0;
  padding: 0;
}
.nav-menu a {
  color: #253d4e;
  text-decoration: none;
  font-weight: 500;
  font-size: 16px;
  display: flex;
  align-items: center;
  gap: 6px;
}
.hot-deals {
  color: #f74b81 !important;
  font-weight: 600;
}

.support {
  text-align: right;
  color: #3bb77e;
}
.phone-info strong {
  font-size: 24px;
  font-weight: 700;
}
.phone-info p {
  margin: 2px 0 0;
  font-size: 13px;
  color: #666;
}

/* RESPONSIVE */
@media (max-width: 1200px) {
  .nav-menu { gap: 20px; }
}
@media (max-width: 992px) {
  .top-bar, .bottom-nav {
    flex-direction: column;
    text-align: center;
  }
  .search-container {
    order: 3;
    width: 100%;
    max-width: 100%;
  }
  .actions {
    order: 2;
    margin: 10px 0;
  }
}
</style>