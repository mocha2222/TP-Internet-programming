<template>
    <div>
        <Header></Header>
        <PageHeader title="Coke & Milk" />
    </div>
</template>
<script>
import Header from '@/components/Header.vue';
import PageHeader from '@/components/PageHeader.vue';

export default {   
    name: 'CategoryView',
    components: { 
        PageHeader, 
        Header
    }
}
</script>
<style scoped></style>