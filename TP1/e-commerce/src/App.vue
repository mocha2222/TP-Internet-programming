<script setup>
  import promotion from './components/promotion.vue';
  import category from './components/category.vue';
</script>

<template>
    <div class="category">
      <category class="box" imgScr="/catImg/1.png" catName="Cake & Milk" quantity="14" cardColor="#F2FCE4"/>
      <category class="box" imgScr="/catImg/2.png" catName="Peach" quantity="17" cardColor="#FFFCEB"/>
      <category class="box" imgScr="/catImg/3.png" catName="Organic Kiwi" quantity="21" cardColor="#ECFFEC"/>
      <category class="box" imgScr="/catImg/4.png" catName="Red Apple" quantity="68" cardColor="#FEEFEA"/>
      <category class="box" imgScr="/catImg/5.png" catName="Snack" quantity="34" cardColor="#FFF3EB"/>
      <category class="box" imgScr="/catImg/6.png" catName="Black plum" quantity="25" cardColor="#FFF3FF"/>
      <category class="box" imgScr="/catImg/7.png" catName="Vegetables" quantity="65" cardColor="#F2FCE4"/>
      <category class="box" imgScr="/catImg/8.png" catName="Headphone" quantity="33" cardColor="#FFFCEB"/>
      <category class="box" imgScr="/catImg/9.png" catName="Cake & Milk" quantity="54" cardColor="#F2FCE4"/>
      <category class="box" imgScr="/catImg/10.png" catName="Orange" quantity="63" cardColor="#FFF3FF"/>
    </div>
    <div class="promotion">
      <promotion class="box" promoText="Everyday Fresh & Clean with Our Products" promoImg="/promoImg/1.png" promoColor="#F0E8D5" btnColor="#3BB77E"/>
      <promotion class="box" promoText="Make your Breakfast Healthy and Easy" promoImg="/promoImg/2.png" promoColor="#F3E8E8" btnColor="#3BB77E"/>
      <promotion class="box" promoText="The best Organic Products Online" promoImg="/promoImg/3.png" promoColor="#E7EAF3" btnColor="#FDC040"/>
    </div>
</template>

<style scoped>
  .category, .promotion {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 10px;
    padding: 10px;
  }

  /* .box {
    margin: 10px;
  } */
</style>
