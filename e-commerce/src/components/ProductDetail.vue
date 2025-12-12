<template>
  <div class="product-detail">
    <!-- Stock -->
    <span class="stock">In Stock</span>

    <!-- Title -->
    <h1 class="title">{{ title }}</h1>

    <!-- Rating -->
    <div class="rating">
      <div class="stars">
        <i v-for="n in 5" :key="n" class="bi" :class="n <= rating ? 'bi-star-fill' : 'bi-star'"></i>
      </div>
      <span class="count">({{ reviews }})</span>
    </div>

    <!-- Price -->
    <div class="price">
      <span class="now">${{ price }}</span>
      <span v-if="oldPrice" class="old">${{ oldPrice }}</span>
    </div>

    <!-- Description -->
    <p class="desc">{{ description }}</p>

    <!-- Actions -->
    <div class="actions">
      <div class="qty">
        <button @click="qty > 1 && qty--">-</button>
        <input type="text" v-model="qty" readonly>
        <button @click="qty++">+</button>
      </div>

      <button class="cart-btn">
        <i class="bi bi-cart-plus"></i>
        Add To Cart
      </button>

      <button class="icon-btn">
        <i class="bi bi-heart"></i>
      </button>

      <button class="icon-btn">
        <i class="bi bi-arrow-left-right"></i>
      </button>
    </div>

    <!-- Info -->
    <div class="info">
      <div class="row">
        <span class="label">Vendor:</span>
        <span class="value">{{ vendor }}</span>
      </div>
      <div class="row">
        <span class="label">SKU:</span>
        <span class="value">{{ sku }}</span>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'ProductDetail',
  props: {
    title: String,
    rating: { type: Number, default: 4 },
    reviews: { type: Number, default: 0 },
    price: Number,
    oldPrice: Number,
    description: String,
    vendor: { type: String, default: 'NestMart' },
    sku: String
  },
  data() {
    return {
      qty: 1
    }
  }
}
</script>

<style scoped>
@import url('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css');

.product-detail {
  display: flex;
  flex-direction: column;
  gap: 18px;
}

.stock {
  display: inline-block;
  padding: 8px 16px;
  background: #d4f4dd;
  color: #3bb77e;
  font-size: 13px;
  font-weight: 600;
  border-radius: 4px;
  width: fit-content;
}

.title {
  font-size: 36px;
  font-weight: 700;
  color: #253d4e;
  margin: 0;
  line-height: 1.3;
}

.rating {
  display: flex;
  align-items: center;
  gap: 10px;
}

.stars {
  display: flex;
  gap: 2px;
}

.stars i {
  color: #ffc107;
  font-size: 16px;
}

.count {
  font-size: 14px;
  color: #adadad;
}

.price {
  display: flex;
  align-items: baseline;
  gap: 15px;
}

.now {
  font-size: 48px;
  font-weight: 700;
  color: #3bb77e;
}

.old {
  font-size: 24px;
  color: #adadad;
  text-decoration: line-through;
}

.desc {
  font-size: 15px;
  line-height: 1.8;
  color: #7e7e7e;
  margin: 0;
}

.actions {
  display: flex;
  align-items: center;
  gap: 12px;
  margin-top: 10px;
}

.qty {
  display: flex;
  border: 2px solid #e8e8e8;
  border-radius: 5px;
  overflow: hidden;
}

.qty button {
  width: 45px;
  height: 48px;
  border: none;
  background: white;
  font-size: 20px;
  color: #7e7e7e;
  cursor: pointer;
}

.qty input {
  width: 55px;
  height: 48px;
  border: none;
  text-align: center;
  font-size: 16px;
  font-weight: 600;
}

.cart-btn {
  display: flex;
  align-items: center;
  gap: 8px;
  padding: 14px 32px;
  background: #3bb77e;
  color: white;
  border: none;
  border-radius: 5px;
  font-size: 15px;
  font-weight: 600;
  cursor: pointer;
}

.cart-btn i {
  font-size: 18px;
}

.icon-btn {
  width: 48px;
  height: 48px;
  border: 2px solid #e8e8e8;
  background: white;
  border-radius: 5px;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
}

.icon-btn i {
  font-size: 18px;
  color: #7e7e7e;
}

.info {
  display: flex;
  flex-direction: column;
  gap: 10px;
  padding-top: 20px;
  border-top: 1px solid #e8e8e8;
  margin-top: 10px;
}

.row {
  display: flex;
  gap: 12px;
  font-size: 15px;
}

.label {
  color: #253d4e;
  font-weight: 600;
  min-width: 70px;
}

.value {
  color: #adadad;
}
</style>