<template>
  <Header></Header>
  <div class="product-container">
    <ProductImage :images="[
      '/productDetail/1.png',
      '/productDetail/2.png',
      '/productDetail/3.png',
      '/productDetail/4.png',
      '/productDetail/5.png'
    ]" />

    <div class="right-side">
        <ProductDetail 
            title="Seeds of Change Organic Quinoa, Brown"
            :price="38"
            :oldPrice="42"
            :rating="4"
            :reviews="4"
            description="Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam rem officia, corrupti reiciendis minima nisi modi, quasi, odio minus dolore impedit fuga eum eligendi? Officia doloremque facere quia. Voluptatum, accusantium!"
            sku="FWM15VKT"
        />
    </div>
  </div>
   <!-- Tabs -->
    <div class="description">
      <div class="tabs">
        <button
          :class="{ active: activeTab === 'description' }"
          @click="activeTab = 'description'"
        >Description</button>

        <button
          :class="{ active: activeTab === 'info' }"
          @click="activeTab = 'info'"
        >Additional Info</button>

        <button
          :class="{ active: activeTab === 'reviews' }"
          @click="activeTab = 'reviews'"
        >Reviews (3)</button>
      </div>

      <!-- Tab Content -->
      <div class="tab-content">
        <div v-if="activeTab === 'description'">
          <p class="text">
            Uninhibited carnally hired played in whimpered dear gorilla koala depending and much yikes off far quetzal goodness and from for grimaced goodness unaccountably and meadowlark near unblushingly crucial scallop tightly neurotic hungrily some and dear furiously this apart.
          </p>
          <p class="text">
            Spluttered narrowly yikes left moth in yikes bowed this that grizzly much hello on spoon-fed that alas rethought much decently richly and wow against the frequent fluidly at formidable acceptably flapped besides and much circa far over the bucolically hey precarious goldfinch mastodon goodness gnashed a jellyfish and one however because.
          </p>
        </div>

        <div v-else-if="activeTab === 'info'">
          <p class="text">Additional product information goes here...</p>
        </div>

        <div v-else-if="activeTab === 'reviews'">
          <p class="text">Customer reviews will appear here...</p>
        </div>
      </div>
    </div>
</template>

<script>
import Header from '@/components/Header.vue';
import ProductDetail from '@/components/ProductDetail.vue'
import ProductImage from '@/components/ProductImage.vue'

export default {
  name: 'CategoryView',
  components: {
    ProductImage,
    ProductDetail,
    Header
  },
  data() {
    return {
      activeTab: 'description'   // default open tab
    }
  }
}
</script>

<style scoped>
.product-container {
  display: flex;
  gap: 40px;
  max-width: 1400px;
  margin: 0 50px;
  padding: 40px;
}

.right-side {
  flex: 1;
  display: flex;
  flex-direction: column;
  gap: 30px;
}

.tabs {
  display: flex;
  background: #f8f9fa;
  border-radius: 8px;
  overflow: hidden;
  margin-top: 10px;
}

.tabs button {
  flex: 1;
  padding: 14px;
  border: none;
  background: none;
  font-size: 15px;
  cursor: pointer;
  transition: all 0.2s;
}

.tabs button.active {
  background: #e0f7e0;
  color: #2d862d;
  font-weight: 600;
}

.tab-content {
  padding: 20px 0;
}

.text {
  margin-bottom: 1.2rem;
  font-size: 15px;
  line-height: 1.7;
  color: #444;
}

.image-size {
  text-align: center;
  padding: 16px;
  background: #111;
  color: #fff;
  font-family: monospace;
  font-weight: bold;
  border-radius: 6px;
}
.description {
  margin: 0 50px;
  padding: 20px 0 40px 0;
}
</style>